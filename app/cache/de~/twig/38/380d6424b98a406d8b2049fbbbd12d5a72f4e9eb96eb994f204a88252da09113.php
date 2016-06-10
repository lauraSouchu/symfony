<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4d5e1528a086aa47560b5568bd0704e0fde2fd7f39c9b1e3434bd8123ca66f6c extends Twig_Template
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
        $__internal_e14d049b3d43ef53f29f5f3f6a72804500f33c3fe3d792f866f5e911409340f9 = $this->env->getExtension("native_profiler");
        $__internal_e14d049b3d43ef53f29f5f3f6a72804500f33c3fe3d792f866f5e911409340f9->enter($__internal_e14d049b3d43ef53f29f5f3f6a72804500f33c3fe3d792f866f5e911409340f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e14d049b3d43ef53f29f5f3f6a72804500f33c3fe3d792f866f5e911409340f9->leave($__internal_e14d049b3d43ef53f29f5f3f6a72804500f33c3fe3d792f866f5e911409340f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
