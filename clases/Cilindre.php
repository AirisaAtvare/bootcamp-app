<?php

namespace Bootcamp\Demo;

class Cilindre extends Circle
{
    public $height;

    /**
     * create an cilindre instance
     * @param float $height Cilindre height
     * @param float $radius Cilindre radius
     */

    public function __construct($height, $radius)
    {
        $this->height = $height;
        $this->radius = $radius;
    }

    /**
     * Calculates the area of Cilindre
     * @return float Cilindre area
     */
    public function getArea()
    {
        return (2*pi()*($this->radius))*(($this->radius)+($this->height));
    }
}
