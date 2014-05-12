<?php

/* PrestataireDeServicesprestataireBundle:Deal:edit.html.twig */
class __TwigTemplate_de2dda60969d214a9bd9c1cfac6c90be0863dea632b4b1c0b759d7b01b0271c0 extends Twig_Template
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
        // line 5
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/inscri.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    
    
    <h1>Deal edit</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
     <li>";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("deal");
        echo "\">
            Back to the list
        </a>
    </li>
   
</ul>
";
    }

    public function getTemplateName()
    {
        return "PrestataireDeServicesprestataireBundle:Deal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  46 => 13,  40 => 10,  31 => 5,  28 => 3,);
    }
}
