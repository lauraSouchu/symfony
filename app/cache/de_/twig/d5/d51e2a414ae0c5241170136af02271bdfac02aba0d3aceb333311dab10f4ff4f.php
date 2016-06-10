<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_674cdab196352cf4295ebe3391b4ca3fa64c3e3f2c43dd2a8004658903c1fa5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_a112ec4b04bf59b7105e0c20c5489b5566ed386ab0c5871ae8cd505634548749 = $this->env->getExtension("native_profiler");
        $__internal_a112ec4b04bf59b7105e0c20c5489b5566ed386ab0c5871ae8cd505634548749->enter($__internal_a112ec4b04bf59b7105e0c20c5489b5566ed386ab0c5871ae8cd505634548749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a112ec4b04bf59b7105e0c20c5489b5566ed386ab0c5871ae8cd505634548749->leave($__internal_a112ec4b04bf59b7105e0c20c5489b5566ed386ab0c5871ae8cd505634548749_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bbad6797182d12d200005ae31369d5390b744f1b324ef78cbe3a1cbea57439f = $this->env->getExtension("native_profiler");
        $__internal_0bbad6797182d12d200005ae31369d5390b744f1b324ef78cbe3a1cbea57439f->enter($__internal_0bbad6797182d12d200005ae31369d5390b744f1b324ef78cbe3a1cbea57439f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_0bbad6797182d12d200005ae31369d5390b744f1b324ef78cbe3a1cbea57439f->leave($__internal_0bbad6797182d12d200005ae31369d5390b744f1b324ef78cbe3a1cbea57439f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
