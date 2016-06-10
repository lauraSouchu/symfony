<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_913bdcf82842132bf53cd13388404a4f58e8fda156a82c47b9ecc10b066bd76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3bd831d1a23d536b65823bc003ad3c27dcb961e6b1e2d009271cd40a97c2ef2a = $this->env->getExtension("native_profiler");
        $__internal_3bd831d1a23d536b65823bc003ad3c27dcb961e6b1e2d009271cd40a97c2ef2a->enter($__internal_3bd831d1a23d536b65823bc003ad3c27dcb961e6b1e2d009271cd40a97c2ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd831d1a23d536b65823bc003ad3c27dcb961e6b1e2d009271cd40a97c2ef2a->leave($__internal_3bd831d1a23d536b65823bc003ad3c27dcb961e6b1e2d009271cd40a97c2ef2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_570126204588264ab5eeccfd4e4717090245baf50a024c42e33565882920d518 = $this->env->getExtension("native_profiler");
        $__internal_570126204588264ab5eeccfd4e4717090245baf50a024c42e33565882920d518->enter($__internal_570126204588264ab5eeccfd4e4717090245baf50a024c42e33565882920d518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_570126204588264ab5eeccfd4e4717090245baf50a024c42e33565882920d518->leave($__internal_570126204588264ab5eeccfd4e4717090245baf50a024c42e33565882920d518_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
