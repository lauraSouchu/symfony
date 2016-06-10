<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9c0dc6f4b7003b4e97711fd64033298d63d561db6736a869b73c939238567e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac5677e329c7b35926bde6b3790092230c61b7bd0cc5112c9662ad8a1b16721d = $this->env->getExtension("native_profiler");
        $__internal_ac5677e329c7b35926bde6b3790092230c61b7bd0cc5112c9662ad8a1b16721d->enter($__internal_ac5677e329c7b35926bde6b3790092230c61b7bd0cc5112c9662ad8a1b16721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5677e329c7b35926bde6b3790092230c61b7bd0cc5112c9662ad8a1b16721d->leave($__internal_ac5677e329c7b35926bde6b3790092230c61b7bd0cc5112c9662ad8a1b16721d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98138e55a24e9f10e6816a10ed5acf3d1b9d1f74562e4f11eea47591c9f85c08 = $this->env->getExtension("native_profiler");
        $__internal_98138e55a24e9f10e6816a10ed5acf3d1b9d1f74562e4f11eea47591c9f85c08->enter($__internal_98138e55a24e9f10e6816a10ed5acf3d1b9d1f74562e4f11eea47591c9f85c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_98138e55a24e9f10e6816a10ed5acf3d1b9d1f74562e4f11eea47591c9f85c08->leave($__internal_98138e55a24e9f10e6816a10ed5acf3d1b9d1f74562e4f11eea47591c9f85c08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eba9889e5de1e1a7b68d39d982339a249b829a5b5d982566300937f27a37605b = $this->env->getExtension("native_profiler");
        $__internal_eba9889e5de1e1a7b68d39d982339a249b829a5b5d982566300937f27a37605b->enter($__internal_eba9889e5de1e1a7b68d39d982339a249b829a5b5d982566300937f27a37605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eba9889e5de1e1a7b68d39d982339a249b829a5b5d982566300937f27a37605b->leave($__internal_eba9889e5de1e1a7b68d39d982339a249b829a5b5d982566300937f27a37605b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
