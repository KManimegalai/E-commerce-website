<?php 
    include_once 'header.php';
    include_once '../controller/display_controller.php';
?>
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> 
                <div class="agileits_search">
                    <form action="#" method="post">
                        <!-- <input name="Search" type="text" placeholder="Enter Your Area Name" required=""> -->
                        <select id="agileinfo_search" class="product_search" name="agileinfo_search" required="">
                            <option value="">Available Category</option>
                           <option value="chicken">chicken</option>
                           <option value="fish">fish</option>
                           <option value="mutton">mutton</option>
                        </select>
                        <input type="submit" id="search" value="Search">
                    </form>
                </div>
			</div>
		</div>
	</div>

 </div>
	<div class="products">	 
		<div class="container">
			<div class="col-md-13"> 
				<div class="products-row" id="content_product">
                    <?php
                        $i = 1;
                        $total_content = "";
                        $main_content = "";

                       if (isset($_GET['category']) && isset($_GET['location']) ) {
                            $raw_data =display_category_details($_GET['category'],$_GET['location']);
                            if ($raw_data == 'empty') {
                                echo "<tr><td>".$raw_data."</td></tr>";
                            }
                            else{
                                echo '<div class="product-top"><h4>';
                                echo $_GET['category'];
                                echo '</h4><div class="clearfix"> </div>';
               
                                $value_check = $raw_data[0]['sub_category'];
                                foreach ($raw_data as $value) { 
                                    // if($i == 1){
                                    //     echo "";
                                    // }
                                    // if($i <= 3){
                                        echo generate_content($value);
                                        $i++;
                                    // }
                                    // if($i > 3){
                                    //     echo "";
                                    //     $i = 1;
                                    // }
                                }  
                            } 
                        }else
                        if(isset($_GET['location']) || isset($_SESSION['location'])){
                            $_SESSION['location'] = isset($_GET['location']) ? $_GET['location'] : $_SESSION['location'];
                            $data = isset($_GET['location']) ? $_GET['location'] : $_SESSION['location'];
                            echo "<script type='text/javascript'>localStorage.setItem('location','";
                            echo $data;
                            echo "');</script>";
                            $raw_data =display_details($data);
                            if ($raw_data == 'empty') {
                                echo "<tr><td>".$raw_data."</td></tr>";
                            }
                            else{
                                $value_check = $raw_data[0]['sub_category'];
                                foreach ($raw_data as $value) { 
                                    if($i == 1){
                                        echo "";
                                    }
                                    if($i <= 3){
                                        echo generate_content($value);
                                        $i++;
                                    }
                                    if($i > 3){
                                        echo "";
                                        $i = 1;
                                    }
                                }  
                            }  
                    }else{
                        echo "<script type='text/javascript'>location.replace('home.php');</script>";
                        }

                        function generate_content($value){
                            return "<div class='col-xs-6 col-sm-4 product-grids'>
                            <div class='flip-container'>
                            <div class='flipper agile-products'>
                            <div class='front'> 
                            <img style='width:100%;height:80%;' src='../images/red/".$value['files']."' class='img-responsive' alt='img'>
                            <div class='agile-product-text'>              
                            <h5>".$value['product_name']."</h5>  
                            </div> 
                            </div>
                            <div class='back'>
                            <h4>".$value['product_name']."</h4>
                            <h6>".$value['product_price']."<sup>&#8377;</sup></h6>
                            <form action='#' method='post'>
                            <input type='hidden' name='cmd' value='_cart'>
                            <input type='hidden' name='add' value='1'> 
                            <input type='hidden' name='w3ls_item' value='".$value['product_name']."'> 
                            <input type='hidden' name='amount' value='".$value['product_price']."'> 
                            <button type='submit' class='w3ls-cart pw3ls-cart'><i class='fa fa-cart-plus' aria-hidden='true'></i> Add to cart</button>
                            <span class='w3-agile-line'> </span>
                            <a href='../view/show_product.php?product_name=".$value['product_name']."&product_price=".$value['product_price']."'><i class='fa fa-shopping-basket' aria-hidden='true'></i>Buy now</a>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>";
                        } 
                    ?>
				</div>                                           
			</div>
		</div>
	</div>
    <br/><br/>
<?php include_once 'footer.php'; ?>