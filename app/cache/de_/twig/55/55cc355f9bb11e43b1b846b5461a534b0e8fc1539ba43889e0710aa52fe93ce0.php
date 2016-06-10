<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_73dca4f2db663088d38352331784eb26f2e639b700d3b48e46ceee33ffb88ad5 extends Twig_Template
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
        $__internal_bf5998c0c981e53e69f249805d397bf7bb263c735ba681b6e26aeefffb0724fb = $this->env->getExtension("native_profiler");
        $__internal_bf5998c0c981e53e69f249805d397bf7bb263c735ba681b6e26aeefffb0724fb->enter($__internal_bf5998c0c981e53e69f249805d397bf7bb263c735ba681b6e26aeefffb0724fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bf5998c0c981e53e69f249805d397bf7bb263c735ba681b6e26aeefffb0724fb->leave($__internal_bf5998c0c981e53e69f249805d397bf7bb263c735ba681b6e26aeefffb0724fb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_db552998edda4feecbf773eeb4f96c0948884ab20dce30c6de7e59d76dc4afe0 = $this->env->getExtension("native_profiler");
        $__internal_db552998edda4feecbf773eeb4f96c0948884ab20dce30c6de7e59d76dc4afe0->enter($__internal_db552998edda4feecbf773eeb4f96c0948884ab20dce30c6de7e59d76dc4afe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_db552998edda4feecbf773eeb4f96c0948884ab20dce30c6de7e59d76dc4afe0->leave($__internal_db552998edda4feecbf773eeb4f96c0948884ab20dce30c6de7e59d76dc4afe0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d1c2d47bc78f5142de1019c23b0a09919a96b80cd895447cd60c62de80f75354 = $this->env->getExtension("native_profiler");
        $__internal_d1c2d47bc78f5142de1019c23b0a09919a96b80cd895447cd60c62de80f75354->enter($__internal_d1c2d47bc78f5142de1019c23b0a09919a96b80cd895447cd60c62de80f75354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d1c2d47bc78f5142de1019c23b0a09919a96b80cd895447cd60c62de80f75354->leave($__internal_d1c2d47bc78f5142de1019c23b0a09919a96b80cd895447cd60c62de80f75354_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b17e95da2c4e265c6960c674e5cb52c8c25bb6e0a68e59c1473c7cba4f130865 = $this->env->getExtension("native_profiler");
        $__internal_b17e95da2c4e265c6960c674e5cb52c8c25bb6e0a68e59c1473c7cba4f130865->enter($__internal_b17e95da2c4e265c6960c674e5cb52c8c25bb6e0a68e59c1473c7cba4f130865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b17e95da2c4e265c6960c674e5cb52c8c25bb6e0a68e59c1473c7cba4f130865->leave($__internal_b17e95da2c4e265c6960c674e5cb52c8c25bb6e0a68e59c1473c7cba4f130865_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
