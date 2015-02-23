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

    protected $numberOfCorrectAnswers;

    public function addOption(Option $option)
    {
        if (true === $option->isCorrect()){
            $this->numberOfCorrectAnswers++;
        }
        array_push($this->options, $option);
    }

    public function __construct($title)
    {
        $this->numberOfCorrectAnswers = 0;
        $this->title = $title;
        $this->options = [];
    }
    public function isMultiAnswer()
    {
        // $count = 0;
        // foreach ($this->options as $option) {
        //     if ($option->isCorrect()===true) {
        //         $count++;
        //     }
            // if ($numberOfCorrectAnswers>1) {
            //     return true;
            // }
        // }
        return ($this->numberOfCorrectAnswers>1);
    }
    public function getAnswerCount()
    {
        $numbers = 0;
        return count($this->options);
    }
}
