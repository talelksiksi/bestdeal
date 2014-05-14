<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8e88f0ca44ec6a79cc872f10fb665a4a8f477e10400a58eb06fd4b25dca7a5db extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  200 => 72,  197 => 71,  172 => 64,  222 => 148,  152 => 84,  70 => 19,  191 => 67,  279 => 177,  267 => 101,  262 => 98,  223 => 136,  216 => 79,  195 => 120,  178 => 66,  126 => 65,  110 => 22,  81 => 23,  58 => 17,  124 => 75,  174 => 108,  185 => 66,  181 => 65,  20 => 1,  165 => 60,  161 => 63,  76 => 31,  34 => 4,  129 => 65,  53 => 12,  155 => 108,  148 => 107,  137 => 42,  118 => 49,  114 => 34,  23 => 1,  194 => 70,  188 => 98,  153 => 56,  127 => 60,  97 => 41,  84 => 24,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 124,  225 => 112,  207 => 75,  184 => 120,  150 => 55,  146 => 99,  104 => 54,  100 => 39,  77 => 30,  65 => 18,  90 => 27,  134 => 54,  113 => 48,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 130,  258 => 165,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 143,  177 => 143,  169 => 136,  140 => 58,  132 => 93,  128 => 69,  107 => 48,  61 => 12,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 140,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 136,  179 => 69,  159 => 109,  143 => 104,  135 => 62,  119 => 40,  102 => 40,  71 => 19,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 41,  85 => 32,  75 => 39,  68 => 27,  56 => 11,  87 => 34,  21 => 1,  26 => 9,  93 => 53,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 14,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 111,  171 => 139,  166 => 73,  163 => 110,  158 => 62,  156 => 58,  151 => 59,  142 => 44,  138 => 60,  136 => 94,  121 => 50,  117 => 19,  105 => 34,  91 => 38,  62 => 21,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 40,  72 => 16,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 110,  145 => 80,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 35,  111 => 47,  108 => 19,  101 => 43,  98 => 42,  96 => 37,  83 => 33,  74 => 27,  66 => 23,  55 => 16,  52 => 14,  50 => 16,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 128,  203 => 73,  199 => 103,  193 => 150,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 114,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 84,  141 => 51,  133 => 41,  130 => 46,  125 => 51,  122 => 60,  116 => 39,  112 => 53,  109 => 32,  106 => 45,  103 => 56,  99 => 31,  95 => 54,  92 => 62,  86 => 29,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 37,  57 => 12,  54 => 17,  51 => 15,  48 => 9,  45 => 10,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 3,);
    }
}
