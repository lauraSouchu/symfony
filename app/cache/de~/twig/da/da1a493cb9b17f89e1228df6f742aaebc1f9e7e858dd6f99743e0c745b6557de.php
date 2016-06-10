<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7423589b6c273480ace431c38dad223c474ba3e650edd27e73421e1b2e7bffc9 extends Twig_Template
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
        $__internal_bfd687c3632fd002afe56d827a3c0b51f7364d76bd9df6bfeca126d740af069f = $this->env->getExtension("native_profiler");
        $__internal_bfd687c3632fd002afe56d827a3c0b51f7364d76bd9df6bfeca126d740af069f->enter($__internal_bfd687c3632fd002afe56d827a3c0b51f7364d76bd9df6bfeca126d740af069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bfd687c3632fd002afe56d827a3c0b51f7364d76bd9df6bfeca126d740af069f->leave($__internal_bfd687c3632fd002afe56d827a3c0b51f7364d76bd9df6bfeca126d740af069f_prof);

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
