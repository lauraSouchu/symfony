<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_86a8a80dd3dab155798d11faa08c55df3a1ad3ff3edc5204e2848468b7c1cab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2bed54678a84b1e141f19a12598c14e51e87239d625d011b02238f35c79a7a89 = $this->env->getExtension("native_profiler");
        $__internal_2bed54678a84b1e141f19a12598c14e51e87239d625d011b02238f35c79a7a89->enter($__internal_2bed54678a84b1e141f19a12598c14e51e87239d625d011b02238f35c79a7a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bed54678a84b1e141f19a12598c14e51e87239d625d011b02238f35c79a7a89->leave($__internal_2bed54678a84b1e141f19a12598c14e51e87239d625d011b02238f35c79a7a89_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8dc25b917ace785400afa6c00a0bb39fe0a312eb9405f2f9dbc3add2ef47c93 = $this->env->getExtension("native_profiler");
        $__internal_a8dc25b917ace785400afa6c00a0bb39fe0a312eb9405f2f9dbc3add2ef47c93->enter($__internal_a8dc25b917ace785400afa6c00a0bb39fe0a312eb9405f2f9dbc3add2ef47c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a8dc25b917ace785400afa6c00a0bb39fe0a312eb9405f2f9dbc3add2ef47c93->leave($__internal_a8dc25b917ace785400afa6c00a0bb39fe0a312eb9405f2f9dbc3add2ef47c93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
