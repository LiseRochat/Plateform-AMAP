<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoContactController extends AbstractController
{
    #[Route('/amap/contact', name: 'fo_contact')]
    public function index(PageRepository $repository): Response
    {
            $page = $repository->find(6);
            $statusPage = $page->getStatus();
            if($statusPage == FALSE)
            {
            return $this->render('errors/404.html.twig');
            }
            return $this->render('fo_contact/contact.html.twig');
    }
}