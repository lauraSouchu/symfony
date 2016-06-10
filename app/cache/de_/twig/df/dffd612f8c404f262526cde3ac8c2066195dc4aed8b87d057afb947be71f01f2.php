<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c08bd933b60e25815e49c219df34ea58bcb1d044713cb261d4d6c7bc4b15374b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6228b0a9d65fd2a46cbea27fd49a204236adb2da35150078d889e365c826d5ce = $this->env->getExtension("native_profiler");
        $__internal_6228b0a9d65fd2a46cbea27fd49a204236adb2da35150078d889e365c826d5ce->enter($__internal_6228b0a9d65fd2a46cbea27fd49a204236adb2da35150078d889e365c826d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6228b0a9d65fd2a46cbea27fd49a204236adb2da35150078d889e365c826d5ce->leave($__internal_6228b0a9d65fd2a46cbea27fd49a204236adb2da35150078d889e365c826d5ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_714603df199396f13da9895737d4b20fb1bba572d66ca20a20a0e5a82720d513 = $this->env->getExtension("native_profiler");
        $__internal_714603df199396f13da9895737d4b20fb1bba572d66ca20a20a0e5a82720d513->enter($__internal_714603df199396f13da9895737d4b20fb1bba572d66ca20a20a0e5a82720d513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_714603df199396f13da9895737d4b20fb1bba572d66ca20a20a0e5a82720d513->leave($__internal_714603df199396f13da9895737d4b20fb1bba572d66ca20a20a0e5a82720d513_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
