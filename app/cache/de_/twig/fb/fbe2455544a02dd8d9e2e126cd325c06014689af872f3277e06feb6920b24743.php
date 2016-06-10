<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_30589efaa00e6548ab9d84cf48357089a9fa9cd9a7dc5f1e910ce8eab53e1611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_44c6cc2d6a4c861dc88e5427b3ca06abe2adf1cd0412642337c16a0757ea6aeb = $this->env->getExtension("native_profiler");
        $__internal_44c6cc2d6a4c861dc88e5427b3ca06abe2adf1cd0412642337c16a0757ea6aeb->enter($__internal_44c6cc2d6a4c861dc88e5427b3ca06abe2adf1cd0412642337c16a0757ea6aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c6cc2d6a4c861dc88e5427b3ca06abe2adf1cd0412642337c16a0757ea6aeb->leave($__internal_44c6cc2d6a4c861dc88e5427b3ca06abe2adf1cd0412642337c16a0757ea6aeb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c029a0bcad12176c02f93753003e4f4e2735a9add2b0917376c5b3faf6f2d61 = $this->env->getExtension("native_profiler");
        $__internal_5c029a0bcad12176c02f93753003e4f4e2735a9add2b0917376c5b3faf6f2d61->enter($__internal_5c029a0bcad12176c02f93753003e4f4e2735a9add2b0917376c5b3faf6f2d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5c029a0bcad12176c02f93753003e4f4e2735a9add2b0917376c5b3faf6f2d61->leave($__internal_5c029a0bcad12176c02f93753003e4f4e2735a9add2b0917376c5b3faf6f2d61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
