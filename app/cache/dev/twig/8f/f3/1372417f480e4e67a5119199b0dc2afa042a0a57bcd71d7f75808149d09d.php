<?php

/* UserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_8ff31372417f480e4e67a5119199b0dc2afa042a0a57bcd71d7f75808149d09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  129 => 40,  53 => 12,  155 => 53,  148 => 48,  137 => 42,  118 => 35,  114 => 34,  23 => 4,  194 => 101,  188 => 98,  153 => 55,  127 => 38,  97 => 39,  84 => 32,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 95,  225 => 112,  207 => 113,  184 => 80,  150 => 69,  146 => 68,  104 => 54,  100 => 29,  77 => 30,  65 => 18,  90 => 30,  134 => 59,  113 => 74,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 147,  252 => 80,  247 => 78,  241 => 119,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 45,  132 => 59,  128 => 64,  107 => 38,  61 => 17,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 128,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 105,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 8,  94 => 31,  89 => 34,  85 => 38,  75 => 17,  68 => 27,  56 => 15,  87 => 25,  21 => 1,  26 => 12,  93 => 59,  88 => 6,  78 => 22,  46 => 7,  27 => 5,  44 => 12,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 75,  166 => 73,  163 => 58,  158 => 71,  156 => 66,  151 => 63,  142 => 44,  138 => 60,  136 => 66,  121 => 46,  117 => 75,  105 => 31,  91 => 26,  62 => 24,  49 => 11,  24 => 7,  25 => 4,  19 => 2,  79 => 35,  72 => 16,  69 => 19,  47 => 9,  40 => 8,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 52,  139 => 45,  131 => 47,  123 => 37,  120 => 59,  115 => 35,  111 => 37,  108 => 55,  101 => 40,  98 => 61,  96 => 28,  83 => 25,  74 => 21,  66 => 15,  55 => 22,  52 => 14,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 103,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 65,  168 => 72,  164 => 59,  162 => 72,  154 => 70,  149 => 51,  147 => 58,  144 => 55,  141 => 48,  133 => 41,  130 => 41,  125 => 39,  122 => 43,  116 => 74,  112 => 73,  109 => 32,  106 => 36,  103 => 32,  99 => 33,  95 => 60,  92 => 21,  86 => 29,  82 => 23,  80 => 19,  73 => 20,  64 => 17,  60 => 16,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 15,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
