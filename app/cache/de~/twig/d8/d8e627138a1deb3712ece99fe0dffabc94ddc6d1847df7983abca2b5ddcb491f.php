<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5b9b68f87e229ad811955e2648a8df868c49ac828b0bf13b6e4f22d12cc4097f extends Twig_Template
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
        $__internal_ae5b1f9c2aa6f1978734aa7dda4c7be82d538428c38a184d19f7f564e70ba32c = $this->env->getExtension("native_profiler");
        $__internal_ae5b1f9c2aa6f1978734aa7dda4c7be82d538428c38a184d19f7f564e70ba32c->enter($__internal_ae5b1f9c2aa6f1978734aa7dda4c7be82d538428c38a184d19f7f564e70ba32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5b1f9c2aa6f1978734aa7dda4c7be82d538428c38a184d19f7f564e70ba32c->leave($__internal_ae5b1f9c2aa6f1978734aa7dda4c7be82d538428c38a184d19f7f564e70ba32c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73fc5065c83d9a5b7013add1da6e8cad8bc19093e3346a1afd2ef1a15c4322a1 = $this->env->getExtension("native_profiler");
        $__internal_73fc5065c83d9a5b7013add1da6e8cad8bc19093e3346a1afd2ef1a15c4322a1->enter($__internal_73fc5065c83d9a5b7013add1da6e8cad8bc19093e3346a1afd2ef1a15c4322a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_73fc5065c83d9a5b7013add1da6e8cad8bc19093e3346a1afd2ef1a15c4322a1->leave($__internal_73fc5065c83d9a5b7013add1da6e8cad8bc19093e3346a1afd2ef1a15c4322a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8005207768f90a4c98642ac21413e922a42343ddaf85ee4f34f0b1d1c97c1cf = $this->env->getExtension("native_profiler");
        $__internal_b8005207768f90a4c98642ac21413e922a42343ddaf85ee4f34f0b1d1c97c1cf->enter($__internal_b8005207768f90a4c98642ac21413e922a42343ddaf85ee4f34f0b1d1c97c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8005207768f90a4c98642ac21413e922a42343ddaf85ee4f34f0b1d1c97c1cf->leave($__internal_b8005207768f90a4c98642ac21413e922a42343ddaf85ee4f34f0b1d1c97c1cf_prof);

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
