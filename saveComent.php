<?php

$mysqli = new mysqli(
'localhost',
'homestead',
'secret',
'bootcamp');


$author=$_POST['user'];
$comment=$_POST['comment'];
var_dump($_POST);
$result=$mysqli->query("INSERT INTO Comments(author,comment)VALUES('$author','$comment')");


header('Location:/');
