<?php
/**
 * Created by PhpStorm.
 * User: elise
 * Date: 20/05/2018
 * Time: 15:02
 */

namespace App\Controller;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Request;
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
    public function contact(Request $request, Connection $db, \Swift_Mailer $mailer) {
           $contact = $db->fetchAll('SELECT * from contact');



           if ($request->isMethod('POST')) {
               $message= (new\Swift_Message('Hello Email'))
                   ->setFrom($request->get('email'))
                   ->setTo('titi@titi.fr')
                   ->setBody(
                       $request->get('name').'     '.
                       $request->get('message')

                   );
               $mailer->send($message);

           }




           return $this->render('contact.html.twig', ['contacts' => $contact
           ]);
       }
}