<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_856e92426a0a2ce4c9a5c733ab150078f2a0a9a635c2ca9ad7a0ae2bda139aea extends Twig_Template
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
        $__internal_86048f8e51945e390f6ec99d60ea56503771c40c357a96843da41c78f9b4a6df = $this->env->getExtension("native_profiler");
        $__internal_86048f8e51945e390f6ec99d60ea56503771c40c357a96843da41c78f9b4a6df->enter($__internal_86048f8e51945e390f6ec99d60ea56503771c40c357a96843da41c78f9b4a6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_86048f8e51945e390f6ec99d60ea56503771c40c357a96843da41c78f9b4a6df->leave($__internal_86048f8e51945e390f6ec99d60ea56503771c40c357a96843da41c78f9b4a6df_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3623bbc955f1066f63fc530beece75a0eb497eec2047a8faa5cdd4aeabb81717 = $this->env->getExtension("native_profiler");
        $__internal_3623bbc955f1066f63fc530beece75a0eb497eec2047a8faa5cdd4aeabb81717->enter($__internal_3623bbc955f1066f63fc530beece75a0eb497eec2047a8faa5cdd4aeabb81717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3623bbc955f1066f63fc530beece75a0eb497eec2047a8faa5cdd4aeabb81717->leave($__internal_3623bbc955f1066f63fc530beece75a0eb497eec2047a8faa5cdd4aeabb81717_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_505433f02f82385bc7042e9f64d99dacc8d5767b8914626e396b4a0dc22ef866 = $this->env->getExtension("native_profiler");
        $__internal_505433f02f82385bc7042e9f64d99dacc8d5767b8914626e396b4a0dc22ef866->enter($__internal_505433f02f82385bc7042e9f64d99dacc8d5767b8914626e396b4a0dc22ef866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_505433f02f82385bc7042e9f64d99dacc8d5767b8914626e396b4a0dc22ef866->leave($__internal_505433f02f82385bc7042e9f64d99dacc8d5767b8914626e396b4a0dc22ef866_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_16012870c6e19db9c578f84140b4eab8f5b23fa029b814345d691cd1e9f46329 = $this->env->getExtension("native_profiler");
        $__internal_16012870c6e19db9c578f84140b4eab8f5b23fa029b814345d691cd1e9f46329->enter($__internal_16012870c6e19db9c578f84140b4eab8f5b23fa029b814345d691cd1e9f46329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_16012870c6e19db9c578f84140b4eab8f5b23fa029b814345d691cd1e9f46329->leave($__internal_16012870c6e19db9c578f84140b4eab8f5b23fa029b814345d691cd1e9f46329_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
