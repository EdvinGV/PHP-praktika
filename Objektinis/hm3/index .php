<?php  
require __DIR__ . '/Kibiras2.php';

$kibiras3 = new Kibiras2;
$kibiras4 = new Kibiras2;
$kibiras5 = new Kibiras2;



echo 'Pridet viena  akmeni '. $kibiras3-> prideti1Akmeni().'<br>';
echo 'Pridet viena  akmeni '. $kibiras3-> prideti1Akmeni().'<br>';
echo 'Pridet kazkiek akmenu '. $kibiras3-> pridetiDaugAkmenu(10).'<br>';
echo 'Akmenu kiekis kibire 3 per getteri kintamaji lygus '. $kibiras3->getAkmenuKiekis().'<br>';
echo 'Pridet viena  akmeni '. $kibiras4-> prideti1Akmeni().'<br>';
echo 'Pridet viena  akmeni '. $kibiras4-> prideti1Akmeni().'<br>';
echo 'Pridet kazkiek akmenu '. $kibiras4-> pridetiDaugAkmenu(20).'<br>';
echo 'Akmenu kiekis kibire 4 per getteri kintamaji lygus '. $kibiras4->getAkmenuKiekis().'<br>';
echo 'Pridet viena  akmeni '. $kibiras5-> prideti1Akmeni().'<br>';
echo 'Pridet viena  akmeni '. $kibiras5-> prideti1Akmeni().'<br>';
echo 'Pridet kazkiek akmenu '. $kibiras5-> pridetiDaugAkmenu(30).'<br>';



echo 'Akmenu kiekis kibire 5 per getteri kintamaji lygus '. $kibiras5->getAkmenuKiekis().'<br>';
var_dump($kibiras5);
var_dump($kibiras4);
var_dump($kibiras3);