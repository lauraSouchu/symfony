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
        $__internal_a7d500bd56f68f1d8672fd2720158650b70d092fcffbc388b146e0771ff54372 = $this->env->getExtension("native_profiler");
        $__internal_a7d500bd56f68f1d8672fd2720158650b70d092fcffbc388b146e0771ff54372->enter($__internal_a7d500bd56f68f1d8672fd2720158650b70d092fcffbc388b146e0771ff54372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7d500bd56f68f1d8672fd2720158650b70d092fcffbc388b146e0771ff54372->leave($__internal_a7d500bd56f68f1d8672fd2720158650b70d092fcffbc388b146e0771ff54372_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_195b5851cc432357d816e9870bd4397ea18db5d8b8bd439641b8108728a70d99 = $this->env->getExtension("native_profiler");
        $__internal_195b5851cc432357d816e9870bd4397ea18db5d8b8bd439641b8108728a70d99->enter($__internal_195b5851cc432357d816e9870bd4397ea18db5d8b8bd439641b8108728a70d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_195b5851cc432357d816e9870bd4397ea18db5d8b8bd439641b8108728a70d99->leave($__internal_195b5851cc432357d816e9870bd4397ea18db5d8b8bd439641b8108728a70d99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e0c5f75ce1d4435a624eabf25acc94bf3246d8a88a5027db3695f4cda2e8d82 = $this->env->getExtension("native_profiler");
        $__internal_8e0c5f75ce1d4435a624eabf25acc94bf3246d8a88a5027db3695f4cda2e8d82->enter($__internal_8e0c5f75ce1d4435a624eabf25acc94bf3246d8a88a5027db3695f4cda2e8d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8e0c5f75ce1d4435a624eabf25acc94bf3246d8a88a5027db3695f4cda2e8d82->leave($__internal_8e0c5f75ce1d4435a624eabf25acc94bf3246d8a88a5027db3695f4cda2e8d82_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acc3d73ec587a6f31fc9460b64965871677ae70989f87a9903c0e87a7b1caace = $this->env->getExtension("native_profiler");
        $__internal_acc3d73ec587a6f31fc9460b64965871677ae70989f87a9903c0e87a7b1caace->enter($__internal_acc3d73ec587a6f31fc9460b64965871677ae70989f87a9903c0e87a7b1caace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_acc3d73ec587a6f31fc9460b64965871677ae70989f87a9903c0e87a7b1caace->leave($__internal_acc3d73ec587a6f31fc9460b64965871677ae70989f87a9903c0e87a7b1caace_prof);

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
