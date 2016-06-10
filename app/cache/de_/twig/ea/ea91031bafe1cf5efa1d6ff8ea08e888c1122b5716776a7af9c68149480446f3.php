<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e5fa748d2557484c31dae13517b5532b211787025dc6fe00374d4fa21e7278c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_24e51eec50d328a7f8bae337f1d26b3f7d8acd511ab2b9571077bbda76ab0708 = $this->env->getExtension("native_profiler");
        $__internal_24e51eec50d328a7f8bae337f1d26b3f7d8acd511ab2b9571077bbda76ab0708->enter($__internal_24e51eec50d328a7f8bae337f1d26b3f7d8acd511ab2b9571077bbda76ab0708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e51eec50d328a7f8bae337f1d26b3f7d8acd511ab2b9571077bbda76ab0708->leave($__internal_24e51eec50d328a7f8bae337f1d26b3f7d8acd511ab2b9571077bbda76ab0708_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71c0506ac0765ccf36ba5fabb5652966eb66901d468005593da6e6fe528296e9 = $this->env->getExtension("native_profiler");
        $__internal_71c0506ac0765ccf36ba5fabb5652966eb66901d468005593da6e6fe528296e9->enter($__internal_71c0506ac0765ccf36ba5fabb5652966eb66901d468005593da6e6fe528296e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71c0506ac0765ccf36ba5fabb5652966eb66901d468005593da6e6fe528296e9->leave($__internal_71c0506ac0765ccf36ba5fabb5652966eb66901d468005593da6e6fe528296e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8ab4415f51c02143dc8334fa93378208a8e8f64275302f49a72625c63fc9f73 = $this->env->getExtension("native_profiler");
        $__internal_d8ab4415f51c02143dc8334fa93378208a8e8f64275302f49a72625c63fc9f73->enter($__internal_d8ab4415f51c02143dc8334fa93378208a8e8f64275302f49a72625c63fc9f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8ab4415f51c02143dc8334fa93378208a8e8f64275302f49a72625c63fc9f73->leave($__internal_d8ab4415f51c02143dc8334fa93378208a8e8f64275302f49a72625c63fc9f73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00dd2c99de43e9e19bda48745d7f987b3ac11af4f75fcb92a729c5609422a70a = $this->env->getExtension("native_profiler");
        $__internal_00dd2c99de43e9e19bda48745d7f987b3ac11af4f75fcb92a729c5609422a70a->enter($__internal_00dd2c99de43e9e19bda48745d7f987b3ac11af4f75fcb92a729c5609422a70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00dd2c99de43e9e19bda48745d7f987b3ac11af4f75fcb92a729c5609422a70a->leave($__internal_00dd2c99de43e9e19bda48745d7f987b3ac11af4f75fcb92a729c5609422a70a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
