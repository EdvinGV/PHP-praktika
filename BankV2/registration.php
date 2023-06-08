<?php
session_start();
if(!isset($_SESSION['name'])){
  header('Location: http://localhost/egprojektas/BankV2/index.php?');
  die;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VELNIO KODAI</title>
  <link rel="stylesheet" href="./bank.scss">
</head>

<body>
  <header>
    <img class="logo" src="../img/logo-no-frame.png" alt="">
  </header>
  <main class="center">
    <div class="left-block ">
      <div class="title">New Account Details</div>
      <div class="inputs">
        <form action="">
          <label class="info" for="">Name </label> <input class="input" type="text" placeholder=" Antanas">
          <label class="info" for="">Surname </label> <input class="input" type="text" placeholder=" Bimberbovas">
          <label class="info" for="">ID Number </label> <input class="input" type="text" placeholder=" 49904120437 (An Example)">
          <button class="btn" type="submit"> Confirm Details </button>
        </form>
      </div>
      <?php require __DIR__ . '/quickmeniu.php' ?>
  </main>

</body>