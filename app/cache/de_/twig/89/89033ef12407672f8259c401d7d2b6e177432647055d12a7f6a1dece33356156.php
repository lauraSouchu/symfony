<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_352505ac9c8ec1ab88ff047b0f84d7c3843d59134000be058044e0ff04449a42 extends Twig_Template
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
        $__internal_c2451c782dcc4360ce782e54b3f0f4792b61276a44a5e08cecfb8ab213efedda = $this->env->getExtension("native_profiler");
        $__internal_c2451c782dcc4360ce782e54b3f0f4792b61276a44a5e08cecfb8ab213efedda->enter($__internal_c2451c782dcc4360ce782e54b3f0f4792b61276a44a5e08cecfb8ab213efedda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c2451c782dcc4360ce782e54b3f0f4792b61276a44a5e08cecfb8ab213efedda->leave($__internal_c2451c782dcc4360ce782e54b3f0f4792b61276a44a5e08cecfb8ab213efedda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
