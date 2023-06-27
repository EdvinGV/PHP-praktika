<?php

require __DIR__. '/MarsoPalydovas.php';

echo '<pre>';
$objektas1= MarsoPalydovas::get();
$objektas2=  MarsoPalydovas::get();
$objektas3= MarsoPalydovas::get();
$objektas4= MarsoPalydovas::get();
$x=MarsoPalydovas::$planetos;


var_dump($objektas1).'</br>';
var_dump($objektas2).'/<br>';
var_dump($objektas3).'</br>';
var_dump($objektas4).'</br>';
