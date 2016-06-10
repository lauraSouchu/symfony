<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_d9bdca700eb321ed1bb2d2a78d317e45f47d666703c3baf07ade9b1bd0ab1eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_bf8906267c5828740e93fb411e4ee524a70cf25ca450400b7cdcbb3a98c265a2 = $this->env->getExtension("native_profiler");
        $__internal_bf8906267c5828740e93fb411e4ee524a70cf25ca450400b7cdcbb3a98c265a2->enter($__internal_bf8906267c5828740e93fb411e4ee524a70cf25ca450400b7cdcbb3a98c265a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8906267c5828740e93fb411e4ee524a70cf25ca450400b7cdcbb3a98c265a2->leave($__internal_bf8906267c5828740e93fb411e4ee524a70cf25ca450400b7cdcbb3a98c265a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8471d920788ad6ab535ca7ec38dd62e6ce5f57b5f305088186a4c879eaaed8c = $this->env->getExtension("native_profiler");
        $__internal_a8471d920788ad6ab535ca7ec38dd62e6ce5f57b5f305088186a4c879eaaed8c->enter($__internal_a8471d920788ad6ab535ca7ec38dd62e6ce5f57b5f305088186a4c879eaaed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a8471d920788ad6ab535ca7ec38dd62e6ce5f57b5f305088186a4c879eaaed8c->leave($__internal_a8471d920788ad6ab535ca7ec38dd62e6ce5f57b5f305088186a4c879eaaed8c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
