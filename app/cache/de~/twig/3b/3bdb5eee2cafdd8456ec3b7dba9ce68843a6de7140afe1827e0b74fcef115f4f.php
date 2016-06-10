<?php

/* CalendarBundle:Event:detailEvent.html.twig */
class __TwigTemplate_cf2c1a8be6f877562da5633ead4118191a2c3f562fedec8b1751b5b5cede7edc extends Twig_Template
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
        $__internal_9ca1d9ddd58ac3ac2acccd2023a4fc224ab2d61c0ca3e78d2dafba75f2045859 = $this->env->getExtension("native_profiler");
        $__internal_9ca1d9ddd58ac3ac2acccd2023a4fc224ab2d61c0ca3e78d2dafba75f2045859->enter($__internal_9ca1d9ddd58ac3ac2acccd2023a4fc224ab2d61c0ca3e78d2dafba75f2045859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CalendarBundle:Event:detailEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca1d9ddd58ac3ac2acccd2023a4fc224ab2d61c0ca3e78d2dafba75f2045859->leave($__internal_9ca1d9ddd58ac3ac2acccd2023a4fc224ab2d61c0ca3e78d2dafba75f2045859_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_828c123c1c225d3859bfbabcaccddebc49420aed4bd65986d96ee44b1a08ad5c = $this->env->getExtension("native_profiler");
        $__internal_828c123c1c225d3859bfbabcaccddebc49420aed4bd65986d96ee44b1a08ad5c->enter($__internal_828c123c1c225d3859bfbabcaccddebc49420aed4bd65986d96ee44b1a08ad5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"col-md-12 well\">
            <h1 class=\"text-center\"> Détails </h1>
            <div class=\"col-md-6\">
                <table class=\"table-bordered table table-striped text-center\">
                    <tbody>
                        <tr>
                            <td>Titre</td>
                            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Lieu</td>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lieu", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Date Début</td>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Date fin</td>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Heure début</td>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "heureDebut", array()), "H:i"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Heure fin</td>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "heureFin", array()), "H:i"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"modal fade\" id=\"editEvent\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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

                <div class=\"modal fade\" id=\"delEvent\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <h5 class=\"text-center\">Suppression de l'évènement</h5>
                            </div>
                            <div class=\"modal-body alert-danger\">
                                Etes vous sûr de vouloir supprimer cet évènement ?
                            </div>
                            <div class=\"modal-footer\">
                                <a href='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_del_event", array("event" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "' class='btn btn-danger'>Supprimer</a>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a data-toggle=\"modal\" data-target=\"#editEvent\" class='btn btn-warning' href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_edit_event", array("event" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\"> Modifier les informations de l'évènement </a>
            <br><br>
            <a class='btn btn-danger' data-toggle=\"modal\" data-target=\"#delEvent\" href=\"#\"> Supprimer l'évènement </a> 
            <br><br>
            <a class=\"btn btn-default\" href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("calendar_homepage");
        echo "\"> Retour </a>
        </div>
    </div>
";
        
        $__internal_828c123c1c225d3859bfbabcaccddebc49420aed4bd65986d96ee44b1a08ad5c->leave($__internal_828c123c1c225d3859bfbabcaccddebc49420aed4bd65986d96ee44b1a08ad5c_prof);

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
        return array (  145 => 79,  138 => 75,  127 => 67,  92 => 35,  85 => 31,  78 => 27,  71 => 23,  64 => 19,  57 => 15,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div class="col-md-12 well">*/
/*             <h1 class="text-center"> Détails </h1>*/
/*             <div class="col-md-6">*/
/*                 <table class="table-bordered table table-striped text-center">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>Titre</td>*/
/*                             <td>{{event.titre}}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Description</td>*/
/*                             <td>{{event.description}}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Lieu</td>*/
/*                             <td>{{event.lieu}}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Date Début</td>*/
/*                             <td>{{event.dateDebut|date('d/m/Y')}}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Date fin</td>*/
/*                             <td>{{event.dateFin|date('d/m/Y')}}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Heure début</td>*/
/*                             <td>{{event.heureDebut|date('H:i')}}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Heure fin</td>*/
/*                             <td>{{event.heureFin|date('H:i')}}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 <div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* */
/*                             </div>*/
/*                             <div class="modal-body">*/
/*                             </div>*/
/*                             <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="modal fade" id="delEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                 <h5 class="text-center">Suppression de l'évènement</h5>*/
/*                             </div>*/
/*                             <div class="modal-body alert-danger">*/
/*                                 Etes vous sûr de vouloir supprimer cet évènement ?*/
/*                             </div>*/
/*                             <div class="modal-footer">*/
/*                                 <a href='{{path('calendar_del_event', {'event': event.id})}}' class='btn btn-danger'>Supprimer</a>*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <a data-toggle="modal" data-target="#editEvent" class='btn btn-warning' href="{{path('calendar_edit_event', {'event': event.id})}}"> Modifier les informations de l'évènement </a>*/
/*             <br><br>*/
/*             <a class='btn btn-danger' data-toggle="modal" data-target="#delEvent" href="#"> Supprimer l'évènement </a> */
/*             <br><br>*/
/*             <a class="btn btn-default" href="{{path('calendar_homepage')}}"> Retour </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
