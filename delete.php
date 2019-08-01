<?php
require "db.php";  
 error_reporting(E_ALL);
	header('Content-Type: application/json');

	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);
	$imgName = $json_obj->imgName;
	
echo $imgName;
$sql =  "DELETE FROM `Images` WHERE `img` = '$imgName'";
$result = $link->query($sql); 

?>