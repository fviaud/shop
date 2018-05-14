<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ObjetsController extends Controller
{
    /**
     * @Route("/objets", name="objets")
     */
    public function index()
    {
        
        $objets= $this->getDoctrine()->getManager()->getRepository('App:Objet')->findall();
        return $this->render('objet/index.html.twig', array('objets' => $objets));
//        return $this->json([
//            'message' => 'Welcome to your new controller!',
//            'path' => 'src/Controller/ObjetsController.php',
//        ]);
    }
}
