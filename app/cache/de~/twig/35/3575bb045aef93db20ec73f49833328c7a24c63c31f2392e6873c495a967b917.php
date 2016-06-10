<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_80573653c319e2260229de8a145c853ec1c5a4339d4df2b9c581666d811c3f9f extends Twig_Template
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
        $__internal_a4961af7e9d824b0218446c99d8afb2dfc54fc7b30bc3011bea2e4864083323c = $this->env->getExtension("native_profiler");
        $__internal_a4961af7e9d824b0218446c99d8afb2dfc54fc7b30bc3011bea2e4864083323c->enter($__internal_a4961af7e9d824b0218446c99d8afb2dfc54fc7b30bc3011bea2e4864083323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a4961af7e9d824b0218446c99d8afb2dfc54fc7b30bc3011bea2e4864083323c->leave($__internal_a4961af7e9d824b0218446c99d8afb2dfc54fc7b30bc3011bea2e4864083323c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
