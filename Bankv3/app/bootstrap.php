<?php
session_start();
use Bank\App;

require __DIR__ . '/../vendor/autoload.php';

 echo App::start();