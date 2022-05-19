<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoPresentationController extends AbstractController
{
    #[Route('/amap/presentation', name: 'fo_presentation')]
    public function index(PageRepository $repository): Response
    {
        $page = $repository->find(3);
        $statusPage = $page->getStatus();
        if($statusPage == FALSE)
        {
        return $this->render('errors/404.html.twig');
        }
        return $this->render('fo_presentation/presentation.html.twig');
    }
}
