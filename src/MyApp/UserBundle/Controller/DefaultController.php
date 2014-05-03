<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:BestDeal:index.html.twig');
    }
    
    
    
    public function contactAction()
    {
        return $this->render('UserBundle:BestDeal:contact.html.twig');
    }
    
     public function rechercheAction()
    {
        return $this->render('UserBundle:BestDeal:rechercheliste.html.twig');
    }
    
     public function connexionAction()
    {
        return $this->render('UserBundle:BestDeal:connexion.html.twig');
    }
    
     public function aboutAction()
    {
        return $this->render('UserBundle:BestDeal:about.html.twig');
    }
    
}
