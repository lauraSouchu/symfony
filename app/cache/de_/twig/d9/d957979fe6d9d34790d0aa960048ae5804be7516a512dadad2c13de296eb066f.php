<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_90cd2e8f3932d8566fbc9af5a391d84973932ce85adca5cfb1bff1ff6e0f4647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_12686de8d1336cef32dc2c1967ba2336921c2010c2eba00cd4e1cc3ecc7759c2 = $this->env->getExtension("native_profiler");
        $__internal_12686de8d1336cef32dc2c1967ba2336921c2010c2eba00cd4e1cc3ecc7759c2->enter($__internal_12686de8d1336cef32dc2c1967ba2336921c2010c2eba00cd4e1cc3ecc7759c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12686de8d1336cef32dc2c1967ba2336921c2010c2eba00cd4e1cc3ecc7759c2->leave($__internal_12686de8d1336cef32dc2c1967ba2336921c2010c2eba00cd4e1cc3ecc7759c2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9be8c3c0124b6bee5c47423efca29ff7862332d7adb5c28bb8275ae056b383be = $this->env->getExtension("native_profiler");
        $__internal_9be8c3c0124b6bee5c47423efca29ff7862332d7adb5c28bb8275ae056b383be->enter($__internal_9be8c3c0124b6bee5c47423efca29ff7862332d7adb5c28bb8275ae056b383be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9be8c3c0124b6bee5c47423efca29ff7862332d7adb5c28bb8275ae056b383be->leave($__internal_9be8c3c0124b6bee5c47423efca29ff7862332d7adb5c28bb8275ae056b383be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
