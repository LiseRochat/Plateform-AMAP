<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoMapController extends AbstractController
{
    #[Route('/amap/localisation', name: 'fo_map')]
    public function index(PageRepository $repository): Response
    {
        $page = $repository->find(5);
        $statusPage = $page->getStatus();
        if($statusPage == FALSE)
        {
        return $this->render('errors/404.html.twig');
        }
        return $this->render('fo_map/map.html.twig');
    }
}
