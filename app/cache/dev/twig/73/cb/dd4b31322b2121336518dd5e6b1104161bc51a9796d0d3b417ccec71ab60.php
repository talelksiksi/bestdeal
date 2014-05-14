<?php

/* PrestataireDeServicesprestataireBundle:Deal:index.html.twig */
class __TwigTemplate_73cbdd4b31322b2121336518dd5e6b1104161bc51a9796d0d3b417ccec71ab60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PrestataireDeServicesprestataireBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestataireDeServicesprestataireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "
    
    

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
     <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/overlay-apple.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <script src=\"http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js\"></script>
    <script>
        \$(function() {

            // if the function argument is given to overlay,
            // it is assumed to be the onBeforeLoad event listener
            \$(\"a[rel]\").overlay({

                mask: 'darkred',
                effect: 'apple',

                onBeforeLoad: function() {

                    // grab wrapper element inside content
                    var wrap = this.getOverlay().find(\".contentWrap\");

                    // load the page specified in the trigger
                    wrap.load(this.getTrigger().attr(\"href\"));
                }

            });
        });

    </script>






 <div class=\"container\">

        <div class=\"row\">
                         
            <div class=\"apple_overlay\" id=\"overlay\" style=\"\">

    <div class=\"contentWrap\"></div>
</div>

            
             <div class=\"col-md-3\">
                <p class=\"lead\" style=\"background: rgba(255,255,255,0.9);border-radius: 5px;color: #31b0d5;text-align: center\">Espace Membre</p>
                <div class=\"list-group\">
                    <a rel=\"#overlay\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("deal_new");
        echo "\" class=\"list-group-item\">Ajouter Deal</a>
                    <a href=\"http://localhost/P/bestdeal/web/app_dev.php/profile/\" class=\"list-group-item\">Profil</a>
                    <a href=\"http://localhost/P/bestdeal/web/app_dev.php/profile/edit\" class=\"list-group-item\">Modifier Profil</a>
                    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_mesDeal", array("iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Mes Deal</a>
                </div>
            </div>

            <div class=\"col-md-9\" style=\"background:rgba(255,255,255,0.9); \">

                <div class=\"row carousel-holder\" style=\"margin-top: 2%\">

                    <div class=\"col-md-12\">
                        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img class=\"slide-image\" src=\"http://mobiscrub.com/wp-content/uploads/htc-one-feature.jpg\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"http://www.vag-electronique.fr/wp-content/uploads/2013/07/Igo3d%C3%A9coup%C3%A9800_300.png\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"http://www.touchepasmamontre.com/wp-content/uploads/2012/05/swissmilitarybychrono.jpg\" alt=\"\">
                                </div>
                            </div>
                            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class=\"row\">
                            ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 94
            echo "
                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img class=\"alloma\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "image"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right \" style=\"color: #d9534f\">\$";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "prixpromotionnel"), "html", null, true);
            echo "</h4>
                                <h5 class=\"pull-right \" style=\"color: #B3A9A9 ; text-decoration:line-through \" >\$";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "prixinitial"), "html", null, true);
            echo "</h5>
                                <h4><a rel=\"#overlay\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_show", array("id" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "id"))), "html", null, true);
            echo "\" style=\"font-size: small\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "libelle"), "html", null, true);
            echo "</a>
                                </h4>
                                <p>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "descriptif"), "html", null, true);
            echo " </p>
                            </div>
                            <div class=\"ratings\" style=\"color: #d9534f\">
                                <p class=\"pull-right\" style=\"color: #d9534f\">15 reviews</p>
                                <p style=\"color: #d9534f\">
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                </p>
                            </div>
                        </div>
                    </div>


                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


    <!-- /.container -->

    <!-- JavaScript -->

";
    }

    public function getTemplateName()
    {
        return "PrestataireDeServicesprestataireBundle:Deal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 120,  161 => 103,  154 => 101,  150 => 100,  146 => 99,  141 => 97,  136 => 94,  132 => 93,  91 => 55,  85 => 52,  38 => 8,  31 => 3,  28 => 2,);
    }
}
