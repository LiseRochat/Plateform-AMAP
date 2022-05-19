<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorsController extends AbstractController
{
    #[Route('/amap/404', name: '404')]
    public function error(): Response
    {
        return $this->render('errors/404.html.twig', [
            'controller_name' => 'ErrorsController',
        ]);
    }

    #[Route('/HO/404', name: '404_bo')]
    public function errorbo(): Response
    {
        return $this->render('errors/404_bo.html.twig', [
            'controller_name' => 'ErrorsController',
        ]);
    }
}
