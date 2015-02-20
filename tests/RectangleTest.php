<?php

class RectangleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
      $rectangle = new \Bootcamp\Demo\Rectangle(5,5);
      $this->assertEquals(25,$rectangle->get_area());
  }
}
