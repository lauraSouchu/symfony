<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_02a09d248e4438d441d1039886916a9dc118c2dd394b55b5f47938d0202a1cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_8160e93ce0e931b363df7d5764f253ffa2e12629d53848c84022e3bf57073166 = $this->env->getExtension("native_profiler");
        $__internal_8160e93ce0e931b363df7d5764f253ffa2e12629d53848c84022e3bf57073166->enter($__internal_8160e93ce0e931b363df7d5764f253ffa2e12629d53848c84022e3bf57073166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8160e93ce0e931b363df7d5764f253ffa2e12629d53848c84022e3bf57073166->leave($__internal_8160e93ce0e931b363df7d5764f253ffa2e12629d53848c84022e3bf57073166_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dc8968cebc3dc37667e0ff778143d449460621d1a50aa437fb07812f9887b7f = $this->env->getExtension("native_profiler");
        $__internal_0dc8968cebc3dc37667e0ff778143d449460621d1a50aa437fb07812f9887b7f->enter($__internal_0dc8968cebc3dc37667e0ff778143d449460621d1a50aa437fb07812f9887b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0dc8968cebc3dc37667e0ff778143d449460621d1a50aa437fb07812f9887b7f->leave($__internal_0dc8968cebc3dc37667e0ff778143d449460621d1a50aa437fb07812f9887b7f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
