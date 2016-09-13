<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_294023c4fe77c5fafd42bdb769c71e279072168ff87570d5f1f17be0a92da847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e04f81d7fe3a188e1cded9ca6b49b820156eb794e507020bd4abdc646ff9ee0e = $this->env->getExtension("native_profiler");
        $__internal_e04f81d7fe3a188e1cded9ca6b49b820156eb794e507020bd4abdc646ff9ee0e->enter($__internal_e04f81d7fe3a188e1cded9ca6b49b820156eb794e507020bd4abdc646ff9ee0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e04f81d7fe3a188e1cded9ca6b49b820156eb794e507020bd4abdc646ff9ee0e->leave($__internal_e04f81d7fe3a188e1cded9ca6b49b820156eb794e507020bd4abdc646ff9ee0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2915d03cdab5f089ad6044bb07798c0339efa3bbaeddd20a0573717afc71bc90 = $this->env->getExtension("native_profiler");
        $__internal_2915d03cdab5f089ad6044bb07798c0339efa3bbaeddd20a0573717afc71bc90->enter($__internal_2915d03cdab5f089ad6044bb07798c0339efa3bbaeddd20a0573717afc71bc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2915d03cdab5f089ad6044bb07798c0339efa3bbaeddd20a0573717afc71bc90->leave($__internal_2915d03cdab5f089ad6044bb07798c0339efa3bbaeddd20a0573717afc71bc90_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_130abb9864f3c100590264b10004727ff778f956efd076cfe3a822b1d0b1cdb1 = $this->env->getExtension("native_profiler");
        $__internal_130abb9864f3c100590264b10004727ff778f956efd076cfe3a822b1d0b1cdb1->enter($__internal_130abb9864f3c100590264b10004727ff778f956efd076cfe3a822b1d0b1cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_130abb9864f3c100590264b10004727ff778f956efd076cfe3a822b1d0b1cdb1->leave($__internal_130abb9864f3c100590264b10004727ff778f956efd076cfe3a822b1d0b1cdb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_040e596706fa98c3c94185a6245cb197f17b12f71d5fafe4a508fd6d409c9e2f = $this->env->getExtension("native_profiler");
        $__internal_040e596706fa98c3c94185a6245cb197f17b12f71d5fafe4a508fd6d409c9e2f->enter($__internal_040e596706fa98c3c94185a6245cb197f17b12f71d5fafe4a508fd6d409c9e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_040e596706fa98c3c94185a6245cb197f17b12f71d5fafe4a508fd6d409c9e2f->leave($__internal_040e596706fa98c3c94185a6245cb197f17b12f71d5fafe4a508fd6d409c9e2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
