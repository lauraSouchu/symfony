<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0b0b5157e1b7249c4619c9c42c13b71bd4903b9a295ef34c5515cad49b88ebb5 extends Twig_Template
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
        $__internal_a88255ff8af2fd4bd643b3780e88773abbe6c8c2227fee251e70cf79e8e25cee = $this->env->getExtension("native_profiler");
        $__internal_a88255ff8af2fd4bd643b3780e88773abbe6c8c2227fee251e70cf79e8e25cee->enter($__internal_a88255ff8af2fd4bd643b3780e88773abbe6c8c2227fee251e70cf79e8e25cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a88255ff8af2fd4bd643b3780e88773abbe6c8c2227fee251e70cf79e8e25cee->leave($__internal_a88255ff8af2fd4bd643b3780e88773abbe6c8c2227fee251e70cf79e8e25cee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
