<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3b5699a3774ccb20059fe2246bf273e21cfd45348c8294387481f04a676ca054 extends Twig_Template
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
        $__internal_69ae2219e8fba98eb94758364f929b91ad25ebb22cfd74a5b73675ee767741cb = $this->env->getExtension("native_profiler");
        $__internal_69ae2219e8fba98eb94758364f929b91ad25ebb22cfd74a5b73675ee767741cb->enter($__internal_69ae2219e8fba98eb94758364f929b91ad25ebb22cfd74a5b73675ee767741cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_69ae2219e8fba98eb94758364f929b91ad25ebb22cfd74a5b73675ee767741cb->leave($__internal_69ae2219e8fba98eb94758364f929b91ad25ebb22cfd74a5b73675ee767741cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
