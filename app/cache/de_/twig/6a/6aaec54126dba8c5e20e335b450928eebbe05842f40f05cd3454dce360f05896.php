<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_643dd0172ca13d00d75adf7556adf040f31e2b9b6c945cad419bfbfd225888f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7c73ec89925feb1b62ceec13bd4cfe3fb33e763de43c00696c5844f5b9f84d43 = $this->env->getExtension("native_profiler");
        $__internal_7c73ec89925feb1b62ceec13bd4cfe3fb33e763de43c00696c5844f5b9f84d43->enter($__internal_7c73ec89925feb1b62ceec13bd4cfe3fb33e763de43c00696c5844f5b9f84d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c73ec89925feb1b62ceec13bd4cfe3fb33e763de43c00696c5844f5b9f84d43->leave($__internal_7c73ec89925feb1b62ceec13bd4cfe3fb33e763de43c00696c5844f5b9f84d43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d47e64a844ed2c8aa587ae4e7da15c060a28f9efd9035ada3115e12e729634e6 = $this->env->getExtension("native_profiler");
        $__internal_d47e64a844ed2c8aa587ae4e7da15c060a28f9efd9035ada3115e12e729634e6->enter($__internal_d47e64a844ed2c8aa587ae4e7da15c060a28f9efd9035ada3115e12e729634e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d47e64a844ed2c8aa587ae4e7da15c060a28f9efd9035ada3115e12e729634e6->leave($__internal_d47e64a844ed2c8aa587ae4e7da15c060a28f9efd9035ada3115e12e729634e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
