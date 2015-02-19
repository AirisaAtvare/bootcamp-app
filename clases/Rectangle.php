<?php
namespace Bootcamp\Demo;

class Rectangle extends Shape
{
    /**
     * @var Rectangle width
     * @var Rectangle height
     */
    public $width;
    public $heght;

    /**
     * create an rectangle instance
     * @param float $width Rectangle width
     * @param float $heght Rectangle heght
     */
    public function __construct($width, $height){

      $this->width = $width;
      $this->height = $height;
    }

    /**
     * Calculates the area of Rectangle
     * @return float Rectangle area
     */
    public function get_area()
    {
      return $this->width * $this->height;
    }
}
