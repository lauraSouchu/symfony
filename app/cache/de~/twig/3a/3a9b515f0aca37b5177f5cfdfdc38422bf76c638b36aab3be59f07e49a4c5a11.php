<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_23cc8d1df417e5510e99232cee2389d2f4ef625e44d66d22787c3171e23bc9a0 extends Twig_Template
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
        $__internal_876a899ffd97321f7665f82a6b52cd43f7ecd7b9ad79f8e70cfece9e678052d3 = $this->env->getExtension("native_profiler");
        $__internal_876a899ffd97321f7665f82a6b52cd43f7ecd7b9ad79f8e70cfece9e678052d3->enter($__internal_876a899ffd97321f7665f82a6b52cd43f7ecd7b9ad79f8e70cfece9e678052d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_876a899ffd97321f7665f82a6b52cd43f7ecd7b9ad79f8e70cfece9e678052d3->leave($__internal_876a899ffd97321f7665f82a6b52cd43f7ecd7b9ad79f8e70cfece9e678052d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
