<?php

/* AdminAdminBundle:Default:rechercheP.html.twig */
class __TwigTemplate_9671bc68fdd7122790873edb4bf768124d18fd97695c3c4d16da5c43643378b9 extends Twig_Template
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
                                            <th>Societe</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                          <th>Email</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        
                                       ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches")));
            foreach ($context['_seq'] as $context["_key"] => $context["recherche"]) {
                // line 40
                echo "                                          
                                        <tr>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "societe"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "adresse"), "html", null, true);
                echo "</td>
                                           
                                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "email"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "telephone"), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prest_supprimer", array("id" => $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce prestataire</a></td>

                                        </tr>
                                        
                             
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recherche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                                    </tbody>
                                </table>
                                     
                                                                            
                                
                            </div>
                                      
                             ";
        } else {
            // line 60
            echo "         
                                   
                                           <div class=\"alert alert-danger\">
                                Aucun resultat pour votre recherche. <a href=deal class=\"alert-link\">Rechercher</a>.   
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
        return "AdminAdminBundle:Default:rechercheP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  110 => 54,  58 => 25,  124 => 75,  100 => 47,  53 => 19,  84 => 40,  174 => 115,  155 => 108,  148 => 106,  97 => 47,  197 => 154,  185 => 148,  181 => 147,  175 => 143,  20 => 1,  165 => 112,  161 => 111,  153 => 109,  150 => 108,  146 => 107,  76 => 38,  34 => 7,  134 => 67,  129 => 65,  118 => 34,  114 => 33,  81 => 42,  77 => 41,  23 => 4,  90 => 24,  127 => 62,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 113,  140 => 55,  132 => 39,  128 => 49,  107 => 48,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 140,  204 => 72,  179 => 69,  159 => 109,  143 => 92,  135 => 53,  119 => 60,  102 => 58,  71 => 19,  67 => 26,  63 => 27,  59 => 14,  38 => 8,  94 => 53,  89 => 45,  85 => 44,  75 => 39,  68 => 17,  56 => 21,  87 => 43,  21 => 1,  26 => 12,  93 => 46,  88 => 52,  78 => 21,  46 => 10,  27 => 5,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 118,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 66,  151 => 107,  142 => 59,  138 => 54,  136 => 41,  121 => 62,  117 => 55,  105 => 49,  91 => 27,  62 => 24,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 40,  72 => 18,  69 => 36,  47 => 9,  40 => 10,  37 => 13,  22 => 3,  246 => 90,  157 => 110,  145 => 46,  139 => 45,  131 => 52,  123 => 36,  120 => 40,  115 => 34,  111 => 58,  108 => 36,  101 => 48,  98 => 48,  96 => 46,  83 => 42,  74 => 14,  66 => 15,  55 => 13,  52 => 21,  50 => 11,  43 => 16,  41 => 11,  35 => 8,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 149,  187 => 84,  182 => 66,  176 => 64,  173 => 140,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 105,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 60,  116 => 41,  112 => 53,  109 => 31,  106 => 36,  103 => 56,  99 => 55,  95 => 54,  92 => 45,  86 => 23,  82 => 22,  80 => 39,  73 => 37,  64 => 14,  60 => 26,  57 => 23,  54 => 10,  51 => 18,  48 => 15,  45 => 17,  42 => 9,  39 => 7,  36 => 6,  33 => 12,  30 => 2,);
    }
}
