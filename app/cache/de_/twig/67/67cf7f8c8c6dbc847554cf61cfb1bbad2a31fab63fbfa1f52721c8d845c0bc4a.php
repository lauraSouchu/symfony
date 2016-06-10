<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_636696b814f54eab7a0a1c7a626be3102097f8428014b1cdbb5644fd9a8d0625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_0cfb9f7d544d9c8a0ae2c853d1a9718c959bafef6315c1375eabf7fbda7a1a68 = $this->env->getExtension("native_profiler");
        $__internal_0cfb9f7d544d9c8a0ae2c853d1a9718c959bafef6315c1375eabf7fbda7a1a68->enter($__internal_0cfb9f7d544d9c8a0ae2c853d1a9718c959bafef6315c1375eabf7fbda7a1a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cfb9f7d544d9c8a0ae2c853d1a9718c959bafef6315c1375eabf7fbda7a1a68->leave($__internal_0cfb9f7d544d9c8a0ae2c853d1a9718c959bafef6315c1375eabf7fbda7a1a68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ee0181f4d117d651c3b3a7bd0ca95dc8d1593fcd07c923b03c15a917263481b = $this->env->getExtension("native_profiler");
        $__internal_8ee0181f4d117d651c3b3a7bd0ca95dc8d1593fcd07c923b03c15a917263481b->enter($__internal_8ee0181f4d117d651c3b3a7bd0ca95dc8d1593fcd07c923b03c15a917263481b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8ee0181f4d117d651c3b3a7bd0ca95dc8d1593fcd07c923b03c15a917263481b->leave($__internal_8ee0181f4d117d651c3b3a7bd0ca95dc8d1593fcd07c923b03c15a917263481b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
