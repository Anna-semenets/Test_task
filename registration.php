<?php 
require "db.php";
error_reporting(E_ALL);
header('Content-Type: application/json');

$login = $_POST['login'];
$e_mail = $_POST['e-mail'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$_SESSION['username'] = $login;

//проверка на существование пользователя с введенным логином и e-mail в базе
$num_log  = mysqli_query($link, "SELECT * FROM Users WHERE login = '$login'");
$lengths = 'num_rows';

if ($num_log->$lengths != 0) {
 	echo json_encode('false');
 	exit();
} 
$num_mail  = mysqli_query($link, "SELECT * FROM Users WHERE `e-mail` = '$e_mail'");

if ($num_mail->$lengths != 0) {
 	echo json_encode('falsemail'); 
 	
 	exit();
}
//проверка на соответствие паролей
if ($password !== $password2){
	echo json_encode('falsepass');
	exit();
}

  $sql = "INSERT INTO `Users`(`id`, `login`, `e-mail`, `password`)
 VALUES ('', '$login', '$e_mail', '$password')";
  $result = $link->query($sql);  
  echo json_encode('success');

?>