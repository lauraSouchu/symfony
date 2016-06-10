<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5ac3b32857d2d3a3b04909340c8641919a6277379e64b5d57e7e755bd71b0dba extends Twig_Template
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
        $__internal_e96bc678a801ea743cce478bcb66a9a1302aed2e278e321b57ae9b1ceb9e58be = $this->env->getExtension("native_profiler");
        $__internal_e96bc678a801ea743cce478bcb66a9a1302aed2e278e321b57ae9b1ceb9e58be->enter($__internal_e96bc678a801ea743cce478bcb66a9a1302aed2e278e321b57ae9b1ceb9e58be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96bc678a801ea743cce478bcb66a9a1302aed2e278e321b57ae9b1ceb9e58be->leave($__internal_e96bc678a801ea743cce478bcb66a9a1302aed2e278e321b57ae9b1ceb9e58be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ceca0f6ddf28720eb637363fb173daadbc25c51aef09b6c28906c3b4ae24026 = $this->env->getExtension("native_profiler");
        $__internal_2ceca0f6ddf28720eb637363fb173daadbc25c51aef09b6c28906c3b4ae24026->enter($__internal_2ceca0f6ddf28720eb637363fb173daadbc25c51aef09b6c28906c3b4ae24026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2ceca0f6ddf28720eb637363fb173daadbc25c51aef09b6c28906c3b4ae24026->leave($__internal_2ceca0f6ddf28720eb637363fb173daadbc25c51aef09b6c28906c3b4ae24026_prof);

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
