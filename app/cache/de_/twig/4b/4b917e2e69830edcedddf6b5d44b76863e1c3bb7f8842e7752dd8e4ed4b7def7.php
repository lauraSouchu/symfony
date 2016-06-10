<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0afd62a06d426405bca38dbde17ac773d176a9abe57b590476e8db31e8091bcf extends Twig_Template
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
        $__internal_e688ab4de076f400c03798ef714ad2441fa63341d0678e73034503b205099934 = $this->env->getExtension("native_profiler");
        $__internal_e688ab4de076f400c03798ef714ad2441fa63341d0678e73034503b205099934->enter($__internal_e688ab4de076f400c03798ef714ad2441fa63341d0678e73034503b205099934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e688ab4de076f400c03798ef714ad2441fa63341d0678e73034503b205099934->leave($__internal_e688ab4de076f400c03798ef714ad2441fa63341d0678e73034503b205099934_prof);

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
