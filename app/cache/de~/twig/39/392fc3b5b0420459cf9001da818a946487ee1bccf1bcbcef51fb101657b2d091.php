<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_518e7f976be5ea58f1c00b6e280cb8cdc470e2394a4bcd4b554c47aa3d87ccc8 extends Twig_Template
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
        $__internal_a522cccff7843d9e43c2eb6c267d28c4048c3a40e1beaa0cbfcea2814bebc112 = $this->env->getExtension("native_profiler");
        $__internal_a522cccff7843d9e43c2eb6c267d28c4048c3a40e1beaa0cbfcea2814bebc112->enter($__internal_a522cccff7843d9e43c2eb6c267d28c4048c3a40e1beaa0cbfcea2814bebc112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a522cccff7843d9e43c2eb6c267d28c4048c3a40e1beaa0cbfcea2814bebc112->leave($__internal_a522cccff7843d9e43c2eb6c267d28c4048c3a40e1beaa0cbfcea2814bebc112_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de41a9f670f3c45b2909ee13bbf6f988bffb14ce550c887f0c8c073e88847e06 = $this->env->getExtension("native_profiler");
        $__internal_de41a9f670f3c45b2909ee13bbf6f988bffb14ce550c887f0c8c073e88847e06->enter($__internal_de41a9f670f3c45b2909ee13bbf6f988bffb14ce550c887f0c8c073e88847e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_de41a9f670f3c45b2909ee13bbf6f988bffb14ce550c887f0c8c073e88847e06->leave($__internal_de41a9f670f3c45b2909ee13bbf6f988bffb14ce550c887f0c8c073e88847e06_prof);

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
