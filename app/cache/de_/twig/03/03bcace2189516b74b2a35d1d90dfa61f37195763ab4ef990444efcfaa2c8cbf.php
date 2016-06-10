<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7dea35e5446c257b923dd50070c1f82e0d6fe1186fff9653228f2ea42d61a868 extends Twig_Template
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
        $__internal_a4a229e99c66e583f292ed0254c964d1ddcfcb1a07bae476e778be7fb0bf09da = $this->env->getExtension("native_profiler");
        $__internal_a4a229e99c66e583f292ed0254c964d1ddcfcb1a07bae476e778be7fb0bf09da->enter($__internal_a4a229e99c66e583f292ed0254c964d1ddcfcb1a07bae476e778be7fb0bf09da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a4a229e99c66e583f292ed0254c964d1ddcfcb1a07bae476e778be7fb0bf09da->leave($__internal_a4a229e99c66e583f292ed0254c964d1ddcfcb1a07bae476e778be7fb0bf09da_prof);

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
