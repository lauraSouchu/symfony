<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a650490ef04c786811196b0fc4705856a11d8293e3739e1617dad8ed512ce154 extends Twig_Template
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
        $__internal_a40b2b531a67218c7262e0d335f67776cf798699b7d03e00a1b8e52f8115fb99 = $this->env->getExtension("native_profiler");
        $__internal_a40b2b531a67218c7262e0d335f67776cf798699b7d03e00a1b8e52f8115fb99->enter($__internal_a40b2b531a67218c7262e0d335f67776cf798699b7d03e00a1b8e52f8115fb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a40b2b531a67218c7262e0d335f67776cf798699b7d03e00a1b8e52f8115fb99->leave($__internal_a40b2b531a67218c7262e0d335f67776cf798699b7d03e00a1b8e52f8115fb99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
