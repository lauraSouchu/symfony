<?php

/* @Calendar/Calendar/config.html.twig */
class __TwigTemplate_5725d832570c52038d587dcdbb679aca185165e9fd8e6f7129933d2fbdc01a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2875260d50b29225295ddb7e44f8bf3b93f352f502dd0c4fa0e66b4b99e21bcd = $this->env->getExtension("native_profiler");
        $__internal_2875260d50b29225295ddb7e44f8bf3b93f352f502dd0c4fa0e66b4b99e21bcd->enter($__internal_2875260d50b29225295ddb7e44f8bf3b93f352f502dd0c4fa0e66b4b99e21bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Calendar/Calendar/config.html.twig"));

        // line 1
        echo "<div class=\"modal-content\" style=\"color:#000\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title text-center\" id=\"myModalLabel\">Panneau de configuration</h4>
    </div>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"modal-body\">
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-success\"> Enregistrer</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
    </div>
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<script type='text/javascript'>
    \$(document).ready(function () {
        \$('.datepicker').pickadate({
            // mois
            monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Déc'],
            // jours
            weekdaysFull: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
            //boutons
            today: 'Ajourd\\'hui',
            clear: 'Effacer',
            close: 'Fermer',
            // labels
            labelMonthNext: 'Mois suivant',
            labelMonthPrev: 'Mois précédent',
            labelMonthSelect: 'Séléctionner un mois',
            labelYearSelect: 'Séléctionner une année',
            //format de date
            format: 'dddd d mmmm yyyy',
            formatSubmit: 'dd-mm-yyyy hh:ii:ss',
            hiddenName: true,
            // premier jour de semaine : lundi
            firstDay: 1,
        });
        \$('.timepicker').pickatime({
            // Translations and clear button
            clear: 'Effacer',
            // Formats
            format: 'H:i',
            formatSubmit: 'H:i',
            // Time intervals
            interval: 30,
            // Close on a user action
            closeOnSelect: true,
            closeOnClear: true,
            // Classes
            klass: {
                // The element states
                input: 'picker__input',
                active: 'picker__input--active',
                // The root picker and states *
                picker: 'picker picker--time',
                opened: 'picker--opened',
                focused: 'picker--focused',
                // The picker holder
                holder: 'picker__holder',
                // The picker frame, wrapper, and box
                frame: 'picker__frame',
                wrap: 'picker__wrap',
                box: 'picker__box',
                // List of times
                list: 'picker__list',
                listItem: 'picker__list-item',
                // Time states
                disabled: 'picker__list-item--disabled',
                selected: 'picker__list-item--selected',
                highlighted: 'picker__list-item--highlighted',
                viewset: 'picker__list-item--viewset',
                now: 'picker__list-item--now',
                // Clear button
                buttonClear: 'picker__button--clear'
            }
        });
    });
</script>";
        
        $__internal_2875260d50b29225295ddb7e44f8bf3b93f352f502dd0c4fa0e66b4b99e21bcd->leave($__internal_2875260d50b29225295ddb7e44f8bf3b93f352f502dd0c4fa0e66b4b99e21bcd_prof);

    }

    public function getTemplateName()
    {
        return "@Calendar/Calendar/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  41 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="modal-content" style="color:#000">*/
/*     <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title text-center" id="myModalLabel">Panneau de configuration</h4>*/
/*     </div>*/
/*     {{ form_start(form) }}*/
/*     <div class="modal-body">*/
/*         <div class="form-group">*/
/*             {{ form_row(form.nom) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.theme) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button type="submit" class="btn btn-success"> Enregistrer</button>*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </div>*/
/* */
/* <script type='text/javascript'>*/
/*     $(document).ready(function () {*/
/*         $('.datepicker').pickadate({*/
/*             // mois*/
/*             monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],*/
/*             monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Déc'],*/
/*             // jours*/
/*             weekdaysFull: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],*/
/*             weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],*/
/*             //boutons*/
/*             today: 'Ajourd\'hui',*/
/*             clear: 'Effacer',*/
/*             close: 'Fermer',*/
/*             // labels*/
/*             labelMonthNext: 'Mois suivant',*/
/*             labelMonthPrev: 'Mois précédent',*/
/*             labelMonthSelect: 'Séléctionner un mois',*/
/*             labelYearSelect: 'Séléctionner une année',*/
/*             //format de date*/
/*             format: 'dddd d mmmm yyyy',*/
/*             formatSubmit: 'dd-mm-yyyy hh:ii:ss',*/
/*             hiddenName: true,*/
/*             // premier jour de semaine : lundi*/
/*             firstDay: 1,*/
/*         });*/
/*         $('.timepicker').pickatime({*/
/*             // Translations and clear button*/
/*             clear: 'Effacer',*/
/*             // Formats*/
/*             format: 'H:i',*/
/*             formatSubmit: 'H:i',*/
/*             // Time intervals*/
/*             interval: 30,*/
/*             // Close on a user action*/
/*             closeOnSelect: true,*/
/*             closeOnClear: true,*/
/*             // Classes*/
/*             klass: {*/
/*                 // The element states*/
/*                 input: 'picker__input',*/
/*                 active: 'picker__input--active',*/
/*                 // The root picker and states **/
/*                 picker: 'picker picker--time',*/
/*                 opened: 'picker--opened',*/
/*                 focused: 'picker--focused',*/
/*                 // The picker holder*/
/*                 holder: 'picker__holder',*/
/*                 // The picker frame, wrapper, and box*/
/*                 frame: 'picker__frame',*/
/*                 wrap: 'picker__wrap',*/
/*                 box: 'picker__box',*/
/*                 // List of times*/
/*                 list: 'picker__list',*/
/*                 listItem: 'picker__list-item',*/
/*                 // Time states*/
/*                 disabled: 'picker__list-item--disabled',*/
/*                 selected: 'picker__list-item--selected',*/
/*                 highlighted: 'picker__list-item--highlighted',*/
/*                 viewset: 'picker__list-item--viewset',*/
/*                 now: 'picker__list-item--now',*/
/*                 // Clear button*/
/*                 buttonClear: 'picker__button--clear'*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
