<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6f0df8563655e57312d3fa9fb85bce2ea7597bdf2c6226d133d7aab4523d76f9 extends Twig_Template
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
        $__internal_6a43eb45bfa8ff0e6ad912da7520c4baf8c0aff69297918169850f1a01e37473 = $this->env->getExtension("native_profiler");
        $__internal_6a43eb45bfa8ff0e6ad912da7520c4baf8c0aff69297918169850f1a01e37473->enter($__internal_6a43eb45bfa8ff0e6ad912da7520c4baf8c0aff69297918169850f1a01e37473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6a43eb45bfa8ff0e6ad912da7520c4baf8c0aff69297918169850f1a01e37473->leave($__internal_6a43eb45bfa8ff0e6ad912da7520c4baf8c0aff69297918169850f1a01e37473_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
