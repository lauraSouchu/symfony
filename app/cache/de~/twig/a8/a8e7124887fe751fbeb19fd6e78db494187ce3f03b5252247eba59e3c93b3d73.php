<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5e56c8800f97b83a3c882b8a7f71b339c3f9106399f4ddbffbc93d468f19130e extends Twig_Template
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
        $__internal_2326a2ed5f7118a80f986cf5b72dbc9fd63a56e2f008ba931ffe8f3b410b7085 = $this->env->getExtension("native_profiler");
        $__internal_2326a2ed5f7118a80f986cf5b72dbc9fd63a56e2f008ba931ffe8f3b410b7085->enter($__internal_2326a2ed5f7118a80f986cf5b72dbc9fd63a56e2f008ba931ffe8f3b410b7085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2326a2ed5f7118a80f986cf5b72dbc9fd63a56e2f008ba931ffe8f3b410b7085->leave($__internal_2326a2ed5f7118a80f986cf5b72dbc9fd63a56e2f008ba931ffe8f3b410b7085_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1650ae7a4a720490db609fa2e6e2a79c126730015c033d86deaaeebe9615a733 = $this->env->getExtension("native_profiler");
        $__internal_1650ae7a4a720490db609fa2e6e2a79c126730015c033d86deaaeebe9615a733->enter($__internal_1650ae7a4a720490db609fa2e6e2a79c126730015c033d86deaaeebe9615a733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1650ae7a4a720490db609fa2e6e2a79c126730015c033d86deaaeebe9615a733->leave($__internal_1650ae7a4a720490db609fa2e6e2a79c126730015c033d86deaaeebe9615a733_prof);

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
