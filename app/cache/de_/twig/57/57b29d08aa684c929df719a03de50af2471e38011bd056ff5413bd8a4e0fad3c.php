<?php

/* CalendarBundle::layout.html.twig */
class __TwigTemplate_410a06fe57cc69d1f0fecdee0158d5d92c43392282a6db27954b2fc9276091c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fab1a2cb12fa3d8d52f35a2dc32a4c92a757c789afa963564100cb5b2b1fdd2f = $this->env->getExtension("native_profiler");
        $__internal_fab1a2cb12fa3d8d52f35a2dc32a4c92a757c789afa963564100cb5b2b1fdd2f->enter($__internal_fab1a2cb12fa3d8d52f35a2dc32a4c92a757c789afa963564100cb5b2b1fdd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CalendarBundle::layout.html.twig"));

        // line 1
        echo "<html>
    <head>  
        <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default.date.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default.time.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/lang-all.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/legacy.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/picker.time.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_fab1a2cb12fa3d8d52f35a2dc32a4c92a757c789afa963564100cb5b2b1fdd2f->leave($__internal_fab1a2cb12fa3d8d52f35a2dc32a4c92a757c789afa963564100cb5b2b1fdd2f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_768a59d01cf2e69069340887c355348ba2aa2c65621821e49e574f9037b89b3d = $this->env->getExtension("native_profiler");
        $__internal_768a59d01cf2e69069340887c355348ba2aa2c65621821e49e574f9037b89b3d->enter($__internal_768a59d01cf2e69069340887c355348ba2aa2c65621821e49e574f9037b89b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        ";
        
        $__internal_768a59d01cf2e69069340887c355348ba2aa2c65621821e49e574f9037b89b3d->leave($__internal_768a59d01cf2e69069340887c355348ba2aa2c65621821e49e574f9037b89b3d_prof);

    }

    public function getTemplateName()
    {
        return "CalendarBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  110 => 24,  101 => 26,  99 => 24,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }
}
/* <html>*/
/*     <head>  */
/*         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/default.date.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/default.time.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/default.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/main.css')}}">*/
/* */
/*         <script src="{{asset('js/jquery.min.js')}}"></script>*/
/*         <script src="{{asset('js/jquery-ui.custom.min.js')}}"></script>*/
/*         <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('js/moment.min.js')}}"></script>*/
/*         <script src="{{asset('js/fullcalendar.min.js')}}"></script>*/
/*         <script src="{{asset('js/lang-all.js')}}"></script>*/
/*         <script src="{{asset('js/picker.js')}}"></script>*/
/*         <script src="{{asset('js/legacy.js')}}"></script>*/
/*         <script src="{{asset('js/picker.date.js')}}"></script>*/
/*         <script src="{{asset('js/picker.time.js')}}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {%block body%}*/
/*         {%endblock%}*/
/*     </body>*/
/* </html>*/
/* */
