<?php

/* UserBundle:BestDeal:notification.html.twig */
class __TwigTemplate_d1c136f9b926c2af2f4216fb3472613ddec1b754c07f4d70a3c0a4c0030c2a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">

        <div class=\"row\">
           <div class=\"box\">
              <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Vos Notification
                    </h2>
                    <hr>
                </div>
        </div>
        </div>
     ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 16
            echo "    <div class=\"row\">
            <div class=\"box\">
                
                <div>
                <div class=\"col-md-8\">
                    <strong> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "message"), "html", null, true);
            echo "</strong>
                </div>
                <div class=\"col-md-4\">
                    <p>Objet: <strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "TypeNotification"), "html", null, true);
            echo "</strong>
                    </p>
                    
                    <p>Date de reception: <strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "datenotification"), "html", null, true);
            echo "</strong>
                    </p>
                     

                </div>
                </div>
                
                <div class=\"clearfix\"></div>
            </div>
        </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
   
    
        

    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  68 => 27,  62 => 24,  56 => 21,  49 => 16,  45 => 15,  31 => 3,  28 => 2,);
    }
}
