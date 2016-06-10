<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a62af46693846c5b2d96f6e868f03af28423caf048d5088034acfdaef4cdbb83 extends Twig_Template
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
        $__internal_39a45361f61d5abdde642d6e97b960c90c6dba3a757954aff4105dc8892755f1 = $this->env->getExtension("native_profiler");
        $__internal_39a45361f61d5abdde642d6e97b960c90c6dba3a757954aff4105dc8892755f1->enter($__internal_39a45361f61d5abdde642d6e97b960c90c6dba3a757954aff4105dc8892755f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_39a45361f61d5abdde642d6e97b960c90c6dba3a757954aff4105dc8892755f1->leave($__internal_39a45361f61d5abdde642d6e97b960c90c6dba3a757954aff4105dc8892755f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
