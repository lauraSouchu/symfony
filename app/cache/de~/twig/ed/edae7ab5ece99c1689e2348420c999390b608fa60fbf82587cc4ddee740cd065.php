<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0566039aba6bfb13b91889cc1a2449544587877af2138750fd18b0ed9cee7c9b extends Twig_Template
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
        $__internal_58f516424625ab51124ab7459c567b7de2a2043402bb4fc9e646121c4457ec6d = $this->env->getExtension("native_profiler");
        $__internal_58f516424625ab51124ab7459c567b7de2a2043402bb4fc9e646121c4457ec6d->enter($__internal_58f516424625ab51124ab7459c567b7de2a2043402bb4fc9e646121c4457ec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_58f516424625ab51124ab7459c567b7de2a2043402bb4fc9e646121c4457ec6d->leave($__internal_58f516424625ab51124ab7459c567b7de2a2043402bb4fc9e646121c4457ec6d_prof);

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
