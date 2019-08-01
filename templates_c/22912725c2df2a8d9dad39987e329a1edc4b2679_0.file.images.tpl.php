<?php
/* Smarty version 3.1.33, created on 2019-07-31 20:16:30
  from 'F:\OSPanel\domains\test\templates\images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41ccee749290_53926861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22912725c2df2a8d9dad39987e329a1edc4b2679' => 
    array (
      0 => 'F:\\OSPanel\\domains\\test\\templates\\images.tpl',
      1 => 1564593375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41ccee749290_53926861 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<div class="img_wrapper">
				<a class="single_image" href="upload/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" data-img-name="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
					<img src="upload/small/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" alt=""/>
				</a>
				<button class="delete_btn main-btn" type="button" >X</button>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<form class="pick-img-form" action = "load.php" method ="post" enctype = "multipart/form-data">
		  <input class="pick-img-input" type="file" name="uploadfile">
		  <button class="pick-img-btn" type="submit" name = "upload">Загрузить</button>
 		</form>
 		<a class="back-btn" href="index.php">Назад</a>
	</div>

 <?php echo '<script'; ?>
 type="text/javascript" src="src/libs/jquery-1.4.3.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="src/libs/fancybox/jquery.fancybox-1.3.4.pack.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="src/libs/fancybox/jquery.mousewheel-3.0.4.pack.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="src/js/images.js"><?php echo '</script'; ?>
>
 </body>

</html>

<?php }
}
