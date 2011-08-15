<?php

namespace Curso\HolaMundoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($variable){
        //return array('name' => $name);

        return $this->render('CursoHolaMundoBundle:Hola:index.html.twig', array('variable' => $variable));
    
    }
}
