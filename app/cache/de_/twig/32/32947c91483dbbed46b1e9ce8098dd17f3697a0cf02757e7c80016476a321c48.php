<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_135875a4f63f615963a8ce1126b985aadee92f3c426fd723e2f4471317738534 extends Twig_Template
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
        $__internal_0c45ba4b64dc4e49e98ebea22810699da165bb9c39ec6b5bcb0f9b1a6e1b7252 = $this->env->getExtension("native_profiler");
        $__internal_0c45ba4b64dc4e49e98ebea22810699da165bb9c39ec6b5bcb0f9b1a6e1b7252->enter($__internal_0c45ba4b64dc4e49e98ebea22810699da165bb9c39ec6b5bcb0f9b1a6e1b7252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0c45ba4b64dc4e49e98ebea22810699da165bb9c39ec6b5bcb0f9b1a6e1b7252->leave($__internal_0c45ba4b64dc4e49e98ebea22810699da165bb9c39ec6b5bcb0f9b1a6e1b7252_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
