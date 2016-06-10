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
        $__internal_9349cc524c90a32d274e07798946564e977191de7e9378c11e0efbba2c0509ab = $this->env->getExtension("native_profiler");
        $__internal_9349cc524c90a32d274e07798946564e977191de7e9378c11e0efbba2c0509ab->enter($__internal_9349cc524c90a32d274e07798946564e977191de7e9378c11e0efbba2c0509ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9349cc524c90a32d274e07798946564e977191de7e9378c11e0efbba2c0509ab->leave($__internal_9349cc524c90a32d274e07798946564e977191de7e9378c11e0efbba2c0509ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef26e5a9de67c9125743f67b3b7f6e518db4ef90302a161d6ffa5ae0b431e06a = $this->env->getExtension("native_profiler");
        $__internal_ef26e5a9de67c9125743f67b3b7f6e518db4ef90302a161d6ffa5ae0b431e06a->enter($__internal_ef26e5a9de67c9125743f67b3b7f6e518db4ef90302a161d6ffa5ae0b431e06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef26e5a9de67c9125743f67b3b7f6e518db4ef90302a161d6ffa5ae0b431e06a->leave($__internal_ef26e5a9de67c9125743f67b3b7f6e518db4ef90302a161d6ffa5ae0b431e06a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec0e60ebc1a433bf907659c7e2e57073907c17b9357c4daadc701ff806a96043 = $this->env->getExtension("native_profiler");
        $__internal_ec0e60ebc1a433bf907659c7e2e57073907c17b9357c4daadc701ff806a96043->enter($__internal_ec0e60ebc1a433bf907659c7e2e57073907c17b9357c4daadc701ff806a96043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ec0e60ebc1a433bf907659c7e2e57073907c17b9357c4daadc701ff806a96043->leave($__internal_ec0e60ebc1a433bf907659c7e2e57073907c17b9357c4daadc701ff806a96043_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_345e7d63f1ed931b4c881ca44de21885afad1c5a3204bed04cf69fa81b1bf6db = $this->env->getExtension("native_profiler");
        $__internal_345e7d63f1ed931b4c881ca44de21885afad1c5a3204bed04cf69fa81b1bf6db->enter($__internal_345e7d63f1ed931b4c881ca44de21885afad1c5a3204bed04cf69fa81b1bf6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_345e7d63f1ed931b4c881ca44de21885afad1c5a3204bed04cf69fa81b1bf6db->leave($__internal_345e7d63f1ed931b4c881ca44de21885afad1c5a3204bed04cf69fa81b1bf6db_prof);

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
