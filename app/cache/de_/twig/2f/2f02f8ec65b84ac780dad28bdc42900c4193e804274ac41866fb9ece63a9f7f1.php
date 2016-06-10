<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_274910db2137d0318c9361044c44970e9e5e36ba745e291e0f36e834241dcdf7 extends Twig_Template
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
        $__internal_b3eadbb8486e96917c11f07a407b2a33648f21837c3dc78383fbe1be8f4f67e8 = $this->env->getExtension("native_profiler");
        $__internal_b3eadbb8486e96917c11f07a407b2a33648f21837c3dc78383fbe1be8f4f67e8->enter($__internal_b3eadbb8486e96917c11f07a407b2a33648f21837c3dc78383fbe1be8f4f67e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b3eadbb8486e96917c11f07a407b2a33648f21837c3dc78383fbe1be8f4f67e8->leave($__internal_b3eadbb8486e96917c11f07a407b2a33648f21837c3dc78383fbe1be8f4f67e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
