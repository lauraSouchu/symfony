<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_71688db937c32476697104b0f2806b36b00fede4b937303ac39380ab247bd142 extends Twig_Template
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
        $__internal_1c0c6f0e2470e9458583bee363e554d19fa678f436c2aefb7c9f52b4c79f05b3 = $this->env->getExtension("native_profiler");
        $__internal_1c0c6f0e2470e9458583bee363e554d19fa678f436c2aefb7c9f52b4c79f05b3->enter($__internal_1c0c6f0e2470e9458583bee363e554d19fa678f436c2aefb7c9f52b4c79f05b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c0c6f0e2470e9458583bee363e554d19fa678f436c2aefb7c9f52b4c79f05b3->leave($__internal_1c0c6f0e2470e9458583bee363e554d19fa678f436c2aefb7c9f52b4c79f05b3_prof);

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
