<?php

spl_autoload_register(function ($className) {
  require 'clases/'.$className.'.php';
});



$rectangle = new Rectangle(6,7);
$circle = new Circle(5);
//$cilindre = new Cilindre(6,9);


//var_dump($cilindre->get_area());
var_dump($circle->get_area());
var_dump($rectangle->get_area());
