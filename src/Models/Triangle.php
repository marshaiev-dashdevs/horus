<?php

namespace App\Models;

class Triangle implements Figure
{
    private float $_a, $_b, $_c;

    public function __construct($a, $b, $c)
    {
        $this->_a = $a;
        $this->_b = $b;
        $this->_c = $c;
    }

    public function getType(): string
    {
        return "triangle";
    }

    public function getA(): float
    {
        return $this->_a;
    }

    public function getB(): float
    {
        return $this->_b;
    }

    public function getC(): float
    {
        return $this->_c;
    }

    public function getSurface(): float
    {
        $p = $this->getDiameter() / 2;
        return round(sqrt($p * ($p - $this->_a) * ($p - $this->_b) * ($p - $this->_c)), 2);
    }

    public function getDiameter(): float
    {
        return round($this->_a + $this->_b + $this->_c, 2);
    }
}