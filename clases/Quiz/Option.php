<?php

namespace Bootcamp\Demo\Quiz;

class Option
{
  /**
   * @var integer $id Option id
   */
    protected $id;
  /**
   * @var integer $name Option name
   */
    protected $name;
  /**
   * @var integer $isCorrect Option isCorrect
   */
    protected $isCorrect;

    public function __construct($name, $isCorrect = false)
    {
        $this->name = $name;
        $this->isCorrect = $isCorrect;
    }
    public function isCorrect()
    {
        return $this->isCorrect;
    }
}
