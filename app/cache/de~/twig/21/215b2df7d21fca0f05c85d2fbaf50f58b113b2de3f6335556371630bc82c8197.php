<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_665244d66f8a3013a7d36e451270f6afdd7a744bf3d889dfc7d03f14f4d92eb1 extends Twig_Template
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
        $__internal_6539d9764e6bba67965ed87a4068134e517cc12ed8d87a3e2c50dac4570d8f64 = $this->env->getExtension("native_profiler");
        $__internal_6539d9764e6bba67965ed87a4068134e517cc12ed8d87a3e2c50dac4570d8f64->enter($__internal_6539d9764e6bba67965ed87a4068134e517cc12ed8d87a3e2c50dac4570d8f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6539d9764e6bba67965ed87a4068134e517cc12ed8d87a3e2c50dac4570d8f64->leave($__internal_6539d9764e6bba67965ed87a4068134e517cc12ed8d87a3e2c50dac4570d8f64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de310253e955926ce25e86d71786c5f33fb0007c33e858a132f4ca7da967d5f2 = $this->env->getExtension("native_profiler");
        $__internal_de310253e955926ce25e86d71786c5f33fb0007c33e858a132f4ca7da967d5f2->enter($__internal_de310253e955926ce25e86d71786c5f33fb0007c33e858a132f4ca7da967d5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_de310253e955926ce25e86d71786c5f33fb0007c33e858a132f4ca7da967d5f2->leave($__internal_de310253e955926ce25e86d71786c5f33fb0007c33e858a132f4ca7da967d5f2_prof);

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
