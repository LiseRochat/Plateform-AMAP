<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FoCguController extends AbstractController
{
    #[Route('/amap/cgu', name: 'fo_cgu')]
    public function index(): Response
    {
        return $this->render('fo_cgu/cgu.html.twig', [
            'controller_name' => 'FoCguController',
        ]);
    }
}
