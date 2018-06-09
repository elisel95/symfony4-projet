<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 07/03/2018
 * Time: 10:20
 */

namespace App\Controller ;
use App\Entity\Photo;
use App\Entity\Contact;



use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminController extends Controller
{
    //connection BDD
    public function admin(Connection $db)
    {
        $photos = $db->fetchAll('SELECT * from photo');
        return $this->render('admin.html.twig', [
            'photo' => $photos
        ]);
    }

    //Fonction d'insertion d'article

    //Fonction Modification Article Existant

    //Fonction Suppression Article Existant

    //Fonction de génération de nom unique pour l'image

}
