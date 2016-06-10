<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_643722b44c0c5e586ada9450f3c7fc65c61f00fe0cd4f66438d54a3038e68a65 extends Twig_Template
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
        $__internal_5acd29aca46889a9929223b58d7697bf2b783498f6ace1059489ad25d7f09059 = $this->env->getExtension("native_profiler");
        $__internal_5acd29aca46889a9929223b58d7697bf2b783498f6ace1059489ad25d7f09059->enter($__internal_5acd29aca46889a9929223b58d7697bf2b783498f6ace1059489ad25d7f09059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5acd29aca46889a9929223b58d7697bf2b783498f6ace1059489ad25d7f09059->leave($__internal_5acd29aca46889a9929223b58d7697bf2b783498f6ace1059489ad25d7f09059_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
