<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c286b24c212aaa53da4bbdd2d047b6c4930afac86fa0f8dc853e88bbaa5bf077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_1ff113b58f41064c6c6e43931662806a1a89723583e1d0f2e765af733305c6bf = $this->env->getExtension("native_profiler");
        $__internal_1ff113b58f41064c6c6e43931662806a1a89723583e1d0f2e765af733305c6bf->enter($__internal_1ff113b58f41064c6c6e43931662806a1a89723583e1d0f2e765af733305c6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff113b58f41064c6c6e43931662806a1a89723583e1d0f2e765af733305c6bf->leave($__internal_1ff113b58f41064c6c6e43931662806a1a89723583e1d0f2e765af733305c6bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da309286fb7a6109d9bc59b13afd6cc8c8f3c4d2f19b5a0c2f1f39c7943b3bc3 = $this->env->getExtension("native_profiler");
        $__internal_da309286fb7a6109d9bc59b13afd6cc8c8f3c4d2f19b5a0c2f1f39c7943b3bc3->enter($__internal_da309286fb7a6109d9bc59b13afd6cc8c8f3c4d2f19b5a0c2f1f39c7943b3bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_da309286fb7a6109d9bc59b13afd6cc8c8f3c4d2f19b5a0c2f1f39c7943b3bc3->leave($__internal_da309286fb7a6109d9bc59b13afd6cc8c8f3c4d2f19b5a0c2f1f39c7943b3bc3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
