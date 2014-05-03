<?php

namespace Admin\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\User;
use MyApp\UserBundle\Entity\Deal;
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
        $client=$em->getRepository("UserBundle:User")->findBy(array('role' => 'client'));
        return $this->render("AdminAdminBundle:Default:client.html.twig",array("clients"=>$client));
    }
    
    public function prestataireAction()
    {
       $em= $this->getDoctrine()->getManager();
        $prest=$em->getRepository("UserBundle:User")->findBy(array('role' => 'prest'));
        return $this->render("AdminAdminBundle:Default:prestataire.html.twig",array("prests"=>$prest));
    }
    
    
    public function dealAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('status' => '1'));
        return $this->render("AdminAdminBundle:Default:deal.html.twig",array("deals"=>$deal));
    }
}
