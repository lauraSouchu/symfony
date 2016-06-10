<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_97b3fc37267bbefcf3ba073a19789c14e560d39619753e02352c4d5e2a757e41 extends Twig_Template
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
        $__internal_e038a2245c538ee88a520b57c21cd26d520367c1adc890e2fb2eb676d817c5bd = $this->env->getExtension("native_profiler");
        $__internal_e038a2245c538ee88a520b57c21cd26d520367c1adc890e2fb2eb676d817c5bd->enter($__internal_e038a2245c538ee88a520b57c21cd26d520367c1adc890e2fb2eb676d817c5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_e038a2245c538ee88a520b57c21cd26d520367c1adc890e2fb2eb676d817c5bd->leave($__internal_e038a2245c538ee88a520b57c21cd26d520367c1adc890e2fb2eb676d817c5bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
