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
        <tr class="tablerow" align="center">
          <td width="100" class="name"> Dedukas </td>
          <td width="100" class="surname"> Maziukas </td>
          <td width="100" class="accno"> LT 5484844654687987 </td>
          <td width="100" class="idno"> 66546954984984 </td>
          <td width="100" class="balance"> 1515484.55 </td>
          <td width="200" class="options"> <button class="option">Delete</button><button class="option"> Add</button><button class="option">Subtract </button></td>

        </tr>
        













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