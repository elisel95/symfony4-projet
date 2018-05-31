<?php
/**
 * Created by PhpStorm.
 * User: elise
 * Date: 20/05/2018
 * Time: 15:02
 */

namespace App\Controller;

use Symfony\{
    Bundle\FrameworkBundle\Controller\Controller, Component\HttpFoundation\Response, Component\Routing\Annotation\Route
};

class baseController extends Controller
{
    /**
     * @Route("/")
    */
     public function index()
        {
        return $this->render('accueil.html.twig');
        }

    /**
     * @Route("mentions")
    */
     public function mentionLegale()
        {
        return $this->render('mention.html.twig');
        }

    /**
     * @Route("contact")
    */
     public function contact()
        {
        return $this->render('contact.html.twig');
        }
}