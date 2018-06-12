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

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
    */
    public function number()
    {

        $number = mt_rand(0,100);

        return $this->render('lucky.html.twig', array(
            'number' => $number,
        ));
    }
};