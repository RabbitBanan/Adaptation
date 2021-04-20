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
          Задание1
        </div>
        <div class="description">
          Без особых спойлеров сюжетной линии – вам придется собирать материалы для похоронного ритуала одного из Архонтов – местных богов. И когда вам понадобится Вечный ладан, вас отправят в аптеку.Там вы встретите самого необычного героя игры – зомби-девочку Ци Ци. Сначала она откажет вам в помощи – ей нужны четкие приказы, а помощь вам в базовую установку не входит. Однако, слегка подумав и найдя способ обойти такое ограничение, она выдаст вам самый милый квест игры.
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
