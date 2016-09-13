<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_2a28bac02f9419826e994d3967b0053cf69979909935d344d28a1defe0beee9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_095a87aa8310a9d11d43d69e2aafa7fa5851019e880208b8c1066a8225dcb2cf = $this->env->getExtension("native_profiler");
        $__internal_095a87aa8310a9d11d43d69e2aafa7fa5851019e880208b8c1066a8225dcb2cf->enter($__internal_095a87aa8310a9d11d43d69e2aafa7fa5851019e880208b8c1066a8225dcb2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <title>MT</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/users.css"), "html", null, true);
        echo "\">

</head>
<body>
<header class=\"header\">
    <div class=\"header_wrap\">
        <div class=\"center\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/MT.jpg"), "html", null, true);
        echo "\" class=\"logo-img\"/>
            </a>
            <button onclick=\"window.location.href='";
        // line 17
        echo $this->env->getExtension('routing')->getPath("users");
        echo "'\" class=\"button\">Inicia Sesion</button>
        </div>
    </div>
</header>
<p>Loco</p>

<main class=\"main\">
    ";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 26
        echo "</main>

<footer class=\"footer\">

</footer>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_095a87aa8310a9d11d43d69e2aafa7fa5851019e880208b8c1066a8225dcb2cf->leave($__internal_095a87aa8310a9d11d43d69e2aafa7fa5851019e880208b8c1066a8225dcb2cf_prof);

    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        $__internal_b7b6309e4927248640bbfa77d28b374d5802676336e27e663ee794d4b9b10450 = $this->env->getExtension("native_profiler");
        $__internal_b7b6309e4927248640bbfa77d28b374d5802676336e27e663ee794d4b9b10450->enter($__internal_b7b6309e4927248640bbfa77d28b374d5802676336e27e663ee794d4b9b10450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 25
        echo "    ";
        
        $__internal_b7b6309e4927248640bbfa77d28b374d5802676336e27e663ee794d4b9b10450->leave($__internal_b7b6309e4927248640bbfa77d28b374d5802676336e27e663ee794d4b9b10450_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 32,  72 => 31,  65 => 26,  63 => 24,  53 => 17,  48 => 15,  44 => 14,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="es">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>MT</title>*/
/*     <link rel="stylesheet" href="{{ asset("bundles/app/css/bootstrap.min.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("bundles/app/css/users.css") }}">*/
/* */
/* </head>*/
/* <body>*/
/* <header class="header">*/
/*     <div class="header_wrap">*/
/*         <div class="center">*/
/*             <a href="{{ path('homepage') }}">*/
/*                 <img src="{{ asset('bundles/app/images/MT.jpg') }}" class="logo-img"/>*/
/*             </a>*/
/*             <button onclick="window.location.href='{{ path('users') }}'" class="button">Inicia Sesion</button>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* <p>Loco</p>*/
/* */
/* <main class="main">*/
/*     {% block main %}*/
/*     {% endblock %}*/
/* </main>*/
/* */
/* <footer class="footer">*/
/* */
/* </footer>*/
/* <script src="{{ asset('bundles/app/js/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/* </body>*/
/* </html>*/
