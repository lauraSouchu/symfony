<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d21e181c4c8efefa136e949e3088c54a798e0a01fa8dba6a973d01b1a8b5347d extends Twig_Template
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
        $__internal_edb1a5108db707a61e4bd29c151b62098ca718e9f67fd504b68d3d3ab455f79b = $this->env->getExtension("native_profiler");
        $__internal_edb1a5108db707a61e4bd29c151b62098ca718e9f67fd504b68d3d3ab455f79b->enter($__internal_edb1a5108db707a61e4bd29c151b62098ca718e9f67fd504b68d3d3ab455f79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_edb1a5108db707a61e4bd29c151b62098ca718e9f67fd504b68d3d3ab455f79b->leave($__internal_edb1a5108db707a61e4bd29c151b62098ca718e9f67fd504b68d3d3ab455f79b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
