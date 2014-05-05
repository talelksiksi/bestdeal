<?php

/* AdminAdminBundle::layout.html.twig */
class __TwigTemplate_6f6e31c26588447fa1a4594e79b852f60ca9bac67b6176496b05ada0893371cb extends Twig_Template
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

        <title>Admin</title>

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
                                <a href=\"index\"><i class=\"fa fa-dashboard fa-fw\"></i> Home</a>
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
                                <a href=\"client\"><i class=\"fa fa-table fa-fw\"></i> Liste Clients</a>
                            </li>

                            <li>
                                <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Prestataires<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"prestataire\"> Liste Prestataires</a>
                                    </li>
                                    <li>
                                        <a href=\"prest_a_Valider\"> Validation Prestataires</a>
                                    </li>                                                               
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Deals<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"deal\"> Liste Deals</a>
                                    </li>
                                    <li>
                                        <a href=\"deal_a_Valider\"> Valider Deal</a>
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
        return array (  212 => 136,  195 => 149,  191 => 148,  185 => 145,  181 => 144,  113 => 57,  76 => 46,  23 => 4,  81 => 22,  53 => 14,  118 => 55,  84 => 56,  34 => 7,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 143,  169 => 136,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 69,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 49,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 12,  31 => 3,  28 => 2,  201 => 152,  196 => 90,  183 => 82,  171 => 139,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 50,  62 => 16,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 15,  47 => 9,  40 => 16,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 68,  96 => 57,  83 => 48,  74 => 20,  66 => 17,  55 => 14,  52 => 21,  50 => 10,  43 => 16,  41 => 9,  35 => 8,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 21,  86 => 28,  82 => 55,  80 => 47,  73 => 19,  64 => 14,  60 => 16,  57 => 11,  54 => 10,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 12,  30 => 2,);
    }
}
