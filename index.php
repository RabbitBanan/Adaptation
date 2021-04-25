<?php
  require_once "authcUser.php";


  $authcUser = new authcUser;
  if (!$authcUser->CheckUse()) {
    require "auto.php";
    return;
  }


  // Подключаем файл для соединения с СУБД MySQL
  #require_once('database.php');

  #connect();
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\default-style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\adapt.css">
    <link rel="stylesheet" href="css\map.css">
    <link rel="stylesheet" href="css\chat-style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <title>Адаптация</title>



    <style type="text/css">

    </style>
  </head>
  <body>
    
    <header class="header-page">
      <?php include 'header.php'; ?>
    </header>
    <div class="content-page">

      <?php

        print ('<h1 class="header header-border">Моя адаптация</h1>');
        include 'adapt.php';
        include 'map.php';
        include 'chat.php';

       ?>

    </div>
  </body>
</html>
