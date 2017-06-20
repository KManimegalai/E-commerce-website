<?php 
	include_once '../admin/model/db.php';
	$condition = "`sub_category` = '".$_POST['data']."'";
	$result = select('*','product_details', $condition ,db_connect());
	// print_r($result);
	$i = 1;
	$total_content = "";
	$main_content = "";
	foreach ($result as $value) { 
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