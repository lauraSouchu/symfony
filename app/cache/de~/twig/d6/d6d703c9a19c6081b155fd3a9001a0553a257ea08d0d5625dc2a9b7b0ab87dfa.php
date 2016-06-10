<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8498401ad0c77fe7fd18405552de0843edbe4d969a8904f0e574d23075b5f45c extends Twig_Template
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
        $__internal_1c6ffc74aad357aa515164e0f1549e94440bdfa741e2f7664e48cc0444b8d731 = $this->env->getExtension("native_profiler");
        $__internal_1c6ffc74aad357aa515164e0f1549e94440bdfa741e2f7664e48cc0444b8d731->enter($__internal_1c6ffc74aad357aa515164e0f1549e94440bdfa741e2f7664e48cc0444b8d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c6ffc74aad357aa515164e0f1549e94440bdfa741e2f7664e48cc0444b8d731->leave($__internal_1c6ffc74aad357aa515164e0f1549e94440bdfa741e2f7664e48cc0444b8d731_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f43bfc32da9e256fabc7102866b73efc704128c98be6da952403046195af466c = $this->env->getExtension("native_profiler");
        $__internal_f43bfc32da9e256fabc7102866b73efc704128c98be6da952403046195af466c->enter($__internal_f43bfc32da9e256fabc7102866b73efc704128c98be6da952403046195af466c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f43bfc32da9e256fabc7102866b73efc704128c98be6da952403046195af466c->leave($__internal_f43bfc32da9e256fabc7102866b73efc704128c98be6da952403046195af466c_prof);

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
