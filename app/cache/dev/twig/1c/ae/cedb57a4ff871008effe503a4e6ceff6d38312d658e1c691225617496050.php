<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_1caecedb57a4ff871008effe503a4e6ceff6d38312d658e1c691225617496050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 148,  152 => 84,  70 => 25,  191 => 130,  279 => 177,  267 => 168,  262 => 166,  223 => 136,  216 => 132,  195 => 120,  178 => 109,  126 => 65,  110 => 54,  81 => 42,  58 => 25,  124 => 75,  174 => 108,  185 => 145,  181 => 144,  20 => 1,  165 => 112,  161 => 111,  76 => 38,  34 => 4,  129 => 65,  53 => 5,  155 => 108,  148 => 107,  137 => 42,  118 => 35,  114 => 34,  23 => 1,  194 => 101,  188 => 98,  153 => 109,  127 => 62,  97 => 47,  84 => 34,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 124,  225 => 112,  207 => 113,  184 => 120,  150 => 100,  146 => 99,  104 => 54,  100 => 47,  77 => 30,  65 => 18,  90 => 30,  134 => 67,  113 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 165,  252 => 80,  247 => 78,  241 => 119,  229 => 152,  220 => 70,  214 => 143,  177 => 143,  169 => 136,  140 => 45,  132 => 93,  128 => 69,  107 => 48,  61 => 17,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 140,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 136,  179 => 69,  159 => 109,  143 => 104,  135 => 73,  119 => 60,  102 => 58,  71 => 19,  67 => 41,  63 => 27,  59 => 6,  38 => 6,  94 => 43,  89 => 41,  85 => 52,  75 => 39,  68 => 27,  56 => 17,  87 => 43,  21 => 1,  26 => 12,  93 => 53,  88 => 52,  78 => 22,  46 => 12,  27 => 5,  44 => 14,  31 => 4,  28 => 8,  201 => 92,  196 => 90,  183 => 111,  171 => 139,  166 => 73,  163 => 110,  158 => 71,  156 => 66,  151 => 88,  142 => 44,  138 => 60,  136 => 94,  121 => 62,  117 => 55,  105 => 49,  91 => 38,  62 => 21,  49 => 16,  24 => 3,  25 => 4,  19 => 1,  79 => 40,  72 => 16,  69 => 11,  47 => 12,  40 => 5,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 80,  139 => 103,  131 => 47,  123 => 37,  120 => 52,  115 => 35,  111 => 58,  108 => 55,  101 => 48,  98 => 42,  96 => 46,  83 => 42,  74 => 21,  66 => 23,  55 => 16,  52 => 10,  50 => 16,  43 => 7,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 128,  203 => 78,  199 => 103,  193 => 150,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 114,  168 => 113,  164 => 59,  162 => 72,  154 => 101,  149 => 51,  147 => 58,  144 => 84,  141 => 97,  133 => 41,  130 => 41,  125 => 39,  122 => 60,  116 => 74,  112 => 53,  109 => 32,  106 => 64,  103 => 56,  99 => 55,  95 => 54,  92 => 62,  86 => 29,  82 => 23,  80 => 39,  73 => 37,  64 => 10,  60 => 37,  57 => 12,  54 => 17,  51 => 15,  48 => 9,  45 => 17,  42 => 10,  39 => 11,  36 => 5,  33 => 6,  30 => 4,);
    }
}
