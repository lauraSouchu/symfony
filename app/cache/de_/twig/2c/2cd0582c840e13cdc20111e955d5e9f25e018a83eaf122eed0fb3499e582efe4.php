<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f6bd854009ecbc327010a9a06ccb7daade04b6a49ab3fac7a89022ed6b62969d extends Twig_Template
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
        $__internal_63acce0b10bfd5a91648cfd1f82d2edd4a6480a17fe729b6f0ececf8d67e7045 = $this->env->getExtension("native_profiler");
        $__internal_63acce0b10bfd5a91648cfd1f82d2edd4a6480a17fe729b6f0ececf8d67e7045->enter($__internal_63acce0b10bfd5a91648cfd1f82d2edd4a6480a17fe729b6f0ececf8d67e7045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63acce0b10bfd5a91648cfd1f82d2edd4a6480a17fe729b6f0ececf8d67e7045->leave($__internal_63acce0b10bfd5a91648cfd1f82d2edd4a6480a17fe729b6f0ececf8d67e7045_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4349b804558e353be2f6a67f82b3c663e416a72d12b3aabb4ce2069eb96acd17 = $this->env->getExtension("native_profiler");
        $__internal_4349b804558e353be2f6a67f82b3c663e416a72d12b3aabb4ce2069eb96acd17->enter($__internal_4349b804558e353be2f6a67f82b3c663e416a72d12b3aabb4ce2069eb96acd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4349b804558e353be2f6a67f82b3c663e416a72d12b3aabb4ce2069eb96acd17->leave($__internal_4349b804558e353be2f6a67f82b3c663e416a72d12b3aabb4ce2069eb96acd17_prof);

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
