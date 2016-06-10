<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_80a0e7915c12510071cb9ca7e60f8b16806446851c57e9c7f23833b96fcd83f8 extends Twig_Template
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
        $__internal_a367e00074d80c8a72cb3ede5e8fe0d76026223a761164c9df36e506752c476d = $this->env->getExtension("native_profiler");
        $__internal_a367e00074d80c8a72cb3ede5e8fe0d76026223a761164c9df36e506752c476d->enter($__internal_a367e00074d80c8a72cb3ede5e8fe0d76026223a761164c9df36e506752c476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a367e00074d80c8a72cb3ede5e8fe0d76026223a761164c9df36e506752c476d->leave($__internal_a367e00074d80c8a72cb3ede5e8fe0d76026223a761164c9df36e506752c476d_prof);

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
