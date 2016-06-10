<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4405788a5394cecb900d7adead1d96b1b38277c29b6d95c3c838a3f8257c389b extends Twig_Template
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
        $__internal_650f89b13a5ed54f91d1cb6a8caf8e3ace6cbdc57b1c510212505d3957413458 = $this->env->getExtension("native_profiler");
        $__internal_650f89b13a5ed54f91d1cb6a8caf8e3ace6cbdc57b1c510212505d3957413458->enter($__internal_650f89b13a5ed54f91d1cb6a8caf8e3ace6cbdc57b1c510212505d3957413458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_650f89b13a5ed54f91d1cb6a8caf8e3ace6cbdc57b1c510212505d3957413458->leave($__internal_650f89b13a5ed54f91d1cb6a8caf8e3ace6cbdc57b1c510212505d3957413458_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fc1957ef5c08b199c09185f85a4f103d929a78aee1dbf3aba2b9733b028d7a95 = $this->env->getExtension("native_profiler");
        $__internal_fc1957ef5c08b199c09185f85a4f103d929a78aee1dbf3aba2b9733b028d7a95->enter($__internal_fc1957ef5c08b199c09185f85a4f103d929a78aee1dbf3aba2b9733b028d7a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fc1957ef5c08b199c09185f85a4f103d929a78aee1dbf3aba2b9733b028d7a95->leave($__internal_fc1957ef5c08b199c09185f85a4f103d929a78aee1dbf3aba2b9733b028d7a95_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_76fd5e1dd988f5ac1be2726d2949f799dab97731b4763c9fbdbe21cfbc7b24b9 = $this->env->getExtension("native_profiler");
        $__internal_76fd5e1dd988f5ac1be2726d2949f799dab97731b4763c9fbdbe21cfbc7b24b9->enter($__internal_76fd5e1dd988f5ac1be2726d2949f799dab97731b4763c9fbdbe21cfbc7b24b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_76fd5e1dd988f5ac1be2726d2949f799dab97731b4763c9fbdbe21cfbc7b24b9->leave($__internal_76fd5e1dd988f5ac1be2726d2949f799dab97731b4763c9fbdbe21cfbc7b24b9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_96e051b0296c74be1e78b9dd3c206cf2ccfa306bad27ebfcc34b06677f39f097 = $this->env->getExtension("native_profiler");
        $__internal_96e051b0296c74be1e78b9dd3c206cf2ccfa306bad27ebfcc34b06677f39f097->enter($__internal_96e051b0296c74be1e78b9dd3c206cf2ccfa306bad27ebfcc34b06677f39f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_96e051b0296c74be1e78b9dd3c206cf2ccfa306bad27ebfcc34b06677f39f097->leave($__internal_96e051b0296c74be1e78b9dd3c206cf2ccfa306bad27ebfcc34b06677f39f097_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
