<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fba141ca9ccdca5fdfaf3872ed743a5800f3d2d6bd9eb443b7b5f74e3195580b extends Twig_Template
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
        $__internal_377eb07ece7660e72ab6ce42f1c50a764373e7cef0ea7fc6e1a926b14a7cb7cc = $this->env->getExtension("native_profiler");
        $__internal_377eb07ece7660e72ab6ce42f1c50a764373e7cef0ea7fc6e1a926b14a7cb7cc->enter($__internal_377eb07ece7660e72ab6ce42f1c50a764373e7cef0ea7fc6e1a926b14a7cb7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_377eb07ece7660e72ab6ce42f1c50a764373e7cef0ea7fc6e1a926b14a7cb7cc->leave($__internal_377eb07ece7660e72ab6ce42f1c50a764373e7cef0ea7fc6e1a926b14a7cb7cc_prof);

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
