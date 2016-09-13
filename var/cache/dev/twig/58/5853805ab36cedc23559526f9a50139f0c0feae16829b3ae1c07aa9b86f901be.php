<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_46bcf6daed4bfdd76c1fbe2d085d1ff8c83f6fdfc596a5b8ea4ae74f50270bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e50c5e98f85017826b421b7414f74c09fb61d5e121e9c24f83e856064c00bd1c = $this->env->getExtension("native_profiler");
        $__internal_e50c5e98f85017826b421b7414f74c09fb61d5e121e9c24f83e856064c00bd1c->enter($__internal_e50c5e98f85017826b421b7414f74c09fb61d5e121e9c24f83e856064c00bd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50c5e98f85017826b421b7414f74c09fb61d5e121e9c24f83e856064c00bd1c->leave($__internal_e50c5e98f85017826b421b7414f74c09fb61d5e121e9c24f83e856064c00bd1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03e2f896f70dc32c446fc390761e69aadb0553be2cff658af177c83c07dbfd8c = $this->env->getExtension("native_profiler");
        $__internal_03e2f896f70dc32c446fc390761e69aadb0553be2cff658af177c83c07dbfd8c->enter($__internal_03e2f896f70dc32c446fc390761e69aadb0553be2cff658af177c83c07dbfd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03e2f896f70dc32c446fc390761e69aadb0553be2cff658af177c83c07dbfd8c->leave($__internal_03e2f896f70dc32c446fc390761e69aadb0553be2cff658af177c83c07dbfd8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a64ad38ebc01ddbca1b7641c3d537553c37448f9abe364e137ac8279d3bc7fbe = $this->env->getExtension("native_profiler");
        $__internal_a64ad38ebc01ddbca1b7641c3d537553c37448f9abe364e137ac8279d3bc7fbe->enter($__internal_a64ad38ebc01ddbca1b7641c3d537553c37448f9abe364e137ac8279d3bc7fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a64ad38ebc01ddbca1b7641c3d537553c37448f9abe364e137ac8279d3bc7fbe->leave($__internal_a64ad38ebc01ddbca1b7641c3d537553c37448f9abe364e137ac8279d3bc7fbe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af3be26dcc55f3cafc8329d7e49be1c894de5f245349289dca9ba832a3b8a72 = $this->env->getExtension("native_profiler");
        $__internal_8af3be26dcc55f3cafc8329d7e49be1c894de5f245349289dca9ba832a3b8a72->enter($__internal_8af3be26dcc55f3cafc8329d7e49be1c894de5f245349289dca9ba832a3b8a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8af3be26dcc55f3cafc8329d7e49be1c894de5f245349289dca9ba832a3b8a72->leave($__internal_8af3be26dcc55f3cafc8329d7e49be1c894de5f245349289dca9ba832a3b8a72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
