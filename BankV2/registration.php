<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('Location: http://localhost/egprojektas/BankV2/index.php?');
  die;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $accounts = file_get_contents(__DIR__ . '/accounts.json');
  $accounts = json_decode($accounts, true);

  foreach ($accounts as $acc) {
    if ($acc['regid'] == $_POST['regid']) {
      $_SESSION['regerror'] = 'There is an existing account with the ID provided';
      header('Location: http://localhost/egprojektas/BankV2/registration.php?');
      die;
    }
  }

  // Create a new account object
  $newAccount = [
    "regname" => $_POST['regname'],
    "regsurname" => $_POST['regsurname'],
    "regid" => $_POST['regid']
  ];

  // Add the new account to the accounts array
  $accounts[] = $newAccount;

  // Convert the accounts array to JSON format
  $updatedAccountsJson = json_encode($accounts, JSON_PRETTY_PRINT);

  // Write the updated JSON back to the file
  file_put_contents(__DIR__ . '/accounts.json', $updatedAccountsJson);
  
  $_SESSION['regerror'] = 'Registration Succeeded';
  
  header('Location:http://localhost/egprojektas/BankV2/registration.php');
  
  die;
}
if (isset($_SESSION['regerror'])) {
  $msg = $_SESSION['regerror'];
  unset($_SESSION['regerror']);
} else {
  $msg = '';
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
  <main class="center">
    <div class="left-block ">
      <div class="title">New Account Details</div>
      <div class="inputs">
        <form action="" method="post">
          <label class="info" for="">Name </label> <input class="input" type="text" placeholder=" Antanas" name='regname'>
          <label class="info" for="">Surname </label> <input class="input" type="text" placeholder=" Bimberbovas" name='regsurname'>
          <label class="info" for="">ID Number </label> <input class="input" type="text" placeholder=" 49904120437 (An Example)" name='regid'>
          <button class="btn" type="submit"> Confirm Details </button>
         <h2> <?=$msg?></h2>
        </form>
      </div>
      <?php require __DIR__ . '/quickmeniu.php' ?>
  </main>

</body>