 <?php
require "db.php";
$login = $_SESSION['username'];
error_reporting(E_ALL);
include_once 'libs/Smarty.class.php';
$smarty = new Smarty();
$query  =$link->query("SELECT * from Images WHERE `login` = '$login'");
//отображение всех изображений, загруженных пользователем, на странице
while ($row = $query->fetch_assoc()) {
 	$show_img[] = $row['img'];	
}

if (isset($show_img))
	$smarty->assign('row', $show_img);
else $smarty->assign('row', []);
$smarty->display('images.tpl');

 ?>