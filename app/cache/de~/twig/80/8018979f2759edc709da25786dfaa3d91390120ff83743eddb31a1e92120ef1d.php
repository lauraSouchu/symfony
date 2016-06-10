<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_051d323652616373eb1765c1c63e5aa6ecfd9bab1d4291b4573b940f07d54590 extends Twig_Template
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
        $__internal_9ff5e6988dac1c77cb85ab2789bae2ae9b09fe2598bd699a111082c60fecd63d = $this->env->getExtension("native_profiler");
        $__internal_9ff5e6988dac1c77cb85ab2789bae2ae9b09fe2598bd699a111082c60fecd63d->enter($__internal_9ff5e6988dac1c77cb85ab2789bae2ae9b09fe2598bd699a111082c60fecd63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9ff5e6988dac1c77cb85ab2789bae2ae9b09fe2598bd699a111082c60fecd63d->leave($__internal_9ff5e6988dac1c77cb85ab2789bae2ae9b09fe2598bd699a111082c60fecd63d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
