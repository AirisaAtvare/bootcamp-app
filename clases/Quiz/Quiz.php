<?php

namespace Bootcamp\Demo\Quiz;

class Quiz
{
  /**
   * Quiz questions
   * @var array $questions
   */
    protected $questions;

  /**
   * Quiz id
   * @var intiger $id
   */
    protected $id;

  /**
   * Quiz name
   * @var string $name
   */
    protected $name;

    public function addQuestion($question)
    {
        array_push($this->questions, $question);
    }
    public function __construct($name)
    {
        $this->name = $name;
        $this->questions = [];
    }
}
