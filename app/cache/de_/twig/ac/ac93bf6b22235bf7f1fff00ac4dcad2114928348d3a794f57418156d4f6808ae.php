<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6876b582420a8a958a68a6559c626862c83d72bee619fba521a5da1410ea2173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00623ef4191a6855926aeef1c8839a7be5b07db63546360deccf86e8a0b3ad44 = $this->env->getExtension("native_profiler");
        $__internal_00623ef4191a6855926aeef1c8839a7be5b07db63546360deccf86e8a0b3ad44->enter($__internal_00623ef4191a6855926aeef1c8839a7be5b07db63546360deccf86e8a0b3ad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_00623ef4191a6855926aeef1c8839a7be5b07db63546360deccf86e8a0b3ad44->leave($__internal_00623ef4191a6855926aeef1c8839a7be5b07db63546360deccf86e8a0b3ad44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
