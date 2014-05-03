<?php

/* UserBundle:BestDeal:about.html.twig */
class __TwigTemplate_bebbec4d473f58db76c887bf96292337f621dd0f24b27ed7a84074befa53af5a extends Twig_Template
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
                    <h2 class=\"intro-text text-center\">About <strong>business casual</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-md-6\">
                    <img class=\"img-responsive img-border-left\" src=\"img/slide-2.jpg\" alt=\"\">
                </div>
                <div class=\"col-md-6\">
                    <p>This is a great place to introduce your company or project and describe what you do.</p>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Our <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
