<?php

/* CalendarBundle:Calendar:index.html.twig */
class __TwigTemplate_ffdb025facfe13c1b9c0067ee31d64428d36a987abb73d9715eb2bdb0c601341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CalendarBundle::layout.html.twig", "CalendarBundle:Calendar:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CalendarBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1> Calendrier </h1>
<p>nom : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : null), "nom", array()), "html", null, true);
        echo "</p>
<p> date de création du calendrier : ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : null), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo "</p>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : null), "events", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 8
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo ")<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_detail_event", array("id_event" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">detail</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>

<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_add_event", array("calendar" => $this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : null), "id", array()))), "html", null, true);
        echo "\">Ajouter un évènement</a>
<div id='calendar'></div>

<script>
    \$(document).ready(function() {
\t\t
\t\t\$('#calendar').fullCalendar({
\t\t\theader: {
\t\t\t\tleft: 'prev,next today',
\t\t\t\tcenter: 'title',
\t\t\t\tright: 'month,basicWeek,basicDay'
\t\t\t},
\t\t\tdefaultDate: '2016-06-12',
\t\t\teditable: true,
\t\t\teventLimit: true, // allow \"more\" link when too many events
\t\t\tevents: [
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : null), "events", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 29
            echo "\t\t\t\t{
\t\t\t\t\ttitle: \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "\",
\t\t\t\t\tstart: '";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "Y/m/d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heureDebut", array()), "h:i"), "html", null, true);
            echo "',
\t\t\t\t\tend: '";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "Y/m/d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heureFin", array()), "h:i"), "html", null, true);
            echo "'
\t\t\t\t},
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        ]
                });
\t\t
\t});

</script>

";
    }

    public function getTemplateName()
    {
        return "CalendarBundle:Calendar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 35,  100 => 32,  94 => 31,  90 => 30,  87 => 29,  83 => 28,  64 => 12,  60 => 10,  47 => 8,  43 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* <h1> Calendrier </h1>*/
/* <p>nom : {{calendar.nom}}</p>*/
/* <p> date de création du calendrier : {{calendar.dateCreation|date("d/m/Y")}}</p>*/
/* <ul>*/
/*     {%for event in calendar.events%}*/
/*         <li>{{event.titre}} ({{event.description}})<a href="{{path('calendar_detail_event', {'id_event':event.id})}}">detail</a></li>*/
/*     {%endfor%}*/
/* </ul>*/
/* */
/* <a href="{{path('calendar_add_event', {'calendar':calendar.id})}}">Ajouter un évènement</a>*/
/* <div id='calendar'></div>*/
/* */
/* <script>*/
/*     $(document).ready(function() {*/
/* 		*/
/* 		$('#calendar').fullCalendar({*/
/* 			header: {*/
/* 				left: 'prev,next today',*/
/* 				center: 'title',*/
/* 				right: 'month,basicWeek,basicDay'*/
/* 			},*/
/* 			defaultDate: '2016-06-12',*/
/* 			editable: true,*/
/* 			eventLimit: true, // allow "more" link when too many events*/
/* 			events: [*/
/*                             {%for event in calendar.events%}*/
/* 				{*/
/* 					title: "{{event.titre}}",*/
/* 					start: '{{event.dateDebut|date('Y/m/d')}} {{event.heureDebut|date('h:i')}}',*/
/* 					end: '{{event.dateFin|date('Y/m/d')}} {{event.heureFin|date('h:i')}}'*/
/* 				},*/
/*                                         {%endfor%}*/
/*                         ]*/
/*                 });*/
/* 		*/
/* 	});*/
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */
