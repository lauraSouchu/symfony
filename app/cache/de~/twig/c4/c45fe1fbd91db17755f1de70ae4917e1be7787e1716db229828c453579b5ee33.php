<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_af4967d1a708ee0fb554915f1faebd38c8620c3eccbd0c0f287e3c945f04e960 extends Twig_Template
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
        $__internal_3dc78cd4017c5c8691ddb68ef15629db858f5362c8e97d5692aed65f036407ad = $this->env->getExtension("native_profiler");
        $__internal_3dc78cd4017c5c8691ddb68ef15629db858f5362c8e97d5692aed65f036407ad->enter($__internal_3dc78cd4017c5c8691ddb68ef15629db858f5362c8e97d5692aed65f036407ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc78cd4017c5c8691ddb68ef15629db858f5362c8e97d5692aed65f036407ad->leave($__internal_3dc78cd4017c5c8691ddb68ef15629db858f5362c8e97d5692aed65f036407ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df20239ac60fe7e08cf2406c3fa3c848b16cd68f882f0d4d1d0e9cbc76e54def = $this->env->getExtension("native_profiler");
        $__internal_df20239ac60fe7e08cf2406c3fa3c848b16cd68f882f0d4d1d0e9cbc76e54def->enter($__internal_df20239ac60fe7e08cf2406c3fa3c848b16cd68f882f0d4d1d0e9cbc76e54def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_df20239ac60fe7e08cf2406c3fa3c848b16cd68f882f0d4d1d0e9cbc76e54def->leave($__internal_df20239ac60fe7e08cf2406c3fa3c848b16cd68f882f0d4d1d0e9cbc76e54def_prof);

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
