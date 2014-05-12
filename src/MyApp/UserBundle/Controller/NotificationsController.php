<?php
namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotificationController
 *
 * @author Abdesselem
 */
class NotificationsController extends controller
{
    public function listAction()
    {   $user = $this->container->get('security.context')->getToken()->getUser();
        $Etudiant = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('UserBundle:Notification')->findAll();

  
  return $this->render('UserBundle:BestDeal:notification.html.twig', array(
    'Notifications' => $Etudiant,'user' => $user ));
    }
}
