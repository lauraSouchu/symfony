<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6dfc8fbf3f81974b3ddae69a54585444f08d91e2826eb0c126fce0034b61bdc0 extends Twig_Template
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
        $__internal_64dd4b926e1c12db2dc7da37558d02a53d18ec50502ee91be68e886bccf3a7de = $this->env->getExtension("native_profiler");
        $__internal_64dd4b926e1c12db2dc7da37558d02a53d18ec50502ee91be68e886bccf3a7de->enter($__internal_64dd4b926e1c12db2dc7da37558d02a53d18ec50502ee91be68e886bccf3a7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64dd4b926e1c12db2dc7da37558d02a53d18ec50502ee91be68e886bccf3a7de->leave($__internal_64dd4b926e1c12db2dc7da37558d02a53d18ec50502ee91be68e886bccf3a7de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76cfa997589580454eb6ad2033733f959a2f9b75938e2e30faa7083e955a2e3f = $this->env->getExtension("native_profiler");
        $__internal_76cfa997589580454eb6ad2033733f959a2f9b75938e2e30faa7083e955a2e3f->enter($__internal_76cfa997589580454eb6ad2033733f959a2f9b75938e2e30faa7083e955a2e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76cfa997589580454eb6ad2033733f959a2f9b75938e2e30faa7083e955a2e3f->leave($__internal_76cfa997589580454eb6ad2033733f959a2f9b75938e2e30faa7083e955a2e3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34776b92fef502d0b74193350fe0e50a6b9aff97299b07c58fd64ac643444305 = $this->env->getExtension("native_profiler");
        $__internal_34776b92fef502d0b74193350fe0e50a6b9aff97299b07c58fd64ac643444305->enter($__internal_34776b92fef502d0b74193350fe0e50a6b9aff97299b07c58fd64ac643444305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34776b92fef502d0b74193350fe0e50a6b9aff97299b07c58fd64ac643444305->leave($__internal_34776b92fef502d0b74193350fe0e50a6b9aff97299b07c58fd64ac643444305_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd67a3588fc2cda88b5333b0bfb24f1ac02aa99210664e1657b3bcb62e5a8c13 = $this->env->getExtension("native_profiler");
        $__internal_bd67a3588fc2cda88b5333b0bfb24f1ac02aa99210664e1657b3bcb62e5a8c13->enter($__internal_bd67a3588fc2cda88b5333b0bfb24f1ac02aa99210664e1657b3bcb62e5a8c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd67a3588fc2cda88b5333b0bfb24f1ac02aa99210664e1657b3bcb62e5a8c13->leave($__internal_bd67a3588fc2cda88b5333b0bfb24f1ac02aa99210664e1657b3bcb62e5a8c13_prof);

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
