<?php

/* CalendarBundle:Calendar:index.html.twig */
class __TwigTemplate_c1f62c7512c8734d7026cad0c6db0488225b5804d89bab071d1f7f0be5da91e7 extends Twig_Template
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
        $__internal_636607494b89ca717e5d1f1cd6ded340ff9ae020dfeff307a0411504385b255f = $this->env->getExtension("native_profiler");
        $__internal_636607494b89ca717e5d1f1cd6ded340ff9ae020dfeff307a0411504385b255f->enter($__internal_636607494b89ca717e5d1f1cd6ded340ff9ae020dfeff307a0411504385b255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CalendarBundle:Calendar:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_636607494b89ca717e5d1f1cd6ded340ff9ae020dfeff307a0411504385b255f->leave($__internal_636607494b89ca717e5d1f1cd6ded340ff9ae020dfeff307a0411504385b255f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_95abbb762178c33229831f684c6f2f265d9c9172cfeacb82c0796ce62773b11c = $this->env->getExtension("native_profiler");
        $__internal_95abbb762178c33229831f684c6f2f265d9c9172cfeacb82c0796ce62773b11c->enter($__internal_95abbb762178c33229831f684c6f2f265d9c9172cfeacb82c0796ce62773b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context["theme"] = "well";
        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "theme", array()) == "Bleu")) {
            // line 5
            echo "        ";
            $context["theme"] = "alert-info";
            // line 6
            echo "    ";
        } elseif (($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "theme", array()) == "Jaune")) {
            // line 7
            echo "        ";
            $context["theme"] = "alert-warning";
            // line 8
            echo "    ";
        } elseif (($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "theme", array()) == "Rouge")) {
            // line 9
            echo "        ";
            $context["theme"] = "alert-danger";
            // line 10
            echo "    ";
        } elseif (($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "theme", array()) == "Vert")) {
            // line 11
            echo "        ";
            $context["theme"] = "alert-success";
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <div class=\"container-fluid\">
        <div class=\"col-md-12 ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
        echo "\">
            <div class='pull-right'>
                <div class=\"dropdown\">
                    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "
                        <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("calendar_edit_profil");
        echo "\" data-toggle=\"modal\" data-target=\"#editProfil\">Modifier mon Profil</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se Deconnecter</a></li>
                    </ul>
                </div>
            </div>
            <br>
            <h1 class=\"text-center\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "nom", array()), "html", null, true);
        echo " </h1>
            <h5 class=\"text-center\">Créé le ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo "</h5>
            <br>
            <a class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#addEvent\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("calendar_add_event");
        echo "\">Ajouter un évènement</a>
            <a class=\"btn btn-default pull-right\" data-toggle=\"modal\" data-target=\"#config\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("calendar_config");
        echo "\">Panneau de configuration</a>
            <a class=\"btn btn-default pull-right\" data-toggle=\"modal\" data-target=\"#share\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("calendar_share");
        echo "\">Partage</a>

            <div class=\"modal fade\" id=\"addEvent\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

                        </div>
                        <div class=\"modal-body\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"modal fade\" id=\"editProfil\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

                        </div>
                        <div class=\"modal-body\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"modal fade\" id=\"share\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

                        </div>
                        <div class=\"modal-body\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"modal fade\" id=\"config\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

                        </div>
                        <div class=\"modal-body\">
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div id='calendar'></div>
        </div>
    </div>
    <script>
        \$(document).ready(function () {

            \$('#calendar').fullCalendar({
                activate: function (event, ui) {
                    \$(\"#calendar\").fullCalendar(\"render\");
                },
                lang: \"fr\",
                eventStartEditable: false,
                eventDurationEditable: false,
                eventLimit: true,
                theme: true,
                allDaySlot: false,
                header: {
                    left: \"prev,next today\",
                    center: \"title\",
                    right: \"month,agendaWeek,agendaDay\"
                },
                eventClick: function (view) {
                    var id = view.id;
                    var url = '";
        // line 122
        echo $this->env->getExtension('routing')->getPath("calendar_detail_event", array("event" => "id_event"));
        echo "';
                    url = url.replace('id_event', id);

                    \$(location).attr('href', url);
                },
                editable: true,
                events: [
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "events", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 130
            echo "                        {
                            title: \"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "\",
                            start: '";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "Y/m/d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heureDebut", array()), "h:i"), "html", null, true);
            echo "',
                            end: '";
            // line 133
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "Y/m/d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heureFin", array()), "h:i"), "html", null, true);
            echo "',
                            id: '";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "'
                        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "calendars", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 138
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["calendar"], "events", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 139
                echo "                             {
                                 title: \"";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                echo "\",
                                 start: '";
                // line 141
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "Y/m/d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heureDebut", array()), "h:i"), "html", null, true);
                echo "',
                                 end: '";
                // line 142
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "Y/m/d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heureFin", array()), "h:i"), "html", null, true);
                echo "',
                                 id: '";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "'
                             },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                    ]
                });

            });

    </script>

";
        
        $__internal_95abbb762178c33229831f684c6f2f265d9c9172cfeacb82c0796ce62773b11c->leave($__internal_95abbb762178c33229831f684c6f2f265d9c9172cfeacb82c0796ce62773b11c_prof);

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
        return array (  296 => 147,  290 => 146,  281 => 143,  275 => 142,  269 => 141,  265 => 140,  262 => 139,  257 => 138,  252 => 137,  243 => 134,  237 => 133,  231 => 132,  227 => 131,  224 => 130,  220 => 129,  210 => 122,  118 => 33,  114 => 32,  110 => 31,  105 => 29,  101 => 28,  93 => 23,  89 => 22,  80 => 18,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     {%set theme = 'well'%}*/
/*     {%if calendar.theme == 'Bleu' %}*/
/*         {%set theme = 'alert-info'%}*/
/*     {%elseif calendar.theme == 'Jaune'%}*/
/*         {%set theme = 'alert-warning'%}*/
/*     {%elseif calendar.theme == 'Rouge'%}*/
/*         {%set theme = 'alert-danger'%}*/
/*     {%elseif calendar.theme == 'Vert'%}*/
/*         {%set theme = 'alert-success'%}*/
/*     {%endif%}*/
/*     <div class="container-fluid">*/
/*         <div class="col-md-12 {{theme}}">*/
/*             <div class='pull-right'>*/
/*                 <div class="dropdown">*/
/*                     <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                         {{app.user.nom}} {{app.user.prenom}}*/
/*                         <span class="caret"></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                         <li><a href="{{path('calendar_edit_profil')}}" data-toggle="modal" data-target="#editProfil">Modifier mon Profil</a></li>*/
/*                         <li><a href="{{path('fos_user_security_logout')}}">Se Deconnecter</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <br>*/
/*             <h1 class="text-center"> {{calendar.nom}} </h1>*/
/*             <h5 class="text-center">Créé le {{calendar.dateCreation|date("d/m/Y")}}</h5>*/
/*             <br>*/
/*             <a class="btn btn-success" data-toggle="modal" data-target="#addEvent" href="{{path('calendar_add_event')}}">Ajouter un évènement</a>*/
/*             <a class="btn btn-default pull-right" data-toggle="modal" data-target="#config" href="{{path('calendar_config')}}">Panneau de configuration</a>*/
/*             <a class="btn btn-default pull-right" data-toggle="modal" data-target="#share" href="{{path('calendar_share')}}">Partage</a>*/
/* */
/*             <div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* */
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="modal fade" id="editProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* */
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* */
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* */
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <br><br>*/
/*             <div id='calendar'></div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         $(document).ready(function () {*/
/* */
/*             $('#calendar').fullCalendar({*/
/*                 activate: function (event, ui) {*/
/*                     $("#calendar").fullCalendar("render");*/
/*                 },*/
/*                 lang: "fr",*/
/*                 eventStartEditable: false,*/
/*                 eventDurationEditable: false,*/
/*                 eventLimit: true,*/
/*                 theme: true,*/
/*                 allDaySlot: false,*/
/*                 header: {*/
/*                     left: "prev,next today",*/
/*                     center: "title",*/
/*                     right: "month,agendaWeek,agendaDay"*/
/*                 },*/
/*                 eventClick: function (view) {*/
/*                     var id = view.id;*/
/*                     var url = '{{path('calendar_detail_event', {'event' : 'id_event'})}}';*/
/*                     url = url.replace('id_event', id);*/
/* */
/*                     $(location).attr('href', url);*/
/*                 },*/
/*                 editable: true,*/
/*                 events: [*/
/*         {%for event in calendar.events%}*/
/*                         {*/
/*                             title: "{{event.titre}}",*/
/*                             start: '{{event.dateDebut|date('Y/m/d')}} {{event.heureDebut|date('h:i')}}',*/
/*                             end: '{{event.dateFin|date('Y/m/d')}} {{event.heureFin|date('h:i')}}',*/
/*                             id: '{{event.id}}'*/
/*                         },*/
/*         {%endfor%}*/
/*         {%for calendar in app.user.calendars%}*/
/*             {%for event in calendar.events%}*/
/*                              {*/
/*                                  title: "{{event.titre}}",*/
/*                                  start: '{{event.dateDebut|date('Y/m/d')}} {{event.heureDebut|date('h:i')}}',*/
/*                                  end: '{{event.dateFin|date('Y/m/d')}} {{event.heureFin|date('h:i')}}',*/
/*                                  id: '{{event.id}}'*/
/*                              },*/
/*             {%endfor%}*/
/*         {%endfor%}*/
/*                     ]*/
/*                 });*/
/* */
/*             });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
