<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f88bfedc0ac04a8ea4f45ffb54ed6f2537f0e04d66c78875f25fe9573d5f3dec extends Twig_Template
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
        $__internal_6a30fbf549bfb5f437c9957c19973542395b52a5e22829eba536f4328043aaca = $this->env->getExtension("native_profiler");
        $__internal_6a30fbf549bfb5f437c9957c19973542395b52a5e22829eba536f4328043aaca->enter($__internal_6a30fbf549bfb5f437c9957c19973542395b52a5e22829eba536f4328043aaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6a30fbf549bfb5f437c9957c19973542395b52a5e22829eba536f4328043aaca->leave($__internal_6a30fbf549bfb5f437c9957c19973542395b52a5e22829eba536f4328043aaca_prof);

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
