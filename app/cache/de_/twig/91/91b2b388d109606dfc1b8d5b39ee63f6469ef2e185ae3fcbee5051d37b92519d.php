<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_11b75320c868449d178bd73b8a9829e41051fff74620ef2645ff2a5c44ff2d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78f2ca07f99c02d9a1069c4bd8f49075a1bd887d184bdaaddda38d6dbe890fcb = $this->env->getExtension("native_profiler");
        $__internal_78f2ca07f99c02d9a1069c4bd8f49075a1bd887d184bdaaddda38d6dbe890fcb->enter($__internal_78f2ca07f99c02d9a1069c4bd8f49075a1bd887d184bdaaddda38d6dbe890fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f2ca07f99c02d9a1069c4bd8f49075a1bd887d184bdaaddda38d6dbe890fcb->leave($__internal_78f2ca07f99c02d9a1069c4bd8f49075a1bd887d184bdaaddda38d6dbe890fcb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd9fcdcd054657d400275fb98b64a93d00ed75d48c15f9694024e88ba5af8c6d = $this->env->getExtension("native_profiler");
        $__internal_dd9fcdcd054657d400275fb98b64a93d00ed75d48c15f9694024e88ba5af8c6d->enter($__internal_dd9fcdcd054657d400275fb98b64a93d00ed75d48c15f9694024e88ba5af8c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dd9fcdcd054657d400275fb98b64a93d00ed75d48c15f9694024e88ba5af8c6d->leave($__internal_dd9fcdcd054657d400275fb98b64a93d00ed75d48c15f9694024e88ba5af8c6d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
