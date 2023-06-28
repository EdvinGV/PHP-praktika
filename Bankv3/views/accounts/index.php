<?php

//  $accounts = file_get_contents(__DIR__ . '/accounts.json');
//  $accounts = json_decode($accounts, true);
//  usort($accounts, function ($a, $b){
//    return strcmp($a['regsurname'],$b['regsurname']);

//  });


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cheese Accounts</title>
  <link rel="stylesheet" href="./bank.css">


</head>

<body>

  <header>
    <img class="logo" src="../img/logo.png" alt="">
  </header>

  <main>

    <div class="row">


    </div>
    <div class="arrow">
      <img class="arrimg" src="../img/Arrow 1.png" alt="">



    </div>


    <div class="right-block ">





    </div>
    <div class="title">Existing Accounts</div>

    <table bgcolor="black" width="100%">
      <tr bgcolor=" #E9CB64" class="table" >
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
          <td width="100" class="name"><?= $acc['regname'] ?> </td>
          <td width="100" class="surname"> <?= $acc['regsurname'] ?> </td>
          <td width="100" class="accno"> <?= $acc['id'] ?> </td>
          <td width="100" class="idno"><?= $acc['regid'] ?> </td>
          <td width="100" class="balance"><?= $acc['regbalance'] . ' €' ?> </td>
          <td width="200" class="options">
           
           



            <a href="editplus/<?= $acc['serial'] ?>"><button class="option"> Add</button></a>
            <a href="editminus/<?= $acc['serial'] ?>"><button class="option"> Subtract</button></a>
            <a href="delete/<?= $acc['serial'] ?>"><button class="option"> Delete</button></a>
            
        </tr>

      <?php endforeach ?>


  















    </table>
    <?php if (empty($accounts)) :  ?>
        <h1 style="text-align: center; margin-top: 50px; font-size: 60px">No Accounts Found</h1>
      <?php endif ?>

    </div>

    </div>







    </div>




    </div>

    <div class="foot">
      <img src="../img/circles.png" alt="">
    </div>

  </main>


</body>