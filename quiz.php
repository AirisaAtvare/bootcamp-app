<?php

require __DIR__.'/vendor/autoload.php';

use Bootcamp\Demo\Quiz\Option;
use Bootcamp\Demo\Quiz\Question;
use Bootcamp\Demo\Quiz\Quiz;


$options1 = [];
$options1[] = new Option('443');
$options1[] = new Option('80', true);
$options1[] = new Option('22');
$options1[] = new Option('3306');

$questions[1] = new Question('What is the default port for HTTP ?');

foreach ($options1 as $option) {
    $questions[1]->addOption($option);
}

$options = [];
$options[] = new Option('443');
$options[] = new Option('80', true);
$options[] = new Option('22', true);
$options[] = new Option('3306');

$questions[2] = new Question('What or HTTP ?');

foreach ($options as $option) {
    $questions[2]->addOption($option);
}


$quiz = new Quiz('Simple');

 foreach ($questions as $question) {
     $quiz->addQuestion($question);
 }





//print_r($quiz);
// var_dump($options);
// var_dump($quiz,$questions);
var_dump($questions[2]->isMultiAnswer());
