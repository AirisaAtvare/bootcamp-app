<?php

use \Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
      $rectangle = new Rectangle(5,5);
      $this->assertEquals(25,$rectangle->getArea());
  }
}
