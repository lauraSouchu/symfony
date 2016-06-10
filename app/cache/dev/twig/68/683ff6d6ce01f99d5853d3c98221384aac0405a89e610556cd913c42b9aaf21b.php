<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6113aee7d92f7acd9fa9144f488b32434c634a7a55969c365e09c6f33210de70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CalendarBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CalendarBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2cc04f84b4d7d91212c27b43bcb76d9359447c7df2e4e88e3904705675b0a60 = $this->env->getExtension("native_profiler");
        $__internal_b2cc04f84b4d7d91212c27b43bcb76d9359447c7df2e4e88e3904705675b0a60->enter($__internal_b2cc04f84b4d7d91212c27b43bcb76d9359447c7df2e4e88e3904705675b0a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2cc04f84b4d7d91212c27b43bcb76d9359447c7df2e4e88e3904705675b0a60->leave($__internal_b2cc04f84b4d7d91212c27b43bcb76d9359447c7df2e4e88e3904705675b0a60_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3883bcc2d83514c951b7c927490a8c52a9b7964cbb594bb54ae608831b6471a = $this->env->getExtension("native_profiler");
        $__internal_b3883bcc2d83514c951b7c927490a8c52a9b7964cbb594bb54ae608831b6471a->enter($__internal_b3883bcc2d83514c951b7c927490a8c52a9b7964cbb594bb54ae608831b6471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Connexion";
        
        $__internal_b3883bcc2d83514c951b7c927490a8c52a9b7964cbb594bb54ae608831b6471a->leave($__internal_b3883bcc2d83514c951b7c927490a8c52a9b7964cbb594bb54ae608831b6471a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd60ca29d81304f88a32924583653778749353cb3495fc36c0b8d65abee65e89 = $this->env->getExtension("native_profiler");
        $__internal_cd60ca29d81304f88a32924583653778749353cb3495fc36c0b8d65abee65e89->enter($__internal_cd60ca29d81304f88a32924583653778749353cb3495fc36c0b8d65abee65e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid fond-turquoise\">
        <br>
        <div class=\"row text-center\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"\" title=\"Calendar\" alt=\"Calendar\" style='width:200px; height:200px;' />
            <!-- <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \"></div>-->

        </div>
        <div class=\"row\">
            <div class=\"strapline text-center\">
                Application Calendar
            </div>
        </div><!----row---->

        <div class=\"container login-form\">
            <div class=\"row col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12\">
                ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "                    <div class=\" flash-notice alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 21
        echo "                <div class=\"login\">
                    <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <div class=\"control-group col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <label for=\"username\" class=\"control-label\">Utilisateur ou Email :</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                            </div>
                        </div>

                        <div class=\"control-group col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                            <label for=\"password\" class=\"control-label\">Mot de Passe :</label>
                            <div class=\"controls\">
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>
                        </div>

                        <div class=\"control-group col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success btn-login\" value=\"Login\" />
                            </div>
                            <div class=\"row\">
                                <label for=\"remember_me\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    Se souvenir de moi</label>
                            </div>
                        </div>
                    </form>
                </div></div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            
        </div></div>

    <script>
        window.setTimeout(function () {
            \$(\".flash-notice\").slideUp();
        }, 2000);
    </script>
";
        
        $__internal_cd60ca29d81304f88a32924583653778749353cb3495fc36c0b8d65abee65e89->leave($__internal_cd60ca29d81304f88a32924583653778749353cb3495fc36c0b8d65abee65e89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  88 => 23,  84 => 22,  81 => 21,  75 => 19,  73 => 18,  58 => 6,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "CalendarBundle::layout.html.twig" %}*/
/* {% block title%}{{ parent() }} Connexion{% endblock%}*/
/* {%block body%}*/
/*     <div class="container-fluid fond-turquoise">*/
/*         <br>*/
/*         <div class="row text-center"><img src="{{asset('img/logo.png')}}" class="" title="Calendar" alt="Calendar" style='width:200px; height:200px;' />*/
/*             <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>-->*/
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="strapline text-center">*/
/*                 Application Calendar*/
/*             </div>*/
/*         </div><!----row---->*/
/* */
/*         <div class="container login-form">*/
/*             <div class="row col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">*/
/*                 {% if error %}*/
/*                     <div class=" flash-notice alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/*                 <div class="login">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <div class="control-group col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*                             <label for="username" class="control-label">Utilisateur ou Email :</label>*/
/*                             <div class="controls">*/
/*                                 <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="control-group col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*                             <label for="password" class="control-label">Mot de Passe :</label>*/
/*                             <div class="controls">*/
/*                                 <input type="password" id="password" name="_password" required="required" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="control-group col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*                             <div class="row">*/
/*                                 <input type="submit" id="_submit" name="_submit" class="btn btn-success btn-login" value="Login" />*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <label for="remember_me">*/
/*                                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                                     Se souvenir de moi</label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div></div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             */
/*         </div></div>*/
/* */
/*     <script>*/
/*         window.setTimeout(function () {*/
/*             $(".flash-notice").slideUp();*/
/*         }, 2000);*/
/*     </script>*/
/* {%endblock%}*/
