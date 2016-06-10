<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7f7f3cd6c1e0557b961a8d079f04863c544c3aaadf951723191fc34f70c4baa4 extends Twig_Template
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
        $__internal_582dd3561f83800b0cb525d68ac1560f8838025dfafe1c60683c6d274ac4642e = $this->env->getExtension("native_profiler");
        $__internal_582dd3561f83800b0cb525d68ac1560f8838025dfafe1c60683c6d274ac4642e->enter($__internal_582dd3561f83800b0cb525d68ac1560f8838025dfafe1c60683c6d274ac4642e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_582dd3561f83800b0cb525d68ac1560f8838025dfafe1c60683c6d274ac4642e->leave($__internal_582dd3561f83800b0cb525d68ac1560f8838025dfafe1c60683c6d274ac4642e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
