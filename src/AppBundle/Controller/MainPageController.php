<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainPageController extends Controller
{
    public function pageAction()
    {
        return $this->render('default/index.html.twig');
    }
}
