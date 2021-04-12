<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ChoixController extends AbstractController
{
    /**
     * @Route("/choix", name="choix")
     */
    public function index(): Response
    {
        return $this->render('choix/index.html.twig', [
            'controller_name' => 'ChoixController',
        ]);
        
    }
    
    public function formChoix(){
        $formChoix = $this->createFormBuilder()
                ->add('Consultation des comptes rendus', ButtonType::class)
                ->add('Consultation de la liste des praticiens', ButtonType::class)
                ->getForm();
        $request = Request::createFromGlobals();
        
        $formChoix->handleRequest($request);
        
        if($formChoix->getClickedButton() === $formChoix->get('consultation_compte_rendu')){
            
            return $this->render('/consultation_compte_rendu/index.html.twig');
            
        }elseif($formChoix->getClickedButton() === $formChoix->get('praticien')){
            return $this->render('/consultation_praticien/index.html.twig');
        }
        return $this->render('/choix/index.html.twig', array('form'=>$formChoix->createView()));
    }
}
