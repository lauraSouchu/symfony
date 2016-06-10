<?php

/* ::base.html.twig */
class __TwigTemplate_e6887883fb3dab7895ac6433daf2ca7adc71f50f92369bbfb8e3d6a95c986865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b88edf972871931de576d8ee0c52fded9963b1dd702a0fb4bf954de5c59ea27d = $this->env->getExtension("native_profiler");
        $__internal_b88edf972871931de576d8ee0c52fded9963b1dd702a0fb4bf954de5c59ea27d->enter($__internal_b88edf972871931de576d8ee0c52fded9963b1dd702a0fb4bf954de5c59ea27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b88edf972871931de576d8ee0c52fded9963b1dd702a0fb4bf954de5c59ea27d->leave($__internal_b88edf972871931de576d8ee0c52fded9963b1dd702a0fb4bf954de5c59ea27d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f07dc9aa8f5cab4e04a7f5b6c6372c1812538c8b3148f7895e31ec069227095 = $this->env->getExtension("native_profiler");
        $__internal_0f07dc9aa8f5cab4e04a7f5b6c6372c1812538c8b3148f7895e31ec069227095->enter($__internal_0f07dc9aa8f5cab4e04a7f5b6c6372c1812538c8b3148f7895e31ec069227095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f07dc9aa8f5cab4e04a7f5b6c6372c1812538c8b3148f7895e31ec069227095->leave($__internal_0f07dc9aa8f5cab4e04a7f5b6c6372c1812538c8b3148f7895e31ec069227095_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df8743399cd2c5cc399d4d80493a86283cf7b6355c223c0e253a9cb932717b70 = $this->env->getExtension("native_profiler");
        $__internal_df8743399cd2c5cc399d4d80493a86283cf7b6355c223c0e253a9cb932717b70->enter($__internal_df8743399cd2c5cc399d4d80493a86283cf7b6355c223c0e253a9cb932717b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df8743399cd2c5cc399d4d80493a86283cf7b6355c223c0e253a9cb932717b70->leave($__internal_df8743399cd2c5cc399d4d80493a86283cf7b6355c223c0e253a9cb932717b70_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f733bbede5c4962d8d7ca0a9a600a1f894863b1b6f0fcc0dd4e65d3bd11e78bc = $this->env->getExtension("native_profiler");
        $__internal_f733bbede5c4962d8d7ca0a9a600a1f894863b1b6f0fcc0dd4e65d3bd11e78bc->enter($__internal_f733bbede5c4962d8d7ca0a9a600a1f894863b1b6f0fcc0dd4e65d3bd11e78bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f733bbede5c4962d8d7ca0a9a600a1f894863b1b6f0fcc0dd4e65d3bd11e78bc->leave($__internal_f733bbede5c4962d8d7ca0a9a600a1f894863b1b6f0fcc0dd4e65d3bd11e78bc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0393564407d1c1259f52a6b54b0d44d19bf14b04c2af976f01bcdf2a0405214 = $this->env->getExtension("native_profiler");
        $__internal_f0393564407d1c1259f52a6b54b0d44d19bf14b04c2af976f01bcdf2a0405214->enter($__internal_f0393564407d1c1259f52a6b54b0d44d19bf14b04c2af976f01bcdf2a0405214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0393564407d1c1259f52a6b54b0d44d19bf14b04c2af976f01bcdf2a0405214->leave($__internal_f0393564407d1c1259f52a6b54b0d44d19bf14b04c2af976f01bcdf2a0405214_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
