<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cf2ba9e17abe8a54fd24ed22390221bb56f557dbcd283e632a4749f7901571fe extends Twig_Template
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
        $__internal_d6760062450426fa800f9d139bf19fee3d1436ecaba52d4c892f201660c2208e = $this->env->getExtension("native_profiler");
        $__internal_d6760062450426fa800f9d139bf19fee3d1436ecaba52d4c892f201660c2208e->enter($__internal_d6760062450426fa800f9d139bf19fee3d1436ecaba52d4c892f201660c2208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d6760062450426fa800f9d139bf19fee3d1436ecaba52d4c892f201660c2208e->leave($__internal_d6760062450426fa800f9d139bf19fee3d1436ecaba52d4c892f201660c2208e_prof);

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
