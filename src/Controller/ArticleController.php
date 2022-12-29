<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {   
        $entityManger = $this->$this->getDoctrine()->getManager();
        $article = new Article();
        $article->setLibelle('rouge a levre');
        $article->setIsDisponible(true);
        $article->setPrice(40);
        $article->marque("sephora");
        $entityManager->persist($article);
        $entityManager->flush();

        return $this->render('article/index.html.twig', [
            'id' => $article->getId(),
        ]);
    }
    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id)
    {
        $article = $this->getDoctrine()
                 ->getRepository(Article::class)
                 ->find($id);
         if (!$article) {
            throw $this->createNotFoundException(
                'No article found for id'.$id
            );
        }
         return $this->render('article/show.html.twig', [
            'job' =>$article]);      
    }
}
