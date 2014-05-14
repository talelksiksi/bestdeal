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
        // line 5
        echo "    <div class=\"container\">

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
        return array (  279 => 177,  267 => 168,  262 => 166,  223 => 136,  216 => 132,  195 => 120,  178 => 109,  126 => 65,  110 => 54,  81 => 42,  58 => 25,  124 => 75,  174 => 108,  185 => 145,  181 => 144,  20 => 1,  165 => 112,  161 => 111,  76 => 38,  34 => 4,  129 => 65,  53 => 19,  155 => 108,  148 => 106,  137 => 42,  118 => 35,  114 => 34,  23 => 4,  194 => 101,  188 => 98,  153 => 109,  127 => 62,  97 => 47,  84 => 40,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 124,  225 => 112,  207 => 113,  184 => 80,  150 => 108,  146 => 107,  104 => 54,  100 => 47,  77 => 41,  65 => 18,  90 => 30,  134 => 67,  113 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 165,  252 => 80,  247 => 78,  241 => 119,  229 => 73,  220 => 70,  214 => 69,  177 => 143,  169 => 136,  140 => 45,  132 => 59,  128 => 64,  107 => 48,  61 => 17,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 140,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 136,  179 => 69,  159 => 109,  143 => 92,  135 => 43,  119 => 60,  102 => 58,  71 => 19,  67 => 15,  63 => 27,  59 => 14,  38 => 5,  94 => 43,  89 => 41,  85 => 40,  75 => 39,  68 => 27,  56 => 17,  87 => 43,  21 => 1,  26 => 12,  93 => 46,  88 => 52,  78 => 22,  46 => 7,  27 => 5,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 111,  171 => 139,  166 => 73,  163 => 110,  158 => 71,  156 => 66,  151 => 88,  142 => 44,  138 => 60,  136 => 66,  121 => 62,  117 => 55,  105 => 49,  91 => 26,  62 => 20,  49 => 19,  24 => 7,  25 => 4,  19 => 2,  79 => 40,  72 => 16,  69 => 36,  47 => 9,  40 => 10,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 52,  139 => 45,  131 => 47,  123 => 37,  120 => 59,  115 => 35,  111 => 58,  108 => 55,  101 => 48,  98 => 48,  96 => 46,  83 => 42,  74 => 21,  66 => 15,  55 => 16,  52 => 21,  50 => 16,  43 => 12,  41 => 11,  35 => 8,  32 => 4,  29 => 6,  209 => 128,  203 => 78,  199 => 103,  193 => 150,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 114,  168 => 72,  164 => 59,  162 => 72,  154 => 70,  149 => 51,  147 => 58,  144 => 84,  141 => 48,  133 => 41,  130 => 41,  125 => 39,  122 => 60,  116 => 74,  112 => 53,  109 => 32,  106 => 52,  103 => 56,  99 => 55,  95 => 54,  92 => 45,  86 => 29,  82 => 23,  80 => 39,  73 => 37,  64 => 17,  60 => 26,  57 => 23,  54 => 10,  51 => 18,  48 => 15,  45 => 17,  42 => 9,  39 => 11,  36 => 7,  33 => 12,  30 => 2,);
    }
}
