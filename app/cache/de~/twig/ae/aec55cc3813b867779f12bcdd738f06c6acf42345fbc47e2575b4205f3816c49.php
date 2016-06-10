<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_253713ed8ac38b5e10e8f9c80c1ff48dc84ecf8db083fd604581c8d433485042 extends Twig_Template
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
        $__internal_81b5496fd1a8c22c0785e4f858651a4203a35e2be1ace1bae374989b88697c85 = $this->env->getExtension("native_profiler");
        $__internal_81b5496fd1a8c22c0785e4f858651a4203a35e2be1ace1bae374989b88697c85->enter($__internal_81b5496fd1a8c22c0785e4f858651a4203a35e2be1ace1bae374989b88697c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b5496fd1a8c22c0785e4f858651a4203a35e2be1ace1bae374989b88697c85->leave($__internal_81b5496fd1a8c22c0785e4f858651a4203a35e2be1ace1bae374989b88697c85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93b9f2181343a826218037e3759fe571e18d556a70c964d3bdfbca62830fefeb = $this->env->getExtension("native_profiler");
        $__internal_93b9f2181343a826218037e3759fe571e18d556a70c964d3bdfbca62830fefeb->enter($__internal_93b9f2181343a826218037e3759fe571e18d556a70c964d3bdfbca62830fefeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_93b9f2181343a826218037e3759fe571e18d556a70c964d3bdfbca62830fefeb->leave($__internal_93b9f2181343a826218037e3759fe571e18d556a70c964d3bdfbca62830fefeb_prof);

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
