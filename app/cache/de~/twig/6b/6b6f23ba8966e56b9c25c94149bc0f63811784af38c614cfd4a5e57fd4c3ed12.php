<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7a027fdeb11a80ba6290572546cf483686a3569ccccb391c3676ee86989a4a19 extends Twig_Template
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
        $__internal_00a22d325ba913bf91530677d5d0f54e292dcbf3e5d0c7ff623fcd0943cdc8c6 = $this->env->getExtension("native_profiler");
        $__internal_00a22d325ba913bf91530677d5d0f54e292dcbf3e5d0c7ff623fcd0943cdc8c6->enter($__internal_00a22d325ba913bf91530677d5d0f54e292dcbf3e5d0c7ff623fcd0943cdc8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a22d325ba913bf91530677d5d0f54e292dcbf3e5d0c7ff623fcd0943cdc8c6->leave($__internal_00a22d325ba913bf91530677d5d0f54e292dcbf3e5d0c7ff623fcd0943cdc8c6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82361fd5ded20be4e800517e0adffe340f5bfa97ccd6f07693f96e1a4d22b2e6 = $this->env->getExtension("native_profiler");
        $__internal_82361fd5ded20be4e800517e0adffe340f5bfa97ccd6f07693f96e1a4d22b2e6->enter($__internal_82361fd5ded20be4e800517e0adffe340f5bfa97ccd6f07693f96e1a4d22b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_82361fd5ded20be4e800517e0adffe340f5bfa97ccd6f07693f96e1a4d22b2e6->leave($__internal_82361fd5ded20be4e800517e0adffe340f5bfa97ccd6f07693f96e1a4d22b2e6_prof);

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
