<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f13997ce5e89550d0dfc54505a50ad1f768c324b95c200865ee2f6ff698db814 extends Twig_Template
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
        $__internal_c92063c1b7a59d3ddb6aef53ab11351991621c00db5531f4a0148c29871597ed = $this->env->getExtension("native_profiler");
        $__internal_c92063c1b7a59d3ddb6aef53ab11351991621c00db5531f4a0148c29871597ed->enter($__internal_c92063c1b7a59d3ddb6aef53ab11351991621c00db5531f4a0148c29871597ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c92063c1b7a59d3ddb6aef53ab11351991621c00db5531f4a0148c29871597ed->leave($__internal_c92063c1b7a59d3ddb6aef53ab11351991621c00db5531f4a0148c29871597ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
