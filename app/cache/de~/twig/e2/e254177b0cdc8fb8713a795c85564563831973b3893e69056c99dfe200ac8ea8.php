<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_380b5aef9a83d4bdf221440e7d01f4be9ee2ac52990db1f9f4acc58ffe94c3b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f86b54616b4c6d369dce8a572d74062ee751e013e2cb9262c3c02b12921f7a7a = $this->env->getExtension("native_profiler");
        $__internal_f86b54616b4c6d369dce8a572d74062ee751e013e2cb9262c3c02b12921f7a7a->enter($__internal_f86b54616b4c6d369dce8a572d74062ee751e013e2cb9262c3c02b12921f7a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f86b54616b4c6d369dce8a572d74062ee751e013e2cb9262c3c02b12921f7a7a->leave($__internal_f86b54616b4c6d369dce8a572d74062ee751e013e2cb9262c3c02b12921f7a7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35073258fdbfd30de1b2fea91540a0cdf0331ddd93a47fade4a26a53c34b849b = $this->env->getExtension("native_profiler");
        $__internal_35073258fdbfd30de1b2fea91540a0cdf0331ddd93a47fade4a26a53c34b849b->enter($__internal_35073258fdbfd30de1b2fea91540a0cdf0331ddd93a47fade4a26a53c34b849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_35073258fdbfd30de1b2fea91540a0cdf0331ddd93a47fade4a26a53c34b849b->leave($__internal_35073258fdbfd30de1b2fea91540a0cdf0331ddd93a47fade4a26a53c34b849b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
