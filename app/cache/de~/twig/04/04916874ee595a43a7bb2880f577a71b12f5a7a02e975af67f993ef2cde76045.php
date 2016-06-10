<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_76cec5adea8953d0620fd129db27c5c60ccc63a8e9e43d7a6b2c24b9caf11a8a extends Twig_Template
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
        $__internal_c22a4db2f1c189fbe39523b76649b03467b0b9fbd6e53d14899c548f137abc97 = $this->env->getExtension("native_profiler");
        $__internal_c22a4db2f1c189fbe39523b76649b03467b0b9fbd6e53d14899c548f137abc97->enter($__internal_c22a4db2f1c189fbe39523b76649b03467b0b9fbd6e53d14899c548f137abc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c22a4db2f1c189fbe39523b76649b03467b0b9fbd6e53d14899c548f137abc97->leave($__internal_c22a4db2f1c189fbe39523b76649b03467b0b9fbd6e53d14899c548f137abc97_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ebcd2ad562c9ca4173c635e0aa9f1f560f7d01004fc6b4e06f08e3d7ee618ff = $this->env->getExtension("native_profiler");
        $__internal_5ebcd2ad562c9ca4173c635e0aa9f1f560f7d01004fc6b4e06f08e3d7ee618ff->enter($__internal_5ebcd2ad562c9ca4173c635e0aa9f1f560f7d01004fc6b4e06f08e3d7ee618ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Connexion";
        
        $__internal_5ebcd2ad562c9ca4173c635e0aa9f1f560f7d01004fc6b4e06f08e3d7ee618ff->leave($__internal_5ebcd2ad562c9ca4173c635e0aa9f1f560f7d01004fc6b4e06f08e3d7ee618ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b311477dd5b4bcf1e9dd8ee87bd11927cacdf0131ac584a241564ed4bdb0cf3 = $this->env->getExtension("native_profiler");
        $__internal_6b311477dd5b4bcf1e9dd8ee87bd11927cacdf0131ac584a241564ed4bdb0cf3->enter($__internal_6b311477dd5b4bcf1e9dd8ee87bd11927cacdf0131ac584a241564ed4bdb0cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b311477dd5b4bcf1e9dd8ee87bd11927cacdf0131ac584a241564ed4bdb0cf3->leave($__internal_6b311477dd5b4bcf1e9dd8ee87bd11927cacdf0131ac584a241564ed4bdb0cf3_prof);

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
