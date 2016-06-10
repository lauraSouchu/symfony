<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4bd3d918786c3af6279a10744f509a9d2b1464eefe98863d763b5ccd2bc39bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_423e1fed2cad12284e9cf40230988ee59e844e19bf1fbf90a68c041f0604323e = $this->env->getExtension("native_profiler");
        $__internal_423e1fed2cad12284e9cf40230988ee59e844e19bf1fbf90a68c041f0604323e->enter($__internal_423e1fed2cad12284e9cf40230988ee59e844e19bf1fbf90a68c041f0604323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423e1fed2cad12284e9cf40230988ee59e844e19bf1fbf90a68c041f0604323e->leave($__internal_423e1fed2cad12284e9cf40230988ee59e844e19bf1fbf90a68c041f0604323e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9805578d72b8f89a2c7e20b11bd7f59aefcde756791250ce60a2f33838ddcaa2 = $this->env->getExtension("native_profiler");
        $__internal_9805578d72b8f89a2c7e20b11bd7f59aefcde756791250ce60a2f33838ddcaa2->enter($__internal_9805578d72b8f89a2c7e20b11bd7f59aefcde756791250ce60a2f33838ddcaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9805578d72b8f89a2c7e20b11bd7f59aefcde756791250ce60a2f33838ddcaa2->leave($__internal_9805578d72b8f89a2c7e20b11bd7f59aefcde756791250ce60a2f33838ddcaa2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
