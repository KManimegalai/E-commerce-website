<?php 
	include_once 'header.php';
	include_once '../controller/single_product_view.php';
	$selected_product = get_product_details($_GET);
	$raw_data = get_package_type();
	// print_r($raw_data);
	// echo "<pre>";	//print_r($selected_product); echo "</pre>";
	// print_r($package_type);
 ?>
 <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img  src="../images/red/<?php echo $selected_product[0]['files']; ?>" alt="Product">
						</div>
						<div class="col-md-7 modal_body_right single-top-right"> 
							<h3 class="item_name"><?php echo $selected_product[0]['product_name']; ?></h3>
							<!-- <p>Proin placerat urna et consequat efficitur, sem odio blandit enim</p> -->
							<div class="single-price">
								<ul>
									<li>&#8377;<?php echo $selected_product[0]['product_price']; ?></li>  
								</ul>
							</div> 
							<p class="single-price-text"><?php echo $selected_product[0]['product_description']; ?></p>
							<form method="post" action="../controller/buy_now.php">
								<input type="hidden" name="page_type" value="show_product">
								<div class="form-group">
									<label>Name:-</label>
									<input type="text" name="user_name"  class="form-control" value="<?php if (isset($_SESSION['user_details'])){ echo $_SESSION['user_details']['username']; } ?>" required>
								</div>
								<div class="form-group">
									<label>Mobile No:-</label>
									<input type="text" name="phone_no" class="form-control" value="<?php if (isset($_SESSION['user_details'])){ echo $_SESSION['user_details']['phone_no']; } ?>" required>
								</div>
								<div class="form-group">
									<label>Address:-</label>
									<input type="text" name="location" class="form-control" value="<?php if (isset($_SESSION['user_details'])){ echo $_SESSION['user_details']['location']; } ?>" required>
								</div>
								<input type="hidden" name="product_name" value="<?php echo $selected_product[0]['product_name']; ?>" >
								<div class="form-group">
									<label>Quantity:-</label>
									<input type="number	" id="product_quantity" name="product_quantity" value="1" class="form-control" required >
								</div>
								<div class="form-group">
									<label>Referral id:-</label>
									<input type="text" name="Referral_id" class="form-control" value="" required>
								</div>
								<input type="hidden" id="product_price" name="actual_price" value="<?php echo $selected_product[0]['product_price']; ?>">
								<input type="hidden" id="actual_price" name="total_price" value="">
								<div class="form-group">
								<label>package type:-</label>
									<select id="package_type" class="form-control">
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
								<h2 id="final_price"></h2><br>
								<?php  
								if (isset($_SESSION['user_details'])) {							
									echo "<div>
      								<label><input type='checkbox' name='use_wallet' value='true'> use wallet</label><br><br>
    							</div>";
    							}
    							?>
								<button type="submit" class="w3ls-cart">Buy</button>
							</form>
						</div> 

						<div class="clearfix"> </div>
					</div>
				</section>

			</div>
<script type="text/javascript">
	$(document).ready(function(){
		qua = $("#product_quantity").val();
                pri = $("#product_price").val();
                type = parseInt($("#package_type").val());
                result=(pri*qua)+type; 
                document.getElementById('final_price').innerHTML = '<span>Price:&#8377:</span>'+(result);
                document.getElementById('actual_price').value = result;
        $("#product_quantity").keyup (function (e) {	
                qua = $("#product_quantity").val();
                pri = $("#product_price").val();
                type = parseInt($("#package_type").val());
            	result = (pri*qua)+type;  
                if(qua > 0){
                    document.getElementById('final_price').innerHTML = '<span>Price:&#8377:</span>'+result; 
                    document.getElementById('actual_price').value = result; 
                }
        });
         $("#package_type").on('change', function() {
         	qua = $("#product_quantity").val();
            pri = $("#product_price").val();
         	type = parseInt($("#package_type").val());
            result = (pri*qua)+type;  
                if(qua > 0){
                    document.getElementById('final_price').innerHTML = '<span>Price:&#8377:</span>'+result; 
                    document.getElementById('actual_price').value = result; 
                }
         });
     });
</script>

<?php include_once 'footer.php'; ?>
