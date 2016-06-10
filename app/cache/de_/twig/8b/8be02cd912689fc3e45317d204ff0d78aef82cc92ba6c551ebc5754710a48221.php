<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_815a7d668fa3282e713b752d3e46731038c81b66aa6171659aa54b0fbc175a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_e2aa0d75c7aa83abe82299605470c8996b8bbbb478120c15e7b144282fa8df47 = $this->env->getExtension("native_profiler");
        $__internal_e2aa0d75c7aa83abe82299605470c8996b8bbbb478120c15e7b144282fa8df47->enter($__internal_e2aa0d75c7aa83abe82299605470c8996b8bbbb478120c15e7b144282fa8df47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2aa0d75c7aa83abe82299605470c8996b8bbbb478120c15e7b144282fa8df47->leave($__internal_e2aa0d75c7aa83abe82299605470c8996b8bbbb478120c15e7b144282fa8df47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e598db658e805692839b640b5b42e20d699eedb39f6a4f9d969abd2d7aa0cf2 = $this->env->getExtension("native_profiler");
        $__internal_6e598db658e805692839b640b5b42e20d699eedb39f6a4f9d969abd2d7aa0cf2->enter($__internal_6e598db658e805692839b640b5b42e20d699eedb39f6a4f9d969abd2d7aa0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6e598db658e805692839b640b5b42e20d699eedb39f6a4f9d969abd2d7aa0cf2->leave($__internal_6e598db658e805692839b640b5b42e20d699eedb39f6a4f9d969abd2d7aa0cf2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
