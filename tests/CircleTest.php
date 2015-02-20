<?php

class CircleTest extends PHPUnit_Framework_TestCase
{
    public function testGetArea()
    {
        $circle = new \Bootcamp\Demo\Circle(1);
        $this->assertEquals(pi(),$circle->get_area());
    }
}
