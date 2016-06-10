<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dd8eccdf5aee8d3da0cd12300d22017fadd739da03e324d1a9e9a361dea3db07 extends Twig_Template
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
        $__internal_435d47f49c3a8b276fcd312c0e2885189b4be8e875448567796b66d8d3e8c216 = $this->env->getExtension("native_profiler");
        $__internal_435d47f49c3a8b276fcd312c0e2885189b4be8e875448567796b66d8d3e8c216->enter($__internal_435d47f49c3a8b276fcd312c0e2885189b4be8e875448567796b66d8d3e8c216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_435d47f49c3a8b276fcd312c0e2885189b4be8e875448567796b66d8d3e8c216->leave($__internal_435d47f49c3a8b276fcd312c0e2885189b4be8e875448567796b66d8d3e8c216_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
