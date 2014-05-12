<?php

/* PrestataireDeServicesprestataireBundle:Deal:show.html.twig */
class __TwigTemplate_ebe74056b5ab2e8cfb4e6d0287af3daf3acb1f24b92410a86fa1f0d43d659ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tools.min.js"), "html", null, true);
        echo "\"></script>
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/inscri.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
     
     <div class=\"row\" style=\" \">
  <div class=\"col-md-9\">
    
    <div class=\"row\">
        <div class=\"col-md-9\" >
            <h3 style=\"color: #ffffff ; border-bottom-color: #ffffff; border-bottom-style: groove \"  > ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
        echo "
          </h3>
        </div>
      <div class=\"col-md-6\" >
          
          <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "html", null, true);
        echo "\" height=\"200px\" width=\"300px\" class=\"img-rounded\">
      </div>
      <div class=\"col-md-6\">
        ";
        // line 20
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statut") == 1)) {
            // line 21
            echo "                <h5 style=\"color: #ffffff ;position: relative;left: 120px;font-family: Helvetica Neue,Helvetica,Arial,sans-serif\">Ce deal est valide</h5>
                ";
        } else {
            // line 23
            echo "                    <h2 style=\"color: #ffffff;position: relative;left: 10px\">Ce deal n'est pas valide</h2>
                    ";
        }
        // line 25
        echo "                
                
                
                <table  class=\"table-condensed\" style=\"position: relative;left: 120px\">
                                    <tr>
                                        <th style=\"font-size: 11px\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixinitial"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"font-size:  11px;font-family: Helvetica Neue,Helvetica,Arial,sans-serif\">Le Prix Promotionnel est :</th>
                <td style=\"font-size: 11px\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixpromotionnel"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"font-size: 11px\">la Date de debut</th>
                <td style=\"font-size: 11px\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datedebut"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"font-size: 11px\">la Date du fin</th>
                <td style=\"font-size: 11px\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datefin"), "html", null, true);
        echo "</td>
            </tr>
                    
                </table>
      </div>
    </div>
  </div>
</div>

     
    
     
        
    <hr/>
        
    
    <div  class=\"col-md-6\" style=\"float: left;margin-left: 10px\">
        
        
    </div>
                    <div class=\"row\">
    <table class=\"record_properties\" style=\"margin-left: 50px;border-radius: 10px;\">
        
        <tbody>
            
            <tr>
                <th style=\"color: #ffffff;font-size: large; \"><strong>Type de Deal</strong></th>
                <td style=\"color: #ffffff\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typedeal"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"color: #ffffff;font-size: large;\">Categorie</th>
                <td style=\"color: #ffffff\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie"), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                
            <tr>
                <th style=\"color: #ffffff;font-size: large;\">Quantite</th>
                <td style=\"color: #ffffff\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"color: #ffffff;font-size: large;\">Descriptif</th>
                <td style=\"color: #ffffff\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptif"), "html", null, true);
        echo "</td>
            </tr>
            
              
            
        </tbody>
    </table>
                                   </div>


    <script>
        \$(document).ready(function() {



            \$(function() {


                // if the function argument is given to overlay,
                // it is assumed to be the onBeforeLoad event listener
                \$(\"a[rel]\").overlay({
                    mask: 'darkred',
                    effect: 'apple',
                    onBeforeLoad: function() {
                        
                        // grab wrapper element inside content
                        var wrap = this.getOverlay().find(\".contentWrap\");

                        // load the page specified in the trigger
                        wrap.load(this.getTrigger().attr(\"href\"));
                    }

                });
            });
        });

    </script>






    <!-- /.navbar-collapse -->


    <div class=\"container\">

        <div class=\"row\">
                         


            <div class=\"apple_overlay\" id=\"overlay\">

                <div class=\"contentWrap\"></div>
            </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("deal");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" rel=\"#overlay\">
            Edit
        </a>
    </li>
    <li>";
        // line 152
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PrestataireDeServicesprestataireBundle:Deal:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 152,  222 => 148,  214 => 143,  152 => 84,  145 => 80,  135 => 73,  128 => 69,  98 => 42,  91 => 38,  84 => 34,  77 => 30,  70 => 25,  66 => 23,  62 => 21,  60 => 20,  54 => 17,  46 => 12,  36 => 5,  31 => 4,  28 => 3,);
    }
}
