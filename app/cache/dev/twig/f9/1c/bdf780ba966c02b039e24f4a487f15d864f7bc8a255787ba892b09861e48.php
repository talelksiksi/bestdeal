<?php

/* UserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_f91cbdf780ba966c02b039e24f4a487f15d864f7bc8a255787ba892b09861e48 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 101,  188 => 98,  153 => 55,  127 => 46,  97 => 39,  84 => 32,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 95,  225 => 112,  207 => 113,  184 => 80,  150 => 69,  146 => 68,  104 => 54,  100 => 53,  77 => 30,  65 => 32,  90 => 30,  134 => 59,  113 => 74,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 147,  252 => 80,  247 => 78,  241 => 119,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 59,  128 => 64,  107 => 38,  61 => 31,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 128,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 105,  179 => 69,  159 => 61,  143 => 56,  135 => 48,  119 => 44,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 31,  89 => 34,  85 => 38,  75 => 17,  68 => 27,  56 => 23,  87 => 48,  21 => 1,  26 => 3,  93 => 59,  88 => 6,  78 => 27,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 75,  166 => 73,  163 => 62,  158 => 71,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 66,  121 => 46,  117 => 75,  105 => 41,  91 => 49,  62 => 24,  49 => 16,  24 => 4,  25 => 3,  19 => 2,  79 => 35,  72 => 16,  69 => 28,  47 => 9,  40 => 8,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 52,  139 => 45,  131 => 47,  123 => 45,  120 => 59,  115 => 43,  111 => 37,  108 => 55,  101 => 40,  98 => 61,  96 => 52,  83 => 25,  74 => 26,  66 => 15,  55 => 22,  52 => 19,  50 => 10,  43 => 8,  41 => 16,  35 => 13,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 103,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 65,  168 => 72,  164 => 59,  162 => 72,  154 => 70,  149 => 51,  147 => 58,  144 => 55,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 74,  112 => 73,  109 => 42,  106 => 36,  103 => 32,  99 => 33,  95 => 60,  92 => 21,  86 => 29,  82 => 28,  80 => 19,  73 => 29,  64 => 24,  60 => 24,  57 => 11,  54 => 10,  51 => 14,  48 => 18,  45 => 15,  42 => 8,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
