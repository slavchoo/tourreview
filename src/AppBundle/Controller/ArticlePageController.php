<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\ArtcleType;

class ArticlePageController
{
    public function pageAction()
    {
        return $this->render('default/articles.html.twig');
    }

    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(new ArticleType(), $article);
        $form->add('submit');
    }
}