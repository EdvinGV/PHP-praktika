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
  <link rel="stylesheet" href="./bank.css">

</head>

<body>    
<header>
    <img class="logo" src="../img/logo-no-frame.png" alt="">
  </header>
    <main>
<div class="center meniukas" >

<a href="http://localhost/egprojektas/BankV2/list.php?"><div class="item option">Bank Accounts</div> </a>
<a href="http://localhost/egprojektas/BankV2/registration.php?"><div class="item option"> Add New Member</div></a>
<form action="http://localhost/egprojektas/BankV2/index.php?logout" method="post">
<button type="submit"><div class="item itemas option">Log Out</div></button> 
</form>
</div>

<?php require __DIR__ . '/quickmeniu.php' ?>

       
    </main>

</body>