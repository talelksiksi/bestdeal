<?php

/* AdminAdminBundle:Default:prest_a_Valider.html.twig */
class __TwigTemplate_33509ef3699e35e58a5b1b2745c38ebd5f98d8dbe22896b1ca521cf2ceeb588e extends Twig_Template
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
                    <h1 class=\"page-header\">Liste Prestataires a valider</h1>
                </div>
                  <div class=\"col-lg-2\">
                <img src=\"";
        // line 10
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
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    <thead>
                                        <tr>
                                            <th>Societe</th>
                                        <th>Adresse</th>
                                      
                                          <th>Email</th>
                                            <th>Telephone</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prests"]) ? $context["prests"] : $this->getContext($context, "prests")));
        foreach ($context['_seq'] as $context["_key"] => $context["prest"]) {
            // line 37
            echo "                                        <tr>
                                         <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "societe"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "adresse"), "html", null, true);
            echo "</td>
                                           
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "email"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "telephone"), "html", null, true);
            echo "</td>
                           <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prest_supprimer", array("id" => $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce prestataire</a>
                           <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_admin_ValiderP", array("id" => $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-outline btn-success btn-block\">Valider ce prestataire</a></td>            

                                        </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                                    </tbody>
                                </table>
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
        return "AdminAdminBundle:Default:prest_a_Valider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  97 => 44,  93 => 43,  89 => 42,  85 => 41,  80 => 39,  76 => 38,  73 => 37,  69 => 36,  40 => 10,  31 => 3,  28 => 2,);
    }
}
