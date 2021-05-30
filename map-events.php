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

      .map > a:hover .direction-point{
        display: block;

      }

      .event-map {
        padding: 10px 20px;
        margin-bottom: 10px;
      }

      .point-map{
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

      .direction-point{
        display: none;
        width: 150px;
        background-color:  #f8f8f8;
        color: black;
        position: absolute;
        z-index: 15;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 5px 5px 20px #383838;
      }


      .text-adapt p {
        display: none;
      }
      .text-adapt:hover p {
        display: block;

      }


    </style>
  </head>
  <body>
    <header class="header-page">
      <?php include 'header.php'; ?>
    </header>
    <div class="content-page">
      <div class="event-map">
        <h2 class="header2">Карта мероприятий</h2>
        <div class="map">
          <img class="img-map" src="maps\maps1\map1.png" alt="">
          <a href="map-event-1.php">
            <img class="point-map" src="img\point.png" style="top: 43px; left: 53px;">
            <div class="direction-point" style="top: 43px; left: 113px;">
              Ознакомиться с правилами пожарной безопасности
            </div>

          </a>
          <a href="map-event-2.php">
            <img class="point-map" src="img\point.png" style="top: 157px; left: 139px;">
            <div class="direction-point" style="top: 157px; left: 199px;">
              Пройти обучение по окозанию первой помощи
            </div>
          </a>
        </div>
      </div>
      <?php include 'adapt.php'; ?>

      <div class="chat">
        <img src="img\chat.png">

      </div>
    </div>
  </body>
</html>
