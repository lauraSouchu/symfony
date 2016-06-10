<?php

/* CalendarBundle:User:editProfil.html.twig */
class __TwigTemplate_e70cf0fa528a8d3d3b2e0681fad11e98ad02cc537f63176e53196a9fbe1d922f extends Twig_Template
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
        $__internal_d00dacea850e6e1c94c280b71253609a28b13c8d4aba4719f8f62dc5b0d6aca2 = $this->env->getExtension("native_profiler");
        $__internal_d00dacea850e6e1c94c280b71253609a28b13c8d4aba4719f8f62dc5b0d6aca2->enter($__internal_d00dacea850e6e1c94c280b71253609a28b13c8d4aba4719f8f62dc5b0d6aca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CalendarBundle:User:editProfil.html.twig"));

        // line 1
        echo "<div class=\"modal-content\" style=\"color:#000\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title text-center\" id=\"myModalLabel\">Modifier mes informations</h4>
    </div>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"modal-body\">
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-success\"> Enregistrer</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
    </div>
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_d00dacea850e6e1c94c280b71253609a28b13c8d4aba4719f8f62dc5b0d6aca2->leave($__internal_d00dacea850e6e1c94c280b71253609a28b13c8d4aba4719f8f62dc5b0d6aca2_prof);

    }

    public function getTemplateName()
    {
        return "CalendarBundle:User:editProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  65 => 24,  59 => 21,  53 => 18,  47 => 15,  41 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="modal-content" style="color:#000">*/
/*     <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title text-center" id="myModalLabel">Modifier mes informations</h4>*/
/*     </div>*/
/*     {{ form_start(form) }}*/
/*     <div class="modal-body">*/
/*         <div class="form-group">*/
/*             {{ form_row(form.username) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.nom) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.prenom) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.phonenumber) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.email) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_row(form.plainPassword) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button type="submit" class="btn btn-success"> Enregistrer</button>*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </div>*/
/* */
