<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e3b0dfcec34f058a46d8f423945b974615fff0f1a95f18bd65dbda60519ca33b extends Twig_Template
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
        $__internal_ce60ea2c3231025bfdccdadb05b8017fe73f30a2e9c578b8cf2844062e1248f7 = $this->env->getExtension("native_profiler");
        $__internal_ce60ea2c3231025bfdccdadb05b8017fe73f30a2e9c578b8cf2844062e1248f7->enter($__internal_ce60ea2c3231025bfdccdadb05b8017fe73f30a2e9c578b8cf2844062e1248f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ce60ea2c3231025bfdccdadb05b8017fe73f30a2e9c578b8cf2844062e1248f7->leave($__internal_ce60ea2c3231025bfdccdadb05b8017fe73f30a2e9c578b8cf2844062e1248f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
