<?php
session_start();

// if (isset($_SESSION['name']) && !isset($_GET['logout'])) {
//   header('Location: http://localhost/egprojektas/BankV2/index.php?');
//   die;
// }



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if (isset($_GET['logout'])){
  unset($_SESSION['name']);
  $_SESSION['logout'] = 'The  user was logged out';
 
  header('Location: http://localhost/egprojektas/BankV2/index.php?');
  die;
}

  $users =  file_get_contents(__DIR__ . '/users.json');
  $users = json_decode($users, 1);
  foreach ($users as $user) {
    if ($user['name'] == $_POST['name'] && $user['psw'] == md5($_POST['psw'])) {
      $_SESSION['name'] = $user['name'];
      header('Location: http://localhost/egprojektas/BankV2/menu.php?');
      die;
    }
  } 
    $_SESSION['error'] = 'Invalid password or username';
    header('Location: http://localhost/egprojektas/BankV2/index.php?');
    die;
  
}
if (isset($_SESSION['error'])) {
  $error = $_SESSION['error'];
  unset($_SESSION['error']);
} else {
  $error = '';
}
if (isset($_SESSION['logout'])) {
  $logout = $_SESSION['logout'];
  unset($_SESSION['logout']);
} else {
  $logout = '';
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
 

    <div class="center">
      <div class=" inputs left-block center1">
        <form method="post">



          <label class="info">Name </label> <input class="input" type="text" name="name">

          <label class="info">Password </label> <input class="input" type="password" name="psw">
          
          <?php if ($error) : ?>
      <h2 style="color: crimson;"><?= $error ?></h2>
    <?php endif ?>
          <?php if (  $logout) : ?>
      <h2 style="color: green;"><?= $logout ?></h2>
    <?php endif ?>

          <button class="btn" type="submit"> Login </button>
 



        </form>
        
      </div>
    </div>
  </main>

</body>