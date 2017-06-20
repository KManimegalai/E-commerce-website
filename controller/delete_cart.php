<?php 
	include_once '../admin/model/db.php';
	$con = db_connect();
	delete('in_cart',$_REQUEST,$con);
	header('Location:../view/check_out.php');