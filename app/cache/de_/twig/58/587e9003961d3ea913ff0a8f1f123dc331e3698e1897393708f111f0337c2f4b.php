<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_d8ac5089e43b7f2c94f7627c8224b40cc1b4ff37967433a1645fb4460ead40ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_328c94d72fa89f90a0667602a60489cb702928e5652331b9f238a65434236858 = $this->env->getExtension("native_profiler");
        $__internal_328c94d72fa89f90a0667602a60489cb702928e5652331b9f238a65434236858->enter($__internal_328c94d72fa89f90a0667602a60489cb702928e5652331b9f238a65434236858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328c94d72fa89f90a0667602a60489cb702928e5652331b9f238a65434236858->leave($__internal_328c94d72fa89f90a0667602a60489cb702928e5652331b9f238a65434236858_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e3ec1dce92c699ac5f1fcdeb5c8c11362b5fdbfff47c8d5841761f79ed6fe3c = $this->env->getExtension("native_profiler");
        $__internal_3e3ec1dce92c699ac5f1fcdeb5c8c11362b5fdbfff47c8d5841761f79ed6fe3c->enter($__internal_3e3ec1dce92c699ac5f1fcdeb5c8c11362b5fdbfff47c8d5841761f79ed6fe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_3e3ec1dce92c699ac5f1fcdeb5c8c11362b5fdbfff47c8d5841761f79ed6fe3c->leave($__internal_3e3ec1dce92c699ac5f1fcdeb5c8c11362b5fdbfff47c8d5841761f79ed6fe3c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
