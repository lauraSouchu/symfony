<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_475eb581f41f93c9e360c856960bed8bfb8e7832f454099b9c16dee5da7afa5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_33c0a93ebf9ea332d62178652415b0635aa64b13e537b116ba1f0bce47e9d832 = $this->env->getExtension("native_profiler");
        $__internal_33c0a93ebf9ea332d62178652415b0635aa64b13e537b116ba1f0bce47e9d832->enter($__internal_33c0a93ebf9ea332d62178652415b0635aa64b13e537b116ba1f0bce47e9d832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c0a93ebf9ea332d62178652415b0635aa64b13e537b116ba1f0bce47e9d832->leave($__internal_33c0a93ebf9ea332d62178652415b0635aa64b13e537b116ba1f0bce47e9d832_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b18199ade451fe1aff51ae6ee8620f8b145d0b6bf1ca70b1f52ca1b552dc1ab8 = $this->env->getExtension("native_profiler");
        $__internal_b18199ade451fe1aff51ae6ee8620f8b145d0b6bf1ca70b1f52ca1b552dc1ab8->enter($__internal_b18199ade451fe1aff51ae6ee8620f8b145d0b6bf1ca70b1f52ca1b552dc1ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_b18199ade451fe1aff51ae6ee8620f8b145d0b6bf1ca70b1f52ca1b552dc1ab8->leave($__internal_b18199ade451fe1aff51ae6ee8620f8b145d0b6bf1ca70b1f52ca1b552dc1ab8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
