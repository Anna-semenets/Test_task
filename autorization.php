<?php 
require "db.php";
 error_reporting(E_ALL);
$login = $_POST['login'];
$password = $_POST['password'];
$_SESSION['username'] = $login;
$num_log  = mysqli_query($link, "SELECT * FROM Users WHERE login = '$login' AND password = '$password'");
$lengths = 'num_rows';
if($num_log->$lengths == 0 ){
 	echo json_encode('falsemail'); }
 	else { echo json_encode('success');
 }

?>