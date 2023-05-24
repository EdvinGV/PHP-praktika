

<style>
.red{
    background-color:red;
}
</style>

<?php
echo '_____________U1____________<br><br><br><br>';
$stars = '';
for ($i = 0; $i < 400; $i++) {


    if (($i + 1) % 50 == 0){
        $stars .= '* <br>';
      
    }else{
        $stars .= '*  ';
    }
    
    
}
?>
<p style=" background-color:aquamarine ; width: 60%;  "><?php echo $stars; ?>
</p>

<?php



echo"<br> ";
$x= null;
$counter=0;
echo '_____________U2____________<br><br><br><br>';



?>
<p style=" background-color:aquamarine ; width: 60%; ">
<?php
    for($i = 0; $i < 300; $i++){
    
    $sk=rand(0, 300);
    $x.= $sk. " ";
    $counter+= $sk>150 ? 1 : 0;
    
    }
    echo $x. "daugiau uz 150 ===>>>>>>".$counter;
    echo"<br> ";
    ?>
</p>
<?php



echo '_____________U3____________<br><br><br><br>';


$x="";
$nr= rand(0,3000);
for ($i = 0; $i < $nr; $i++) {
    if ($i%77==0){
        $x.= $i." ";
    }
}

echo $x;

echo"<br> ";
echo '_____________U4-----U5____________<br><br><br><br>';


echo "<div style=' background-color:aquamarine ;  width: 90%; line-height: 0.5em;'>";
for ($y=1 ; $y<=100; $y++){
    
    for($x=1; $x<=100; $x++){
        if($x === $y || 101-$x===$y ){
            echo "<span style='margin-left:1em; color:red'>Nauseda</span>";
    }else{
        echo '*';
    }
}
    echo "<br>";
}
echo "</div>";


echo"<br> ";

echo '_____________U6____________<br><br><br><br>';



$i = 0;
$herbai = 0;
$skaiciai = 0;
$condition = 0;
$strike = 0;

do {
    $a = rand(0, 1);
    echo "Metimas...";
    $i++;
    if ($a === 0) {
        echo "Iskrito herbas <br>";
        $condition++;
        $strike++;
        $y=0;
    } else {
        echo "Iskrito skaicius<br>";
       $strike=0;
       $y++;
    }
} while ($strike < 3 || $condition < 3);

echo "Po $i metimu herbas krito 3 kartus ir 3 is eiles<br>";
echo $strike;

echo"<br> ";
echo '_____________U7____________<br><br><br><br>';
$a=0;
$b=0;
$i=0;
do{
    $a+=rand(10,20);
    $b+=rand(5,25);
    
    $i++;
    echo " Zaidimas nr. $i Petras surinko per visus zaidimus $a tasku o Kazys surinko $b tasku.<br><br>";
}while($a<222 && $b<222 );

echo $a.' Petro taskai.'. $b.' Kazio taskai.';
echo ($a>$b ? ' ZAIDIMA LAIMEJO PETRAS ' : ' ZAIDIMA LAIMEJO Kazys ');
echo"<br> ";
echo '_____________U8____________<br><br><br><br>';

echo "<div style=' background-color:aquamarine ; width: 70%; line-height: 0.4em;'>";
for ($y=1 ; $y<=21*4; $y++){
    
    for($x=1; $x<=21*4; $x++){
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        $color = "rgb($r,$g,$b)";
        if($x < $y+10*4 && $x < 32*4-$y && 12*4-$x < $y && $x+10*4 >$y ){
            echo "<span  style='color: $color'>*</span>";
    }else{
        echo '_';
    }
}
    echo "<br>";
}
echo "</div>";

echo"<br> ";
echo '_____________U9____________<br><br><br><br>';

$i=0;
$m=0;
$d=0;
do{
    
$i++;
    $m+=rand(5,20);
  
    echo "Pist.. ikalta bendrai ". $m/10 ."cm <br>";
}while($m<85);
echo "<b>Po $i silpnu kalimu vinis ikaltas</b><br>";

$i=0;
do{
$i++;
    
    $d+=rand(20,30);
    echo "Pist.. ikalta bendrai ". $d/10 ."cm <br>";
}while($d<85);
echo "<b>Po $i stipriu kalimu vinis ikaltas</b>";

echo"<br> ";
echo '_____________U10-U11____________<br><br><br><br>';

$i=1;
$x=0;
$skaicius="";

do {
    $skaitmuo = rand(0, 200);
    if (strpos($skaicius, strval($skaitmuo)) === false) {   // strpos parodo kokioj lokcaijoj yra toks skaicius
      $skaicius .= $skaitmuo . " ";// jei tos lokacijos (reiskia skaiciaus nera) tai numeris yra unique
    }
  } while (substr_count($skaicius, " ") < 50);
  echo "<p style='color: blue; width:100%;'>$skaicius</p>";



?>