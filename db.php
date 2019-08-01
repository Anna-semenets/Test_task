<?php
@session_start();
$link = mysqli_connect('localhost', 'root', '', 'Database');
if (!$link)
{
	echo 'Нет соединения с базой данных';
exit();
} 

?>