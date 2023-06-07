<?php 
session_start();
$checkedCount = $_SESSION['checkedCount'] ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELNIO KODAI</title>
</head>
<style>
    body{
        background-color: grey;
        color: wheat;
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
    }
</style>
<body style="background-color: grey";>


<div style="display: block;"> <?=$checkedCount?> checkboxes you've checked </div > 


<form action="http://localhost/egprojektas/Mechanika/black.php" method="get">

<button type="submit">OK</button>



</form>

</body>


