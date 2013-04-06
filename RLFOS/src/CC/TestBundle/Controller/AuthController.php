<?php

namespace CC\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CC\TestBundle\Entity\User;
use CC\TestBundle\Form\Type\UserType;

class authController extends Controller
{
    public function regAction()
    {
		$user = new User();
		$form = $this->createForm(new UserType(), $user);
		
		return $this->render('CCTestBundle:Auth:reg.html.twig', array('form' => $form->createView()));
    }

    public function loginAction()
    {
		return $this->render('CCTestBundle:Auth:login.html.twig');
    }

    public function userinfoAction()
    {
		return $this->render('CCTestBundle:Auth:userinfo.html.twig');
    }

}
