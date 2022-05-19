<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoInscriptionController extends AbstractController
{
    #[Route('/amap/inscription', name: 'fo_inscription')]
    public function index(PageRepository $repository): Response{
    $page = $repository->find(4);
    $statusPage = $page->getStatus();
    if($statusPage == FALSE)
    {
    return $this->render('errors/404.html.twig');   
    }
    
    return $this->render('fo_inscription/inscription.html.twig');
    }
}
