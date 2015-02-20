<?php

namespace Bootcamp\Demo\Quiz;

class Question
{
  /**
   * @var array $options Question options
   */
    protected $options;
  /**
   * @var intiger $id Question id
   */
    protected $id;
  /**
   * @var string $title Question tile
   */
    protected $title;
  /**
   * @var intiger $type Question type
   */
    protected $type;

    public function addOption(Option $option)
    {
        array_push($this->options, $option);
    }

    public function __construct($title)
    {
        $this->title = $title;
        $this->options = [];
    }
    public function isMultiAnswer()
    {
        $count = 0;
        foreach ($this->options as $option) {
            if ($option->isCorrect()===true) {
                $count++;
            }
            if ($count>1) {
                return true;
            }
        }
        return false;
    }
}
