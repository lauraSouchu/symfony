<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_06f7b6ef23b8e17016d95887c6976779ad0345a50a7bd8b008f8b2302564257e extends Twig_Template
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
        $__internal_a4ba52a0d7fb8a2537056d2a1e738ce2d126f12c212871a6062d29487bb62cb7 = $this->env->getExtension("native_profiler");
        $__internal_a4ba52a0d7fb8a2537056d2a1e738ce2d126f12c212871a6062d29487bb62cb7->enter($__internal_a4ba52a0d7fb8a2537056d2a1e738ce2d126f12c212871a6062d29487bb62cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_a4ba52a0d7fb8a2537056d2a1e738ce2d126f12c212871a6062d29487bb62cb7->leave($__internal_a4ba52a0d7fb8a2537056d2a1e738ce2d126f12c212871a6062d29487bb62cb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
