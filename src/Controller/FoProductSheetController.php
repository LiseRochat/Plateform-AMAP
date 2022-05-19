<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Product;
use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FoProductSheetController extends AbstractController
{
     /**
     * @Route("/amap/fiche-produit/{id}", name="fo_product_sheet")
     */
    public function index(ProductRepository $repository, Product $product, Page $page, PageRepository $repo): Response
    {
        $page = $repo->find(2);
        $statusPage = $page->getStatus();
        $carts = $repository->findAll();

        
        if($statusPage == 1){
            return $this->render('fo_product_sheet/product_sheet.html.twig', [
                'carts'=>$carts,
                'product'=>$product,
            ]);
        }
        else{
            return $this->render('errors/404.html.twig', [
                'controller_name' => 'FoHomeController',
            ]);
        }
    
    }
}