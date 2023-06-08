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

    <main>
    <?php require __DIR__ . '/quickmeniu.php' ?>
    </main>

</body>