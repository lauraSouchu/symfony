<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d650e19883615443c920e6c118405a1588c0f9610640ca0ba1633465dc0b5b63 extends Twig_Template
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
        $__internal_602185318ff60ce6846e8ca811551d4107dbcc52516a5f9cbe9fbfa5c78e5b75 = $this->env->getExtension("native_profiler");
        $__internal_602185318ff60ce6846e8ca811551d4107dbcc52516a5f9cbe9fbfa5c78e5b75->enter($__internal_602185318ff60ce6846e8ca811551d4107dbcc52516a5f9cbe9fbfa5c78e5b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_602185318ff60ce6846e8ca811551d4107dbcc52516a5f9cbe9fbfa5c78e5b75->leave($__internal_602185318ff60ce6846e8ca811551d4107dbcc52516a5f9cbe9fbfa5c78e5b75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
