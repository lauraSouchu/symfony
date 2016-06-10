<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_370adc4506beb85a0e4de9c989ce10fc069fe09aabf0025fe5d9c93d7ed71e0d extends Twig_Template
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
        $__internal_a55155543ceefc6adb1c5d0bf5e0aaa601ce5b7714538807c4cb51015d5a1240 = $this->env->getExtension("native_profiler");
        $__internal_a55155543ceefc6adb1c5d0bf5e0aaa601ce5b7714538807c4cb51015d5a1240->enter($__internal_a55155543ceefc6adb1c5d0bf5e0aaa601ce5b7714538807c4cb51015d5a1240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a55155543ceefc6adb1c5d0bf5e0aaa601ce5b7714538807c4cb51015d5a1240->leave($__internal_a55155543ceefc6adb1c5d0bf5e0aaa601ce5b7714538807c4cb51015d5a1240_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
