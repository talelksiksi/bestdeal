<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e3f3d8f384f0701a2f922766c6a61cc492514bce60c293a92197d915646e30dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  134 => 41,  129 => 39,  118 => 34,  114 => 33,  81 => 21,  77 => 20,  23 => 4,  90 => 24,  127 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 39,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 46,  135 => 53,  119 => 35,  102 => 32,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 56,  75 => 17,  68 => 17,  56 => 21,  87 => 25,  21 => 1,  26 => 12,  93 => 28,  88 => 57,  78 => 21,  46 => 10,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 41,  121 => 55,  117 => 44,  105 => 30,  91 => 27,  62 => 24,  49 => 16,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 18,  69 => 15,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 36,  120 => 40,  115 => 34,  111 => 37,  108 => 36,  101 => 68,  98 => 31,  96 => 57,  83 => 55,  74 => 14,  66 => 15,  55 => 13,  52 => 21,  50 => 11,  43 => 8,  41 => 9,  35 => 13,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 32,  99 => 27,  95 => 26,  92 => 21,  86 => 23,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 15,  42 => 9,  39 => 7,  36 => 6,  33 => 4,  30 => 2,);
    }
}
