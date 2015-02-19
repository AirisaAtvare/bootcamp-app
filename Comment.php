<?php
class Comments
{
    private $author;
    private $text;

    public function __construct($name, $comment)
    {
      $this->author = $name;
      $this->text = $comment;
    }

    public function get_author()
    {
      return $this->author;
    }

}


$instance = new Comments('John','sun');
$instance2 = new Comments('Jane','hello');

$name2=$instance2->get_author();
$name=$instance->get_author();

echo $name;
echo $name2;

//$instance->author = 'John';
//$instance2->author = 'Jane';

var_dump($instance, $instance2);
