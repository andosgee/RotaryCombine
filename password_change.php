<?php
include "inc/depends.php";
session_start();
AccessForbid();
$conn = OpenCon();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> <!--Font stylesheet-->
    <title>Change Password | Rotary Belfast</title>
  </head>
  <body>
    <div class="pwdCgn__bckgro">
    <?php include "inc/header.php"; ?>

    <?php include "inc/nav.php"; ?>

    <?php include "inc/pwd_change.php"; ?>
  </div>
  </body>
</html>