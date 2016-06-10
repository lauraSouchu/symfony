<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9c8eba601b91897cc60c4fb54af6f488039194e06c779c10d7aad608fce9a78e extends Twig_Template
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
        $__internal_a401eb2fd58a89420ac316df9af85d3b2d9caf53c282f5e24303867a843e0100 = $this->env->getExtension("native_profiler");
        $__internal_a401eb2fd58a89420ac316df9af85d3b2d9caf53c282f5e24303867a843e0100->enter($__internal_a401eb2fd58a89420ac316df9af85d3b2d9caf53c282f5e24303867a843e0100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a401eb2fd58a89420ac316df9af85d3b2d9caf53c282f5e24303867a843e0100->leave($__internal_a401eb2fd58a89420ac316df9af85d3b2d9caf53c282f5e24303867a843e0100_prof);

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
