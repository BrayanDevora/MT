<?php

/* AppBundle:Principal:index.html.twig */
class __TwigTemplate_a50ba48d23e3304c9d056ee02a00e176f0ee12d7e5f54ec1b107fe708c60c79b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Principal:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8533b564a0635c460a4dca4c0ee7457dac24e2a09256a4d222758564ef20cf35 = $this->env->getExtension("native_profiler");
        $__internal_8533b564a0635c460a4dca4c0ee7457dac24e2a09256a4d222758564ef20cf35->enter($__internal_8533b564a0635c460a4dca4c0ee7457dac24e2a09256a4d222758564ef20cf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Principal:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8533b564a0635c460a4dca4c0ee7457dac24e2a09256a4d222758564ef20cf35->leave($__internal_8533b564a0635c460a4dca4c0ee7457dac24e2a09256a4d222758564ef20cf35_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8184be097cdc141cc9bc79ccd230f01ef51fd2e5138a5cd08f796b2721a8ef7f = $this->env->getExtension("native_profiler");
        $__internal_8184be097cdc141cc9bc79ccd230f01ef51fd2e5138a5cd08f796b2721a8ef7f->enter($__internal_8184be097cdc141cc9bc79ccd230f01ef51fd2e5138a5cd08f796b2721a8ef7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_8184be097cdc141cc9bc79ccd230f01ef51fd2e5138a5cd08f796b2721a8ef7f->leave($__internal_8184be097cdc141cc9bc79ccd230f01ef51fd2e5138a5cd08f796b2721a8ef7f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Principal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::base.html.twig" %}*/
/* */
/* {%  block main %}*/
/* */
/* {% endblock %}*/
