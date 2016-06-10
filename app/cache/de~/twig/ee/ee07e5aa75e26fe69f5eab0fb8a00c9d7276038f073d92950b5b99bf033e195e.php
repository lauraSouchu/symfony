<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b63592349f1e8b07825f27c4c96826b83aa3a02fa7837222d37d339c58e89abb extends Twig_Template
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
        $__internal_b7f86400aecc140db8beb0f91edf0320469421a6ba64b6102a4ce413b86f9d31 = $this->env->getExtension("native_profiler");
        $__internal_b7f86400aecc140db8beb0f91edf0320469421a6ba64b6102a4ce413b86f9d31->enter($__internal_b7f86400aecc140db8beb0f91edf0320469421a6ba64b6102a4ce413b86f9d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f86400aecc140db8beb0f91edf0320469421a6ba64b6102a4ce413b86f9d31->leave($__internal_b7f86400aecc140db8beb0f91edf0320469421a6ba64b6102a4ce413b86f9d31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff8e36fa90839e83ccf12cd1341b5226a02afceddccb6b55d3e89a2951dd9fbb = $this->env->getExtension("native_profiler");
        $__internal_ff8e36fa90839e83ccf12cd1341b5226a02afceddccb6b55d3e89a2951dd9fbb->enter($__internal_ff8e36fa90839e83ccf12cd1341b5226a02afceddccb6b55d3e89a2951dd9fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff8e36fa90839e83ccf12cd1341b5226a02afceddccb6b55d3e89a2951dd9fbb->leave($__internal_ff8e36fa90839e83ccf12cd1341b5226a02afceddccb6b55d3e89a2951dd9fbb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dfbf0c4785f530cb28c9cca239c0f743e22546a54b61a8ff428472da6603628 = $this->env->getExtension("native_profiler");
        $__internal_9dfbf0c4785f530cb28c9cca239c0f743e22546a54b61a8ff428472da6603628->enter($__internal_9dfbf0c4785f530cb28c9cca239c0f743e22546a54b61a8ff428472da6603628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9dfbf0c4785f530cb28c9cca239c0f743e22546a54b61a8ff428472da6603628->leave($__internal_9dfbf0c4785f530cb28c9cca239c0f743e22546a54b61a8ff428472da6603628_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7379bdb9577e56fbae463b2769b0f695d00629a71fc6a86fa7a300c1652e2538 = $this->env->getExtension("native_profiler");
        $__internal_7379bdb9577e56fbae463b2769b0f695d00629a71fc6a86fa7a300c1652e2538->enter($__internal_7379bdb9577e56fbae463b2769b0f695d00629a71fc6a86fa7a300c1652e2538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7379bdb9577e56fbae463b2769b0f695d00629a71fc6a86fa7a300c1652e2538->leave($__internal_7379bdb9577e56fbae463b2769b0f695d00629a71fc6a86fa7a300c1652e2538_prof);

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
