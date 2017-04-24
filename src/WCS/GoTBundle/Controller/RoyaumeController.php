<?php

namespace WCS\GoTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoyaumeController extends Controller
{
    public function addAction()
    {
        return $this->render('WCSGoTBundle:Royaume:add.html.twig', array(
            // ...
        ));
    }

    public function listAction()
    {
        return $this->render('WCSGoTBundle:Royaume:list.html.twig', array(
            // ...
        ));
    }

}
