<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_369f3eb51e17480d623c701e5850925b84d5f49226580aec00c429c21038da41 extends Twig_Template
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
        $__internal_7efd3f8c82c47161806f8b64fcbf958ac6dba8f70e1dfc7841201d483c4f5569 = $this->env->getExtension("native_profiler");
        $__internal_7efd3f8c82c47161806f8b64fcbf958ac6dba8f70e1dfc7841201d483c4f5569->enter($__internal_7efd3f8c82c47161806f8b64fcbf958ac6dba8f70e1dfc7841201d483c4f5569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_7efd3f8c82c47161806f8b64fcbf958ac6dba8f70e1dfc7841201d483c4f5569->leave($__internal_7efd3f8c82c47161806f8b64fcbf958ac6dba8f70e1dfc7841201d483c4f5569_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
