<?php
/* Smarty version 3.1.33, created on 2019-07-31 14:51:06
  from 'F:\OSPanel\domains\test\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4180aa97f779_15173446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e63fc56722aa2d91b68d157a436f3cd14cd697' => 
    array (
      0 => 'F:\\OSPanel\\domains\\test\\templates\\index.tpl',
      1 => 1564547332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4180aa97f779_15173446 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Форма регистрации</h1>
  <form class="registration-form" action = "database.php" method="post">
    <p>Введите логин</p>
    <input type = "text", name = "login", value = "", required>
    <p>Введите e-mail</p>
    <input type = "email", name = "e-mail", required>
    <p>Введите пароль</p>
    <input type = "password", name = "password", required>
    <p>Повторите пароль</p>
    <input type = "password", name = "password2">
    <button type = "submit" , name  = "do_login">Зарегистрироваться</button>
    <div class="error_message"></div>
  </form>
  <a href="autorization.php">У меня уже есть аккаунт</a>
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
      xhr.open("POST", "database.php");
      xhr.send(formData);
      
      xhr.onreadystatechange = function() {
        console.log(this.readyState);
        if (this.readyState != 4) return;
        var response = this.responseText;
        console.log(typeof response);
        if (response === 'false') {
           errorMessage.innerHTML = 'Пользователь с таким логином существует';

        }
        if (response === '"falsemail"') {
           errorMessage.innerHTML = 'Пользователь уже зарегистрирован на данный e-mail';

        }
       
         if (elements[2].value != elements[3].value) {
        errorMessage.innerHTML = 'Введенные пароли не совпадают';
        console.log('error');
        }
        console.log(this.responseText);
         if (response === '"success"') {
       window.location.replace("newfile.php");
    }
      }
      
    }
    
    form.addEventListener('submit', handleSubmit);
  <?php echo '</script'; ?>
>
</body>
</html><?php }
}
