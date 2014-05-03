<?php

/* UserBundle:BestDeal:index.html.twig */
class __TwigTemplate_758db7bccd9d5ed0c7b6bc74b7c7856ab5a867898c09ffc0a23be6650661e329 extends Twig_Template
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
        echo "<div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12 text-center\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class=\"brand-name\">Best Deal</span>
                    </h1>
                    <hr class=\"tagline-divider\">
                    <h2>
                        <small>By <strong>Sticky Bit 3A9</strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
         <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Deal Quelconque</h2>
                    <hr>
                    <img class=\"img-responsive img-border img-left\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/deal1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <hr class=\"visible-xs\">
                    <p>Description Deal</p>
                </div>
            </div>
         </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  84 => 56,  34 => 13,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 69,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 15,  47 => 9,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 68,  96 => 57,  83 => 25,  74 => 14,  66 => 15,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 55,  80 => 19,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
