<?php

/* CalendarBundle:Calendar:share.html.twig */
class __TwigTemplate_14dea5eaaa271bc5a58b7d43b1fd3da73d433b5ded33b998bd3c2a2ead47d8f1 extends Twig_Template
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
        $__internal_93420b802b3df0593c5e898c896cdb18a72a7a97380e5f0f1c21f5f904fbc821 = $this->env->getExtension("native_profiler");
        $__internal_93420b802b3df0593c5e898c896cdb18a72a7a97380e5f0f1c21f5f904fbc821->enter($__internal_93420b802b3df0593c5e898c896cdb18a72a7a97380e5f0f1c21f5f904fbc821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CalendarBundle:Calendar:share.html.twig"));

        // line 1
        echo "<div class=\"modal-content\" style=\"color:#000\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title text-center\" id=\"myModalLabel\">Partager mon agenda</h4>
    </div>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"modal-body\">
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shared", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-success\"> Enregistrer</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
    </div>
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_93420b802b3df0593c5e898c896cdb18a72a7a97380e5f0f1c21f5f904fbc821->leave($__internal_93420b802b3df0593c5e898c896cdb18a72a7a97380e5f0f1c21f5f904fbc821_prof);

    }

    public function getTemplateName()
    {
        return "CalendarBundle:Calendar:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="modal-content" style="color:#000">*/
/*     <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title text-center" id="myModalLabel">Partager mon agenda</h4>*/
/*     </div>*/
/*     {{ form_start(form) }}*/
/*     <div class="modal-body">*/
/*         <div class="form-group">*/
/*             {{ form_row(form.shared) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button type="submit" class="btn btn-success"> Enregistrer</button>*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </div>*/
