<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9a04be9ee0d50a0aa594480cd47a100c79aefff38e9a21d9a53efd2476899795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_178181ac5844ff8831adecb0502f6e3715459f9e7bfd73a98c09529328847a49 = $this->env->getExtension("native_profiler");
        $__internal_178181ac5844ff8831adecb0502f6e3715459f9e7bfd73a98c09529328847a49->enter($__internal_178181ac5844ff8831adecb0502f6e3715459f9e7bfd73a98c09529328847a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178181ac5844ff8831adecb0502f6e3715459f9e7bfd73a98c09529328847a49->leave($__internal_178181ac5844ff8831adecb0502f6e3715459f9e7bfd73a98c09529328847a49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd43c346de84a80de5f6a2aad7b6fef71ba7b7b9a06cfc55bee958697c16884c = $this->env->getExtension("native_profiler");
        $__internal_cd43c346de84a80de5f6a2aad7b6fef71ba7b7b9a06cfc55bee958697c16884c->enter($__internal_cd43c346de84a80de5f6a2aad7b6fef71ba7b7b9a06cfc55bee958697c16884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd43c346de84a80de5f6a2aad7b6fef71ba7b7b9a06cfc55bee958697c16884c->leave($__internal_cd43c346de84a80de5f6a2aad7b6fef71ba7b7b9a06cfc55bee958697c16884c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c078d36328dafe2e4e8ebbc7b6af25a119d865a9628637b4ded32abe58fa7ec7 = $this->env->getExtension("native_profiler");
        $__internal_c078d36328dafe2e4e8ebbc7b6af25a119d865a9628637b4ded32abe58fa7ec7->enter($__internal_c078d36328dafe2e4e8ebbc7b6af25a119d865a9628637b4ded32abe58fa7ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c078d36328dafe2e4e8ebbc7b6af25a119d865a9628637b4ded32abe58fa7ec7->leave($__internal_c078d36328dafe2e4e8ebbc7b6af25a119d865a9628637b4ded32abe58fa7ec7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
