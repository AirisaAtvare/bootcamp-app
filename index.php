<?php

include 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($name);
});

$app->get('/rectangle', function() {
  $rectangle = new \Bootcamp\Demo\Rectangle(6,7);
  return $rectangle->get_area();
});


$app->run();
