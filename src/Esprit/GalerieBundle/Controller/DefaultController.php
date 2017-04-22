<?php

namespace Esprit\GalerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritGalerieBundle:Default:index.html.twig', array('name' => $name));
    }
}
