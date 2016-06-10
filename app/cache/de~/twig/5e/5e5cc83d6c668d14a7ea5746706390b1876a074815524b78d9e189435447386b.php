<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_99a1aab29ab765135968ba7cb16e71b3414d076ec61be7b786acc523274f3cb6 extends Twig_Template
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
        $__internal_d9297c6c7d0ee08db36934e3c47ae08c05f7bd16b9298715069dbe0f04591f4c = $this->env->getExtension("native_profiler");
        $__internal_d9297c6c7d0ee08db36934e3c47ae08c05f7bd16b9298715069dbe0f04591f4c->enter($__internal_d9297c6c7d0ee08db36934e3c47ae08c05f7bd16b9298715069dbe0f04591f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d9297c6c7d0ee08db36934e3c47ae08c05f7bd16b9298715069dbe0f04591f4c->leave($__internal_d9297c6c7d0ee08db36934e3c47ae08c05f7bd16b9298715069dbe0f04591f4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
