<?php
// session_start();
// if (!isset($_SESSION['name'])) {
//   header('Location: http://localhost/egprojektas/BankV2/index.php?');
//   die;
// }

// // Check if the form is submitted



// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  
  
//   //tikrinimas ar nera atitikmenu
//   $accounts = file_get_contents(__DIR__ . '/accounts.json');
//   $accounts = json_decode($accounts, true);

//   foreach ($accounts as $acc) {
//     if ($acc['regid'] == $_POST['regid']) {
//       $_SESSION['regerror'] = '<span style="color: crimson; ">There is an existing account with the ID provided </span>';
//       header('Location: http://localhost/egprojektas/BankV2/registration.php?');
//       die;
//     }
//   }


//   $checkname=$_POST['regname'];
//   $checkname= ucfirst($checkname);
//   $checksurname=$_POST['regsurname'];
//   $checksurname= ucfirst($checksurname);


//   if (preg_match('/\P{L}+/u', $checkname) || preg_match('/\P{L}+/u', $checksurname)) {
//     $_SESSION['regerror'] = 'Name and Surname can only contain letters';
//     header("Location:http://localhost/egprojektas/BankV2/registration.php?");
//     die;
//   }
  

//   if (is_numeric($checkname) || is_numeric($checksurname)){
//     $_SESSION['regerror'] = 'Name and Surname can not contain numbers';
//     header("Location:http://localhost/egprojektas/BankV2/registration.php?");
//     die;
//   }
// //tikrinimas ar kodas atitinka reikalavimus
//   if(strlen($checkname)< 3 || strlen($checksurname)< 3){
//     $_SESSION['regerror'] = '<span style="color: crimson; font-size: 16px"> Not all details were provided according to requirments. (Minimum input length 3 characters)</span>';
//     header("Location:http://localhost/egprojektas/BankV2/registration.php?");
//     die;
//   }
//   function validateAsmensKodas()
//   {
//     $asmensKodas=$_POST['regid'];
//     if ($asmensKodas == null ) {
//       $_SESSION['regerror'] = '<span style="color: crimson; ">ID is not valid</span>';
//       header("Location:http://localhost/egprojektas/BankV2/registration.php?");
//       die;
//     } else if (!preg_match('/^\d{11}$/', $asmensKodas)) {
//       $_SESSION['regerror'] = '<span style="color: crimson; ">ID is not valid</span>';
//       header("Location:http://localhost/egprojektas/BankV2/registration.php?");
//       die;
//     }
//     $skaitmenys = str_split($asmensKodas);
//     $kontrolinisSkaitmuo = (int)$skaitmenys[10];

//     $skaiciai = array_map('intval', str_split($asmensKodas, 1));

//     $svarba = [1, 2, 3, 4, 5, 6, 7, 8, 9, 1];
//     $suma = 0;

//     for ($i = 0; $i < 10; $i++) {
//       $suma += $svarba[$i] * $skaiciai[$i];
//     }

//     $liekana = $suma % 11;

//     if ($liekana === 10) {
//       $liekana = 0;
//     }

//     if ($liekana !== $kontrolinisSkaitmuo) {
//       $_SESSION['regerror'] = 'ID is not valid';
//       header("Location:http://localhost/egprojektas/BankV2/registration.php?");
//       die;
//     }

//     return true;
//   }
//   validateAsmensKodas();
  
//   // Create a new account object
// ///lower case and capitalize
//   $_POST['regname']=strtolower($_POST['regname']);
//   $_POST['regname']=ucfirst($_POST['regname']);
//   $_POST['regsurname']=strtolower($_POST['regsurname']) ;
//   $_POST['regsurname']=ucfirst($_POST['regsurname']) ;
//   $newAccount = [
//     "regname" => $_POST['regname'],
//     "regsurname" => $_POST['regsurname'],
//     "regaccno" => rand(100000000, 999999999),
//     "regid" => $_POST['regid'],
//     "regbalance" => 0
//   ];

//   // Add the new account to the accounts array
//   $accounts[] = $newAccount;

//   // Convert the accounts array to JSON format
//   $updatedAccountsJson = json_encode($accounts, JSON_PRETTY_PRINT);

//   // Write the updated JSON back to the file
//   file_put_contents(__DIR__ . '/accounts.json', $updatedAccountsJson);

//   $_SESSION['regerror'] = 'Registration Succeeded';

//   header('Location:http://localhost/egprojektas/BankV2/registration.php');

//   die;
// }
// if (isset($_SESSION['regerror'])) {
//   $msg = $_SESSION['regerror'];
//   unset($_SESSION['regerror']);
// } else {
//   $msg = '';
// }
use Bank\IbanId;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chesse Registration</title>
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
        <form action="/register" method="post">
          <label class="info" for="">Name </label> <input class="input" type="text" placeholder=" Antanas" name='regname'>
          <label class="info" for="">Surname </label> <input class="input" type="text" placeholder=" Bimberbovas" name='regsurname'>
          <label class="info" for="">ID Number </label> <input class="input" type="text" placeholder=" 49904120437 (An Example)" name='regid'>
          <button class="btn" type="submit"> Confirm Details </button>
         
        </form>
      </div>
  </main>

</body>