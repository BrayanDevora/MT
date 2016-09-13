<?php

/* AppBundle:Users:index.html.twig */
class __TwigTemplate_001074967211c16b83a379e360abbf894c351698d33c133473a4622b52c3d7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fad43415ba8ee00084181cbfc7219b90f0d959fcfa9255482468ca49e229b4e6 = $this->env->getExtension("native_profiler");
        $__internal_fad43415ba8ee00084181cbfc7219b90f0d959fcfa9255482468ca49e229b4e6->enter($__internal_fad43415ba8ee00084181cbfc7219b90f0d959fcfa9255482468ca49e229b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Users:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <title>Login</title>
</head>
<body>
<header>

</header>

<style>
    .no-float {
        float: none;
    }
    .errors {
        color: red;
    }
    .top-10 {
        margin-top: 10px;
    }
    @media (max-width: 770px) {
        .col-ssm-6 {
            width: 80%;
        }
        .col-ssm-3 {
            width: 30%;
        }
    }

</style>

<div class=\"full-container\">

    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "        <div class=\"alert alert-danger top-10\">
            <p>";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    <form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\" method=\"post\">
        <div class=\"col-md-7 col-lg-7 col-sm-7 no-float center-block\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                    <label for=\"name\">Nombre</label>
                    <input id=\"name\" name=\"name\" type=\"text\" class=\"form-control\"
                           ";
        // line 47
        if (array_key_exists("name", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" ";
        }
        echo ">
                    <p class=\"errors\">";
        // line 48
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "name", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "name", array()), "html", null, true);
        }
        echo "</p>
                </div>
                <div class=\"col-md-6 col-sm-6\">
                    <label for=\"lastName\">Apellidos</label>
                    <input id=\"lastName\" name=\"lastName\" type=\"text\" class=\"form-control\"
                            ";
        // line 53
        if (array_key_exists("lastName", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["lastName"]) ? $context["lastName"] : $this->getContext($context, "lastName")), "html", null, true);
            echo "\"";
        }
        echo ">
                    <p class=\"errors\">";
        // line 54
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "lastName", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "lastName", array()), "html", null, true);
        }
        echo "</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                    <label for=\"email\">Correo electronico</label>
                    <input id=\"email\" name=\"email\" type=\"email\" class=\"form-control\"
                           ";
        // line 61
        if (array_key_exists("email", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "\"";
        }
        echo ">
                    <p class=\"errors\">";
        // line 62
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "email", array()), "html", null, true);
        }
        echo "</p>
                </div>
                <div class=\"col-md-6 col-sm-6\">
                    <label for=\"password\">Contraseña</label>
                    <input id=\"password\" name=\"password\" type=\"password\" class=\"form-control\">
                    <p class=\"errors\">";
        // line 67
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), "password", array()), "html", null, true);
        }
        echo "</p>
                </div>
            </div>
            <div class=\"row\" style=\"margin-top: 10px\">
                <div class=\"col-md-6 col-sm-6\">
                    <button type=\"submit\" class=\"btn btn-primary\">Crear</button>
                </div>
            </div>
        </div>
    </form>
</div>

<footer>

</footer>
</body>
</html>";
        
        $__internal_fad43415ba8ee00084181cbfc7219b90f0d959fcfa9255482468ca49e229b4e6->leave($__internal_fad43415ba8ee00084181cbfc7219b90f0d959fcfa9255482468ca49e229b4e6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 67,  133 => 62,  125 => 61,  113 => 54,  105 => 53,  94 => 48,  86 => 47,  77 => 41,  74 => 40,  65 => 37,  62 => 36,  58 => 35,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="es">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Login</title>*/
/* </head>*/
/* <body>*/
/* <header>*/
/* */
/* </header>*/
/* */
/* <style>*/
/*     .no-float {*/
/*         float: none;*/
/*     }*/
/*     .errors {*/
/*         color: red;*/
/*     }*/
/*     .top-10 {*/
/*         margin-top: 10px;*/
/*     }*/
/*     @media (max-width: 770px) {*/
/*         .col-ssm-6 {*/
/*             width: 80%;*/
/*         }*/
/*         .col-ssm-3 {*/
/*             width: 30%;*/
/*         }*/
/*     }*/
/* */
/* </style>*/
/* */
/* <div class="full-container">*/
/* */
/*     {% for message in app.session.flashBag.get("warning") %}*/
/*         <div class="alert alert-danger top-10">*/
/*             <p>{{ message }}</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <form action="{{ path("users") }}" method="post">*/
/*         <div class="col-md-7 col-lg-7 col-sm-7 no-float center-block">*/
/*             <div class="row">*/
/*                 <div class="col-md-6 col-sm-6">*/
/*                     <label for="name">Nombre</label>*/
/*                     <input id="name" name="name" type="text" class="form-control"*/
/*                            {% if name is defined %}value="{{ name }}" {% endif %}>*/
/*                     <p class="errors">{% if errors.name is defined %} {{ errors.name }}{% endif %}</p>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6">*/
/*                     <label for="lastName">Apellidos</label>*/
/*                     <input id="lastName" name="lastName" type="text" class="form-control"*/
/*                             {% if lastName is defined %} value="{{ lastName }}"{% endif %}>*/
/*                     <p class="errors">{% if errors.lastName is defined %}{{ errors.lastName }}{% endif %}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-6 col-sm-6">*/
/*                     <label for="email">Correo electronico</label>*/
/*                     <input id="email" name="email" type="email" class="form-control"*/
/*                            {% if email is defined %}value="{{ email }}"{% endif %}>*/
/*                     <p class="errors">{% if errors.email is defined %}{{ errors.email }}{% endif %}</p>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6">*/
/*                     <label for="password">Contraseña</label>*/
/*                     <input id="password" name="password" type="password" class="form-control">*/
/*                     <p class="errors">{% if errors.password is defined %}{{ errors.password }}{% endif %}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row" style="margin-top: 10px">*/
/*                 <div class="col-md-6 col-sm-6">*/
/*                     <button type="submit" class="btn btn-primary">Crear</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
/* <footer>*/
/* */
/* </footer>*/
/* </body>*/
/* </html>*/
