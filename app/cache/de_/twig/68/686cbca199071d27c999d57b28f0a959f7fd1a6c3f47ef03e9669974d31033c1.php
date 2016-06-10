<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1aa9af78fc658381c8b79d544fdfd546059ab4989c925f6af9eb4702daaa5be0 extends Twig_Template
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
        $__internal_cbc6e8d523783135dd674f92bbe2b9b072b709d2b4666928fbf60b4c97c349b3 = $this->env->getExtension("native_profiler");
        $__internal_cbc6e8d523783135dd674f92bbe2b9b072b709d2b4666928fbf60b4c97c349b3->enter($__internal_cbc6e8d523783135dd674f92bbe2b9b072b709d2b4666928fbf60b4c97c349b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc6e8d523783135dd674f92bbe2b9b072b709d2b4666928fbf60b4c97c349b3->leave($__internal_cbc6e8d523783135dd674f92bbe2b9b072b709d2b4666928fbf60b4c97c349b3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_061e243d7e9e3cd5b2972728444cfb46df8f0109942d6805f60da07960eb9870 = $this->env->getExtension("native_profiler");
        $__internal_061e243d7e9e3cd5b2972728444cfb46df8f0109942d6805f60da07960eb9870->enter($__internal_061e243d7e9e3cd5b2972728444cfb46df8f0109942d6805f60da07960eb9870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_061e243d7e9e3cd5b2972728444cfb46df8f0109942d6805f60da07960eb9870->leave($__internal_061e243d7e9e3cd5b2972728444cfb46df8f0109942d6805f60da07960eb9870_prof);

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
