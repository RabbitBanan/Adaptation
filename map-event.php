<?php
require_once "authcUser.php";


$authcUser = new authcUser;
if (!$authcUser->CheckUse()) {
  require "auto.php";
  return;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\default-style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\adapt.css">
    <link rel="stylesheet" href="css\map.css">
    <link rel="stylesheet" href="css\chat-style.css">
    <title>Мероприятие</title>

    <style type="text/css">

      .event {
        display: flex;
        flex-direction: column;
        padding: 10px 20px;
        margin-bottom: 10px;
      }

      .title {
        font-size: 22px;
        margin: 0;
      }

      .description {
        padding-left: 50px;
        margin: 0;
      }

      .map {
        position: relative;
      }

      .event-map {
        padding: 10px 20px;
        margin-bottom: 10px;
      }

      .point-map{
        cursor: pointer;
        position: absolute;
        z-index: 10;
      }

      .img-map{
        width: 380px;
      }

      .button-employee-event {
        float: right;
        background: red;
        border-radius: 10px;
        border: 2px solid;
        padding-left: 0 20px;
        background-color: #2d2d44;
        color: #fff;
        text-decoration: none;
      }

      .button-employee-event:hover{
        background-color: #6c6c7c;
      }

        .button-employee-event p {
          margin: 10px 20px;
        }

    </style>
  </head>
  <body>
    <header class="header-page">
      <?php include 'header.php'; ?>
    </header>
    <div class="content-page">
      <div class="event">
        <h2 class="header2">Мероприятие</h2>
        <div class="title">
          Задание 1
        </div>
        <div class="description">
          Требования пожарной безопасности - специальные условия социального и (или) технического характера, установленные в целях обеспечения пожарной безопасности законодательством Российской Федерации, нормативными документами или уполномоченным государственным органом.
        </div>
      </div>
      <div class="event-map">
        <h2 class="header2">Карта мероприятия</h2>
        <div class="map">
          <img class="img-map" src="maps\maps1\map1.png" alt="">
          <img class="point-map" src="img\point.png" style="top: 43px; left: 53px;">
        </div>
      </div>
      <a class="button-employee-event" href="http://adaptation.case-in/">
        <p>Завершить</p>
      </a>
      <div class="chat">
        <img src="img\chat.png">

      </div>
    </div>
  </body>
</html>
