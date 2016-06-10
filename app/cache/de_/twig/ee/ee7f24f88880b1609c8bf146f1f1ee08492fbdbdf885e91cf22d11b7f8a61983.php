<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_512db4956e03ce0e8accd71402f4093cc5b063db9a123c7fe1f4c95febf95e15 extends Twig_Template
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
        $__internal_baa9a76e7519025c14546465168b7af2f1500a7f2a1d41b6dfe70292aa74ba97 = $this->env->getExtension("native_profiler");
        $__internal_baa9a76e7519025c14546465168b7af2f1500a7f2a1d41b6dfe70292aa74ba97->enter($__internal_baa9a76e7519025c14546465168b7af2f1500a7f2a1d41b6dfe70292aa74ba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_baa9a76e7519025c14546465168b7af2f1500a7f2a1d41b6dfe70292aa74ba97->leave($__internal_baa9a76e7519025c14546465168b7af2f1500a7f2a1d41b6dfe70292aa74ba97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
