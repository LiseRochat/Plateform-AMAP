<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoDashboardController extends AbstractController
{
    #[Route('/HO/accueil', name: 'bo_dashboard')]
    public function index(): Response
    {
        return $this->render('bo_dashboard/bo_dashboard.html.twig', [
            'controller_name' => 'BoDashboardController',
        ]);
    }
}
