<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
