<?php

/* AdminAdminBundle:Default:index.html.twig */
class __TwigTemplate_d44cc83eb53adf5cf45548afbd9f779b7d2f8a7b08f816a761391cee4c03d85d extends Twig_Template
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
                <h1 class=\"page-header\">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart Example
                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li><a href=\"#\">Action</a>
                                    </li>
                                    <li><a href=\"#\">Another action</a>
                                    </li>
                                    <li><a href=\"#\">Something else here</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-area-chart\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Bar Chart Example
                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li><a href=\"#\">Action</a>
                                    </li>
                                    <li><a href=\"#\">Another action</a>
                                    </li>
                                    <li><a href=\"#\">Something else here</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover table-striped\">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>\$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>\$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>\$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>\$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>\$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>\$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>\$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>\$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.col-lg-4 (nested) -->
                            <div class=\"col-lg-8\">
                                <div id=\"morris-bar-chart\"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-clock-o fa-fw\"></i> Timeline
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"timeline-badge\"><i class=\"fa fa-check\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                        <p>
                                            <small class=\"text-muted\"><i class=\"fa fa-time\"></i> 11 hours ago via Twitter</small>
                                        </p>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-badge warning\"><i class=\"fa fa-credit-card\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge danger\"><i class=\"fa fa-credit-card\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge info\"><i class=\"fa fa-save\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        <hr>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-cog\"></i> 
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                <li><a href=\"#\">Action</a>
                                                </li>
                                                <li><a href=\"#\">Another action</a>
                                                </li>
                                                <li><a href=\"#\">Something else here</a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li><a href=\"#\">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-badge success\"><i class=\"fa fa-thumbs-up\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Timeline Event</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class=\"col-lg-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                                <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                                <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                                <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-money fa-fw\"></i> Payment Received
                                <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                </span>
                            </a>
                        </div>
                        <!-- /.list-group -->
                        <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Donut Chart Example
                    </div>
                    <div class=\"panel-body\">
                        <div id=\"morris-donut-chart\"></div>
                        <a href=\"#\" class=\"btn btn-default btn-block\">View Details</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class=\"chat-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-comments fa-fw\"></i>
                        Chat
                        <div class=\"btn-group pull-right\">
                            <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-chevron-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu slidedown\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-check-circle fa-fw\"></i> Available
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-times fa-fw\"></i> Busy
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-clock-o fa-fw\"></i> Away
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <ul class=\"chat\">
                            <li class=\"left clearfix\">
                                <span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <strong class=\"primary-font\">Jack Sparrow</strong> 
                                        <small class=\"pull-right text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class=\"right clearfix\">
                                <span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <small class=\" text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                        <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class=\"left clearfix\">
                                <span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <strong class=\"primary-font\">Jack Sparrow</strong> 
                                        <small class=\"pull-right text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 14 mins ago</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class=\"right clearfix\">
                                <span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <small class=\" text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 15 mins ago</small>
                                        <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                    Send
                                </button>
                            </span>
                        </div>
                    </div>
                    <!-- /.panel-footer -->
                </div>
                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  70 => 35,  212 => 136,  195 => 149,  191 => 148,  185 => 145,  181 => 144,  113 => 57,  76 => 46,  23 => 4,  81 => 22,  53 => 14,  118 => 55,  84 => 56,  34 => 7,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 143,  169 => 136,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 69,  71 => 19,  67 => 34,  63 => 33,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 49,  21 => 2,  26 => 12,  93 => 43,  88 => 6,  78 => 37,  46 => 11,  27 => 5,  44 => 12,  31 => 3,  28 => 2,  201 => 152,  196 => 90,  183 => 82,  171 => 139,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 50,  62 => 16,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 15,  47 => 9,  40 => 16,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 68,  96 => 57,  83 => 48,  74 => 36,  66 => 17,  55 => 14,  52 => 21,  50 => 10,  43 => 16,  41 => 9,  35 => 8,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 21,  86 => 39,  82 => 38,  80 => 47,  73 => 19,  64 => 14,  60 => 16,  57 => 11,  54 => 10,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 12,  30 => 2,);
    }
}
