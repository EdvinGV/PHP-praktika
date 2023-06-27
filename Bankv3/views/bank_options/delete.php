<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $accounts = file_get_contents(__DIR__ . '/accounts.json');
  $accounts = json_decode($accounts, true);
  $id = (int)$_GET['regaccno'];
// issitraukiam nari kad patikrinti ar yra pinigu
  $account = array_filter($accounts, fn ($c) => $id == $c['regaccno']);
  $account = array_shift($account);
print_r($account);
  if($account['regbalance']!=0){
    $_SESSION['deletemsg'] = '<span style="color: crimson; "> Account is NOT empty, can not delete it</span>';
    header('Location: http://localhost/egprojektas/BankV2/delete.php');
            die;
}
  
//trinimas per filtra
  $accounts = array_filter($accounts, fn($c) => $id != $c['regaccno']);

  // Check if the account was found and deleted
  $found = false;
  foreach ($accounts as $acc) {
    if ($acc['regaccno'] == $id) {
      $found = true;
      break;
    }
  }

  if ($found) {
    $_SESSION['deletemsg'] = 'ERROR, PLEASE TRY AGAIN';
  } else {
    $_SESSION['deletemsg'] = 'Account Deleted Successfully';
  }

  $accounts = json_encode($accounts, JSON_PRETTY_PRINT);
  file_put_contents(__DIR__ . '/accounts.json', $accounts);
  header('Location: http://localhost/egprojektas/BankV2/delete.php');
  die;
}

$deletemsg = $_SESSION['deletemsg'];
unset($_SESSION['deletemsg']);

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
         
        </form>
      </div>
      <?php require __DIR__ . '/quickmeniu.php' ?>
      <div class="center meniukas" >
      <h2 style="color: black;" > <?= $deletemsg ?></h2>
<a href="http://localhost/egprojektas/BankV2/menu.php?"><div class="item option">Home</div> </a>

</div>
  </main>

</body>
    