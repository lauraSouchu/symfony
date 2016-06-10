<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_49ce5f3305b8fbc6394c3c8c9ca16c843f15f818fcced6f60ab4f61666b407ab extends Twig_Template
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
        $__internal_cb2bd4f80cbf33baeddb9e87df7749ace94643dadd6805d859ceb7c4a4772a29 = $this->env->getExtension("native_profiler");
        $__internal_cb2bd4f80cbf33baeddb9e87df7749ace94643dadd6805d859ceb7c4a4772a29->enter($__internal_cb2bd4f80cbf33baeddb9e87df7749ace94643dadd6805d859ceb7c4a4772a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cb2bd4f80cbf33baeddb9e87df7749ace94643dadd6805d859ceb7c4a4772a29->leave($__internal_cb2bd4f80cbf33baeddb9e87df7749ace94643dadd6805d859ceb7c4a4772a29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
