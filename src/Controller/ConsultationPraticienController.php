<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsultationPraticienController extends AbstractController
{
    /**
     * @Route("/consultation_praticien", name="consultation_praticien")
     */
    public function index(): Response
    {
        return $this->render('consultation_praticien/index.html.twig', [
            'controller_name' => 'ConsultationPraticienController',
        ]);
    }
}
