<?php

/* UserBundle:BestDeal:dareserver.html.twig */
class __TwigTemplate_a17ed4d93e3c91de66057496ec77896e288c95148f1b1f604b2b9b9d31acdf22 extends Twig_Template
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
        echo "
    <div class=\"container\">

        <div class=\"row\"  >
        
        <div class=\"box\" align=\"center\">
            <div class=\"col-lg-12\">
           <hr>
            <h2 class=\"intro-text text-center\"> Le deal</h2>
            <hr>
        </div>
        </div>
                
                <div class=\"box\" align=\"center\">
                    <div class=\"col-lg-102\">
                      ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 19
            echo "                            <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_reserver", array("iddeal" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"))), "html", null, true);
            echo "\" method=\"POST\" >            
                         
                                
                                        
                        <h4 class=\"dealtitr\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</h4>
                        <div class=\"imgdet\"><img src='";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"600px\" height=\"300px\"></div>
                        <div class=\"dealdet\"><span class=\"discount_text\">A partir de</span> <span class=\"item_price\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt</span> <span class=\"original_price\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt</span><br>
                        La date du dépôt du deal est le ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateDebut"), "html", null, true);
            echo " <br>
                        Profitez VITE, ce deal est valable jusqu'au <span class=\"dealdateexp\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "</span><br>
                        <b>Type :</b> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "TypeDeal"), "html", null, true);
            echo "<br>
                        <b> Catégorie:</b> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Categorie"), "html", null, true);
            echo "<br>
                        Vous économisez ";
            // line 30
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") - $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel")), "html", null, true);
            echo " dt<br>
                        <span class=\"remise\"> - ";
            // line 31
            echo twig_escape_filter($this->env, twig_round((100 / ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") / $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"))), 1, "floor"), "html", null, true);
            echo " %</span><br>
                        </div>
                            <div class=\"detdeal\"><b> Détail de l'offre:</b><br>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Descriptif"), "html", null, true);
            echo "</div>
                                
                                
                         <br><br>
                         <div class=\"nbrres\">   <h5 class=\"intro-text\"> Nombre de réservations:</h5> <input type=\"text\" name=\"qte\" > <br>
                          </br> <INPUT border=\"0\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/reservez.jpg"), "html", null, true);
            echo "\" type=\"image\" Value=\"submit\" align=\"middle\" >
                           </div>
                   
                                         </form>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        
                </div>
                        
                        <div id=\"commentaires\">
                               <a id=\"commclick\">Afficher les commentaires</a>
                               <div id=\"commaffiche\" style=\"display:none;\">
                                   <ul>
                                     ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 52
            echo "                                           
                                           <li> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "commentaire"), "html", null, true);
            echo " </li>
                                          
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    
                                   </ul>
                               </div>
                           
                           </div>
                        
                </div>
        
       </div>

    </div>
<script>
\$(\"#commclick\").click(function(){
  \$(\"#commaffiche\").slideDown();
});

</script>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:dareserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 55,  135 => 53,  132 => 52,  128 => 51,  119 => 44,  107 => 38,  99 => 33,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  64 => 24,  60 => 23,  52 => 19,  48 => 18,  31 => 3,  28 => 2,);
    }
}
