<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_e682df035e932aa978211ae696da1df0c955138ce17bdc25f488a491ccff81ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 148,  152 => 84,  70 => 25,  191 => 130,  279 => 177,  267 => 168,  262 => 166,  223 => 136,  216 => 132,  195 => 120,  178 => 109,  126 => 65,  110 => 22,  81 => 42,  58 => 25,  124 => 75,  174 => 108,  185 => 145,  181 => 144,  20 => 1,  165 => 112,  161 => 111,  76 => 17,  34 => 4,  129 => 65,  53 => 11,  155 => 108,  148 => 107,  137 => 42,  118 => 35,  114 => 34,  23 => 1,  194 => 101,  188 => 98,  153 => 109,  127 => 28,  97 => 47,  84 => 29,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 124,  225 => 112,  207 => 113,  184 => 120,  150 => 100,  146 => 99,  104 => 54,  100 => 47,  77 => 30,  65 => 18,  90 => 32,  134 => 67,  113 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 165,  252 => 80,  247 => 78,  241 => 119,  229 => 152,  220 => 70,  214 => 143,  177 => 143,  169 => 136,  140 => 45,  132 => 93,  128 => 69,  107 => 48,  61 => 12,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 140,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 136,  179 => 69,  159 => 109,  143 => 104,  135 => 73,  119 => 60,  102 => 17,  71 => 19,  67 => 41,  63 => 27,  59 => 13,  38 => 6,  94 => 34,  89 => 41,  85 => 52,  75 => 39,  68 => 27,  56 => 11,  87 => 43,  21 => 1,  26 => 11,  93 => 53,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 14,  31 => 3,  28 => 8,  201 => 92,  196 => 90,  183 => 111,  171 => 139,  166 => 73,  163 => 110,  158 => 71,  156 => 66,  151 => 88,  142 => 44,  138 => 60,  136 => 94,  121 => 62,  117 => 19,  105 => 18,  91 => 38,  62 => 21,  49 => 10,  24 => 3,  25 => 4,  19 => 1,  79 => 40,  72 => 16,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 110,  145 => 80,  139 => 103,  131 => 47,  123 => 37,  120 => 20,  115 => 35,  111 => 58,  108 => 19,  101 => 48,  98 => 42,  96 => 46,  83 => 42,  74 => 21,  66 => 23,  55 => 16,  52 => 10,  50 => 16,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 128,  203 => 78,  199 => 103,  193 => 150,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 114,  168 => 113,  164 => 59,  162 => 72,  154 => 101,  149 => 51,  147 => 58,  144 => 84,  141 => 97,  133 => 41,  130 => 41,  125 => 39,  122 => 60,  116 => 74,  112 => 53,  109 => 32,  106 => 64,  103 => 56,  99 => 55,  95 => 54,  92 => 62,  86 => 29,  82 => 28,  80 => 39,  73 => 16,  64 => 13,  60 => 37,  57 => 12,  54 => 17,  51 => 15,  48 => 9,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 3,);
    }
}
