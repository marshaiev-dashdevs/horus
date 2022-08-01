<?php

namespace App\Service;

use App\Models\Figure;

class GeometryCalculator
{
    public function getSumOfSurface(Figure $a, Figure $b): float
    {
        return $a->getSurface() + $b->getSurface();
    }

    public function getSumOfDiameter(Figure $a, Figure $b): float
    {
        return $a->getDiameter() + $b->getDiameter();
    }
}