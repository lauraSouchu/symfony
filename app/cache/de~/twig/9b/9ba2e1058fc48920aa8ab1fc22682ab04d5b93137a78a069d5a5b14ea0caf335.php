<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7b9df38442b698b3983f4689c4059b5cc5f272f3668c3ea0ed4010763b127ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_991b12bdeec3b91cf2c24771db07ea81f2780fd77ed099d4b79e28fa733ce643 = $this->env->getExtension("native_profiler");
        $__internal_991b12bdeec3b91cf2c24771db07ea81f2780fd77ed099d4b79e28fa733ce643->enter($__internal_991b12bdeec3b91cf2c24771db07ea81f2780fd77ed099d4b79e28fa733ce643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991b12bdeec3b91cf2c24771db07ea81f2780fd77ed099d4b79e28fa733ce643->leave($__internal_991b12bdeec3b91cf2c24771db07ea81f2780fd77ed099d4b79e28fa733ce643_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4ce3bc05def89a180fc798e3d29985e6feba1d148d8c3e4526fa32e64c46276 = $this->env->getExtension("native_profiler");
        $__internal_a4ce3bc05def89a180fc798e3d29985e6feba1d148d8c3e4526fa32e64c46276->enter($__internal_a4ce3bc05def89a180fc798e3d29985e6feba1d148d8c3e4526fa32e64c46276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a4ce3bc05def89a180fc798e3d29985e6feba1d148d8c3e4526fa32e64c46276->leave($__internal_a4ce3bc05def89a180fc798e3d29985e6feba1d148d8c3e4526fa32e64c46276_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
