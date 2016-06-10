<?php

/* ::base.html.twig */
class __TwigTemplate_112ecd72e2d054e5845fecc9839003a5236f7e664a030d080f9a49fa5f6b1d72 extends Twig_Template
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
        $__internal_8fe222deb98af585a6b9b33a0a1bde4b023b3dc348f9859e2cf1ee29b7b1782c = $this->env->getExtension("native_profiler");
        $__internal_8fe222deb98af585a6b9b33a0a1bde4b023b3dc348f9859e2cf1ee29b7b1782c->enter($__internal_8fe222deb98af585a6b9b33a0a1bde4b023b3dc348f9859e2cf1ee29b7b1782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8fe222deb98af585a6b9b33a0a1bde4b023b3dc348f9859e2cf1ee29b7b1782c->leave($__internal_8fe222deb98af585a6b9b33a0a1bde4b023b3dc348f9859e2cf1ee29b7b1782c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64067b78f26de7691805ae6bbe4d2173a8ce521b539c01b9af57ffee450305de = $this->env->getExtension("native_profiler");
        $__internal_64067b78f26de7691805ae6bbe4d2173a8ce521b539c01b9af57ffee450305de->enter($__internal_64067b78f26de7691805ae6bbe4d2173a8ce521b539c01b9af57ffee450305de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64067b78f26de7691805ae6bbe4d2173a8ce521b539c01b9af57ffee450305de->leave($__internal_64067b78f26de7691805ae6bbe4d2173a8ce521b539c01b9af57ffee450305de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49b1b7e3bcde1b3e82a7ab035b9cc33081ec385f41b4bb47c4be641e7f00a39f = $this->env->getExtension("native_profiler");
        $__internal_49b1b7e3bcde1b3e82a7ab035b9cc33081ec385f41b4bb47c4be641e7f00a39f->enter($__internal_49b1b7e3bcde1b3e82a7ab035b9cc33081ec385f41b4bb47c4be641e7f00a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49b1b7e3bcde1b3e82a7ab035b9cc33081ec385f41b4bb47c4be641e7f00a39f->leave($__internal_49b1b7e3bcde1b3e82a7ab035b9cc33081ec385f41b4bb47c4be641e7f00a39f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e39525c709ef82b2e3240aba41aeb2409401f5736dc3091d66f2253b7befb02 = $this->env->getExtension("native_profiler");
        $__internal_1e39525c709ef82b2e3240aba41aeb2409401f5736dc3091d66f2253b7befb02->enter($__internal_1e39525c709ef82b2e3240aba41aeb2409401f5736dc3091d66f2253b7befb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e39525c709ef82b2e3240aba41aeb2409401f5736dc3091d66f2253b7befb02->leave($__internal_1e39525c709ef82b2e3240aba41aeb2409401f5736dc3091d66f2253b7befb02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c05f0024e60a4ff31db603626d9a3fe9b5f2970e22dc2b176502e9446432ff4 = $this->env->getExtension("native_profiler");
        $__internal_2c05f0024e60a4ff31db603626d9a3fe9b5f2970e22dc2b176502e9446432ff4->enter($__internal_2c05f0024e60a4ff31db603626d9a3fe9b5f2970e22dc2b176502e9446432ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c05f0024e60a4ff31db603626d9a3fe9b5f2970e22dc2b176502e9446432ff4->leave($__internal_2c05f0024e60a4ff31db603626d9a3fe9b5f2970e22dc2b176502e9446432ff4_prof);

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
