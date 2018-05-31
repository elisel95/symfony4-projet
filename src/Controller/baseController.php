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
    public function number()
    {

        $number = mt_rand(0,100);

        return $this->render('base.html.twig');
    }
}