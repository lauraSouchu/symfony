<?php

/* base.html.twig */
class __TwigTemplate_2a783600cc55cf4e8743944277d9e16df0de0016b5d86febb164ae65473d1fdf extends Twig_Template
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
        $__internal_bda5c74dac7170404d94c0459bc6d89617595e68589bdbdf1a5adf5923e92310 = $this->env->getExtension("native_profiler");
        $__internal_bda5c74dac7170404d94c0459bc6d89617595e68589bdbdf1a5adf5923e92310->enter($__internal_bda5c74dac7170404d94c0459bc6d89617595e68589bdbdf1a5adf5923e92310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bda5c74dac7170404d94c0459bc6d89617595e68589bdbdf1a5adf5923e92310->leave($__internal_bda5c74dac7170404d94c0459bc6d89617595e68589bdbdf1a5adf5923e92310_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36f73167784f637e4dd2e67f34702b2744d83f8626e5fd85ac85de24b1aa85ad = $this->env->getExtension("native_profiler");
        $__internal_36f73167784f637e4dd2e67f34702b2744d83f8626e5fd85ac85de24b1aa85ad->enter($__internal_36f73167784f637e4dd2e67f34702b2744d83f8626e5fd85ac85de24b1aa85ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_36f73167784f637e4dd2e67f34702b2744d83f8626e5fd85ac85de24b1aa85ad->leave($__internal_36f73167784f637e4dd2e67f34702b2744d83f8626e5fd85ac85de24b1aa85ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f5444457a6b9aa795621da288f602e29947c2d478c7789fd61f8a9a0b36865b = $this->env->getExtension("native_profiler");
        $__internal_0f5444457a6b9aa795621da288f602e29947c2d478c7789fd61f8a9a0b36865b->enter($__internal_0f5444457a6b9aa795621da288f602e29947c2d478c7789fd61f8a9a0b36865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0f5444457a6b9aa795621da288f602e29947c2d478c7789fd61f8a9a0b36865b->leave($__internal_0f5444457a6b9aa795621da288f602e29947c2d478c7789fd61f8a9a0b36865b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d387adc81552a2be49eb6f0378915e049a4d5e592e3845130a086e12dcced5f = $this->env->getExtension("native_profiler");
        $__internal_7d387adc81552a2be49eb6f0378915e049a4d5e592e3845130a086e12dcced5f->enter($__internal_7d387adc81552a2be49eb6f0378915e049a4d5e592e3845130a086e12dcced5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d387adc81552a2be49eb6f0378915e049a4d5e592e3845130a086e12dcced5f->leave($__internal_7d387adc81552a2be49eb6f0378915e049a4d5e592e3845130a086e12dcced5f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4a736cc32c8d25578a70a19baa39dafe1f84868c4caeafd72165651a0ae97db = $this->env->getExtension("native_profiler");
        $__internal_e4a736cc32c8d25578a70a19baa39dafe1f84868c4caeafd72165651a0ae97db->enter($__internal_e4a736cc32c8d25578a70a19baa39dafe1f84868c4caeafd72165651a0ae97db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e4a736cc32c8d25578a70a19baa39dafe1f84868c4caeafd72165651a0ae97db->leave($__internal_e4a736cc32c8d25578a70a19baa39dafe1f84868c4caeafd72165651a0ae97db_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
