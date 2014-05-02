<?php

/* AdminAdminBundle::layout.html.twig */
class __TwigTemplate_894b17e99216ff520cced7b233e3180c7078bf75c2ff047c6d9c0ca37cd76452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagewrapper' => array($this, 'block_pagewrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

        <!-- Core CSS - Include with every page -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Page-Level Plugin CSS - Morris -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/plugins/morris/morris-0.4.3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- SB Admin CSS - Include with every page -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>

    

        

            <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Administrateur</a>
                </div>

                <!-- /.navbar-header -->

                <!-- /.navbar-top-links -->

                <div class=\"navbar-default navbar-static-side\" role=\"navigation\">
                    <div class=\"sidebar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            <li class=\"sidebar-search\">
                                <div class=\"input-group custom-search-form\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" type=\"button\">
                                            <i class=\"fa fa-search\"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw\"></i> Home</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Statistiques<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"flot.html\"> Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href=\"morris.html\"> Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=\"clients.html\"><i class=\"fa fa-table fa-fw\"></i> Liste Clients</a>
                            </li>

                            <li>
                                <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Prestataires<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"prestataires.html\"> Liste Prestataires</a>
                                    </li>
                                    <li>
                                        <a href=\"validationprestataires.html\"> Validation Prestataires</a>
                                    </li>                                                               
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Deals<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"deals.html\"> Liste Deals</a>
                                    </li>
                                    <li>
                                        <a href=\"validationdeals.html\"> Valider Deal</a>
                                    </li>
                                    <!-- <li>
                                        <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                        </ul>
                                    <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"blank.html\">Blank Page</a>
                                </li>
                                <li>
                                    <a href=\"login.html\">Login Page</a>
                                </li>
                            </ul>
                        <!-- /.nav-second-level -->
                        </li> 
                        </ul>
                        <!-- /#side-menu -->
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            ";
        // line 136
        $this->displayBlock('pagewrapper', $context, $blocks);
        // line 139
        echo "        </div>
        <!-- /#wrapper -->

        <!-- Core Scripts - Include with every page -->
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>

        <!-- Page-Level Plugin Scripts - Morris -->
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/plugins/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/plugins/morris/morris.js"), "html", null, true);
        echo "\"></script>

        <!-- SB Admin Scripts - Include with every page -->
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/sb-admin.js"), "html", null, true);
        echo "\"></script>

        <!-- Page-Level Demo Scripts - Morris - Use for reference -->
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/demo/demo.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    // line 136
    public function block_pagewrapper($context, array $blocks = array())
    {
        echo " 
                
            ";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 136,  207 => 155,  201 => 152,  195 => 149,  191 => 148,  185 => 145,  181 => 144,  177 => 143,  171 => 139,  169 => 136,  49 => 19,  43 => 16,  37 => 13,  33 => 12,  20 => 1,);
    }
}
