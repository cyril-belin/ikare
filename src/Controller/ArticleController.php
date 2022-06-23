<?php

namespace App\Controller;

//use App\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{slug}', name: 'article_show')]
    public function show(): Response
    {
       // $media = new Media();

       // dd($media);
        return $this->render('article/show.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
}
