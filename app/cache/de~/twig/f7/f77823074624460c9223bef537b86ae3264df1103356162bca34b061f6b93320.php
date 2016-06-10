<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b82b7bedd8a73433135b8f93c2c06d71f7464c254832670c1a5879b4f2946668 extends Twig_Template
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
        $__internal_f101e186d98de4c611ee9600714fdb3d845b474216d7f72cc3660bed0baf5edd = $this->env->getExtension("native_profiler");
        $__internal_f101e186d98de4c611ee9600714fdb3d845b474216d7f72cc3660bed0baf5edd->enter($__internal_f101e186d98de4c611ee9600714fdb3d845b474216d7f72cc3660bed0baf5edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f101e186d98de4c611ee9600714fdb3d845b474216d7f72cc3660bed0baf5edd->leave($__internal_f101e186d98de4c611ee9600714fdb3d845b474216d7f72cc3660bed0baf5edd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
