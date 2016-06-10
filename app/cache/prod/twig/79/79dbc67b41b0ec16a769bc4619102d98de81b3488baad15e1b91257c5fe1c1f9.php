<?php

/* CalendarBundle:Event:detailEvent.html.twig */
class __TwigTemplate_b8a6deb5a804fab5202c21ad59570bc6b0f371d4b74830afabbcc5f2bbcc6196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CalendarBundle::layout.html.twig", "CalendarBundle:Event:detailEvent.html.twig", 1);
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
        echo "        <h1> détail de l'évènement </h1>
        <p> Titre : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre", array()), "html", null, true);
        echo "</p>
        <p> Description : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "description", array()), "html", null, true);
        echo " </p>
        <p> Lieu : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "lieu", array()), "html", null, true);
        echo " </p>
        <p> Date Début : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo " </p>
        <p> Date fin : ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo " </p>
        <p> Heure début : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "heureDebut", array()), "h:i"), "html", null, true);
        echo " </p>
        <p> Heure fin : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "heureFin", array()), "h:i"), "html", null, true);
        echo " </p>
        
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_edit_event", array("event" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id", array()))), "html", null, true);
        echo "\"> Modifier event </a>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_del_event", array("id_event" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id", array()))), "html", null, true);
        echo "\"> Supprimer event </a> 
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("calendar_homepage");
        echo "\"> Retour </a>
";
    }

    public function getTemplateName()
    {
        return "CalendarBundle:Event:detailEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  67 => 13,  63 => 12,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*         <h1> détail de l'évènement </h1>*/
/*         <p> Titre : {{event.titre}}</p>*/
/*         <p> Description : {{event.description}} </p>*/
/*         <p> Lieu : {{event.lieu}} </p>*/
/*         <p> Date Début : {{event.dateDebut|date('d/m/Y')}} </p>*/
/*         <p> Date fin : {{event.dateFin|date('d/m/Y')}} </p>*/
/*         <p> Heure début : {{event.heureDebut|date('h:i')}} </p>*/
/*         <p> Heure fin : {{event.heureFin|date('h:i')}} </p>*/
/*         */
/*         <a href="{{path('calendar_edit_event', {'event': event.id})}}"> Modifier event </a>*/
/*         <a href="{{path('calendar_del_event', {'id_event': event.id})}}"> Supprimer event </a> */
/*         <a href="{{path('calendar_homepage')}}"> Retour </a>*/
/* {% endblock %}*/
