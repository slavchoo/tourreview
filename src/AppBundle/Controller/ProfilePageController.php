<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserType;
use AppBundle\Entity\UserClass;

class ProfilePageController extends Controller
{
    public function pageAction(Request $request)
    {
        $user = new UserClass();
        $form = $this->createForm(new UserType(), $user);



        return $this->render('default/profile.html.twig', array(
            'form' => $form->createView()
        ));
    }
}