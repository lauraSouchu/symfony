<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5cb91ad06d26f5b00de905bf243f713d72e840f951e17e54c6d60cec2b246fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_9c9841af3d96138e612dddfd1548401cdd5b1c7e35cec9154214461dcc74cf25 = $this->env->getExtension("native_profiler");
        $__internal_9c9841af3d96138e612dddfd1548401cdd5b1c7e35cec9154214461dcc74cf25->enter($__internal_9c9841af3d96138e612dddfd1548401cdd5b1c7e35cec9154214461dcc74cf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c9841af3d96138e612dddfd1548401cdd5b1c7e35cec9154214461dcc74cf25->leave($__internal_9c9841af3d96138e612dddfd1548401cdd5b1c7e35cec9154214461dcc74cf25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2a9bcfb76614a90f09c88cc63e357593e0f9150fbac39bf31b1578b7e527f56 = $this->env->getExtension("native_profiler");
        $__internal_c2a9bcfb76614a90f09c88cc63e357593e0f9150fbac39bf31b1578b7e527f56->enter($__internal_c2a9bcfb76614a90f09c88cc63e357593e0f9150fbac39bf31b1578b7e527f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c2a9bcfb76614a90f09c88cc63e357593e0f9150fbac39bf31b1578b7e527f56->leave($__internal_c2a9bcfb76614a90f09c88cc63e357593e0f9150fbac39bf31b1578b7e527f56_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
