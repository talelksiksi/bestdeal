<?php

/* PrestataireDeServicesprestataireBundle:Deal:new.html.twig */
class __TwigTemplate_c8527cd1bfebf5d5a96a12260395a9d0dc2b377fe4989993050ae02e49b032fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jbir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<div>
    <h1 style=\"color: #ffffff; font-style: italic;font-family: serif; text-align: center\"><strong>Ajouter votre Deal </strong></h1>
    <hr/>
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
     
";
    }

    public function getTemplateName()
    {
        return "PrestataireDeServicesprestataireBundle:Deal:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  30 => 4,  24 => 3,  20 => 1,);
    }
}
