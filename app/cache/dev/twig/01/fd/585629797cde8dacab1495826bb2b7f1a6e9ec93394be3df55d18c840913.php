<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_01fd585629797cde8dacab1495826bb2b7f1a6e9ec93394be3df55d18c840913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  194 => 101,  188 => 98,  153 => 55,  127 => 46,  97 => 39,  84 => 32,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 95,  225 => 112,  207 => 113,  184 => 80,  150 => 69,  146 => 68,  104 => 54,  100 => 53,  77 => 30,  65 => 32,  90 => 30,  134 => 59,  113 => 74,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 147,  252 => 80,  247 => 78,  241 => 119,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 59,  128 => 64,  107 => 38,  61 => 31,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 128,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 105,  179 => 69,  159 => 61,  143 => 56,  135 => 48,  119 => 44,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 8,  94 => 31,  89 => 34,  85 => 38,  75 => 17,  68 => 27,  56 => 23,  87 => 48,  21 => 1,  26 => 12,  93 => 59,  88 => 6,  78 => 27,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 75,  166 => 73,  163 => 62,  158 => 71,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 66,  121 => 46,  117 => 75,  105 => 41,  91 => 49,  62 => 24,  49 => 16,  24 => 7,  25 => 3,  19 => 2,  79 => 35,  72 => 16,  69 => 28,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 45,  131 => 47,  123 => 45,  120 => 59,  115 => 43,  111 => 37,  108 => 55,  101 => 40,  98 => 61,  96 => 52,  83 => 25,  74 => 26,  66 => 15,  55 => 22,  52 => 19,  50 => 10,  43 => 8,  41 => 9,  35 => 13,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 103,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 65,  168 => 72,  164 => 59,  162 => 72,  154 => 70,  149 => 51,  147 => 58,  144 => 55,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 74,  112 => 73,  109 => 42,  106 => 36,  103 => 32,  99 => 33,  95 => 60,  92 => 21,  86 => 29,  82 => 28,  80 => 19,  73 => 29,  64 => 24,  60 => 24,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 15,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
