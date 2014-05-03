<?php

/* AdminAdminBundle:Default:client.html.twig */
class __TwigTemplate_21a48cf9379444faf43f583419097ea44b41f7df83b44c38489c5af525aaca50 extends Twig_Template
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
                    <h1 class=\"page-header\">Liste Clients</h1>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 33
            echo "                                        <tr>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "login"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "role"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe"), "html", null, true);
            echo "</td>


                                        </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "AdminAdminBundle:Default:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  66 => 33,  62 => 32,  31 => 3,  28 => 2,);
    }
}
