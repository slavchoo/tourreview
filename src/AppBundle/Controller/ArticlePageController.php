<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\ArticleType;

class ArticlePageController extends Controller
{
    public function pageAction()
    {
        return $this->render('/home/shaman/WorkSpace/tourreview/src/views/ArticlePage.html.twig');
    }

    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(new ArticleType(), $article);
        $form->add('submit');
    }
}