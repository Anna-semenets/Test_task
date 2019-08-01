<?php
//загрузка файлов на сервер и изменение размера изображений средствами php;
require "db.php";
 error_reporting(E_ALL);
$new_url = 'select_img.php';
header('Location: '.$new_url);
$file = addslashes(file_get_contents($_FILES["uploadfile"]["tmp_name"]));  //читает содержимое файла в строку
$name = $_FILES["uploadfile"]["name"];
$type =  $_FILES["uploadfile"]["type"];
echo $type;

if ($type != "image/jpeg" && $type != "image/png" && $type != "image/gif") {
	echo 'Incorrect format! Select another file!';
    exit();
}
$tmp_name = $_FILES["uploadfile"]["tmp_name"];
move_uploaded_file($tmp_name, "upload/$name");
$size = getimagesize ("upload/$name");
$width = $size[0];
$height= $size[1]; 
if ($width/$height >=1)   //если горизонтальная
	{$coef = $width/$height;
		$new_width = 100;
	    $new_height = 100/$coef;} 
else {$coef = $height/$width;   //если вертикальная
	$new_height = 100; 
	$new_width = 100/$coef;}
//создание изображения с размером не более 100х100px
if($type == "image/jpeg"){ 
$img = imagecreatefromjpeg("upload/$name");
$tmp = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($tmp, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
imagejpeg($tmp, "upload/small/$name"); }

if($type == "image/png"){
$img = imagecreatefrompng("upload/$name");
$tmp = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($tmp, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
imagepng($tmp, "upload/small/$name"); }

if($type == "image/gif"){
$img = imagecreatefromgif("upload/$name");
$tmp = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($tmp, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
imagegif($tmp, "upload/small/$name"); }

$login = $_SESSION['username'];
//если нажата кнопка "Загрузить", вставка записи в бд
 if (isset($_POST['upload'])) {
 $sql =  "INSERT INTO `Images`(`i_id`, `login`, `img`)
 VALUES ('', '$login', '$name')";
 $result = $link->query($sql); }

  ?>


