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
        $__internal_e40678f2cdee7ba5385d1fdae90b5cfd96181e859115b52d53062014d56992b4 = $this->env->getExtension("native_profiler");
        $__internal_e40678f2cdee7ba5385d1fdae90b5cfd96181e859115b52d53062014d56992b4->enter($__internal_e40678f2cdee7ba5385d1fdae90b5cfd96181e859115b52d53062014d56992b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40678f2cdee7ba5385d1fdae90b5cfd96181e859115b52d53062014d56992b4->leave($__internal_e40678f2cdee7ba5385d1fdae90b5cfd96181e859115b52d53062014d56992b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d5dfb856c6c6a23ee6405b90f59ca135b6f028320ee070ba1ca6b4c31cc600d = $this->env->getExtension("native_profiler");
        $__internal_3d5dfb856c6c6a23ee6405b90f59ca135b6f028320ee070ba1ca6b4c31cc600d->enter($__internal_3d5dfb856c6c6a23ee6405b90f59ca135b6f028320ee070ba1ca6b4c31cc600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d5dfb856c6c6a23ee6405b90f59ca135b6f028320ee070ba1ca6b4c31cc600d->leave($__internal_3d5dfb856c6c6a23ee6405b90f59ca135b6f028320ee070ba1ca6b4c31cc600d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c0b8ea28b95ffb57293fca7519fa7b4728d95eadaf9318aa0ec71d554ed804e = $this->env->getExtension("native_profiler");
        $__internal_7c0b8ea28b95ffb57293fca7519fa7b4728d95eadaf9318aa0ec71d554ed804e->enter($__internal_7c0b8ea28b95ffb57293fca7519fa7b4728d95eadaf9318aa0ec71d554ed804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c0b8ea28b95ffb57293fca7519fa7b4728d95eadaf9318aa0ec71d554ed804e->leave($__internal_7c0b8ea28b95ffb57293fca7519fa7b4728d95eadaf9318aa0ec71d554ed804e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4f3c2da8f8f69d8bb7ea82e169018579c0ecad9c7bb0b557cf646a6c3024c67 = $this->env->getExtension("native_profiler");
        $__internal_d4f3c2da8f8f69d8bb7ea82e169018579c0ecad9c7bb0b557cf646a6c3024c67->enter($__internal_d4f3c2da8f8f69d8bb7ea82e169018579c0ecad9c7bb0b557cf646a6c3024c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4f3c2da8f8f69d8bb7ea82e169018579c0ecad9c7bb0b557cf646a6c3024c67->leave($__internal_d4f3c2da8f8f69d8bb7ea82e169018579c0ecad9c7bb0b557cf646a6c3024c67_prof);

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
