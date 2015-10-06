<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainPageController extends Controller
{
    public function pageAction()
    {
        return new Response(
            $this->render('MainPage.html.twig'));
    }
}
