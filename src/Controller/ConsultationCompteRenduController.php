<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsultationCompteRenduController extends AbstractController
{
    /**
     * @Route("/consultation_compte_rendu", name="consultation_compte_rendu")
     */
    public function index(): Response
    {
        return $this->render('consultation_compte_rendu/index.html.twig', [
            'controller_name' => 'ConsultationCompteRenduController',
        ]);
    }
}
