<?php

/* CalendarBundle::layout.html.twig */
class __TwigTemplate_36334b0d05bc48f03acd2c44c55f3d7c77ab4d4dd2abfe09c7e91334d809e953 extends Twig_Template
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
        // line 1
        echo "<html>
    <head>  

<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.min.css\"  crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.print.css\"  crossorigin=\"anonymous\">

<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.min.js\" crossorigin=\"anonymous\"></script>





    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "        ";
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
        return array (  56 => 22,  53 => 21,  47 => 23,  45 => 21,  25 => 4,  20 => 1,);
    }
}
/* <html>*/
/*     <head>  */
/* */
/* <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.min.css"  crossorigin="anonymous">*/
/* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.print.css"  crossorigin="anonymous">*/
/* */
/* <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* */
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js" crossorigin="anonymous"></script>*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.min.js" crossorigin="anonymous"></script>*/
/* */
/* */
/* */
/* */
/* */
/*     </head>*/
/*     <body>*/
/*         {%block body%}*/
/*         {%endblock%}*/
/*     </body>*/
/* </html>*/
/* */
