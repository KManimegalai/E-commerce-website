<?php 
include_once '../admin/model/db.php';
function display_details($location)
{
	$condition = "`location` LIKE '%".$location."%' OR `location` = 'all_area' ORDER By sub_category";
	return select('*','product_details', $condition ,db_connect());
}

function display_category_details($category, $location)
{
	$condition = "(`sub_category` = '".$category."') AND (`location` LIKE '%".$location."%' OR `location` = 'all_area')";
	return select('*','product_details', $condition ,db_connect());
}


