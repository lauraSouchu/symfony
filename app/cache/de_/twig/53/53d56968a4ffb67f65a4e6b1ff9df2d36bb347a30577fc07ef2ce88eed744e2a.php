<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3495a471fb91e309770ff7148bdc1157eadba1e992403f6ea250bdc8df181bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c124351410385a3c4f975afda0cd436a01de2800577e7b16dc7e2dbe2f6da39e = $this->env->getExtension("native_profiler");
        $__internal_c124351410385a3c4f975afda0cd436a01de2800577e7b16dc7e2dbe2f6da39e->enter($__internal_c124351410385a3c4f975afda0cd436a01de2800577e7b16dc7e2dbe2f6da39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c124351410385a3c4f975afda0cd436a01de2800577e7b16dc7e2dbe2f6da39e->leave($__internal_c124351410385a3c4f975afda0cd436a01de2800577e7b16dc7e2dbe2f6da39e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_51523f0fa1c49ed2314b1b0632918ac5e67fc8efb7887a45bb0d5dbdd45ff371 = $this->env->getExtension("native_profiler");
        $__internal_51523f0fa1c49ed2314b1b0632918ac5e67fc8efb7887a45bb0d5dbdd45ff371->enter($__internal_51523f0fa1c49ed2314b1b0632918ac5e67fc8efb7887a45bb0d5dbdd45ff371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_51523f0fa1c49ed2314b1b0632918ac5e67fc8efb7887a45bb0d5dbdd45ff371->leave($__internal_51523f0fa1c49ed2314b1b0632918ac5e67fc8efb7887a45bb0d5dbdd45ff371_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5eb82758c67a7c4f6ba63f2a16e9ddaf692b07043d7363e246245bc81e38d716 = $this->env->getExtension("native_profiler");
        $__internal_5eb82758c67a7c4f6ba63f2a16e9ddaf692b07043d7363e246245bc81e38d716->enter($__internal_5eb82758c67a7c4f6ba63f2a16e9ddaf692b07043d7363e246245bc81e38d716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5eb82758c67a7c4f6ba63f2a16e9ddaf692b07043d7363e246245bc81e38d716->leave($__internal_5eb82758c67a7c4f6ba63f2a16e9ddaf692b07043d7363e246245bc81e38d716_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f245d95d33d62a1d976dd5c96f66e86e5ec198535b12637df7e987e794b05089 = $this->env->getExtension("native_profiler");
        $__internal_f245d95d33d62a1d976dd5c96f66e86e5ec198535b12637df7e987e794b05089->enter($__internal_f245d95d33d62a1d976dd5c96f66e86e5ec198535b12637df7e987e794b05089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f245d95d33d62a1d976dd5c96f66e86e5ec198535b12637df7e987e794b05089->leave($__internal_f245d95d33d62a1d976dd5c96f66e86e5ec198535b12637df7e987e794b05089_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
