<?php 
// Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

echo '_____________U1____________<br><br><br><br>';
$name='Edvin';
$surname='Gvozdovic';
$birth_year= 1998;
$current_year= 2023;
$age= $current_year-$birth_year;
echo "As esu $name $surname. Man yra $age metai.<br><br>";

echo '_____________U2____________<br><br><br><br>';

$a= rand(0,4);
$b= rand(0,4);
if ($a>$b){
   echo $b===0 ? 'Dalyba is nulio negalima<br><br>' : number_format($a / $b, 2).'<br><br>';
}else{
    echo $a===0 ? 'Dalyba is nulio negalima<br><br>' : number_format($b / $a, 2).'<br><br>' ;
}



echo '_____________U3____________<br><br><br><br>';
$c= rand(0,25);
$d= rand(0,25);
$e= rand(0,25);
$f=[$c,$d,$e];
sort($f);

echo implode(', ',$f). "<===== sorted numbers, middle value =====> $f[1] <br><br>";


echo '_____________U4____________<br><br><br><br>';

function trikampis (){
    $g=rand(1,10);
    $h=rand(1,10);
    $i=rand(1,10);
    if($g+$h>$i && $g+$i>$h && $i+$h>$g ){
        echo "Krastines: a=$g b=$h c=$i . Galima sudeti trikampi :) <br><br>";
    }else{
        echo "Krastines: a=$g b=$h c=$i . Trikampis nesigaus :( <br><br>";
    }
};

echo(trikampis());

echo '_____________U5____________<br><br><br><br>';
$x=rand(0,2);
$y=rand(0,2);
$z=rand(0,2);
$w=rand(0,2);
$acc1=0;
$acc2=0;
$acc3=0;
for ($i=0; $i<1; $i++){
$acc1 += $x===0? 1 : 0;
$acc1 += $y===0? 1 : 0;
$acc1 += $z===0? 1 : 0;
$acc1 += $w===0? 1 : 0;
$acc2 += $x===1? 1 : 0;
$acc2 += $y===1? 1 : 0;
$acc2 += $z===1? 1 : 0;
$acc2 += $w===1? 1 : 0;
$acc3 += $x===2? 1 : 0;
$acc3 += $y===2? 1 : 0;
$acc3 += $z===2? 1 : 0;
$acc3 += $w===2? 1 : 0;
}
echo " Loterijos skaiciukai buvo: $acc1 Nuliai $acc2 Vienetai $acc3 Dvejetai <br><br>";
echo '_____________U6____________<br><br><br><br>';
$qq= rand(1,6);
?>
<h3>Laimingas siu metu skaicius yra <?php echo  $qq ?></h3>
<?php 
echo '_____________U7____________<br><br><br><br>';


$ww=rand(-10,10);
$ee=rand(-10,10);
$rr=rand(-10,10);
$r=[];
$g=[];
$b=[];

$ww<0 ? $g[]=($ww): 0;
$ww=== 0? $r[]=($ww): 0;
$ww>0 ? $b[]=($ww): 0;

$ee<0 ? $g[]=($ee): 0;
$ee=== 0? $r[]=($ee): 0;
$ee>0 ? $b[]=($ee): 0;

$rr<0 ? $g[]=($rr): 0;
$rr=== 0? $r[]=($rr): 0;
$rr>0 ? $b[]=($rr): 0;

?>
<!-- Html -->
<h2 style="color:red">Raudoniukai <?php echo implode(', ',$r)  ?>  </h1>
<h2 style="color:green"> Zaliukai <?php echo implode(', ',$g) ?>  </h1>
<h2 style="color:blue"> Melynukai <?php echo implode(', ',$b) ?></h1>


<?php 
echo '_____________U8____________<br><br><br><br>';

function kapiniu_biznis (){
$zvakes_kaina=1;
$nuolaidele3=0.97;
$nuolaidele4=0.96;
$zvakes=rand(5,3000);
$kaina=0;

 $zvakes <= 1000 ?  $kaina=$zvakes* $zvakes_kaina : 0;
 $zvakes > 1000 ?  $kaina=$zvakes*($zvakes_kaina*$nuolaidele3) : 0;
 $zvakes > 2000 ?  $kaina=$zvakes*($zvakes_kaina*$nuolaidele4) : 0;

 echo "Klientas nupirko $zvakes zvakes po ". $kaina/$zvakes. " euriuko(-a). Bendra suma $kaina  europiniu pinigu.<br>";
};

kapiniu_biznis();

echo '_____________U9____________<br><br><br><br>';

function mandras_vidurkis (){
    $rr=rand(0,100);
$tt=rand(0,100);
$yy=rand(0,100);
$vidurkis= round(($rr+$tt+$yy)/3,0);
$vidurkis_su_facecontrol= 0;
$nepraejo_face_control=0;
$x='';

    $rr > 10 && $rr <90 ? $vidurkis_su_facecontrol+= $rr : $nepraejo_face_control+= 1; 
    
    $tt > 10 && $tt <90 ? $vidurkis_su_facecontrol+= $tt : $nepraejo_face_control+= 1;
    
    $yy > 10 && $yy <90 ? $vidurkis_su_facecontrol+= $yy : $nepraejo_face_control+= 1;
    

    $nepraejo_face_control===3 ? $x= " Siandienos skaiciukai $rr $tt $yy .Vidurkis lygus $vidurkis o su salyga >10 bet <90 visi skaiciai netiko. <br>" : 
    $x= " Siandienos skaiciukai $rr $tt $yy .Vidurkis lygus $vidurkis o vidurkis >10 bet <90 lygus " .round(($vidurkis_su_facecontrol/(3-$nepraejo_face_control)), 0). "<br>";
echo $x;
};
mandras_vidurkis();
echo '_____________U10___________<br><br><br><br>';
//senas laikas
$hh=rand(1,24);
$mm=rand(0,59);
$ss=rand(0,59);
//pridetinis laikas sekundemis
$add=rand(0,30000); // vietoj 300 panaudojau 30 000
//senas laikas sudeliotas i sakini
$time = " $hh h $mm m $ss s ";
//naujas laikas sekundemis
$new_sekundes= $hh*3600 + $mm*60 + $ss + $add;
//naujos valandos
$hhh= floor($new_sekundes/3600); 
//naujos minutes
$mmm= floor(($new_sekundes-($hhh*3600))/60);
//naujos sekundes
$sss= ($new_sekundes-($hhh*3600))-($mmm*60);
//naujas laikas sudeliotas i sakini
$new_time=" $hhh h $mmm m $sss s ";
//valandos jei virsis paros limita (paliekam paru likuti)
$insane_time= floor($hhh-((floor($hhh/24))*24)). "h $mmm m $sss s ";

$hhh>24? $x="Dabartinis laikas $time  ---- Po $add sekundziu laikas bus $insane_time <br>" : $x="Dabartinis laikas $time  ---- Po $add sekundziu laikas bus $new_time <br>";

echo $x;


echo '_____________U11____________<br>';


$aa = rand(1000, 9999);
$bb = rand(1000, 9999);
$cc = rand(1000, 9999);
$dd = rand(1000, 9999);
$ee = rand(1000, 9999);
$ff = rand(1000, 9999);

sort($aa,$bb,$cc,$dd,$ee,$ff);

// Find the maximum value 
$max1 = max($aa, $bb, $cc, $dd, $ee, $ff);
$max6= min($aa, $bb, $cc, $dd, $ee, $ff);

$max2 = ($aa + $bb + $cc + $dd + $ee + $ff) - $max1 - $max6;
$max3 = ($aa + $bb + $cc + $dd + $ee + $ff) - $max1 - $max2 - $max6;
$max4 = ($aa + $bb + $cc + $dd + $ee + $ff) - $max1 - $max2 - $max3 - $max6;
$max5 = ($aa + $bb + $cc + $dd + $ee + $ff) - $max1 - $max2 - $max3 - $max4 - $max6;
echo "Unorted numbers: $aa, $bb, $cc, $dd, $ee, $ff <br/><br/>
Sorted numbers: $max1, $max2, $max3, $max4, $max5, $max6 <br/>";
echo "Unorted numbers: $aa, $bb, $cc, $dd, $ee, $ff <br/><br/>
Sorted numbers: $max1, $max2, $max3, $max4, $max5, $max6 <br/>";

?>