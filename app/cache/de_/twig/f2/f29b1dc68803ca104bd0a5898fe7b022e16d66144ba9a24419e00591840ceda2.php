<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5052a46bdda9733f7389bd3690cba06cb8cddbeb7f8ea2a3214806e0755da299 extends Twig_Template
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
        $__internal_f7a3ad2d68822ce34c9fa513e4c2c51eacee99b3602cf5693b9c1773f7abb46b = $this->env->getExtension("native_profiler");
        $__internal_f7a3ad2d68822ce34c9fa513e4c2c51eacee99b3602cf5693b9c1773f7abb46b->enter($__internal_f7a3ad2d68822ce34c9fa513e4c2c51eacee99b3602cf5693b9c1773f7abb46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f7a3ad2d68822ce34c9fa513e4c2c51eacee99b3602cf5693b9c1773f7abb46b->leave($__internal_f7a3ad2d68822ce34c9fa513e4c2c51eacee99b3602cf5693b9c1773f7abb46b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
