<?php

/* UserBundle:BestDeal:echecreservation.html.twig */
class __TwigTemplate_d184fbdbe06dd5b265b0b4447d89e5da02c787f0365be3a5d6da7629386099ef extends Twig_Template
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
            <h2 class=\"intro-text text-center\"> Echec de la réservation</h2>
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
            echo " réservation(s) sur le Deal de référence, effectuée le: ";
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
        return "UserBundle:BestDeal:echecreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  65 => 32,  90 => 30,  134 => 59,  113 => 74,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 60,  132 => 52,  128 => 51,  107 => 38,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 44,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 31,  89 => 20,  85 => 25,  75 => 17,  68 => 25,  56 => 11,  87 => 25,  21 => 1,  26 => 3,  93 => 59,  88 => 6,  78 => 27,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 75,  105 => 40,  91 => 27,  62 => 23,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 15,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 61,  96 => 31,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 16,  35 => 13,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 55,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 60,  92 => 21,  86 => 29,  82 => 28,  80 => 19,  73 => 19,  64 => 24,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 18,  45 => 17,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
