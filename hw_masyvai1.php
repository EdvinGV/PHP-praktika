<?php
echo '_____________U1____________<br><br><br><br>';
echo '<pre>';
$m1=[];
for($i=0; $i<30;$i++){
$m1[]=rand(5,25);
};
print_r($m1);

echo"<br> ";
echo '_____________U2____________<br><br><br><br>';


//reiksme 10+
$add= 0;
foreach($m1 as $x){
    if ($x>10){
        $add++;
    }
}
echo $add. ' daugiau reiksmiu nei 10 <br>';
// max skaicius ir jo / ju indeksai
$l=max($m1);
echo 'max skaicius indeksai yra...'. implode(' ',array_keys($m1, $l )).'<br>';


//poriniu skaiciu suma
$even= 0;
$y=0;
foreach($m1 as $y){
    if ($y%2==0){
        $even+= $y;
    }
}
echo 'Lyginiu skaiciu suma = '.$even;
echo"<br> ";
//naujas masyvas = senas masyvas minus indexas

$new=[];
foreach($m1 as $key => $comp){
    $new[]= $comp - $key;
}
echo 'naujas masyvas ... <br>'.implode('<br>', $new).'<br>';

echo'naujas masyvas su 40 nariu <br> ';
for ($i=0;$i<10;$i++){ 
$m1[]=rand(5,25);
}
//prideti 10 nariu
echo '<pre>';
echo implode(' ', $m1).'<br><br>';
//is 1 masyvo 2 masyvai lyginiai nelyginiai indeksai
$even=[];
$odd=[];
foreach($m1 as $index => $value){
    if ($index%2==0){
        $even[]=$value;
    }else{
        $odd[]=$value;
    }
}
// masyvas lyginis indeksas su value daugiau 15 =0
$even=[];
echo 'masyvas is lyginius indeksu nariu = '. implode(' ',$even).'<br><br> ir kiti .... '.implode(' ',$odd).'<br><br>';
foreach($m1 as $index => $value){
    if ($index%2==0 && $value>15){
        $value=0;
        $even[]=$value;}else{
            $even[]=$value;
        }
 
}
echo implode(' ', $even).'<br> naujas <br>';
//pirmojo 10 indeksas
echo array_search(10, $m1).' --- indeksas pirmojo 10 <br>';
echo"<br> ";
//array be poriniu indeksu
foreach($m1 as $index => $value){
    if ($index%2==0 ){
        unset($value);
        }else{
            $m2[]=$value;
        }
 
}
echo 'naujas array be poriniu indeksu '.print_r( $m2);
echo"<br> ";
echo '_____________U3____________<br><br><br><br>';
$abcd=[];
$options='ABCD';
for ($o=0;$o<200; $o++){
  
    $letter=rand(0,strlen($options)-1);
    $abcd[]=$options[$letter];
}
echo '<div style="width: 900px; display: flex; background-color:blue; line-height:60px; word-wrap: break-word;">';
echo implode(' ',$abcd);
echo '</div>';
echo"<br> ";
echo '_____________U4____________<br><br><br><br>';


echo"<br> ";
echo '_____________U5____________<br><br><br><br>';


echo"<br> ";
echo '_____________U6____________<br><br><br><br>';


echo"<br> ";
echo '_____________U7____________<br><br><br><br>';


echo"<br> ";
echo '_____________U8____________<br><br><br><br>';


echo"<br> ";
echo '_____________U9____________<br><br><br><br>';


echo"<br> ";
echo '_____________U10____________<br><br><br><br>';







?>