<?php

/* UserBundle:BestDeal:succesreservation.html.twig */
class __TwigTemplate_7d84a8b1a701ac3c0f53f5db44fb2f0844f8aa37d476cd327d2c813aad5129c9 extends Twig_Template
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
            <h2 class=\"intro-text text-center\"> Succès de la réservation</h2>
            <hr>
        </div>
                
                
          </div>
            
            <div class=\"box\" align=\"center\"> 
            <div id=\"enzel\" class=\"col-lg-12\">
           
                    <h2 class=\"intro-text text-center\">  Votre historique de réservations</h2>
            
        </div>
            
            

            
            
            <div id=\"historique\" style=\"display:none;\">
                <ul>
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationsuser"]) ? $context["reservationsuser"] : $this->getContext($context, "reservationsuser")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 32
            echo "                        <li>Vous avez fait ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "Quantite"), "html", null, true);
            echo " réservation(s) sur le Deal de référence";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "iddeal"), "iddeal"), "html", null, true);
            echo ", effectuée le: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "DateReservation"), "html", null, true);
            echo " </li>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
            </div>
            </div>
    
    </div>
        <script>
        
            \$(\"#enzel\").click(function(){
  \$(\"#historique\").slideDown();
});

          \$(\"#historique\").click(function(){
  \$(\"#historique\").slideUp();
});
            
            </script>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:succesreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  65 => 32,  61 => 31,  31 => 3,  28 => 2,);
    }
}
