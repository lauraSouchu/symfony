<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8000e5808713495076b4a705c4498de24f958dc740527e0599f096d437a34991 extends Twig_Template
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
        $__internal_6c1757a44b89ef57dabe762a9ee1a6024830595950f04dc998e74ee6948ed21b = $this->env->getExtension("native_profiler");
        $__internal_6c1757a44b89ef57dabe762a9ee1a6024830595950f04dc998e74ee6948ed21b->enter($__internal_6c1757a44b89ef57dabe762a9ee1a6024830595950f04dc998e74ee6948ed21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_6c1757a44b89ef57dabe762a9ee1a6024830595950f04dc998e74ee6948ed21b->leave($__internal_6c1757a44b89ef57dabe762a9ee1a6024830595950f04dc998e74ee6948ed21b_prof);

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