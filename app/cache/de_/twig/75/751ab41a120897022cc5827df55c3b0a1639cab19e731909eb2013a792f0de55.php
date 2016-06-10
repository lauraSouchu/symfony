<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7511d0f2c8d9d4173e94eb51da7013db83772ee749b3cb30401f4d04a2da0aa1 extends Twig_Template
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
        $__internal_b81da01932ffe1921ab41e97e6ea51cce6478df6a88e78b2c338ab307fc85cda = $this->env->getExtension("native_profiler");
        $__internal_b81da01932ffe1921ab41e97e6ea51cce6478df6a88e78b2c338ab307fc85cda->enter($__internal_b81da01932ffe1921ab41e97e6ea51cce6478df6a88e78b2c338ab307fc85cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b81da01932ffe1921ab41e97e6ea51cce6478df6a88e78b2c338ab307fc85cda->leave($__internal_b81da01932ffe1921ab41e97e6ea51cce6478df6a88e78b2c338ab307fc85cda_prof);

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
