<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AtriniumController extends AbstractController
{
    /**
     * @Route("/atrinium", name="atrinium")
     */
    public function index(): Response
    {
        return $this->render('atrinium/index.html.twig', [
            'controller_name' => 'AtriniumController',
        ]);
    }
    
    /**
     * 
     * @Route("/empresas/", name="empresas")
     */
    public function empresas() {
        return $this->render('atrinium/empresas.html.twig');
    }
    /**
     * 
     * @Route("/sectores/", name="sectores")
     */
    public function sectores() {
        return $this->render('atrinium/sectores.html.twig');
    }
    
    #public function pasaDatos(){ probar de otra forma
    #   return $this->render('atrinium/pasadatos.html.twig');
    #}
}
