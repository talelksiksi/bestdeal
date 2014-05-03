<?php

namespace Admin\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminAdminBundle:Default:index.html.twig');
    }
    public function morrisAction()
    {
        return $this->render('AdminAdminBundle:Default:morris.html.twig');
    }
    
     public function clientAction()
    {
       $em= $this->getDoctrine()->getManager();
        $client=$em->getRepository("UserBundle:User")->findAll();
        return $this->render("AdminAdminBundle:Default:client.html.twig",array("clients"=>$client));
    }
}
