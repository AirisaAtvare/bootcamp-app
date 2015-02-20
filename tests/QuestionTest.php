<?php

use Bootcamp\Demo\Quiz\Question;
use \Mockery as m;

class QuestionTest extends PHPUnit_Framework_TestCase
{
  public function testisMultiAnswer()
  {
      $question = new Question("dummy");
      $this->assertFalse($question->isMultiAnswer());

      $option=m::mock("\Bootcamp\Demo\Quiz\Option");
      $option->shouldReceive("isCorrect")
             ->andReturn(true);

      $question->addOption($option);
      $this->assertFalse($question->isMultiAnswer());



      $question->addOption($option);
      $this->assertTrue($question->isMultiAnswer());
  }
}
