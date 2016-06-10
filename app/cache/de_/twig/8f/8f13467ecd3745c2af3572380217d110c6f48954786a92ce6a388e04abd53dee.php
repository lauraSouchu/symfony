<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_251cbad150425018447c7cff000f77caefee9ad988d2d5df07178c467364149e extends Twig_Template
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
        $__internal_aba334aa425e739c52175204dfb25adc1717d37a6c30853583d1c93d84c2a605 = $this->env->getExtension("native_profiler");
        $__internal_aba334aa425e739c52175204dfb25adc1717d37a6c30853583d1c93d84c2a605->enter($__internal_aba334aa425e739c52175204dfb25adc1717d37a6c30853583d1c93d84c2a605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aba334aa425e739c52175204dfb25adc1717d37a6c30853583d1c93d84c2a605->leave($__internal_aba334aa425e739c52175204dfb25adc1717d37a6c30853583d1c93d84c2a605_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d10c6204d56384d6a8f948c1b1666d21eb60c3b69dc7786c35bcf998bdb2acaf = $this->env->getExtension("native_profiler");
        $__internal_d10c6204d56384d6a8f948c1b1666d21eb60c3b69dc7786c35bcf998bdb2acaf->enter($__internal_d10c6204d56384d6a8f948c1b1666d21eb60c3b69dc7786c35bcf998bdb2acaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d10c6204d56384d6a8f948c1b1666d21eb60c3b69dc7786c35bcf998bdb2acaf->leave($__internal_d10c6204d56384d6a8f948c1b1666d21eb60c3b69dc7786c35bcf998bdb2acaf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6bacb63921c3bcee0024ad649be5eed25cf8ad4a89572a7b6dc9de37fcdc73dd = $this->env->getExtension("native_profiler");
        $__internal_6bacb63921c3bcee0024ad649be5eed25cf8ad4a89572a7b6dc9de37fcdc73dd->enter($__internal_6bacb63921c3bcee0024ad649be5eed25cf8ad4a89572a7b6dc9de37fcdc73dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6bacb63921c3bcee0024ad649be5eed25cf8ad4a89572a7b6dc9de37fcdc73dd->leave($__internal_6bacb63921c3bcee0024ad649be5eed25cf8ad4a89572a7b6dc9de37fcdc73dd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bf6c694f97002c38a1cae098d21ee5ddcce65f10994adde3b120bd53145446fa = $this->env->getExtension("native_profiler");
        $__internal_bf6c694f97002c38a1cae098d21ee5ddcce65f10994adde3b120bd53145446fa->enter($__internal_bf6c694f97002c38a1cae098d21ee5ddcce65f10994adde3b120bd53145446fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf6c694f97002c38a1cae098d21ee5ddcce65f10994adde3b120bd53145446fa->leave($__internal_bf6c694f97002c38a1cae098d21ee5ddcce65f10994adde3b120bd53145446fa_prof);

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
