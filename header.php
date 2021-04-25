<?php

?>

<script type="text/javascript">


  function btnMyAdaptation() {
    location.href = "http://adaptation/";
  }

  function btnMyStaff() {
    location.href = "curator-form.php";
  }


  function btnCompetence() {
    location.href = "cadr-сompetence-form.php";
  }

  function btnExit() {
    location.href = "auto.php";
  }

  function btnProfile() {
    location.href = "profile.php";
  }

</script>


<div class="header-page-top">
  <div class="header-page--logo">
    <a href="http://adaptation/" class="logo">
      <img src="img\logo-case-in.png" alt="Case-IN">
    </a>
  </div>
  <div class="header-page--nav-menu">
    <ul class="nav-menu">
      <!--<li class="">
        <a href="http://adaptation.case-in/" class="nav-menu--link course">
          <span>Мероприятия</span>
        </a>

      </li>-->

      <?php
        print(
          '<li>
            <button onclick="btnMyAdaptation()" class="nav-menu--link my-adapt">
              <span>Моя адаптация</span>
            </button >
          </li>'

        );
        if ($_SESSION['login'] == 'curator') {
          print (
            '<li>
              <button onclick="btnMyStaff()" class="nav-menu--link my-adapt">
                <span>Мои сотрудники</span>
              </button >
            </li>'
          );
        } else if ($_SESSION['login'] == 'cadr') {
          print (
            '<li>
              <button onclick="btnCompetence()" class="nav-menu--link my-adapt">
                <span>Компентениця</span>
              </button>
            </li>'
          );
          print (
            '<li>
              <button onclick="" class="nav-menu--link my-adapt">
                <span>Мероприятия</span>
              </button>
            </li>'
          );
          print (
            '<li>
              <button onclick="" class="nav-menu--link my-adapt">
                <span>Сотрудники</span>
              </button>
            </li>'
          );
        }
        ?>
    </ul>
  </div>
  <div class="header-page--profile-user">
    <div class="" onclick="btnProfile();">
      <!--<img src="img\profile.png" alt="user" class="avatar">-->
      <span><?php print($_SESSION["user_family"] . ' ' . $_SESSION["user_name"]); ?></span>
    </div>

    <input type="button" class="nav-menu--link" onclick="btnExit();" value="Выйти">
  </div>


    <!--<input type="button" name="" onclick="btnExit();" value="Выйти">
    <script type="text/javascript">
      function btnExit() {
        location.href = "auto.php";
      }
    </script>-->
</div>
