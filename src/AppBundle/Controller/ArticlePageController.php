<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\StoryType;
use AppBundle\Entity\StoryClass;

class ArticlePageController extends Controller
{

    public function pageAction(Request $request)
    {
        $article = new StoryClass();
        $form = $this->createForm(new StoryType(), $article);

        return $this->render('default/ArticlePage.html.twig', array(
            'form' => $form->createView(),
            'title' => $article->getTitle(),
            'summary' => $article->getSummary(),
            'description' => $article->getDescription(),
            'image' => $article->getImage(),
            'creationDate' => $article->getCreationDate(),
            'userId' => $article->getUserId()
        ));
    }

}