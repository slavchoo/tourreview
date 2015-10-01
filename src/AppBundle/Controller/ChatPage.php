<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ChatPageController extends Controller
{
    public function PageAction(Request $request)
    {
        return $this->render('ChatPage.html.twig');
    }
}