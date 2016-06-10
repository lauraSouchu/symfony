<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d78e2853a7e264df3cd59606f5b5458fe2a3f8698c117c572a6b957013da36db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3c34300e814a4f26b8fa5df736807501f74ab00ed93dd6db9a463456233f7d04 = $this->env->getExtension("native_profiler");
        $__internal_3c34300e814a4f26b8fa5df736807501f74ab00ed93dd6db9a463456233f7d04->enter($__internal_3c34300e814a4f26b8fa5df736807501f74ab00ed93dd6db9a463456233f7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c34300e814a4f26b8fa5df736807501f74ab00ed93dd6db9a463456233f7d04->leave($__internal_3c34300e814a4f26b8fa5df736807501f74ab00ed93dd6db9a463456233f7d04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dd415b515fe8d3760bb36ee3f47430ff68c9966691eeebed51e08c5d8b1754b = $this->env->getExtension("native_profiler");
        $__internal_0dd415b515fe8d3760bb36ee3f47430ff68c9966691eeebed51e08c5d8b1754b->enter($__internal_0dd415b515fe8d3760bb36ee3f47430ff68c9966691eeebed51e08c5d8b1754b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0dd415b515fe8d3760bb36ee3f47430ff68c9966691eeebed51e08c5d8b1754b->leave($__internal_0dd415b515fe8d3760bb36ee3f47430ff68c9966691eeebed51e08c5d8b1754b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_120bf1053932f0e584c97bee30d995e1947ab20b497d190c3e75ba6b042d2304 = $this->env->getExtension("native_profiler");
        $__internal_120bf1053932f0e584c97bee30d995e1947ab20b497d190c3e75ba6b042d2304->enter($__internal_120bf1053932f0e584c97bee30d995e1947ab20b497d190c3e75ba6b042d2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_120bf1053932f0e584c97bee30d995e1947ab20b497d190c3e75ba6b042d2304->leave($__internal_120bf1053932f0e584c97bee30d995e1947ab20b497d190c3e75ba6b042d2304_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e211863fd9ec015c5cc68c452d465e821bc940d92eb756761be99aa8066dd9 = $this->env->getExtension("native_profiler");
        $__internal_84e211863fd9ec015c5cc68c452d465e821bc940d92eb756761be99aa8066dd9->enter($__internal_84e211863fd9ec015c5cc68c452d465e821bc940d92eb756761be99aa8066dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_84e211863fd9ec015c5cc68c452d465e821bc940d92eb756761be99aa8066dd9->leave($__internal_84e211863fd9ec015c5cc68c452d465e821bc940d92eb756761be99aa8066dd9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
