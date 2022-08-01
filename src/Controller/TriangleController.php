<?php

namespace App\Controller;

use App\Models\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'triangle')]
    public function index(float $a, float $b, float $c): JsonResponse
    {
        return $this->json(new Triangle($a, $b, $c));
    }
}