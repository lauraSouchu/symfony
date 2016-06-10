<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_67949e34edbf06549605fc21d33255dbe8e257cc569670de25c95539099a5e8e extends Twig_Template
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
        $__internal_d3218df470228a51a2f05ae2ed05d3814c1d7fad06a8640eac1c3b022903ef8f = $this->env->getExtension("native_profiler");
        $__internal_d3218df470228a51a2f05ae2ed05d3814c1d7fad06a8640eac1c3b022903ef8f->enter($__internal_d3218df470228a51a2f05ae2ed05d3814c1d7fad06a8640eac1c3b022903ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d3218df470228a51a2f05ae2ed05d3814c1d7fad06a8640eac1c3b022903ef8f->leave($__internal_d3218df470228a51a2f05ae2ed05d3814c1d7fad06a8640eac1c3b022903ef8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
