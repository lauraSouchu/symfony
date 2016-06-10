<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_68a46ceaa1b1dc633bdf584eb3c96baba01268b1d717dc74fc702fadae602bb4 extends Twig_Template
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
        $__internal_93b74fcf39456c5c77c80949b802be108380ac21c01283f90329a46ef0788d91 = $this->env->getExtension("native_profiler");
        $__internal_93b74fcf39456c5c77c80949b802be108380ac21c01283f90329a46ef0788d91->enter($__internal_93b74fcf39456c5c77c80949b802be108380ac21c01283f90329a46ef0788d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_93b74fcf39456c5c77c80949b802be108380ac21c01283f90329a46ef0788d91->leave($__internal_93b74fcf39456c5c77c80949b802be108380ac21c01283f90329a46ef0788d91_prof);

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
