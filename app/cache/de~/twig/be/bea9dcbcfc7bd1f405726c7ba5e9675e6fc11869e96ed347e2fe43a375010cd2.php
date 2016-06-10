<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_900af79cb62c01f0f9c782dcf5397d3c89ad0de30e169cce11891a411437886c extends Twig_Template
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
        $__internal_b80a6cf76684b984c3e7b7a65c0a87d6115d7fe05df7dd3ef86acb3d9f827342 = $this->env->getExtension("native_profiler");
        $__internal_b80a6cf76684b984c3e7b7a65c0a87d6115d7fe05df7dd3ef86acb3d9f827342->enter($__internal_b80a6cf76684b984c3e7b7a65c0a87d6115d7fe05df7dd3ef86acb3d9f827342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b80a6cf76684b984c3e7b7a65c0a87d6115d7fe05df7dd3ef86acb3d9f827342->leave($__internal_b80a6cf76684b984c3e7b7a65c0a87d6115d7fe05df7dd3ef86acb3d9f827342_prof);

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
