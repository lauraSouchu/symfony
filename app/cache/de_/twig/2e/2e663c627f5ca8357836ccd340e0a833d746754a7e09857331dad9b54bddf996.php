<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_aee8219aba69519a8a27fefc59aab1a73ccf6597725e5ed9b807a7b301eae07b extends Twig_Template
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
        $__internal_502108eb64bcc94597a105f0d3aa5a97a763b739eaa603260ad74b7c192336d8 = $this->env->getExtension("native_profiler");
        $__internal_502108eb64bcc94597a105f0d3aa5a97a763b739eaa603260ad74b7c192336d8->enter($__internal_502108eb64bcc94597a105f0d3aa5a97a763b739eaa603260ad74b7c192336d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_502108eb64bcc94597a105f0d3aa5a97a763b739eaa603260ad74b7c192336d8->leave($__internal_502108eb64bcc94597a105f0d3aa5a97a763b739eaa603260ad74b7c192336d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
