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
        $__internal_9771de181588d4ae9fe222201dd2e0f56de5e24eae92349b3fcd3b3582346a99 = $this->env->getExtension("native_profiler");
        $__internal_9771de181588d4ae9fe222201dd2e0f56de5e24eae92349b3fcd3b3582346a99->enter($__internal_9771de181588d4ae9fe222201dd2e0f56de5e24eae92349b3fcd3b3582346a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9771de181588d4ae9fe222201dd2e0f56de5e24eae92349b3fcd3b3582346a99->leave($__internal_9771de181588d4ae9fe222201dd2e0f56de5e24eae92349b3fcd3b3582346a99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_275aa15ef677d9f54f48168b2eac1488b66354d012b63f70d03289eb20b5fa1e = $this->env->getExtension("native_profiler");
        $__internal_275aa15ef677d9f54f48168b2eac1488b66354d012b63f70d03289eb20b5fa1e->enter($__internal_275aa15ef677d9f54f48168b2eac1488b66354d012b63f70d03289eb20b5fa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_275aa15ef677d9f54f48168b2eac1488b66354d012b63f70d03289eb20b5fa1e->leave($__internal_275aa15ef677d9f54f48168b2eac1488b66354d012b63f70d03289eb20b5fa1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a6b4243fedef54c6a069b2c36e25a874427e9240a0d4f24e08614eb53ab7558 = $this->env->getExtension("native_profiler");
        $__internal_9a6b4243fedef54c6a069b2c36e25a874427e9240a0d4f24e08614eb53ab7558->enter($__internal_9a6b4243fedef54c6a069b2c36e25a874427e9240a0d4f24e08614eb53ab7558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a6b4243fedef54c6a069b2c36e25a874427e9240a0d4f24e08614eb53ab7558->leave($__internal_9a6b4243fedef54c6a069b2c36e25a874427e9240a0d4f24e08614eb53ab7558_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12afd558d3d42feff701ad5fc37053566543a7734680bdbee20ddc0cbf688d90 = $this->env->getExtension("native_profiler");
        $__internal_12afd558d3d42feff701ad5fc37053566543a7734680bdbee20ddc0cbf688d90->enter($__internal_12afd558d3d42feff701ad5fc37053566543a7734680bdbee20ddc0cbf688d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12afd558d3d42feff701ad5fc37053566543a7734680bdbee20ddc0cbf688d90->leave($__internal_12afd558d3d42feff701ad5fc37053566543a7734680bdbee20ddc0cbf688d90_prof);

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
