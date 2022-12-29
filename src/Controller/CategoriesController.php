<?php // src/Controller/CategoriesController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class CategoriesController extends AbstractController
{
    /**
     * @Route("/Accueil", name="Accueil")
     */
    public function number()
    { 
        $number = random_int(0,100);
         return $this->render('Categories/accueil.html.twig', ['number' => $number,]);
         
       
    }
    /**
     * @Route("/voir/{id}", name="voir")
     */
    public function voirAction($id){
    return $this->render('Categories/voir.html.twig', array('id'=>$id));
    }
}