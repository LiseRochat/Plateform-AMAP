<?php

namespace App\Controller;

use App\Entity\Page;
use App\Repository\PageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BoPagesController extends AbstractController
{

    /**
     * @Route("/HO/mes-pages", name="bo_pages")
     */
    public function index( EntityManagerInterface $entityManager, PageRepository $pageRepository): Response
    {
        $pages = $pageRepository->findAll();

        return $this->render('bo_pages/bo_pages.html.twig', [
            'pages' => $pages,
        ]);
    }
    /**
     * 
     * @Route("/HO/mes-pages/modification/{id}", name="page_modification")
     */
    public function modificationAddProduct(Page $page): Response
    {

        $idPage = $page->getId();
        switch($idPage){
            case 1:
                return $this->render('bo_pages/bo_homePage.html.twig', [
                             'page'=>$page,
                        ]);
                break;
            case 2:
                return $this->render('bo_pages/bo_productsPage.html.twig', [
                    'page'=>$page,
               ]);
                break;
            case 3:
                 return $this->render('bo_pages/bo_presentationPage.html.twig', [
                    'page'=>$page,
               ]);
                break;
            case 4:
                return $this->render('bo_pages/bo_signInPage.html.twig', [
                    'page'=>$page,
               ]);
                break;
            case 5:
                return $this->render('bo_pages/bo_localisationPage.html.twig', [
                    'page'=>$page,
               ]);
                break;
            case 6:
                return $this->render('bo_pages/bo_contatcPage.html.twig', [
                    'page'=>$page,
               ]);
                break;
            default;
        }
    }

    /**
     * @Route("/HO/mes-pages/{id}", name="page_publication")
     */
    public function livePage(Page $page, EntityManagerInterface $entityManager)
    {
        $status = $page->getStatus();
        $name = $page->getName();
        if ($status == FALSE) {
            $page->setStatus(1);
            $this->addFlash("success", "La Page : ' $name ' est en Ligne");
        } else {
            $page->setStatus(0);
            $this->addFlash("success", "La Page : ' $name ' est hors Ligne");
        }

        //Mise a jour du status du produit dans la bdd
        $entityManager->persist($page);
        $entityManager->flush();

        return $this->redirectToRoute("bo_pages");
    }
        
   
}
