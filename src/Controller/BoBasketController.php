<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BoBasketController extends AbstractController
{
    /**
     * @Route("/HO/corbeille", name="bo_basket")
     */
    public function index(ProductRepository $repository): Response
    {
        $products = $repository->getProductByBasket(1);
        return $this->render('bo_basket/bo_basket.html.twig', [
            'controller_name' => 'BoBasketController',
            'products'=> $products,
        ]);
    }

         /**
     * @Route("/HO/corbeille/{id}", name="products_delete")
     */
    public function deleteProduct(Product $product = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid("SUP" . $product->getId(), $request->get('_token'))) {
        }
        $name = $product->getTitle();
        $category =$product->getCategory()->getName();
        //Prepare la requete de suppression
        $entityManager->remove($product);
        //Modification en bdd
        $entityManager->flush();

        $this->addFlash("success", "La Supression du $category : ' $name ' a été effectuée");
        return $this->redirectToRoute("bo_basket");
    }

    /**
     * @Route("/HO/corbeille/{id}", name="productOn")
     */
    public function productOn(Product $product = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid("ON" . $product->getId(), $request->get('_token'))) {
        }
        $name = $product->getTitle();
        $category =$product->getCategory()->getName();
        $product->setBasket(0);
        $entityManager->persist($product);
        $entityManager->flush();

        $this->addFlash("success", "Le $category : ' $name ' est disponible");
        return $this->redirectToRoute("products");
    }
}
