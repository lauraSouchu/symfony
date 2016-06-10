<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_909e38a2fe1ef72f5bf165e02a8ea15498e4f09be8e6dac43e0fd1a366a32805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb7b5d78b3a6b77925f7caa87704b8485383f78113306b2268c9e4f9182f2ee1 = $this->env->getExtension("native_profiler");
        $__internal_cb7b5d78b3a6b77925f7caa87704b8485383f78113306b2268c9e4f9182f2ee1->enter($__internal_cb7b5d78b3a6b77925f7caa87704b8485383f78113306b2268c9e4f9182f2ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7b5d78b3a6b77925f7caa87704b8485383f78113306b2268c9e4f9182f2ee1->leave($__internal_cb7b5d78b3a6b77925f7caa87704b8485383f78113306b2268c9e4f9182f2ee1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e04da480be0bb42c1a29e1b86e7b7e98220caafd80c1ce3aedc978639225a3fe = $this->env->getExtension("native_profiler");
        $__internal_e04da480be0bb42c1a29e1b86e7b7e98220caafd80c1ce3aedc978639225a3fe->enter($__internal_e04da480be0bb42c1a29e1b86e7b7e98220caafd80c1ce3aedc978639225a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e04da480be0bb42c1a29e1b86e7b7e98220caafd80c1ce3aedc978639225a3fe->leave($__internal_e04da480be0bb42c1a29e1b86e7b7e98220caafd80c1ce3aedc978639225a3fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f7282860f045552591334ff978b557f3a5315c8626b74e3ebd5f9a859a6efc4 = $this->env->getExtension("native_profiler");
        $__internal_9f7282860f045552591334ff978b557f3a5315c8626b74e3ebd5f9a859a6efc4->enter($__internal_9f7282860f045552591334ff978b557f3a5315c8626b74e3ebd5f9a859a6efc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9f7282860f045552591334ff978b557f3a5315c8626b74e3ebd5f9a859a6efc4->leave($__internal_9f7282860f045552591334ff978b557f3a5315c8626b74e3ebd5f9a859a6efc4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2150d62a22f06059fc7d5c4c5670329786fc32a9b3b0e4d6b2fc7ca55dd435ce = $this->env->getExtension("native_profiler");
        $__internal_2150d62a22f06059fc7d5c4c5670329786fc32a9b3b0e4d6b2fc7ca55dd435ce->enter($__internal_2150d62a22f06059fc7d5c4c5670329786fc32a9b3b0e4d6b2fc7ca55dd435ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2150d62a22f06059fc7d5c4c5670329786fc32a9b3b0e4d6b2fc7ca55dd435ce->leave($__internal_2150d62a22f06059fc7d5c4c5670329786fc32a9b3b0e4d6b2fc7ca55dd435ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
