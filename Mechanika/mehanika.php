<?php

$name= $_GET['name'] ?? 'nieko';
$color= $_GET['color']?? 'green';
$bgr= isset($_GET['bgr']) ? 'red' : 'grey';
$bgr2= $_GET['bgr2'] ?? 'grey';
$bgr3= $_GET['bgr3'] ?? 'grey';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $bgr4 = 'yellow';
     header('Location: http://localhost/egprojektas/Mechanika/mehanika.php?');
    
}else if($_SERVER['REQUEST_METHOD'] == 'GET'){
   $bgr4 = 'green';

}else{
   $bgr4=' grey';
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
<body style="background-color:<?=$bgr?>;">
<button><a href="mehanika.php">Reset...</a><br></button>
   <button> <a href="mehanika.php?bgr=1">Raudona Spalva</a></button><br>
   --------------------------------------------------<br>


<div style="background-color:<?=$bgr2?>;">
    <form action="http://localhost/egprojektas/Mechanika/mehanika.php?" method="get">
    
    <label>Spalva</label><input name="bgr2" type="text">
    
    

    
    
       <button> <a href="mehanika.php?">Reset</a></button><br>
       </form>
</div>
   --------------------------------------------------<br>

<div style="background-color:<?=$bgr3?>;">
    <form action="http://localhost/egprojektas/Mechanika/mehanika.php">
    
    <label>Spalva</label><input name="bgr3" type="text">
    
    
       <button type="submit">Pritaikyti</button>
    
    
       <button> <a href="http://localhost/egprojektas/Mechanika/mehanika.php">Reset</a></button><br>
       </form>
</div>
   --------------------------------------------------<br>




<div style="background-color:<?=$bgr4?>">



    <form action="http://localhost/egprojektas/Mechanika/mehanika.php?"method="get">
       <button type="submit">Pritaikyti GET</button>
    </form >
    

      <form action="http://localhost/egprojektas/Mechanika/mehanika.php?" method="post">
       <button type="submit">Pritaikyti POST</button>
       </form>
</div>
</body>
</html>