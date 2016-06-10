<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a9cb7d9b04981b5e3346b8a8c925a764e96e41eef170fdbc90ae962132da688d extends Twig_Template
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
        $__internal_7cd1de65e372436c302521fa15639fb124a836386aca1b32e371d8147f604832 = $this->env->getExtension("native_profiler");
        $__internal_7cd1de65e372436c302521fa15639fb124a836386aca1b32e371d8147f604832->enter($__internal_7cd1de65e372436c302521fa15639fb124a836386aca1b32e371d8147f604832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7cd1de65e372436c302521fa15639fb124a836386aca1b32e371d8147f604832->leave($__internal_7cd1de65e372436c302521fa15639fb124a836386aca1b32e371d8147f604832_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
