<?php
use Bootcamp\Demo\Storage\Controller;
use Bootcamp\Demo\Storage\fileStorage;

include 'vendor/autoload.php';

$s = new fileStorage;
$c = new Controller($s);
$c->doSomething();
