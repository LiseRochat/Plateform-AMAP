<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoPopupController extends AbstractController
{
    /**
     * @Route("/HO/aide-seo", name="bo_popupseo")
     */
    public function popup1(): Response
    {
        return $this->render('bo_popup/aide-seo.html.twig', [
            'controller_name' => 'BoPopupController',
        ]);
    }

    /**
     * @Route("/HO/aide-header", name="bo_popupheader")
     */
    public function popup2(): Response
    {
        return $this->render('bo_popup/aide-header.html.twig', [
            'controller_name' => 'BoPopupController',
        ]);
    }

    /**
     * @Route("/HO/aide-blocs", name="bo_popupblocs")
     */
    public function popup3(): Response
    {
        return $this->render('bo_popup/aide-blocs.html.twig', [
            'controller_name' => 'BoPopupController',
        ]);
    }
}
