<?php

/* CalendarBundle:Event:editEvent.html.twig */
class __TwigTemplate_69a433bfc4ea0feac060ae0caef3b1f748356ac742bc0d8475da6c51e032a551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CalendarBundle::layout.html.twig", "CalendarBundle:Event:editEvent.html.twig", 1);
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
        echo "        <h1> Modifier un évènement </h1>
        ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_detail_event", array("id_event" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id", array()))), "html", null, true);
        echo "\"> Retour </a>
";
    }

    public function getTemplateName()
    {
        return "CalendarBundle:Event:editEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*         <h1> Modifier un évènement </h1>*/
/*         {{form(form)}}*/
/*         <a href="{{path('calendar_detail_event', {'id_event': event.id})}}"> Retour </a>*/
/* {% endblock %}*/
