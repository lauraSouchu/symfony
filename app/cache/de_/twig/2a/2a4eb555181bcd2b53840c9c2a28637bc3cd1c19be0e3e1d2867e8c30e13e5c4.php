<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b5f2c7851a712eac9ae89dacedd611138e8c6a9997753544cbaf8cd2fa114106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_236e4a151a7000636b48784bd6a9217e154dc52c70dedfb84ddb0d691ee89a2a = $this->env->getExtension("native_profiler");
        $__internal_236e4a151a7000636b48784bd6a9217e154dc52c70dedfb84ddb0d691ee89a2a->enter($__internal_236e4a151a7000636b48784bd6a9217e154dc52c70dedfb84ddb0d691ee89a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_236e4a151a7000636b48784bd6a9217e154dc52c70dedfb84ddb0d691ee89a2a->leave($__internal_236e4a151a7000636b48784bd6a9217e154dc52c70dedfb84ddb0d691ee89a2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3b7ac1115e5b53486fc410b96679aa0d18078e0edea5fec6e9206963c52d4eb = $this->env->getExtension("native_profiler");
        $__internal_d3b7ac1115e5b53486fc410b96679aa0d18078e0edea5fec6e9206963c52d4eb->enter($__internal_d3b7ac1115e5b53486fc410b96679aa0d18078e0edea5fec6e9206963c52d4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3b7ac1115e5b53486fc410b96679aa0d18078e0edea5fec6e9206963c52d4eb->leave($__internal_d3b7ac1115e5b53486fc410b96679aa0d18078e0edea5fec6e9206963c52d4eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6106b6ab3d3ae3938fcc21a4548e06f9561f104c1183d8ef40716bf4321ba5f3 = $this->env->getExtension("native_profiler");
        $__internal_6106b6ab3d3ae3938fcc21a4548e06f9561f104c1183d8ef40716bf4321ba5f3->enter($__internal_6106b6ab3d3ae3938fcc21a4548e06f9561f104c1183d8ef40716bf4321ba5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6106b6ab3d3ae3938fcc21a4548e06f9561f104c1183d8ef40716bf4321ba5f3->leave($__internal_6106b6ab3d3ae3938fcc21a4548e06f9561f104c1183d8ef40716bf4321ba5f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_966d3633a4d72e9ba2b8c5ac85ff4112ade6293ebe5b529fdbebe467af2fb917 = $this->env->getExtension("native_profiler");
        $__internal_966d3633a4d72e9ba2b8c5ac85ff4112ade6293ebe5b529fdbebe467af2fb917->enter($__internal_966d3633a4d72e9ba2b8c5ac85ff4112ade6293ebe5b529fdbebe467af2fb917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_966d3633a4d72e9ba2b8c5ac85ff4112ade6293ebe5b529fdbebe467af2fb917->leave($__internal_966d3633a4d72e9ba2b8c5ac85ff4112ade6293ebe5b529fdbebe467af2fb917_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
