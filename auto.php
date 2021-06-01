<?php
require_once "authcUser.php";
$authcUser = new authcUser();
$authcUser->UnLogin();



if (isset($_POST['login'])) {
  if ($authcUser->CheckAuth($_POST['login'], $_POST['password'])) {
      header('Location: /');
      return;
  } else {
    $authcUser->UnLogin();
  }
}

  // Подключаем файл для соединения с СУБД MySQL
  #require_once('database.php');

  #connect();
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\default-style.css">
    <link rel="stylesheet" href="css\auto.css">
    <title>Адаптация</title>

    <style type="text/css">

    </style>
  </head>
  <body>

    <div class=" component">
      <?php
        $isAuto = $_SESSION["isAuto"];
        if ($isAuto == 'false') {
          print('<span style="color: red"> Ошибка: неверный логин или пароль</span>');
        }
        $_SESSION["isAuto"] = 'true';
      ?>
      <form class="auto" method="post">
        <fieldset>
          <legend class="title" >Авторизация</legend>
          <input type="text" class="text text-1" placeholder="Имя пользователя" name="login" autocomplete="off" value="">
          <input type="password" class="text" placeholder="Пароль" name="password" autocomplete="off" value="">

        </fieldset>
        <!--<span class="title" >Авторизация</span>
        <input type="text"  placeholder="Имя пользователя" name="login" autocomplete="off" value="">
        <input type="password" placeholder="Пароль" name="password" autocomplete="off" value="">-->

        <input class='button-auto' type="submit" name="" value="Вход">

      </form>
    </div>


  </body>
</html>
