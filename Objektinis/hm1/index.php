<?php  
require __DIR__ . '/Kibiras1.php';

$kibiras2 = new Kibiras1;



echo 'Pridet viena  akmeni '. $kibiras2-> prideti1Akmeni().'<br>';
echo 'Pridet kazkiek akmenu'. $kibiras2-> pridetiDaugAkmenu(10);