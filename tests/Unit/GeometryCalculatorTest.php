<?php

namespace App\Tests\Unit;

use App\Models\Circle;
use App\Models\Triangle;
use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class GeometryCalculatorTest extends KernelTestCase
{
    public function testSumOfSurface(): void
    {
        self::bootKernel();
        $container = static::getContainer();

        $geometryCalculator = $container->get(GeometryCalculator::class);

        $circle = new Circle(3);

        $this->assertEquals(56.54, $geometryCalculator->getSumOfSurface($circle, $circle));
    }

    public function testSumOfDiameter(): void
    {
        self::bootKernel();
        $container = static::getContainer();

        $geometryCalculator = $container->get(GeometryCalculator::class);

        $circle = new Circle(3);
        $triangle = new Triangle(3, 3, 3);

        $this->assertEquals(27.85, $geometryCalculator->getSumOfDiameter($circle, $triangle));
    }
}
