<?php

namespace App\Models;

interface Figure
{
    public function getType(): string;
    public function getSurface(): float;
    public function getDiameter(): float;
}