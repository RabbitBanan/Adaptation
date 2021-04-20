<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\default-style.css">
    <link rel="stylesheet" href="css\chat-style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\profile-content.css">
    <link rel="stylesheet" href="css\profile-competence.css">
    <link rel="stylesheet" href="css\profile-achive.css">
    <link rel="stylesheet" href="css\profile-employee-event.css">

    <title>Профиль</title>

    <style type="text/css">



    </style>
  </head>
  <body>
    <header class="header-page">
      <?php include 'header.php'; ?>
    </header>
    <div class="content-page">
      <?php include 'profile-content.php'; ?>
      <?php include 'profile-achive.php'; ?>
      <?php include 'profile-competence.php'; ?>

      <?php include 'profile-employee-event.php'; ?>

      <?php include 'chat.php'; ?>
    </div>
  </body>
</html>
