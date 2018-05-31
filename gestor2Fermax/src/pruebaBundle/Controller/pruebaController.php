<?php

namespace pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class pruebaController extends Controller
{
    /**
     * @Route("/inder", name="inder")
     */
    public function inderAction()
    {
        return $this->render('pruebaBundle:Default:inder.html.twig');
    }

}
