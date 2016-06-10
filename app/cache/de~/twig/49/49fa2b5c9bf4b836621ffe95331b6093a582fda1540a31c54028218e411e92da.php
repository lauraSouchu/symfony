<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_81b175d7ebb5b934b17c7aa7e01a214d7aface35f21cb3ea5d1554d5fdb01d2d extends Twig_Template
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
        $__internal_6e1058216e8ef96f0227020aadd599b15b5bbf7e4172af5d78967a65f46b8bb8 = $this->env->getExtension("native_profiler");
        $__internal_6e1058216e8ef96f0227020aadd599b15b5bbf7e4172af5d78967a65f46b8bb8->enter($__internal_6e1058216e8ef96f0227020aadd599b15b5bbf7e4172af5d78967a65f46b8bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6e1058216e8ef96f0227020aadd599b15b5bbf7e4172af5d78967a65f46b8bb8->leave($__internal_6e1058216e8ef96f0227020aadd599b15b5bbf7e4172af5d78967a65f46b8bb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
