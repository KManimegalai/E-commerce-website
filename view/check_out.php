<?php 
	include_once '../controller/show_cart.php';
	include_once 'header.php';
	$raw_data = get_package_type();
	$cart_details = cart_item($_SESSION['user_details']);
	// $cart_img = cart_img($cart_details);
	// echo "<pre>";
	// print_r($cart_details);
	// echo "</pre>";
 ?>
		<div class="container-fluid" style="background-color: white;">
			<h3 class="w3ls-title" style="color:black">Cart</h3>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<?php 
							if ($cart_details == 'empty') {
								echo "No Data";
							}
							else{
							$i = 0;
							$final_total ="0";
							foreach ($cart_details as $value) {
								$cart_img = cart_img($value['product_name']);
								//print_r($cart_img);
								echo '<div class="col-md-8 deals-grids">';
								echo '<div class="deals-left">
										<img style="width:70px;height:70px" src=../images/red/'.$cart_img[0]["files"].'>
										</div>';
								echo '<div class="deals-right">';
									echo '<h4 style="color:black">'.$value['product_name'].'</h4>';
									echo '<h4 style="color:black">'.$value['product_quantity'].'</h4>';
									echo '<h4 style="color:black">price:- '.$value['total_price'].'</h4>';
								echo '</div>';
								echo '<a href="../controller/delete_cart.php?id='.$value["id"].'"><i class="fa fa-times"  class="col-md-4" aria-hidden="true"></i><span> &nbsp;Remove</span></a>';
								echo '<div class="clearfix"> </div><hr>';
								echo '</div>';
								echo '<div class="clearfix"></div>';
								$final_total = $final_total + $cart_details[$i]['total_price'];
								$i++;
							}
							}
						 ?>
					</div>
					<div class="col-sm-4">
						<form method="post" action="../controller/ship_it.php">
							<input class="form-control" type="text" name="location" placeholder="Address" <?php if(isset($_SESSION['user_details'])){ echo "value=".$_SESSION['user_details']['location']; } ?> ><br>
							<input type="hidden" id="price" name="item_price" value="<?php echo $final_total; ?>">
							<input type="hidden" id="actual_price" name="actual_price" value="">
							<div class="form-group">
								<label>package type:-</label>
									<select id="package_type"  name="type" class="form-control">
									<?php 
                            			if ($raw_data == 'empty') {
                                    		echo "no package";
                                 		} 
                            			else{
                                		$i=0;
                            			foreach ($raw_data as $value) {
                            			echo "<option value='".$value['package_price']."'>".$value['package_name'].
                            			" - ₹".$value['package_price']." </option>";                   	
                            			$i++;
                            			}
                        				}
                         			?>
									</select>
								</div>
							<?php echo '<h4 id="finaltotal" style="color:black">Total:- '.$final_total.'</h4><br>'; ?>
							<?php  
								if (isset($_SESSION['user_details'])) {							
									echo "<div>
      								<label><input type='checkbox' name='use_wallet' value='true'> use wallet</label><br><br>
    							</div>";
    							}
    							?>
						<button class="form-control btn btn-success" type="submit">Place Order </button>		
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 <?php include_once 'footer.php'; ?>
 <script type="text/javascript">
 	localStorage.clear();
    pri = parseInt($("#price").val());
 	type = parseInt($("#package_type").val());
    result = pri+type;  
    document.getElementById('finaltotal').innerHTML = 'Total:-'+result; 
    document.getElementById('actual_price').value = result; 
    $("#package_type").on('change', function() {
            pri = parseInt($("#price").val());
         	type = parseInt($("#package_type").val());
            result = pri+type;  
            document.getElementById('finaltotal').innerHTML = 'Total:-'+result; 
            document.getElementById('actual_price').value = result; 
         });
 </script>