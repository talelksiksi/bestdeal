<?php
namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
  public function indexAction()
  {
   return $this->render('UserBundle:Blog:index.html.twig', array(
  'articles' => array()
));
  }
  public function voirAction($id)
  {
     // On récupère la requête
    $request = $this->getRequest();

    // On récupère notre paramètre tag
    $tag = $request->query->get('tag');

    return new Response("Affichage de l'article d'id : ".$id.", avec le tag : ".$tag);
  }
    public function ajouterAction()
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
    
    if( $this->get('request')->getMethod() == 'POST' )
    {
      // Ici, on s'occupera de la création et de la gestion du formulaire
      
      $this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');
    
      // Puis on redirige vers la page de visualisation de cet article
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('UserBundle:Blog:ajouter.html.twig');
  }
   public function modifierAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on s'occupera de la création et de la gestion du formulaire

    return $this->render('UserBundle:Blog:modifier.html.twig');
  }

  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('UserBundle:Blog:supprimer.html.twig');
  }
}