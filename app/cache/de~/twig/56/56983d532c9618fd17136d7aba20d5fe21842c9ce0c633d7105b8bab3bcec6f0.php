<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5234bf0a8f504941a0762ba1116f0a91cf2cc019b52a1e01be28b467ae7f2a72 extends Twig_Template
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
        $__internal_54effe8127b372d697457b2b2c188a0393b3aaae8d031fe0da22bf88f0936076 = $this->env->getExtension("native_profiler");
        $__internal_54effe8127b372d697457b2b2c188a0393b3aaae8d031fe0da22bf88f0936076->enter($__internal_54effe8127b372d697457b2b2c188a0393b3aaae8d031fe0da22bf88f0936076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_54effe8127b372d697457b2b2c188a0393b3aaae8d031fe0da22bf88f0936076->leave($__internal_54effe8127b372d697457b2b2c188a0393b3aaae8d031fe0da22bf88f0936076_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
