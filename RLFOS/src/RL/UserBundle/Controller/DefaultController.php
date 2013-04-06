<?php

namespace RL\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RLUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
