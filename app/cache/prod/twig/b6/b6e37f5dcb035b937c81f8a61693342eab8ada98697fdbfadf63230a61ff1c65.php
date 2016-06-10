<?php

/* CalendarBundle:Event:addEvent.html.twig */
class __TwigTemplate_246b72057352a6388996be43a0ce25eed881b5a5befda6f0fc73ce437223d628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CalendarBundle::layout.html.twig", "CalendarBundle:Event:addEvent.html.twig", 1);
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
        echo "        <h1> Ajouter un évènement </h1>
        
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"form-group\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lieu", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateFin", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "heureDebut", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "heureFin", array()), 'row');
        echo "
        </div>
        <button type=\"submit\" class=\"btn btn-default\"> Enregistrer</button>
        
        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("calendar_homepage");
        echo "\"> Retour </a>
";
    }

    public function getTemplateName()
    {
        return "CalendarBundle:Event:addEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  76 => 22,  69 => 18,  64 => 16,  59 => 14,  54 => 12,  49 => 10,  44 => 8,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*         <h1> Ajouter un évènement </h1>*/
/*         */
/*         {{ form_start(form, {'attr' : {'novalidate' : 'novalidate'}} ) }}*/
/*         <div class="form-group">{{ form_row(form.titre) }}*/
/*         </div>*/
/*         <div class="form-group">{{ form_row(form.description) }}*/
/*         </div>*/
/*         <div class="form-group">{{ form_row(form.lieu) }}*/
/*         </div>*/
/*         <div class="form-group">{{ form_row(form.dateDebut) }}*/
/*         </div>*/
/*         <div class="form-group">{{ form_row(form.dateFin) }}*/
/*         </div>*/
/*         <div class="form-group">{{ form_row(form.heureDebut) }}*/
/*         </div>*/
/*         <div class="form-group">{{ form_row(form.heureFin) }}*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default"> Enregistrer</button>*/
/*         */
/*         {{ form_end(form)}}*/
/*         <a href="{{path('calendar_homepage')}}"> Retour </a>*/
/* {% endblock %}*/
