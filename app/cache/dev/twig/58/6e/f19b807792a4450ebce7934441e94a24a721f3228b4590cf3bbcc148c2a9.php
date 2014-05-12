<?php

/* AdminAdminBundle:Default:stat.html.twig */
class __TwigTemplate_586ef19b807792a4450ebce7934441e94a24a721f3228b4590cf3bbcc148c2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminAdminBundle::layout.html.twig");

        $this->blocks = array(
            'pagewrapper' => array($this, 'block_pagewrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagewrapper($context, array $blocks = array())
    {
        // line 3
        echo "    <head>
        <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>



        <script id=\"p\" type=\"text/javascript\">
                    var chart1;
                    var chart1Data = [
                    {
                    \"Type\" : \"Produit\",
                            \"Value\" :";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit"))), "html", null, true);
        echo "
                    },
                    {
                    \"Type\": \"Service\",
                            \"Value\" :";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service"))), "html", null, true);
        echo "
                    }
                    ];
                    AmCharts.ready(function() {
                    // PIE CHART
                    chart1 = new AmCharts.AmPieChart();
                            chart1.addTitle(\"\", 25)
                            chart1.dataProvider = chart1Data;
                            chart1.titleField = \"Type\";
                            chart1.valueField = \"Value\";
                            chart1.outlineColor = \"#FFFFFF\";
                            chart1.outlineAlpha = 0.5;
                            chart1.outlineThickness = 2;
                            //chart.balloonText = \"[[title]]<br><span style='font-size:20px'><b>[[value]]</b> ([[percents]]%)</span>\";
                            // this makes the chart 3D
                            chart1.depth3D = 15;
                            chart1.angle = 15;
                            // WRITE
                            chart1.write(\"Piechart\");
                    });</script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script id=\"donut\" type=\"text/javascript\">
                    var legend;
                    var chart;
                    var chartData = [

                    {
                    \"Sexe\" : \"Femme\",
                            \"Nombre\" :";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["femme"]) ? $context["femme"] : $this->getContext($context, "femme"))), "html", null, true);
        echo "
                    },
                    {
                    \"Sexe\" : \"Homme\",
                            \"Nombre\" :";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["homme"]) ? $context["homme"] : $this->getContext($context, "homme"))), "html", null, true);
        echo "
                    }
                    ];
                    AmCharts.ready(function () {
                    // PIE CHART
                    chart = new AmCharts.AmPieChart();
                            // title of the chart
                            chart.addTitle(\"\", 25);
                            chart.dataProvider = chartData;
                            chart.titleField = \"Sexe\";
                            chart.valueField = \"Nombre\";
                            chart.sequencedAnimation = true;
                            chart.startEffect = \"elastic\";
                            chart.innerRadius = \"30%\";
                            chart.startDuration = 3;
                            chart.labelRadius = 15;
                            chart.balloonText = \"[[title]]<br><span style='font-size:20px'><b>[[value]]</b> ([[percents]]%)</span>\";
                            // the following two lines makes the chart 3D
                            chart.depth3D = 10;
                            chart.angle = 15;
                            // WRITE                                 
                            chart.write(\"Donutuser\");
                    });</script>
        <script id=\"puser\" type=\"text/javascript\">
                    var chart2;
                    var chart2Data = [
                    {
                    \"Type\" : \"Client\",
                            \"Value\" :";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client"))), "html", null, true);
        echo "
                    },
                    {
                    \"Type\": \"Prestataire\",
                            \"Value\" :";
        // line 88
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest"))), "html", null, true);
        echo "
                    }
                    ];
                    AmCharts.ready(function() {
                    // PIE CHART
                    chart2 = new AmCharts.AmPieChart();
                            chart2.addTitle(\"\", 25)
                            chart2.dataProvider = chart2Data;
                            chart2.titleField = \"Type\";
                            chart2.valueField = \"Value\";
                            chart2.outlineColor = \"#FFFFFF\";
                            chart2.outlineAlpha = 0.5;
                            chart2.outlineThickness = 2;
                            //chart.balloonText = \"[[title]]<br><span style='font-size:20px'><b>[[value]]</b> ([[percents]]%)</span>\";
                            // this makes the chart 3D
                            chart2.depth3D = 15;
                            chart2.angle = 15;
                            // WRITE
                            chart2.write(\"Piechartuser\");
                    });</script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script id=\"donutusr\" type=\"text/javascript\">
                    var legend;
                    var chart3;
                    var chart3Data = [

                    {
                    \"Categorie\" : \"ElectroMenager\",
                            \"Nombre\" :";
        // line 120
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["electromenager"]) ? $context["electromenager"] : $this->getContext($context, "electromenager"))), "html", null, true);
        echo "
                    },
                    {
                    \"Categorie\" : \"Technologie\",
                            \"Nombre\" :";
        // line 124
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["technologie"]) ? $context["technologie"] : $this->getContext($context, "technologie"))), "html", null, true);
        echo "
                    },
                    {
                    \"Categorie\" : \"Voyage\",
                            \"Nombre\" :";
        // line 128
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage"))), "html", null, true);
        echo "
                    },
                    {
                    \"Categorie\" : \"Massage\",
                            \"Nombre\" :";
        // line 132
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["massage"]) ? $context["massage"] : $this->getContext($context, "massage"))), "html", null, true);
        echo "
                    },
                    {
                    \"Categorie\" : \"Cure\",
                            \"Nombre\" :";
        // line 136
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cure"]) ? $context["cure"] : $this->getContext($context, "cure"))), "html", null, true);
        echo "
                    },
                    {
                    \"Categorie\" : \"Domestique\",
                            \"Nombre\" :";
        // line 140
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["domestique"]) ? $context["domestique"] : $this->getContext($context, "domestique"))), "html", null, true);
        echo "
                    }
                    ];
                    AmCharts.ready(function () {
                    // PIE CHART
                    chart3 = new AmCharts.AmPieChart();
                            // title of the chart
                            chart3.addTitle(\"\", 25);
                            chart3.dataProvider = chart3Data;
                            chart3.titleField = \"Categorie\";
                            chart3.valueField = \"Nombre\";
                            chart3.sequencedAnimation = true;
                            chart3.startEffect = \"elastic\";
                            chart3.innerRadius = \"30%\";
                            chart3.startDuration = 3;
                            chart3.labelRadius = 15;
                            chart3.balloonText = \"[[title]]<br><span style='font-size:20px'><b>[[value]]</b> ([[percents]]%)</span>\";
                            // the following two lines makes the chart 3D
                            chart3.depth3D = 10;
                            chart3.angle = 15;
                            // WRITE                                 
                            chart3.write(\"Donut\");
                    });</script>


        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    </head>
    <div id=\"pagewrapper\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
                <h1 class=\"page-header\">Statistiques</h1>
            </div>
            <div class=\"col-lg-2\">
                <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.PNG"), "html", null, true);
        echo "\">   
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class=\"row\">

            <!-- /.col-lg-6 -->
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Catégories Deals
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"Donut\" ></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Types Deals                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"Piechart\" ></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->

            <!-- /.col-lg-6 -->
        </div>
        <div class=\"row\">
            <!-- /.col-lg-6 -->
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Sexe Utilisateurs
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"Donutuser\" ></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Types Utilisateurs
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"Piechartuser\" ></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->

            <!-- /.col-lg-6 -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 177,  267 => 168,  262 => 166,  223 => 136,  216 => 132,  202 => 124,  195 => 120,  178 => 109,  113 => 56,  126 => 65,  110 => 54,  58 => 25,  124 => 75,  100 => 47,  53 => 19,  84 => 40,  174 => 108,  155 => 108,  148 => 106,  97 => 47,  197 => 154,  185 => 148,  181 => 147,  175 => 143,  20 => 1,  165 => 112,  161 => 111,  153 => 109,  150 => 108,  146 => 107,  76 => 38,  34 => 4,  134 => 67,  129 => 65,  118 => 34,  114 => 33,  81 => 42,  77 => 41,  23 => 4,  90 => 24,  127 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 165,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 113,  140 => 55,  132 => 39,  128 => 49,  107 => 48,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 140,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 140,  204 => 72,  179 => 69,  159 => 109,  143 => 92,  135 => 53,  119 => 60,  102 => 58,  71 => 19,  67 => 26,  63 => 27,  59 => 14,  38 => 5,  94 => 43,  89 => 41,  85 => 40,  75 => 39,  68 => 17,  56 => 21,  87 => 43,  21 => 1,  26 => 12,  93 => 46,  88 => 52,  78 => 21,  46 => 10,  27 => 5,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 111,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 66,  151 => 88,  142 => 59,  138 => 54,  136 => 41,  121 => 62,  117 => 55,  105 => 49,  91 => 27,  62 => 20,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 40,  72 => 18,  69 => 36,  47 => 9,  40 => 10,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 46,  139 => 45,  131 => 52,  123 => 36,  120 => 40,  115 => 34,  111 => 58,  108 => 36,  101 => 48,  98 => 48,  96 => 46,  83 => 42,  74 => 14,  66 => 15,  55 => 16,  52 => 21,  50 => 11,  43 => 7,  41 => 11,  35 => 8,  32 => 5,  29 => 6,  209 => 128,  203 => 78,  199 => 67,  193 => 73,  189 => 149,  187 => 84,  182 => 66,  176 => 64,  173 => 140,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 84,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 60,  116 => 41,  112 => 53,  109 => 31,  106 => 52,  103 => 56,  99 => 55,  95 => 54,  92 => 45,  86 => 23,  82 => 22,  80 => 39,  73 => 37,  64 => 14,  60 => 26,  57 => 23,  54 => 10,  51 => 18,  48 => 15,  45 => 17,  42 => 9,  39 => 7,  36 => 6,  33 => 12,  30 => 2,);
    }
}
