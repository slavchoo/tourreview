<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserType;

class ProfilePageController extends Controller
{
    public function pageAction()
    {
        return $this->render('default/profile.html.twig');
    }

    public function createProfileAction(Request $request)
    {
        $user = new UserType();
        $form = $this->createForm(new UserType(), $user);

        return $this->render('default/profile.html.twig', array(
            'form' => $form->createView()
        ));
    }
}