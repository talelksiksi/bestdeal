<?php

/* UserBundle:BestDeal:rechercheliste.html.twig */
class __TwigTemplate_9fc743925e6b7984fc984c4f496331f376c91dd8c968d8abb4c4f714d7f02791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">

         <div class=\"row\"  >
            <div class=\"box\" align=\"center\">
            <div class=\"col-lg-12\">
           <hr>
            <h2 class=\"intro-text text-center\"> Recherche Avancée</h2>
            <hr>
              <h3 class=\"intro-text\"> Recherche par Nom:</h3> <input type=\"text\" > <br>
            <h3 class=\"intro-text\">Recherche par Type:</h3><br> Technologie <input type=\"radio\"  name=\"type\"> Vêtements <input type=\"radio\"  name=\"type\"> Domestique <input type=\"radio\"  name=\"type\"><br>
            <h3 class=\"intro-text\"> Recherche par Catégorie:</h3><br> Produit <input type=\"radio\"  name=\"cat\"> Service <input type=\"radio\"  name=\"cat\"><br> <h3 align=\"center\"> <center><input type=\"button\" class=\"col-sm-2\" value=\"Rechercher\"></center></h3>
            
            </div>
            </div>
            <div class=\"box\" >
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Deal Quelconque</h2>
                    <hr>
                    <img class=\"img-responsive img-border img-left\" src=\"img/deal1.jpg\" alt=\"\">
                    <hr class=\"visible-xs\">
                    <p>Description Deal</p>
                </div>
            </div>
             <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Deal Quelconque</h2>
                    <hr>
                    <img class=\"img-responsive img-border img-left\" src=\"img/deal2.jpg\" alt=\"\">
                    <hr class=\"visible-xs\">
                    <p>Description Deal</p>
                </div>
            </div>
             <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Deal Quelconque</h2>
                    <hr>
                    <img class=\"img-responsive img-border img-left\" src=\"img/deal3.jpg\" alt=\"\">
                    <hr class=\"visible-xs\">
                    <p>Description Deal</p>
                </div>
            </div>
        </div>

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:rechercheliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
