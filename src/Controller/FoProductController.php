<?php

namespace App\Controller;

use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoProductController extends AbstractController
{
    /**
     * @Route("/amap/nos-produits", name="fo_product")
     */
    public function index(PageRepository $repo, ProductRepository $repository): Response
    {
        $page = $repo->find(2);
        $statusPage = $page->getStatus();
        if($statusPage == FALSE)
        {
        return $this->render('errors/404.html.twig');
        }
        $products = $repository->findAll();

        // récupère les produits liés aux categories
        $products = $repository->findBy([
            'category' => 1,
        ]);
        $carts = $repository->findBy([
            'category' => 2,
        ]);
        
        return $this->render('fo_product/products.html.twig', [
            "products" => $products,
            "carts" => $carts,
        ]);
    }
}
