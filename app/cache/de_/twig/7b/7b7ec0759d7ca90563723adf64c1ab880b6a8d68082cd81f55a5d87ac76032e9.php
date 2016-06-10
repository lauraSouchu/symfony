<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9007dd6a46aacc3f8c9a739176d01a178832841d92e41ea2cabd057348ed6a79 extends Twig_Template
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
        $__internal_9fcd7f123f4cd9766984e71f4652493a1eb68ddfdf48bc46a085a57060d14209 = $this->env->getExtension("native_profiler");
        $__internal_9fcd7f123f4cd9766984e71f4652493a1eb68ddfdf48bc46a085a57060d14209->enter($__internal_9fcd7f123f4cd9766984e71f4652493a1eb68ddfdf48bc46a085a57060d14209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9fcd7f123f4cd9766984e71f4652493a1eb68ddfdf48bc46a085a57060d14209->leave($__internal_9fcd7f123f4cd9766984e71f4652493a1eb68ddfdf48bc46a085a57060d14209_prof);

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
