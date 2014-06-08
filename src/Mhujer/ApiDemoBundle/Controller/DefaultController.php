<?php

namespace Mhujer\ApiDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MhujerApiDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}
