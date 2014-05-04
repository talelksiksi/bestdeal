<?php

/* AdminAdminBundle:Default:prestataire.html.twig */
class __TwigTemplate_6fa96e9cd13a1903189620d834e7958464b8dcee818c8659131119c82ff5d826 extends Twig_Template
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
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Liste Prestataires</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Login</th>
                                        <th>Role</th>
                                        <th>Sexe</th>
                                        <th>Sexe</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prests"]) ? $context["prests"] : $this->getContext($context, "prests")));
        foreach ($context['_seq'] as $context["_key"] => $context["prest"]) {
            // line 35
            echo "                                        <tr>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "nom"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "prenom"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "login"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "role"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "sexe"), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prest_supprimer", array("id" => $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "iduser"))), "html", null, true);
            echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce prestataire</a></td>            

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                                </tbody>
                            </table>
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
        return array (  101 => 45,  91 => 41,  87 => 40,  83 => 39,  79 => 38,  75 => 37,  71 => 36,  68 => 35,  64 => 34,  31 => 3,  28 => 2,);
    }
}
