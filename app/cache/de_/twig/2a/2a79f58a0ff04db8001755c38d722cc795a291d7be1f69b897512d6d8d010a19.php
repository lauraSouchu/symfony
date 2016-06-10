<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3ee614976811714f69edff08898a4f590b4910bf2d1a0d211606b519bc42f2bc extends Twig_Template
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
        $__internal_a75d957d2c26a9c2668c688810428b9f4095ada8de37ef68d9d070075efb4ead = $this->env->getExtension("native_profiler");
        $__internal_a75d957d2c26a9c2668c688810428b9f4095ada8de37ef68d9d070075efb4ead->enter($__internal_a75d957d2c26a9c2668c688810428b9f4095ada8de37ef68d9d070075efb4ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a75d957d2c26a9c2668c688810428b9f4095ada8de37ef68d9d070075efb4ead->leave($__internal_a75d957d2c26a9c2668c688810428b9f4095ada8de37ef68d9d070075efb4ead_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
