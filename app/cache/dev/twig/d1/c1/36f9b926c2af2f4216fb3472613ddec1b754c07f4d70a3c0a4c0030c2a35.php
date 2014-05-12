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
                    <p>De: <strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</strong>
                    </p>
                    <p>Date de reception: <strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "datenotification"), "html", null, true);
            echo "</strong>
                    </p>
                     <button type=\"submit\" class=\"btn btn-default\">Delete</button>
                     <button type=\"submit\" class=\"btn btn-default\">Answer</button>

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
        // line 40
        echo "
   
    
        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Contact <strong>form</strong>
                    </h2>
                    <hr>
                    <p>This contact form is just the form elements, it is not a working form. You will have to make the form work by yourself, or take it out if you can't figure out how to make it work.</p>
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"form-group col-lg-4\">
                                <label>Name</label>
                                <input type=\"text\" class=\"form-control\">
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Email Address</label>
                                <input type=\"email\" class=\"form-control\">
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Phone Number</label>
                                <input type=\"tel\" class=\"form-control\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"form-group col-lg-12\">
                                <label>Message</label>
                                <textarea class=\"form-control\" rows=\"6\"></textarea>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <input type=\"hidden\" name=\"save\" value=\"contact\">
                                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
        return array (  90 => 40,  72 => 28,  67 => 26,  62 => 24,  56 => 21,  49 => 16,  45 => 15,  31 => 3,  28 => 2,);
    }
}
