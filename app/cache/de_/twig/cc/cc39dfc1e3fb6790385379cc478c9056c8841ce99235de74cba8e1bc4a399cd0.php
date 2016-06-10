<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cd96a0d69ba1b1feae0f7a205d077a8e431eddc0ab8069aaaa1c70deca5725f5 extends Twig_Template
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
        $__internal_bdc21a1d24d3a83f8ee3bc3aed5b27e7278ef04602bd0f0e8e95aaa2802fbb52 = $this->env->getExtension("native_profiler");
        $__internal_bdc21a1d24d3a83f8ee3bc3aed5b27e7278ef04602bd0f0e8e95aaa2802fbb52->enter($__internal_bdc21a1d24d3a83f8ee3bc3aed5b27e7278ef04602bd0f0e8e95aaa2802fbb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bdc21a1d24d3a83f8ee3bc3aed5b27e7278ef04602bd0f0e8e95aaa2802fbb52->leave($__internal_bdc21a1d24d3a83f8ee3bc3aed5b27e7278ef04602bd0f0e8e95aaa2802fbb52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
