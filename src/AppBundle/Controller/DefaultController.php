<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/nome/teste", name="homepage")
     */
    public function indexAction()
    {
        #$nome = "Douglas";
        $segundoNome = "Marques";
        $teste = "teste";
        return $this->render('AppBundle:default:index.html.twig', ["segundoNome"=>$segundoNome, "teste" =>$teste]);
    }
}
