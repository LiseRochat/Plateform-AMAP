<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoHomeController extends AbstractController
{
    #[Route('/', name: 'fo_home')]
    public function index(PageRepository $repository): Response
    {
        $page = $repository->find(1);
            $statusPage = $page->getStatus();
            if($statusPage == FALSE)
            {
            return $this->render('errors/404.html.twig');
            }
        return $this->render('fo_home/home.html.twig');
    }
}
