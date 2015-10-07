<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mainController extends Controller
{
    public function pageAction()
    {
        return $this->render('main.html.twig');
    }
}
