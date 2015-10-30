<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Loads home page
     * this twig file is found at /www/app/Resource/ 
     * not in the actual src/AppBundle file structure
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
       // return $this->render('default/index.html.twig', array(
           // 'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
       // ));
       return $this->render('AppBundle:Default:index.html.twig',  array('base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..')));
    }
}
