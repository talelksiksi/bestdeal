<?php

/* AdminAdminBundle:Default:stat.html.twig */
class __TwigTemplate_021d7062d9a945c5d6915e96a34eebbfcdc4c964f259a3604a25e25930b6ccd1 extends Twig_Template
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
        return array (  279 => 177,  267 => 168,  262 => 166,  258 => 165,  230 => 140,  223 => 136,  216 => 132,  209 => 128,  202 => 124,  195 => 120,  183 => 111,  178 => 109,  174 => 108,  151 => 88,  144 => 84,  113 => 56,  106 => 52,  94 => 43,  89 => 41,  85 => 40,  62 => 20,  55 => 16,  43 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
