<?php

namespace App\Models;

class Circle implements Figure
{
    private float $_radius;

    public function __construct($radius)
    {
        $this->_radius = $radius;
    }

    public function getType(): string
    {
        return "circle";
    }

    public function getRadius(): float
    {
        return $this->_radius;
    }

    public function getSurface(): float
    {
        return round(M_PI * ($this->_radius ** 2), 2);
    }

    public function getDiameter(): float
    {
        return round(2 * M_PI * $this->_radius,2);
    }
}