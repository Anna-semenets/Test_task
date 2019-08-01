<?php
/* Smarty version 3.1.33, created on 2019-07-31 14:54:21
  from 'F:\OSPanel\domains\test\templates\autorization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41816dd1dc55_71091696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8516a16e95047085501378968e8dec4cca0169' => 
    array (
      0 => 'F:\\OSPanel\\domains\\test\\templates\\autorization.tpl',
      1 => 1564547303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41816dd1dc55_71091696 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Форма авторизации</h1>
  <form class="registration-form" action = "database_aut.php" method="post">
    <p>Введите логин</p>
    <input type = "text", name = "login", value = "", required>
    <p>Введите пароль</p>
    <input type = "password", name = "password", required>
    <button type = "submit" , name  = "do_login">Авторизоваться</button>
    <div class="error_message"></div>
  </form>
  <a href="index.php">У меня нет аккаунта</a>
   <?php echo '<script'; ?>
 type="text/javascript">

    var form = document.querySelector('.registration-form');

    function handleSubmit(event) {
      event.preventDefault();
      var errorMessage = event.target.querySelector('.error_message');
      var elements = event.target.elements;
      console.log(elements);
     

      var formData = new FormData(event.target);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "database_aut.php");
      xhr.send(formData);
      
      xhr.onreadystatechange = function() {
        console.log(this.readyState);
        if (this.readyState != 4) return;
        var response = this.responseText;
        console.log(typeof response);
        if (response === '"falsemail"') {
           errorMessage.innerHTML = 'Пользователь с таким логином не  существует';
        }
        if (response === '"success"') {
                    window.location.replace("newfile.php");
        }
        console.log(this.responseText);
      }
    }
   
    form.addEventListener('submit', handleSubmit);
  
  <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
