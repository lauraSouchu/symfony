<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_760406ac577226101cffc17ad50cc0de1f6e324de3167b9f22c529c7b520e25d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d5b62a231dd8f313bb841928c7d341006b2b8bca615a8928b57560eaaead6e90 = $this->env->getExtension("native_profiler");
        $__internal_d5b62a231dd8f313bb841928c7d341006b2b8bca615a8928b57560eaaead6e90->enter($__internal_d5b62a231dd8f313bb841928c7d341006b2b8bca615a8928b57560eaaead6e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b62a231dd8f313bb841928c7d341006b2b8bca615a8928b57560eaaead6e90->leave($__internal_d5b62a231dd8f313bb841928c7d341006b2b8bca615a8928b57560eaaead6e90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce8a84597027be078ec64cb0e3ad4dea56e708467ccbae8e238ab77bd0b6ec1a = $this->env->getExtension("native_profiler");
        $__internal_ce8a84597027be078ec64cb0e3ad4dea56e708467ccbae8e238ab77bd0b6ec1a->enter($__internal_ce8a84597027be078ec64cb0e3ad4dea56e708467ccbae8e238ab77bd0b6ec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_ce8a84597027be078ec64cb0e3ad4dea56e708467ccbae8e238ab77bd0b6ec1a->leave($__internal_ce8a84597027be078ec64cb0e3ad4dea56e708467ccbae8e238ab77bd0b6ec1a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
