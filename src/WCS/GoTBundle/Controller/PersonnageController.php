<?php

namespace WCS\GoTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PersonnageController extends Controller
{
    public function showAction($id)
    {


        return $this->render('WCSGoTBundle:Personnage:show.html.twig', array(
            'personnage'    =>  $personnage,
        ));
    }

    public function listAction()
    {
        return $this->render('WCSGoTBundle:Personnage:list.html.twig', array(
            'personnages'    =>  $personnages,
        ));
    }

    public function addAction()
    {
        return $this->render('WCSGoTBundle:Personnage:add.html.twig', array(
            // ...
        ));
    }

    public function changeRoyaumeAction()
    {
        return $this->render('WCSGoTBundle:Personnage:change_royaume.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('WCSGoTBundle:Personnage:delete.html.twig', array(
            // ...
        ));
    }

}
