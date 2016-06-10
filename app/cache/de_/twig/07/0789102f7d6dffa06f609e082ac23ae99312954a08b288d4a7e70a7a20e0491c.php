<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1c33112a44f397b22a99779e5c1865c0639be486389cb64e5c7b8a9ec45b076d extends Twig_Template
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
        $__internal_1daa0a75d3bdc42006a3cac526aab34bc9b821ace0deb261f7b1bc52a07e6713 = $this->env->getExtension("native_profiler");
        $__internal_1daa0a75d3bdc42006a3cac526aab34bc9b821ace0deb261f7b1bc52a07e6713->enter($__internal_1daa0a75d3bdc42006a3cac526aab34bc9b821ace0deb261f7b1bc52a07e6713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1daa0a75d3bdc42006a3cac526aab34bc9b821ace0deb261f7b1bc52a07e6713->leave($__internal_1daa0a75d3bdc42006a3cac526aab34bc9b821ace0deb261f7b1bc52a07e6713_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2687378c79a1f0c4360f535fa287371bfa2636c618bf6d63aca78e29ca2dffe0 = $this->env->getExtension("native_profiler");
        $__internal_2687378c79a1f0c4360f535fa287371bfa2636c618bf6d63aca78e29ca2dffe0->enter($__internal_2687378c79a1f0c4360f535fa287371bfa2636c618bf6d63aca78e29ca2dffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2687378c79a1f0c4360f535fa287371bfa2636c618bf6d63aca78e29ca2dffe0->leave($__internal_2687378c79a1f0c4360f535fa287371bfa2636c618bf6d63aca78e29ca2dffe0_prof);

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
