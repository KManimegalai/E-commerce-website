<?php 
	include_once '../admin/model/db.php';
	function get_product_details($raw_data){
		$conn = db_connect();
		$data = select("*","`product_details`", $raw_data, $conn);
		return $data;
	}
	function get_package_type()
	{
		return select('*','package_type', '1' ,db_connect());
	}
 ?>