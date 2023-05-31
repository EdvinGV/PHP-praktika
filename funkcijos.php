<?php
echo '_____________U1____________<br><br><br><br>';
function text ($tekstas){
    echo "<h1>$tekstas </h1>";
};

text('LABUKAS');
echo"<br> ";
echo '_____________U2____________<br><br><br><br>';

function text2 ($x, $y){
    echo "<h$y>$x </h$y>";
};
text2 ('GAIDYS', rand(1,6));

echo"<br> ";
echo '_____________U3____________<br><br><br><br>';

function text3 (){
    $x= md5(time());
    $_1='';
    $y = preg_replace_callback('/\d+/', function($matches) use ($x) {
        return '<h1 style="display:inline;">'. $matches[0].'</h1>';
    }, $x);
    echo '<div > '.$y.'</div>';
};
text3 ();
echo"<br> ";
echo '_____________U4____________<br><br><br><br>';

function yes ($x){
    $res=0;
    if (is_int($x)==1){
for ($i=2;$i<$x;$i++){
    if ($x%$i==0){
        $res++;
    }
   

}
echo 'Ivesta reiksme dalinasi is '.$res.' skaiciu neskaitant 1 ir saves';}
else{echo 'Ivesta reiksme nera sveikas skaicius';  }
        
};

yes(2);

echo"<br> ";
echo '_____________U5____________<br><br><br><br>';


function rusiavimas(){ 
$m=[];
$x=0;

for ($i=0;$i<100;$i++){//generavimas
    $res=0;
    $x=rand(33,77);


    for ($y=2;$y<$x;$y++){//numeriu tikrinimas
        if ($x%$y==0){
            $res++;
        }}

$m[]= [$x, $res] ;//sustumimimas i array
usort($m, function($a, $b) { //rusiavimas pagal kiekvieno elemento antra nari (dalikliu skaicius)
    return $b[1] - $a[1];
});
}
foreach ($m as $val) {// kiekviena masyvo elementas (irgi masyva atvaizduojam sujungdami pagal indexa)
    echo "Number: " . $val[0] . " Divisors: " . $val[1] . "<br>";
}}
rusiavimas();


echo"<br> ";
echo '_____________U6____________<br><br><br><br>';
$m=[];
$x=0;
function rus2(){
for ($i=0;$i<100;$i++){
    $res=0;
    $x=rand(333,777);
    for ($y=2;$y<$x;$y++){//numeriu tikrinimas
        if ($x%$y==0){
            $res++;}}
            if($res>0){//numeriu dalikliu tikrinimas jei 0 tai nereik
                $m[]= [$x, $res] ;
            }
        
       
}
usort($m, function($a, $b) { //rusiavimas pagal kiekvieno elemento antra nari (dalikliu skaicius)
    return $b[1] - $a[1];
});
foreach ($m as $val) {// kiekviena masyvo elementas (irgi masyva atvaizduojam sujungdami pagal indexa)
    echo "Number: " . $val[0] . " Divisors: " . $val[1] . "<br>";
}
}
rus2();

echo"<br> ";
echo '_____________U7____________<br><br><br><br>';
function infinity(){ 

$x=[];
$ar=[];
$y=rand(10,20);
for($i=0; $i<$y; $i++){
    if($y-$i==1){
        for($i=0; $i<$y; $i++){
            $ar[]=rand(0,10);
        }
        $x[]=$ar;
    }else{
        $x[]=rand(0,10);
    }
    
};

var_dump($x);
return $x;
}
infinity();
$x = infinity();
echo"<br> ";
echo '_____________U8____________<br><br><br><br>';
$sum=0;
foreach ($x as $element){
   if(is_array($element)) {foreach($element as $value){
        $sum+=$value;}
    }
        else{  $sum += $element;}
    } echo '7 uzduoties array skaitmenu suma lygi '.$sum.'<br>';
echo"<br> ";
echo '_____________U9____________<br><br><br><br>';
function stopwhenOK(){
$x=[];
for ($i=0;$i<3; $i++){
    $x[]=rand(1,33);
}
//--------------------
foreach ($x as $value){
    $divisors=0;
    for($y=2;$y<$value;$y++){
if ($value%$y==0){
    $divisors++;
}
    }
    if ($divisors==0){ $x[]=rand(1,33);}
}
echo implode(' ',$x);
}
stopwhenOK();
echo"<br> ";
echo '_____________U10____________<br><br><br><br>';







?>