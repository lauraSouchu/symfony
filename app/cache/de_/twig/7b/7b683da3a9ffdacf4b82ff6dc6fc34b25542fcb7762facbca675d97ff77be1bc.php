<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c31434b5ade6d5340438559279eeea4dd65891450a974e41a6562458f310a587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_13ab9afce974e30276ed5eab4fc5b0a25320b8e4b42086c703a0ac7a5e0903ce = $this->env->getExtension("native_profiler");
        $__internal_13ab9afce974e30276ed5eab4fc5b0a25320b8e4b42086c703a0ac7a5e0903ce->enter($__internal_13ab9afce974e30276ed5eab4fc5b0a25320b8e4b42086c703a0ac7a5e0903ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ab9afce974e30276ed5eab4fc5b0a25320b8e4b42086c703a0ac7a5e0903ce->leave($__internal_13ab9afce974e30276ed5eab4fc5b0a25320b8e4b42086c703a0ac7a5e0903ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c8c9c9fe721409ac4691b6b189a25f832f38daa81e44038961890cd41d2bb44 = $this->env->getExtension("native_profiler");
        $__internal_5c8c9c9fe721409ac4691b6b189a25f832f38daa81e44038961890cd41d2bb44->enter($__internal_5c8c9c9fe721409ac4691b6b189a25f832f38daa81e44038961890cd41d2bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c8c9c9fe721409ac4691b6b189a25f832f38daa81e44038961890cd41d2bb44->leave($__internal_5c8c9c9fe721409ac4691b6b189a25f832f38daa81e44038961890cd41d2bb44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31b0ea8a284c6a9ecfdf088333b8f525e47b1bceebcc79bb4b1505dfc22593e3 = $this->env->getExtension("native_profiler");
        $__internal_31b0ea8a284c6a9ecfdf088333b8f525e47b1bceebcc79bb4b1505dfc22593e3->enter($__internal_31b0ea8a284c6a9ecfdf088333b8f525e47b1bceebcc79bb4b1505dfc22593e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31b0ea8a284c6a9ecfdf088333b8f525e47b1bceebcc79bb4b1505dfc22593e3->leave($__internal_31b0ea8a284c6a9ecfdf088333b8f525e47b1bceebcc79bb4b1505dfc22593e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7e02387fb766a3292569f9b7bd3b05f81cc8050397d1cebd2ede6279b718d4e = $this->env->getExtension("native_profiler");
        $__internal_e7e02387fb766a3292569f9b7bd3b05f81cc8050397d1cebd2ede6279b718d4e->enter($__internal_e7e02387fb766a3292569f9b7bd3b05f81cc8050397d1cebd2ede6279b718d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7e02387fb766a3292569f9b7bd3b05f81cc8050397d1cebd2ede6279b718d4e->leave($__internal_e7e02387fb766a3292569f9b7bd3b05f81cc8050397d1cebd2ede6279b718d4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
