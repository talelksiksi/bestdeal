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
        return array (  222 => 148,  152 => 84,  70 => 25,  191 => 130,  184 => 120,  279 => 177,  267 => 168,  262 => 166,  223 => 136,  216 => 132,  202 => 124,  195 => 120,  178 => 109,  113 => 56,  126 => 65,  110 => 54,  58 => 25,  124 => 75,  100 => 47,  53 => 5,  84 => 34,  174 => 108,  155 => 108,  148 => 107,  97 => 47,  197 => 154,  185 => 148,  181 => 147,  175 => 143,  20 => 1,  165 => 112,  161 => 111,  153 => 109,  150 => 100,  146 => 99,  76 => 38,  34 => 4,  134 => 67,  129 => 65,  118 => 34,  114 => 33,  81 => 42,  77 => 30,  23 => 1,  90 => 24,  127 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 165,  252 => 80,  247 => 78,  241 => 77,  229 => 152,  220 => 70,  214 => 143,  177 => 65,  169 => 113,  140 => 55,  132 => 93,  128 => 69,  107 => 48,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 140,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 140,  204 => 72,  179 => 69,  159 => 109,  143 => 104,  135 => 73,  119 => 60,  102 => 58,  71 => 19,  67 => 41,  63 => 27,  59 => 6,  38 => 6,  94 => 43,  89 => 41,  85 => 52,  75 => 39,  68 => 17,  56 => 17,  87 => 43,  21 => 1,  26 => 12,  93 => 53,  88 => 52,  78 => 21,  46 => 12,  27 => 5,  44 => 14,  31 => 4,  28 => 8,  201 => 92,  196 => 90,  183 => 111,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 66,  151 => 88,  142 => 59,  138 => 54,  136 => 94,  121 => 62,  117 => 55,  105 => 49,  91 => 38,  62 => 21,  49 => 16,  24 => 3,  25 => 4,  19 => 1,  79 => 40,  72 => 18,  69 => 11,  47 => 12,  40 => 13,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 80,  139 => 103,  131 => 52,  123 => 36,  120 => 52,  115 => 34,  111 => 58,  108 => 36,  101 => 48,  98 => 42,  96 => 46,  83 => 42,  74 => 14,  66 => 23,  55 => 16,  52 => 10,  50 => 16,  43 => 7,  41 => 11,  35 => 5,  32 => 5,  29 => 3,  209 => 128,  203 => 78,  199 => 67,  193 => 73,  189 => 149,  187 => 84,  182 => 66,  176 => 64,  173 => 140,  168 => 113,  164 => 59,  162 => 57,  154 => 101,  149 => 51,  147 => 58,  144 => 84,  141 => 97,  133 => 55,  130 => 41,  125 => 44,  122 => 60,  116 => 41,  112 => 53,  109 => 31,  106 => 64,  103 => 56,  99 => 55,  95 => 54,  92 => 62,  86 => 23,  82 => 22,  80 => 39,  73 => 37,  64 => 10,  60 => 37,  57 => 12,  54 => 17,  51 => 15,  48 => 9,  45 => 17,  42 => 10,  39 => 11,  36 => 5,  33 => 6,  30 => 4,);
    }
}
