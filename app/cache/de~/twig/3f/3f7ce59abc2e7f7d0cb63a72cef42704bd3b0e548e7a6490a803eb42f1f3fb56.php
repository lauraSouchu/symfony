<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8da2c87409f7d575ab2ac49955a5f1371bce1bc6331d364ac9b2d259dfaa1b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_286bcc05725486bcd390d51251bd3aa57064af232db82856a1da3c9e28b4ec34 = $this->env->getExtension("native_profiler");
        $__internal_286bcc05725486bcd390d51251bd3aa57064af232db82856a1da3c9e28b4ec34->enter($__internal_286bcc05725486bcd390d51251bd3aa57064af232db82856a1da3c9e28b4ec34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_286bcc05725486bcd390d51251bd3aa57064af232db82856a1da3c9e28b4ec34->leave($__internal_286bcc05725486bcd390d51251bd3aa57064af232db82856a1da3c9e28b4ec34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0add817ee6f7d527fe3e60d421496a49505f9b9890425ef7e7f7d16e059c4bba = $this->env->getExtension("native_profiler");
        $__internal_0add817ee6f7d527fe3e60d421496a49505f9b9890425ef7e7f7d16e059c4bba->enter($__internal_0add817ee6f7d527fe3e60d421496a49505f9b9890425ef7e7f7d16e059c4bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0add817ee6f7d527fe3e60d421496a49505f9b9890425ef7e7f7d16e059c4bba->leave($__internal_0add817ee6f7d527fe3e60d421496a49505f9b9890425ef7e7f7d16e059c4bba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
