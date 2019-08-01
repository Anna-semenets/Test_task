<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Страница регистрации</title>
  <link rel="stylesheet" href="src/css/style.css" />
</head>
<body>
  <div class="main-form-wrapper">
    <form class="main-form registration-form" action ="registration.php" method="post">
      <div class="main-form-title">Регистрация</div>
      <input class="main-form-input" type = "text", name = "login", value = "", placeholder="Логин" required>
      <input class="main-form-input" type = "email", name = "e-mail", placeholder="E-mail" required>
      <input class="main-form-input" type = "password", name = "password", placeholder="Пароль" required>
      <input class="main-form-input" type = "password", name = "password2" placeholder="Повторите пароль" required>
      <button class="main-form-btn" type = "submit" , name  = "do_login">Зарегистрироваться</button>
      <a class="main-form-link" href="autorization.html">У меня уже есть аккаунт</a>
      <div class="error_message"></div>
    </form>
  </div>
  <script type="text/javascript" src="src/js/reg.js"></script>
 </body>
</body>
</html>