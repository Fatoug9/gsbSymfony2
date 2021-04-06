<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Connexion2Controller extends AbstractController
{
    /**
     * @Route("/connexion2", name="connexion2")
     */
    public function index(): Response
    {
        return $this->render('connexion2/index.html.twig', [
            'controller_name' => 'Connexion2Controller',
        ]);
    }
}
