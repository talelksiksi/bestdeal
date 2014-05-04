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
        $prest=$em->getRepository("UserBundle:User")->findBy(array('role' => 'prest','statut' => '1'));
        return $this->render("AdminAdminBundle:Default:prestataire.html.twig",array("prests"=>$prest));
    }
    
    
    public function dealAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '1'));
        return $this->render("AdminAdminBundle:Default:deal.html.twig",array("deals"=>$deal));
    }
    public function deal_a_ValiderAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '0'));
        return $this->render("AdminAdminBundle:Default:deal_a_Valider.html.twig",array("deals"=>$deal));
    }
    
    
    public function supprimerCAction($id){
           $em= $this->getDoctrine()->getManager();
           $client=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => $id));
           $em->remove($client);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_client'));
    }
    
    public function supprimerPAction($id){
           $em= $this->getDoctrine()->getManager();
           $prest=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => $id));
           $em->remove($prest);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_prest'));
    }
    
    public function supprimerDAction($id){
           $em= $this->getDoctrine()->getManager();
           $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $id));
           $em->remove($deal);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_deal'));
    }
    
    public function ValiderDAction($id){
           $em= $this->getDoctrine()->getManager();
           $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $id));
           if (!$deal) {
        throw $this->createNotFoundException(
            'Aucun deal trouvé pour cet id : '.$id
        );
    }
           $deal->setStatut('1');
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_deal_a_Valider'));
    }
}
