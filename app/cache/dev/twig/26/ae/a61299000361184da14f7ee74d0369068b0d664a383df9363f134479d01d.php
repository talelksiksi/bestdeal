<?php

/* AdminAdminBundle:Default:rechercheD.html.twig */
class __TwigTemplate_26aea61299000361184da14f7ee74d0369068b0d664a383df9363f134479d01d extends Twig_Template
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
        echo "
    <div id=\"pagewrapper\">
            <div class=\"row\">
                
                <div class=\"col-lg-10\">
                    <h1 class=\"page-header\">Recherche...</h1>
                </div>
                  <div class=\"col-lg-2\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.PNG"), "html", null, true);
        echo "\">   
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                        <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            List
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches"))) != 0)) {
            // line 26
            echo "                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    <thead>
                                        <tr>
                                             <th>Libelle</th>
                                            <th>Type</th>
                                            <th>Categorie</th>
                                          
                                          

                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        
                                       ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches")));
            foreach ($context['_seq'] as $context["_key"] => $context["recherche"]) {
                // line 42
                echo "                                          
                                        <tr>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "libelle"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "typedeal"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "categorie"), "html", null, true);
                echo "</td>
                                      
                                        <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_supprimer", array("id" => $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "iddeal"))), "html", null, true);
                echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce Deal</a></td>  

                                        </tr>
                                        
                            
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recherche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                                           </tbody>
                                </table>
                                     
                                                                            
                                
                            </div>          
                             ";
        } else {
            // line 60
            echo "         
                                   
                                           <div class=\"alert alert-danger\">
                                Aucun resultat pour votre recherche. <a href=prestataire class=\"alert-link\">Rechercher</a>.   
                             ";
        }
        // line 65
        echo "                                 
                            </div>
                        </div>
                    </div>
                           
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').dataTable();
    });
    </script>

    
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:rechercheD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  110 => 54,  81 => 42,  58 => 25,  124 => 75,  174 => 115,  185 => 145,  181 => 144,  20 => 1,  165 => 112,  161 => 111,  76 => 38,  34 => 7,  129 => 40,  53 => 19,  155 => 108,  148 => 106,  137 => 42,  118 => 35,  114 => 34,  23 => 4,  194 => 101,  188 => 98,  153 => 109,  127 => 62,  97 => 47,  84 => 40,  276 => 136,  259 => 128,  249 => 124,  236 => 117,  231 => 115,  210 => 100,  202 => 95,  225 => 112,  207 => 113,  184 => 80,  150 => 108,  146 => 107,  104 => 54,  100 => 57,  77 => 41,  65 => 18,  90 => 30,  134 => 67,  113 => 74,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 130,  258 => 147,  252 => 80,  247 => 78,  241 => 119,  229 => 73,  220 => 70,  214 => 69,  177 => 143,  169 => 136,  140 => 45,  132 => 59,  128 => 64,  107 => 48,  61 => 17,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 130,  230 => 128,  227 => 122,  224 => 71,  221 => 77,  219 => 123,  217 => 75,  208 => 68,  204 => 136,  179 => 69,  159 => 109,  143 => 92,  135 => 43,  119 => 60,  102 => 58,  71 => 19,  67 => 15,  63 => 27,  59 => 14,  38 => 8,  94 => 53,  89 => 45,  85 => 44,  75 => 36,  68 => 27,  56 => 15,  87 => 25,  21 => 1,  26 => 12,  93 => 46,  88 => 52,  78 => 22,  46 => 7,  27 => 5,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 118,  171 => 139,  166 => 73,  163 => 110,  158 => 71,  156 => 66,  151 => 107,  142 => 44,  138 => 60,  136 => 66,  121 => 62,  117 => 55,  105 => 49,  91 => 26,  62 => 24,  49 => 19,  24 => 7,  25 => 4,  19 => 2,  79 => 35,  72 => 16,  69 => 36,  47 => 9,  40 => 10,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 52,  139 => 45,  131 => 47,  123 => 37,  120 => 59,  115 => 35,  111 => 58,  108 => 55,  101 => 48,  98 => 48,  96 => 28,  83 => 25,  74 => 21,  66 => 15,  55 => 22,  52 => 21,  50 => 10,  43 => 16,  41 => 11,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 103,  193 => 150,  189 => 71,  187 => 84,  182 => 66,  176 => 88,  173 => 114,  168 => 72,  164 => 59,  162 => 72,  154 => 70,  149 => 51,  147 => 58,  144 => 105,  141 => 48,  133 => 41,  130 => 41,  125 => 39,  122 => 43,  116 => 74,  112 => 66,  109 => 32,  106 => 36,  103 => 56,  99 => 55,  95 => 54,  92 => 53,  86 => 29,  82 => 23,  80 => 39,  73 => 37,  64 => 17,  60 => 26,  57 => 23,  54 => 10,  51 => 18,  48 => 15,  45 => 17,  42 => 9,  39 => 7,  36 => 7,  33 => 12,  30 => 2,);
    }
}
