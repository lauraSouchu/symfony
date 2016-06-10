<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9edc0af909c3151be3f74c5a7caaa899fdf197ebe5c8e35f26e6b3a31d50af75 extends Twig_Template
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
        $__internal_074dd32490ac09d7734a5fa7747f9c244ae2ca676d706b4d41b81ded10f25a7f = $this->env->getExtension("native_profiler");
        $__internal_074dd32490ac09d7734a5fa7747f9c244ae2ca676d706b4d41b81ded10f25a7f->enter($__internal_074dd32490ac09d7734a5fa7747f9c244ae2ca676d706b4d41b81ded10f25a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_074dd32490ac09d7734a5fa7747f9c244ae2ca676d706b4d41b81ded10f25a7f->leave($__internal_074dd32490ac09d7734a5fa7747f9c244ae2ca676d706b4d41b81ded10f25a7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
