<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d4e11d4772e5b9746b8775b01614cb4c2de32ed0f537a6a44aea170bfbbf24ac extends Twig_Template
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
        $__internal_e31a60b0f6b291f664ee182e09c820c2184010be171872f24bde77eddd9a9dda = $this->env->getExtension("native_profiler");
        $__internal_e31a60b0f6b291f664ee182e09c820c2184010be171872f24bde77eddd9a9dda->enter($__internal_e31a60b0f6b291f664ee182e09c820c2184010be171872f24bde77eddd9a9dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e31a60b0f6b291f664ee182e09c820c2184010be171872f24bde77eddd9a9dda->leave($__internal_e31a60b0f6b291f664ee182e09c820c2184010be171872f24bde77eddd9a9dda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
