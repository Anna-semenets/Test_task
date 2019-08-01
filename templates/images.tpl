<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Главная страница</title>
    <link rel="stylesheet" href="src/libs/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="src/css/images.css" />
</head>
<body>
	<div class="images-container">
		<div class="images-container-inner">
		{foreach  $row as $item}
			<div class="img_wrapper">
				<a class="single_image" href="upload/{$item}" data-img-name="{$item}">
					<img src="upload/small/{$item}" alt=""/>
				</a>
				<button class="delete_btn main-btn" type="button" >X</button>
			</div>
		{/foreach}
		</div>
		<form class="pick-img-form" action = "load.php" method ="post" enctype = "multipart/form-data">
		  <input class="pick-img-input" type="file" name="uploadfile">
		  <button class="pick-img-btn" type="submit" name = "upload">Загрузить</button>
 		</form>
 		<a class="back-btn" href="index.php">Назад</a>
	</div>

 <script type="text/javascript" src="src/libs/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="src/libs/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="src/libs/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="src/js/images.js"></script>
 </body>

</html>

