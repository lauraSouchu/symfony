<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0e3e5ea76d8db9cb77366c8fbe432e0252ffbb2402a8eafeb2dc2e6fa8d2f91f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fbede72c32b727babd0d94f8dc16a53fedffa9f7567da3ef978af754de7746ed = $this->env->getExtension("native_profiler");
        $__internal_fbede72c32b727babd0d94f8dc16a53fedffa9f7567da3ef978af754de7746ed->enter($__internal_fbede72c32b727babd0d94f8dc16a53fedffa9f7567da3ef978af754de7746ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbede72c32b727babd0d94f8dc16a53fedffa9f7567da3ef978af754de7746ed->leave($__internal_fbede72c32b727babd0d94f8dc16a53fedffa9f7567da3ef978af754de7746ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_088a996b28dd52ef4b567fc0a85fb4bd44b2bc73d2c79cda54cb950db6a98003 = $this->env->getExtension("native_profiler");
        $__internal_088a996b28dd52ef4b567fc0a85fb4bd44b2bc73d2c79cda54cb950db6a98003->enter($__internal_088a996b28dd52ef4b567fc0a85fb4bd44b2bc73d2c79cda54cb950db6a98003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_088a996b28dd52ef4b567fc0a85fb4bd44b2bc73d2c79cda54cb950db6a98003->leave($__internal_088a996b28dd52ef4b567fc0a85fb4bd44b2bc73d2c79cda54cb950db6a98003_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
