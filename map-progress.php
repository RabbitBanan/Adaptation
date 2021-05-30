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
    <meta charset="utf-8">

    <link rel="stylesheet" href="css\default-style.css">
    <link rel="stylesheet" href="css\map-progress.css">
    <link rel="stylesheet" href="css\header.css">
    <title>Адаптация</title>
  </head>
  <body>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

    <script type="text/javascript">

    $(document).ready(function () {



      draw_lines();
    });

    function draw_lines() {
      var Xlevel, Ylevel = 0;

      // TODO Цикл по id
      //// Первая итерация цикла
      $('#1 .level-progress .circle').each(function(index,value) {
        Xlevel = $(this).position().top + 50;
        Ylevel = $(this).position().left + 50;
        console.log(Xlevel+'/'+Ylevel);
      });

      $('#1 .event-progress .circle').each(function(index,value) {
        var Xprogress, Yprogress;
        Xprogress = $(this).position().top + 50;
        Yprogress = $(this).position().left + 50;

        $("svg").append('<line x1="'+Yprogress+'" y1="'+Xprogress+'" x2="'+Ylevel+'" y2="'+Xlevel+'"/>');
        $("#cont").html($("#cont").html());
      });

      $('#2 .event-progress .circle').each(function(index,value) {
        var Xprogress, Yprogress;
        Xprogress = $(this).position().top + 50;
        Yprogress = $(this).position().left + 50;

        $("svg").append('<line x1="'+Yprogress+'" y1="'+Xprogress+'" x2="'+Ylevel+'" y2="'+Xlevel+'"/>');
        $("#cont").html($("#cont").html());
      });
      ////

      $('#2 .level-progress .circle').each(function(index,value) {
        Xlevel = $(this).position().top + 50;
        Ylevel = $(this).position().left + 50;
      });

      $('#2 .event-progress .circle').each(function(index,value) {
        var Xprogress, Yprogress;
        Xprogress = $(this).position().top + 50;
        Yprogress = $(this).position().left + 50;

        if (index > 1) {
          $("svg").append('<line class="no-active" x1="'+Yprogress+'" y1="'+Xprogress+'" x2="'+Ylevel+'" y2="'+Xlevel+'"/>');
        } else {
          $("svg").append('<line x1="'+Yprogress+'" y1="'+Xprogress+'" x2="'+Ylevel+'" y2="'+Xlevel+'"/>');
        }
        $("#cont").html($("#cont").html());
      });
      //

      // Лагает
      $(window).resize(function(){
        $('line').remove()
        draw_lines();
      });


    }



    </script>
    <header class="header-page">
      <?php include 'header.php'; ?>
    </header>
    <div class="content-page">
      <div class="map-progress">
        <h1>Дерево навыков</h1>
        <div id="1" class="prorgess">
          <div class="event-progress">
            <div class="event">
              <span>Первый вход</span>
              <div class="circle">
                <img src="img\hello_world.webp" alt="">
              </div>
            </div>
            <div class="event">
              <span>Знакомство</span>
              <div class="circle">
                <img src="img\ok.webp" alt="">
              </div>
            </div>
            <div class="event">
              <span>Пройдены инструктажи</span>
              <div class="circle">
                <img src="img\test5.png" alt="">
              </div>
            </div>

          </div>
          <div class="level-progress">
            <div class="circle">
              <span>Ур. 1</span>
            </div>
          </div>
        </div>
        <div id="2" class="prorgess">
          <div  class="event-progress">
            <div class="event">
              <span>Инструктаж на рабочем месте</span>
              <div class="circle">
                <img src="img\clever.png" alt="">
              </div>
            </div>
            <div class="event">
              <span>Техника безопасности</span>
              <div class="circle">
                <img src="img\good.png" alt="">
              </div>
            </div>
            <div class="event">
              <span>Пожарная безопасность</span>
              <div class="circle no-active">
                <img class="no-active-achive" src="img\test4.png" alt="">
              </div>
            </div>
            <div class="event">
              <span>Первая помощь</span>
              <div class="circle no-active">
                <img class="no-active-achive" src="img\help.png" alt="">
              </div>
            </div>
          </div>
          <div class="level-progress">
            <div class="circle no-active">
              <span>Ур. 2</span>
            </div>
          </div>
        </div>
        <div id="cont">
          <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg">
        </div>
      </div>
    </div>


    <!--<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg">
       <line x1="200" y1="300" x2="500" y2="500"/>
    </svg>-->


  </body>
</html>
