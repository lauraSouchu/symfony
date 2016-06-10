<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e1fcfb9d22c31fd2643431cba820e0986e1d7da572fb0263a8adfb0782e0f859 extends Twig_Template
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
        $__internal_cecdbc0a745b7aaa67416b230bf4bc8195c76aa8d07ff3d85e56720f2a82700a = $this->env->getExtension("native_profiler");
        $__internal_cecdbc0a745b7aaa67416b230bf4bc8195c76aa8d07ff3d85e56720f2a82700a->enter($__internal_cecdbc0a745b7aaa67416b230bf4bc8195c76aa8d07ff3d85e56720f2a82700a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cecdbc0a745b7aaa67416b230bf4bc8195c76aa8d07ff3d85e56720f2a82700a->leave($__internal_cecdbc0a745b7aaa67416b230bf4bc8195c76aa8d07ff3d85e56720f2a82700a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
