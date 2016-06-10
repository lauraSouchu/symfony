<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_fc3064aa79a49549968026713d77e783ce9b03f6254f399cfb60f6169c6d9efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_d8542f6ee45acd5a48ab89fdb91291b2dfd154741067208f9f86d89d4f0ffd4b = $this->env->getExtension("native_profiler");
        $__internal_d8542f6ee45acd5a48ab89fdb91291b2dfd154741067208f9f86d89d4f0ffd4b->enter($__internal_d8542f6ee45acd5a48ab89fdb91291b2dfd154741067208f9f86d89d4f0ffd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8542f6ee45acd5a48ab89fdb91291b2dfd154741067208f9f86d89d4f0ffd4b->leave($__internal_d8542f6ee45acd5a48ab89fdb91291b2dfd154741067208f9f86d89d4f0ffd4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cdcc3d7584d8ebf9d488542e49fd4689259b616a8b5706bbac324a6b177b989 = $this->env->getExtension("native_profiler");
        $__internal_9cdcc3d7584d8ebf9d488542e49fd4689259b616a8b5706bbac324a6b177b989->enter($__internal_9cdcc3d7584d8ebf9d488542e49fd4689259b616a8b5706bbac324a6b177b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9cdcc3d7584d8ebf9d488542e49fd4689259b616a8b5706bbac324a6b177b989->leave($__internal_9cdcc3d7584d8ebf9d488542e49fd4689259b616a8b5706bbac324a6b177b989_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
