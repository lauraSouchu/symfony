<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_41bf74d665c2f800f2488ffb09a3cb9e0595c729ace7a71cb1be432c4480fef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e6e45f5fb1b22fedf6d1a3fb3e435670cb104f4fd28898a72f31f4d112f5467e = $this->env->getExtension("native_profiler");
        $__internal_e6e45f5fb1b22fedf6d1a3fb3e435670cb104f4fd28898a72f31f4d112f5467e->enter($__internal_e6e45f5fb1b22fedf6d1a3fb3e435670cb104f4fd28898a72f31f4d112f5467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e45f5fb1b22fedf6d1a3fb3e435670cb104f4fd28898a72f31f4d112f5467e->leave($__internal_e6e45f5fb1b22fedf6d1a3fb3e435670cb104f4fd28898a72f31f4d112f5467e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdac78b35880e9c289dcc4abae754c48ed71432943d013672cc90ea61f080893 = $this->env->getExtension("native_profiler");
        $__internal_cdac78b35880e9c289dcc4abae754c48ed71432943d013672cc90ea61f080893->enter($__internal_cdac78b35880e9c289dcc4abae754c48ed71432943d013672cc90ea61f080893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cdac78b35880e9c289dcc4abae754c48ed71432943d013672cc90ea61f080893->leave($__internal_cdac78b35880e9c289dcc4abae754c48ed71432943d013672cc90ea61f080893_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
