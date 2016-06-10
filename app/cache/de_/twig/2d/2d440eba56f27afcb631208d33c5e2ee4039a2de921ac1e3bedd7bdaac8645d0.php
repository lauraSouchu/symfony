<?php

/* @Calendar/User/editProfil.html.twig */
class __TwigTemplate_7dbf8d3bc0f5b57f16dcaafc3099d20904d732381fcb6820b2d940a6b8ab4709 extends Twig_Template
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
        $__internal_452af3fe4ee8389f2f36f87bec0cc3e62756fe9a779d8b042e89692f393be161 = $this->env->getExtension("native_profiler");
        $__internal_452af3fe4ee8389f2f36f87bec0cc3e62756fe9a779d8b042e89692f393be161->enter($__internal_452af3fe4ee8389f2f36f87bec0cc3e62756fe9a779d8b042e89692f393be161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Calendar/User/editProfil.html.twig"));

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
        
        $__internal_452af3fe4ee8389f2f36f87bec0cc3e62756fe9a779d8b042e89692f393be161->leave($__internal_452af3fe4ee8389f2f36f87bec0cc3e62756fe9a779d8b042e89692f393be161_prof);

    }

    public function getTemplateName()
    {
        return "@Calendar/User/editProfil.html.twig";
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
