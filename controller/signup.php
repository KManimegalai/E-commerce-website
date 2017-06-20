<?php 
	include_once '../admin/model/db.php';
	include_once '../admin/controller/common_functions.php';
	$conn = db_connect();
	$raw_data = $_POST;
	// print_r($raw_data);
	$raw_data['Referral_id'] = $_POST['phone_no'];
	$raw_data['user_type'] = 'user';
	$sql =insert('`users`',$raw_data , $conn);
	if($sql) {
		header('location:../view/login.php?status=register');
	}else{
		echo "mail_already_exits";
		header('location:../view/signup.php?status=error');
	}

?>