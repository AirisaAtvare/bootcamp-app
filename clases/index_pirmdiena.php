<?php
include 'vendor/autoload.php';
use Bootcamp\Demo\Storage\fileStorage;
use Bootcamp\Demo\Storage\Controller;



$s = new fileStorage;

$c = new Controller();
$c->doSomething();
