<?php

/* AdminAdminBundle:Default:prestataire.html.twig */
class __TwigTemplate_06ce7aee3a759256d0af39c8d8cbfa4e9975fe8c92b51b68f81b47c9253f29d1 extends Twig_Template
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
                <h1 class=\"page-header\">Liste Prestataires</h1>
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
          <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_rechercherP");
        echo "\" method=\"POST\">
      <div class=\"col-lg-8\">
      </div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"form-group input-group\" >
                            
                           
                                           
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\"name=\"recherche\" >
                                           
                                <span class=\"input-group-btn\">
                                <td> <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Rechercher\"/>               
                                 </span>
                           
                          </div>
\t\t\t</div>
                             </form>
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
                                        <th>Telephone</th>
                                          <th>Email</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prests"]) ? $context["prests"] : $this->getContext($context, "prests")));
        foreach ($context['_seq'] as $context["_key"] => $context["prest"]) {
            // line 53
            echo "                                        <tr>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "societe"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "adresse"), "html", null, true);
            echo "</td>
                                           <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "telephone"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "email"), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prest_supprimer", array("id" => $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce prestataire</a></td>            

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return "AdminAdminBundle:Default:prestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  111 => 58,  107 => 57,  103 => 56,  99 => 55,  95 => 54,  92 => 53,  88 => 52,  48 => 15,  40 => 10,  31 => 3,  28 => 2,);
    }
}
