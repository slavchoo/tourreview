<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\StoryType;

class ArticlePageController extends Controller
{
    public function pageAction()
    {
        return $this->render('default/ArticlePage.html.twig');
    }

    public function createArticleAction(Request $request)
    {
        $article = new Story();
        $form = $this->createForm(new StoryType(), $article);

        return $this->render('default/ArticlePage.html.twig', array(
            'form' => $form->createView()
        ));
    }

}