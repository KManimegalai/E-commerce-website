<?php 
	// session_start();
	include_once '../admin/model/db.php';
	function cart_item($user_details){
		$conn = db_connect();
		$where = "`user_id` = '".$user_details['id']."'";
		return select('*','in_cart',$where, $conn);
	}

	function cart_img($user_details){
		$conn = db_connect();
		$where = "`product_name`='".$user_details."'";
		return select('files','product_details',$where,$conn);
	}
	function get_package_type()
	{
		return select('*','package_type', '1' ,db_connect());
	}

 ?>