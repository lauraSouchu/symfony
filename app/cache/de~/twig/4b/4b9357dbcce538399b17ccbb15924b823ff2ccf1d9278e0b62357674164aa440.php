<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3b8ec3bba02b18c5b4242f2f7c2228aa1216597875684d3df757e58451ce512d extends Twig_Template
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
        $__internal_e5dbe5e865b238c33f6eb1f08729172baa3540650225e4f7ce4af11a7a491b39 = $this->env->getExtension("native_profiler");
        $__internal_e5dbe5e865b238c33f6eb1f08729172baa3540650225e4f7ce4af11a7a491b39->enter($__internal_e5dbe5e865b238c33f6eb1f08729172baa3540650225e4f7ce4af11a7a491b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_e5dbe5e865b238c33f6eb1f08729172baa3540650225e4f7ce4af11a7a491b39->leave($__internal_e5dbe5e865b238c33f6eb1f08729172baa3540650225e4f7ce4af11a7a491b39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
