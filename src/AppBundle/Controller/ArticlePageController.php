<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticlePageController
{
    public function pageAction()
    {
        return $this->render('default/articles.html.twig');
    }

}