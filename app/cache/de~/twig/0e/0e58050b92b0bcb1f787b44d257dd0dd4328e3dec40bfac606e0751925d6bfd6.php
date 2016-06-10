<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_532e2c5a0a952129fc9a9e7fbffe6e93594c3788d0a4c5ee46e47608d0895247 extends Twig_Template
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
        $__internal_9c1307d80869f77fbcab2779c0f4ac42fd185f25e7bf02c44be7fd57c111557d = $this->env->getExtension("native_profiler");
        $__internal_9c1307d80869f77fbcab2779c0f4ac42fd185f25e7bf02c44be7fd57c111557d->enter($__internal_9c1307d80869f77fbcab2779c0f4ac42fd185f25e7bf02c44be7fd57c111557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c1307d80869f77fbcab2779c0f4ac42fd185f25e7bf02c44be7fd57c111557d->leave($__internal_9c1307d80869f77fbcab2779c0f4ac42fd185f25e7bf02c44be7fd57c111557d_prof);

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
