<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f43e2675a011d4e6ff1fa0d8d5191a97a2ed01de14f402e3d3ff6a2dc1fad3bd extends Twig_Template
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
        $__internal_f5748f2a210cdcd18a9108306066a4751930eb4b16210e5ee6167cb9c38d67fc = $this->env->getExtension("native_profiler");
        $__internal_f5748f2a210cdcd18a9108306066a4751930eb4b16210e5ee6167cb9c38d67fc->enter($__internal_f5748f2a210cdcd18a9108306066a4751930eb4b16210e5ee6167cb9c38d67fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5748f2a210cdcd18a9108306066a4751930eb4b16210e5ee6167cb9c38d67fc->leave($__internal_f5748f2a210cdcd18a9108306066a4751930eb4b16210e5ee6167cb9c38d67fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8001ab125e84bea8d08559e7b611fa2ed307da5c18a889760bad42f35c1cba16 = $this->env->getExtension("native_profiler");
        $__internal_8001ab125e84bea8d08559e7b611fa2ed307da5c18a889760bad42f35c1cba16->enter($__internal_8001ab125e84bea8d08559e7b611fa2ed307da5c18a889760bad42f35c1cba16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8001ab125e84bea8d08559e7b611fa2ed307da5c18a889760bad42f35c1cba16->leave($__internal_8001ab125e84bea8d08559e7b611fa2ed307da5c18a889760bad42f35c1cba16_prof);

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
