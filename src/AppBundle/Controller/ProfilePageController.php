<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilePageController extends Controller
{
    public function pageAction()
    {
        return $this->render('default/profile.html.twig');
    }
}