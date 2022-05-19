<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BoProductController extends AbstractController
{
    /**
     * 
     * @Route("/HO/mes-produits", name="products")
     */
    public function index(ProductRepository $repository): Response
    {
     
            $products = $repository->getProductByBasket(0);
            return $this->render('bo_product/bo_product.html.twig', [
            'products' => $products,
        ]);
        
        
    }

    /**
     * @Route("/HO/mes-produits/ajout", name="products_create" )
     * @Route("/HO/mes-produits/modification/{id}", name="products_modification")
     */
    public function modificationAddProduct(Product $product = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        //Si le produit n'existe pas : dans le cas de l'ajout d'un produit
        if (!$product) {
            $product = new Product();
        }

        //Cree un formulaire
        $form = $this->createForm(ProductType::class, $product);

        //Recupere les données du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Recupere l'Id du produit 
            $modif = $product->getId() != null;
            $name = $product->getTitle();
            $category = $product->getCategory()->getName();
            //Informe que l'on veut persister
            $entityManager->persist($product);
            //Execute la requete et envoi tout ce qui a ete persisté avant a la BDD
            $entityManager->flush();

            //L'id du produit existe 
            if ($modif == TRUE) {
                $this->addFlash("success", "La Modification du $category : ' $name ' a été effectuée");
            } else {
                $this->addFlash("success", "L'Ajout du $category : ' $name ' a été effectuée");
            }

            //Renvoi vers la page tous mes produits
            return $this->redirectToRoute("products");
        }

        return $this->render('bo_product/bo_modificationProduct.html.twig', [
            "product" => $product,
            "form" => $form->createView()
        ]);
    }

        /**
     * @Route("/HO/mes-produits/delete/{id}", name="products_delete")
     */
    public function deleteProduct(Product $product = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid("SUP" . $product->getId(), $request->get('_token'))) {
        }
        $name = $product->getTitle();
        $category = $product->getCategory()->getName();
        //Prepare la requete de suppression
        $entityManager->remove($product);
        //Modification en bdd
        $entityManager->flush();

        $this->addFlash("success", "La Supression du $category : ' $name ' a été effectuée");
        return $this->redirectToRoute("products");
    }

    /**
     * @Route("/HO/mes-produits/{id}", name="products_publication")
     */
    public function liveProduct(Product $product, EntityManagerInterface $entityManager)
    {
        $status = $product->getStatus();
        $name = $product->getTitle();
        $category = $product->getCategory()->getName();

        
        if ($status == FALSE) {
            $product->setStatus(1);
            $this->addFlash("success", "Le $category : ' $name ' est en Ligne");
        } else {
            $product->setStatus(0);
            $this->addFlash("success", "Le $category  : ' $name ' est hors Ligne");
        }

        //Mise a jour du status du produit dans la bdd
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->redirectToRoute("products");
    }
    /**
     * @Route("/HO/mes-produits/status/{status}", name="productByStatus")
     */
    public function productStatus(ProductRepository $repository, $status): Response
    {
        //resultat de la requetes
        $products = $repository->getProductByStatus($status);
        return $this->render('bo_product/bo_product.html.twig', [
            'products' => $products,

        ]);
    }

       /**
     * @Route("/HO/mes-produits/categorie/{category}", name="productByCategory")
     */
    public function productCategory(ProductRepository $repository, $category): Response
    {
        //resultat de la requetes
        $products = $repository->getProductByCategory($category);
        return $this->render('bo_product/bo_product.html.twig', [
            'products' => $products,

        
        ]);
        
    }

    /**
     * @Route("/HO/mes-produits/basket/{id}", name="productByBasket")
     */
    public function basketProduct(Product $product, EntityManagerInterface $entityManager)
    { 
        $product->setBasket(1);
        $product->setStatus(0);
        $name = $product->getTitle();
        $category = $product->getCategory()->getName();

        $this->addFlash("success", "Le $category ' $name ' est dans la Corbeille");

        //Mise a jour du status du produit dans la bdd
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->redirectToRoute("products");
    }
}
