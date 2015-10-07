<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class chatController extends Controller
{
    public function pageAction()
    {
        return $this->render('chat.html.twig');
    }
}