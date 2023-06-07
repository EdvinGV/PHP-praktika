<?php 

//array paruosimas for each chekbox generavimui html'e
session_start();

$checkboxes=rand(3,10);
$checkarray=[];
$alphabet=range('A', 'Z');
for ($i=0; $i<$checkboxes; $i++){
    $checkarray[]=$alphabet[$i];
}
//Patikrinimas jei servas buvo pasiektas post metodu tai skaiciuok checkboxus kurie yra inicijuoti ir post metodu pazymeti
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $checkedCount = 0;
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['checkboxes']) && is_array($_POST['checkboxes'])) {
        $checkedCount = count($_POST['checkboxes']);
        $_SESSION['checkedCount'] = $checkedCount;
    } else {
        $checkedCount = 0;
    }
    
}

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
        background-color: black;
        color: wheat;
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
<body style="background-color: black";>
<form action="http://localhost/egprojektas/Mechanika/result.php" method="post">
<?php
foreach ( $checkarray as $element){
    echo '<input type="checkbox" name="checkboxes[]" value="' . $element . '">' . $element . '<br>';
   
    
}

?>
<button type="submit">  How many? </button>




</form>

</body>