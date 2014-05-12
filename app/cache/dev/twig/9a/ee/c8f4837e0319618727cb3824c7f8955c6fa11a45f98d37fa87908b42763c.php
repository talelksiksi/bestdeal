<?php

/* PrestataireDeServicesprestataireBundle:Deal:ajout.html.twig */
class __TwigTemplate_9aeec8f4837e0319618727cb3824c7f8955c6fa11a45f98d37fa87908b42763c extends Twig_Template
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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        echo " 
    <div class=\"container\">

        <div class=\"row\">
         <div class=\"box\">
                <div class=\"col-lg-12\">
        <h1>Inscription</h1>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/inscri.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
            <li>
               <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("deal_create");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\"> 
                   ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                   <div>
                       <input type=\"submit\" value=\"Ajouter\" />
                   </div>
              </form>
     
            </li>
        </ul>
    </div>
         </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PrestataireDeServicesprestataireBundle:Deal:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 177,  267 => 168,  262 => 166,  223 => 136,  216 => 132,  202 => 124,  195 => 120,  178 => 109,  113 => 56,  126 => 65,  110 => 54,  58 => 25,  124 => 75,  100 => 47,  53 => 19,  84 => 40,  174 => 108,  155 => 108,  148 => 106,  97 => 47,  197 => 154,  185 => 148,  181 => 147,  175 => 143,  20 => 1,  165 => 112,  161 => 111,  153 => 109,  150 => 108,  146 => 107,  76 => 38,  34 => 4,  134 => 67,  129 => 65,  118 => 34,  114 => 33,  81 => 42,  77 => 41,  23 => 4,  90 => 24,  127 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 165,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 113,  140 => 55,  132 => 39,  128 => 49,  107 => 48,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 140,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 140,  204 => 72,  179 => 69,  159 => 109,  143 => 92,  135 => 53,  119 => 60,  102 => 58,  71 => 19,  67 => 26,  63 => 27,  59 => 14,  38 => 5,  94 => 43,  89 => 41,  85 => 40,  75 => 39,  68 => 17,  56 => 17,  87 => 43,  21 => 1,  26 => 12,  93 => 46,  88 => 52,  78 => 21,  46 => 10,  27 => 5,  44 => 12,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 111,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 66,  151 => 88,  142 => 59,  138 => 54,  136 => 41,  121 => 62,  117 => 55,  105 => 49,  91 => 27,  62 => 20,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 40,  72 => 18,  69 => 36,  47 => 9,  40 => 10,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 46,  139 => 45,  131 => 52,  123 => 36,  120 => 40,  115 => 34,  111 => 58,  108 => 36,  101 => 48,  98 => 48,  96 => 46,  83 => 42,  74 => 14,  66 => 15,  55 => 16,  52 => 21,  50 => 16,  43 => 12,  41 => 11,  35 => 8,  32 => 5,  29 => 6,  209 => 128,  203 => 78,  199 => 67,  193 => 73,  189 => 149,  187 => 84,  182 => 66,  176 => 64,  173 => 140,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 84,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 60,  116 => 41,  112 => 53,  109 => 31,  106 => 52,  103 => 56,  99 => 55,  95 => 54,  92 => 45,  86 => 23,  82 => 22,  80 => 39,  73 => 37,  64 => 14,  60 => 26,  57 => 23,  54 => 10,  51 => 18,  48 => 15,  45 => 17,  42 => 9,  39 => 11,  36 => 6,  33 => 12,  30 => 2,);
    }
}
