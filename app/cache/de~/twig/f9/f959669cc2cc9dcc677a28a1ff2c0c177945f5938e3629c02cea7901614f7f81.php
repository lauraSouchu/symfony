<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_714a3b8c3cbeafe98de2b27500cb89722dd47b3eeee0663324f7adc69032bbc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_54ef5822a88e24fa18db0076e9ae7133636874140151e7bcc57014f5c2566a72 = $this->env->getExtension("native_profiler");
        $__internal_54ef5822a88e24fa18db0076e9ae7133636874140151e7bcc57014f5c2566a72->enter($__internal_54ef5822a88e24fa18db0076e9ae7133636874140151e7bcc57014f5c2566a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ef5822a88e24fa18db0076e9ae7133636874140151e7bcc57014f5c2566a72->leave($__internal_54ef5822a88e24fa18db0076e9ae7133636874140151e7bcc57014f5c2566a72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b784eddca267a553c49908530ba9bc242c5cd420664ea896631cd0a1da9c268 = $this->env->getExtension("native_profiler");
        $__internal_6b784eddca267a553c49908530ba9bc242c5cd420664ea896631cd0a1da9c268->enter($__internal_6b784eddca267a553c49908530ba9bc242c5cd420664ea896631cd0a1da9c268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6b784eddca267a553c49908530ba9bc242c5cd420664ea896631cd0a1da9c268->leave($__internal_6b784eddca267a553c49908530ba9bc242c5cd420664ea896631cd0a1da9c268_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
