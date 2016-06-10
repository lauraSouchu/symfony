<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f94fa10c61f31b1989e67aa116b7a973cf555c64ea170777d1ce23624ab939a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e169138cc60bb05ed90a577034aa6b05b02adf4a06ccabbec349786cab7c659 = $this->env->getExtension("native_profiler");
        $__internal_6e169138cc60bb05ed90a577034aa6b05b02adf4a06ccabbec349786cab7c659->enter($__internal_6e169138cc60bb05ed90a577034aa6b05b02adf4a06ccabbec349786cab7c659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e169138cc60bb05ed90a577034aa6b05b02adf4a06ccabbec349786cab7c659->leave($__internal_6e169138cc60bb05ed90a577034aa6b05b02adf4a06ccabbec349786cab7c659_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4762919902364d85b6762c7e0fb74f018d90b9616aad0cdc4386e0450e2d8d5a = $this->env->getExtension("native_profiler");
        $__internal_4762919902364d85b6762c7e0fb74f018d90b9616aad0cdc4386e0450e2d8d5a->enter($__internal_4762919902364d85b6762c7e0fb74f018d90b9616aad0cdc4386e0450e2d8d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4762919902364d85b6762c7e0fb74f018d90b9616aad0cdc4386e0450e2d8d5a->leave($__internal_4762919902364d85b6762c7e0fb74f018d90b9616aad0cdc4386e0450e2d8d5a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
