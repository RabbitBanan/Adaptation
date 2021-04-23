<?php
  // Подключаем файл для соединения с СУБД MySQL
  require_once('database.php');

  connect();
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\default-style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\adapt.css">
    <link rel="stylesheet" href="css\map.css">
    <link rel="stylesheet" href="css\chat-style.css">
    <title>Адаптация</title>

    <style type="text/css">

    </style>
  </head>
  <body>
    <header class="header-page">
      <?php include 'header.php'; ?>
    </header>
    <div class="content-page">
      <h1 class="header header-border">Моя адаптация</h1>
      <?php include 'adapt.php'; ?>
      <?php include 'map.php'; ?>
      <?php include 'chat.php'; ?>
    </div>
  </body>
</html>
