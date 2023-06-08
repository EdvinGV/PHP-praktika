<?php
session_start();
if(!isset($_SESSION['name'])){
  header('Location: http://localhost/egprojektas/BankV2/index.php?');
  die;
}

$accounts = file_get_contents(__DIR__ . '/accounts.json');
$accounts = json_decode($accounts, true);

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

<body >

  <header>
    <img class="logo" src="../img/logo-no-frame.png" alt="">
  </header>

  <main>

    <div class="row">
     

    </div>
    <div class="arrow">
      <img class="arrimg" src="../img/Arrow 1.png" alt="">



    </div>


    <div class="right-block ">
    <?php require __DIR__ . '/quickmeniu.php' ?>




</div>
      <div class="title">Existing Accounts</div>

      <table bgcolor="black" width="100%">
        <tr bgcolor=" #E9CB64" class="table" align="center">
          <th width="100" class="name"> Name </th>
          <th width="100" class="surname"> Surname </th>
          <th width="100" class="accno">Account No. </th>
          <th width="100" class="idno"> ID No. </th>
          <th width="100" class="balance"> Balance </th>
          <th width="200"> Options </th>
        </tr>



        <!-- vartotojas -->

       
        <?php foreach ($accounts as $acc) : ?>
          <tr class="tablerow" align="center">
          <td width="100" class="name"><?=$acc['regname'] ?>   </td>
          <td width="100" class="surname"> <?=$acc['regsurname'] ?> </td>
          <td width="100" class="accno">  <?='LT '.$acc['regaccno'] ?> </td>
          <td width="100" class="idno"><?=$acc['regid'] ?>  </td>
          <td width="100" class="balance"><?=$acc['regbalance'].' €' ?>  </td>
          <td width="200" class="options"> 
            <form action="http://localhost/egprojektas/BankV2/delete.php?regaccno=<?= $acc['regaccno'] ?>" method="post" ><button class="option" type="submit">Delete</button></form>
            <button class="option"> Add</button>
            <button class="option">Subtract </button></td>
          </tr>
      
        <?php endforeach ?>
        
        













      </table>


    </div>

    </div>







    </div>




    </div>

    <div class="foot">
      <img src="../img/circles.png" alt="">
    </div>
  
  </main>


</body>