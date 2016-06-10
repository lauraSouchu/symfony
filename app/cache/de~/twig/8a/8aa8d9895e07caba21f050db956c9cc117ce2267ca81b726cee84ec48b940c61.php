<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_29bbac0ddc9c2eb9dd9e6592e62d0fe8ec25d685c52132472e44d7437432e6b0 extends Twig_Template
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
        $__internal_1d02523db51c1bbf0077d7d94cc29297bd578366cb8ff2f498166c52f29f76fb = $this->env->getExtension("native_profiler");
        $__internal_1d02523db51c1bbf0077d7d94cc29297bd578366cb8ff2f498166c52f29f76fb->enter($__internal_1d02523db51c1bbf0077d7d94cc29297bd578366cb8ff2f498166c52f29f76fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1d02523db51c1bbf0077d7d94cc29297bd578366cb8ff2f498166c52f29f76fb->leave($__internal_1d02523db51c1bbf0077d7d94cc29297bd578366cb8ff2f498166c52f29f76fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
