<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_effee0b5b696be45e997852084699a604a3be0e9376068ee11fd3f0838cc7b43 extends Twig_Template
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
        $__internal_e0366b7eeaae08f399fc7269852130e2f7c6ec5244267b8cff8693204a377217 = $this->env->getExtension("native_profiler");
        $__internal_e0366b7eeaae08f399fc7269852130e2f7c6ec5244267b8cff8693204a377217->enter($__internal_e0366b7eeaae08f399fc7269852130e2f7c6ec5244267b8cff8693204a377217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e0366b7eeaae08f399fc7269852130e2f7c6ec5244267b8cff8693204a377217->leave($__internal_e0366b7eeaae08f399fc7269852130e2f7c6ec5244267b8cff8693204a377217_prof);

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
