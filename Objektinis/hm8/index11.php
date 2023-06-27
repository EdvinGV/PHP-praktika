<?php

require __DIR__ . '/Pinigine1.php';
$Pinigine2= new Pinigine1;

echo 'Pridetas pinigu kiekis , dabartine banknotu arba monetu suma '. $Pinigine2-> ideti(1).'<br>';
echo 'Pridetas pinigu kiekis , dabartine banknotu arba monetu suma   '. $Pinigine2-> ideti(50).'<br>';
echo 'Pridetas pinigu kiekis , dabartine banknotu arba monetu suma   '. $Pinigine2-> ideti(2).'<br>';
echo 'Pridetas pinigu kiekis , dabartine banknotu arba monetu suma   '. $Pinigine2-> ideti(120).'<br>';
echo 'Pridetas pinigu kiekis , dabartine banknotu arba monetu suma   '. $Pinigine2-> ideti(2).'<br>';
echo  $Pinigine2-> skaiciuoti().'<br>';