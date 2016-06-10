<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8748e3afe145d5c137cbc8dfb6dc191a0c210271218b0341fe781d7ea6ff84bf extends Twig_Template
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
        $__internal_fd1a692c7aff02e78a12cab76a2ef94d08dfd5a98d356b83f1439312a90aa1ec = $this->env->getExtension("native_profiler");
        $__internal_fd1a692c7aff02e78a12cab76a2ef94d08dfd5a98d356b83f1439312a90aa1ec->enter($__internal_fd1a692c7aff02e78a12cab76a2ef94d08dfd5a98d356b83f1439312a90aa1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fd1a692c7aff02e78a12cab76a2ef94d08dfd5a98d356b83f1439312a90aa1ec->leave($__internal_fd1a692c7aff02e78a12cab76a2ef94d08dfd5a98d356b83f1439312a90aa1ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
