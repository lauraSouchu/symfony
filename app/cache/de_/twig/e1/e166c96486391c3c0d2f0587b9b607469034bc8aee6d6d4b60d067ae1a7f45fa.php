<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_974cbb67eb4e3a8ab83f89969e6843cbc1611894045d2939a91bbc991edeef7f extends Twig_Template
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
        $__internal_762508ecd161fcdb364cbcd871c76f9922b088cd7d8a9db488cf3db46d05196f = $this->env->getExtension("native_profiler");
        $__internal_762508ecd161fcdb364cbcd871c76f9922b088cd7d8a9db488cf3db46d05196f->enter($__internal_762508ecd161fcdb364cbcd871c76f9922b088cd7d8a9db488cf3db46d05196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_762508ecd161fcdb364cbcd871c76f9922b088cd7d8a9db488cf3db46d05196f->leave($__internal_762508ecd161fcdb364cbcd871c76f9922b088cd7d8a9db488cf3db46d05196f_prof);

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
