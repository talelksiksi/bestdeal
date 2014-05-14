<?php

/* PrestataireDeServicesprestataireBundle::layout.html.twig */
class __TwigTemplate_388f0e3747d04f4bede742b7450c4acc91faa6ae5bc89ae9aa0ba7f366b9b545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html >
    <head>
        <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tools.min.js"), "html", null, true);
        echo "\"></script>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
     
        <title>Best Deal</title>
        
         <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/overlay-apple.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Add custom CSS here -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bestdeal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <div class=\"brand\">Best Deal</div>
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\" style=\"border-bottom-color: #2ba9e1\">Best Deal</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"home\">Home</a>
                        </li>
                        <li><a href=\"recherche\">Recherche Deal</a>
                        </li>
                        <li><a href=\"connexion\">Mon Espace</a>
                        </li>                    
                         <li><a href=\"http://localhost/P/bestdeal/web/app_dev.php/login\">Connexion</a>
                        </li>
                        <li><a href=\"contact\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        ";
        // line 52
        $this->displayBlock('container', $context, $blocks);
        // line 53
        echo "        <footer>
            <div class=\"footer\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <p>Copyright &copy; Sticky Bit 3A9 2014</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JavaScript -->
        
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
              
        <script>
            // Activates the Carousel
            \$('.carousel').carousel({
                interval: 5000
            })
        </script>
    </body>
</html>";
    }

    // line 52
    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "PrestataireDeServicesprestataireBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  106 => 64,  93 => 53,  54 => 18,  49 => 16,  44 => 14,  40 => 13,  29 => 5,  25 => 4,  20 => 1,  184 => 120,  161 => 103,  154 => 101,  150 => 100,  146 => 99,  141 => 97,  136 => 94,  132 => 93,  91 => 52,  85 => 52,  38 => 8,  31 => 3,  28 => 2,);
    }
}
