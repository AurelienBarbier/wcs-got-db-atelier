<?php

namespace WCS\GoTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WCS\GoTBundle\Entity\Personnage;
use WCS\GoTBundle\Entity\Royaume;

class PersonnageController extends Controller
{
    public function showAction($id)
    {
        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // Récupération d’un seul objet élève (par son id)

        $personnage = $em->getRepository('WCSGoTBundle:Personnage')->find($id);
        // équivaut à SELECT * FROM Eleve WHERE id=$id

        return $this->render('WCSGoTBundle:Personnage:show.html.twig', array(
            'personnage'    =>  $personnage,
            ));
    }

    public function listAction($sexe)
    {
        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();
        // Récupération d’un tableau d’objets Eleve
        $personnages = $em->getRepository('WCSGoTBundle:Personnage')->findAll();
        // équivaut à un SELECT * FROM personnage
        
        return $this->render('WCSGoTBundle:Personnage:list.html.twig', array(
            'personnages'    =>  $personnages,
            ));
    }

    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();

        // je crée un nouvel élève 
        $personnage = new Personnage();

        // J’assigne des valeurs à mes propriétés
        $personnage->setNom('Ned Stark');
        $personnage->setSexe('M');
        $personnage->setBio('"Vous savez, je ne crois pas qu\'il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie..."');

        $royaume = $em->getRepository('WCSGoTBundle:Royaume')->find(1);


        $personnage->setRoyaume($royaume);

        // prise en compte de l’objet par Doctrine (pas de requete SQL)
        $em->persist($personnage);


        // Doctrine fait les requêtes nécessaire sur tous les objets pris en compte dans le script (ici il exécute un INSERT)
        $em->flush();


        return $this->render('WCSGoTBundle:Personnage:add.html.twig', array(
            'personnage'    =>  $personnage,
            ));
    }

    public function changeRoyaumeAction()
    {
        $em = $this->getDoctrine()->getManager();

        // je récupère un élève existant 
        $personnage= $em->getRepository('WCSBundle:Eleve')->find(2);


        // J’assigne de nouvelles valeurs à mes propriétés
        $personnage->setRoyaume('Jon');

        // l’objet récupéré par la méthode find est déjà pris en compte par Doctrine, pas besoin de le persister

        // Doctrine fait les requêtes en bdd
        $em->flush();


        return $this->render('WCSGoTBundle:Personnage:change_royaume.html.twig', array(
            // ...
            ));
    }

    public function deleteAction()
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($personnage);
        // Doctrine fait les requêtes en bdd
        $em->flush();


        return $this->render('WCSGoTBundle:Personnage:delete.html.twig', array(
            // ...
            ));
    }

}
