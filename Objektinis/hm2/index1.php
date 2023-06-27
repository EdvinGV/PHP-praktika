<?php

require __DIR__ . '/Pinigine.php';
$Pinigine1= new Pinigine;

echo 'Pridetas pinigu kiekis  '. $Pinigine1-> ideti(50).'<br>';
echo 'Pridetas pinigu kiekis  '. $Pinigine1-> ideti(1).'<br>';
echo 'Pridetas pinigu kiekis  '. $Pinigine1-> ideti(2).'<br>';
echo 'Pridetas pinigu kiekis  '. $Pinigine1-> ideti(4).'<br>';
echo 'Turim  '. $Pinigine1-> skaiciuoti().'<br>';