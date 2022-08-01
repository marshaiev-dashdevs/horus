<?php

namespace App\Controller;

use App\Models\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'circle')]
    public function index(float $radius): JsonResponse
    {
        return $this->json(new Circle($radius));
    }
}