<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_69177b72af16bb363ff423408b378bf17682c2079195354ac581791ca466999f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a17c6a3b980d611ccc0eaea34116e7a1af21a061aacc340c07b7c4cd953f6981 = $this->env->getExtension("native_profiler");
        $__internal_a17c6a3b980d611ccc0eaea34116e7a1af21a061aacc340c07b7c4cd953f6981->enter($__internal_a17c6a3b980d611ccc0eaea34116e7a1af21a061aacc340c07b7c4cd953f6981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a17c6a3b980d611ccc0eaea34116e7a1af21a061aacc340c07b7c4cd953f6981->leave($__internal_a17c6a3b980d611ccc0eaea34116e7a1af21a061aacc340c07b7c4cd953f6981_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
