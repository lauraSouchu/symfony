<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e5e23df57e7cecfca47a25b3cea3be34fdeace4407c6d4f888f8189868a70236 extends Twig_Template
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
        $__internal_1443df3cc6772cd83d1e5b7f3a51408c1ea613cc0caa9c97ff4d8bfbc42e77bd = $this->env->getExtension("native_profiler");
        $__internal_1443df3cc6772cd83d1e5b7f3a51408c1ea613cc0caa9c97ff4d8bfbc42e77bd->enter($__internal_1443df3cc6772cd83d1e5b7f3a51408c1ea613cc0caa9c97ff4d8bfbc42e77bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_1443df3cc6772cd83d1e5b7f3a51408c1ea613cc0caa9c97ff4d8bfbc42e77bd->leave($__internal_1443df3cc6772cd83d1e5b7f3a51408c1ea613cc0caa9c97ff4d8bfbc42e77bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
