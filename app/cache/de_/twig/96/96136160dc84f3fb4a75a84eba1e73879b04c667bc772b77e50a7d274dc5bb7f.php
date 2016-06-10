<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2726c9cbe700f1965f4c7f72e3e3511ad20a56f3375b9570a80fda709d21ae7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_679f7a1bf857d08862a369d856de2dc9185decb7e2634d1e5d724bb8d04bac2b = $this->env->getExtension("native_profiler");
        $__internal_679f7a1bf857d08862a369d856de2dc9185decb7e2634d1e5d724bb8d04bac2b->enter($__internal_679f7a1bf857d08862a369d856de2dc9185decb7e2634d1e5d724bb8d04bac2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_679f7a1bf857d08862a369d856de2dc9185decb7e2634d1e5d724bb8d04bac2b->leave($__internal_679f7a1bf857d08862a369d856de2dc9185decb7e2634d1e5d724bb8d04bac2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e0013cf966c10d7b32654b0369fe1817252e5a5980df58a8d93807aa5802928 = $this->env->getExtension("native_profiler");
        $__internal_1e0013cf966c10d7b32654b0369fe1817252e5a5980df58a8d93807aa5802928->enter($__internal_1e0013cf966c10d7b32654b0369fe1817252e5a5980df58a8d93807aa5802928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1e0013cf966c10d7b32654b0369fe1817252e5a5980df58a8d93807aa5802928->leave($__internal_1e0013cf966c10d7b32654b0369fe1817252e5a5980df58a8d93807aa5802928_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
