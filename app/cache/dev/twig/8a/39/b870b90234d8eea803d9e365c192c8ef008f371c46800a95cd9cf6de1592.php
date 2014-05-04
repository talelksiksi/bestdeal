<?php

/* AdminAdminBundle:Default:morris.html.twig */
class __TwigTemplate_8a39b870b90234d8eea803d9e365c192c8ef008f371c46800a95cd9cf6de1592 extends Twig_Template
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
        echo "    <div id=\"pagewrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Morris.js Charts</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Area Chart Example
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-area-chart\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Bar Chart Example
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-bar-chart\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Line Chart Example
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-line-chart\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class=\"col-lg-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Donut Chart Example
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-donut-chart\" style=\"height: 250px;\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Morris.js Usage
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target=\"_blank\" href=\"http://www.oesmith.co.uk/morris.js/\">http://www.oesmith.co.uk/morris.js/</a>.</p>
                        <a target=\"_blank\" class=\"btn btn-default btn-lg btn-block\" href=\"http://www.oesmith.co.uk/morris.js/\">View Morris.js Documentation</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <script>
        \$(function() {

            Morris.Donut({
                element: 'morris-donut-chart',
                data: [
                    {label: \"Download Sales\", value: 12},
                    {label: \"In-Store Sales\", value: 30},
                    {label: \"Mail-Order Sales\", value: 20}
                ],resize: true
            });
            Morris.Line({
                element: 'morris-line-chart',
                data: [
                    {label: \"Download Sales\", value: 12},
                    {label: \"In-Store Sales\", value: 30},
                    {label: \"Mail-Order Sales\", value: 20}
                ],resize: true
            });
            Morris.Bar({
                element: 'morris-bar-chart',
                data: [
                    {label: \"Download Sales\", value: 12},
                    {label: \"In-Store Sales\", value: 30},
                    {label: \"Mail-Order Sales\", value: 20}
                ],resize: true
            });
            Morris.Area({
                element: 'morris-area-chart',
                data: [
                    {label: \"Download Sales\", value: 12},
                    {label: \"In-Store Sales\", value: 30},
                    {label: \"Mail-Order Sales\", value: 20}
                ],resize: true
            });
        });


    </script>
    <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:morris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
