<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_69225630ab557a23fed4de2780099d61677453f4572a19bc0758ffc5f9906d5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d5c716f002119b8a0618a9be3610f59b5f6a4619d70ddea14ce106abacfa8635 = $this->env->getExtension("native_profiler");
        $__internal_d5c716f002119b8a0618a9be3610f59b5f6a4619d70ddea14ce106abacfa8635->enter($__internal_d5c716f002119b8a0618a9be3610f59b5f6a4619d70ddea14ce106abacfa8635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c716f002119b8a0618a9be3610f59b5f6a4619d70ddea14ce106abacfa8635->leave($__internal_d5c716f002119b8a0618a9be3610f59b5f6a4619d70ddea14ce106abacfa8635_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_041ef39de749794f6f9c2c50c97d9dba864046d4739c948fefe07dd62b39ff8e = $this->env->getExtension("native_profiler");
        $__internal_041ef39de749794f6f9c2c50c97d9dba864046d4739c948fefe07dd62b39ff8e->enter($__internal_041ef39de749794f6f9c2c50c97d9dba864046d4739c948fefe07dd62b39ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_041ef39de749794f6f9c2c50c97d9dba864046d4739c948fefe07dd62b39ff8e->leave($__internal_041ef39de749794f6f9c2c50c97d9dba864046d4739c948fefe07dd62b39ff8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
