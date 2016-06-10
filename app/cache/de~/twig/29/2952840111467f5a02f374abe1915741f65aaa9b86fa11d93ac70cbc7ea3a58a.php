<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_87965635d2ae7ac7b7cb1fd8a1c128ca6999545d6c3f4c29b7154f4df30b0351 extends Twig_Template
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
        $__internal_6783438aef118cfc2f7f704801a0aaa2dd4cbe4edd6c4a606c6cf039a0f1161d = $this->env->getExtension("native_profiler");
        $__internal_6783438aef118cfc2f7f704801a0aaa2dd4cbe4edd6c4a606c6cf039a0f1161d->enter($__internal_6783438aef118cfc2f7f704801a0aaa2dd4cbe4edd6c4a606c6cf039a0f1161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6783438aef118cfc2f7f704801a0aaa2dd4cbe4edd6c4a606c6cf039a0f1161d->leave($__internal_6783438aef118cfc2f7f704801a0aaa2dd4cbe4edd6c4a606c6cf039a0f1161d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
