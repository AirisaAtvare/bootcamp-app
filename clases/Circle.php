<?php

namespace Bootcamp\Demo;

class Circle extends Shape
{
    public $radius;

    /**
     * create an circle instance
     * @param float $width Circle radius
     */
    public function __construct($radius)
    {
    $this->radius = $radius;
    }

    /**
     * Calculates the area of Circle
     * @return float Circle area
     */
    public function get_area()
    {
      return pi() * ($this->radius)**2;
    }

}
