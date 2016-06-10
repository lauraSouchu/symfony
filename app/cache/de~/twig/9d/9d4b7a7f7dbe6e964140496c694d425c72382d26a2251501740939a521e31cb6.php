<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_86a0b5d2fef4682df378c7d13112625938fb4bc1b1f3c0d75d16587b632cc650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b77297c276b6854203923a180bd7e87b895f37e2f74464a115f04ed0f4a8d310 = $this->env->getExtension("native_profiler");
        $__internal_b77297c276b6854203923a180bd7e87b895f37e2f74464a115f04ed0f4a8d310->enter($__internal_b77297c276b6854203923a180bd7e87b895f37e2f74464a115f04ed0f4a8d310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b77297c276b6854203923a180bd7e87b895f37e2f74464a115f04ed0f4a8d310->leave($__internal_b77297c276b6854203923a180bd7e87b895f37e2f74464a115f04ed0f4a8d310_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d359608e81aacded6752cc7b07f026cf67efcdfb33df43af54fbe12621f09a7a = $this->env->getExtension("native_profiler");
        $__internal_d359608e81aacded6752cc7b07f026cf67efcdfb33df43af54fbe12621f09a7a->enter($__internal_d359608e81aacded6752cc7b07f026cf67efcdfb33df43af54fbe12621f09a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d359608e81aacded6752cc7b07f026cf67efcdfb33df43af54fbe12621f09a7a->leave($__internal_d359608e81aacded6752cc7b07f026cf67efcdfb33df43af54fbe12621f09a7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
