<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_19806d2c329e40b5a93b95e43cc95edd8f3afe3060e77ad67f08b84268e7b165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_e7ce3151462583d08c93486d6f69b46d1d1877c9396c5d885f1a66ff1dc79c14 = $this->env->getExtension("native_profiler");
        $__internal_e7ce3151462583d08c93486d6f69b46d1d1877c9396c5d885f1a66ff1dc79c14->enter($__internal_e7ce3151462583d08c93486d6f69b46d1d1877c9396c5d885f1a66ff1dc79c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ce3151462583d08c93486d6f69b46d1d1877c9396c5d885f1a66ff1dc79c14->leave($__internal_e7ce3151462583d08c93486d6f69b46d1d1877c9396c5d885f1a66ff1dc79c14_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4023c550b7775cea5a8e4fa1762e7aa484507d9afda269cb1de173f2b3ca915 = $this->env->getExtension("native_profiler");
        $__internal_e4023c550b7775cea5a8e4fa1762e7aa484507d9afda269cb1de173f2b3ca915->enter($__internal_e4023c550b7775cea5a8e4fa1762e7aa484507d9afda269cb1de173f2b3ca915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e4023c550b7775cea5a8e4fa1762e7aa484507d9afda269cb1de173f2b3ca915->leave($__internal_e4023c550b7775cea5a8e4fa1762e7aa484507d9afda269cb1de173f2b3ca915_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
