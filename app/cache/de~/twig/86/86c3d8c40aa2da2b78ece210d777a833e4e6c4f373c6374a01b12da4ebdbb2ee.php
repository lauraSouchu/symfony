<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6936673fa70f00d2b2af65ef75ebf3750b9356752a7812630bc58792259a086e extends Twig_Template
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
        $__internal_08a3604e084c69038999ead4c34b9aeef343c5661370c6a8a31c408007d10f8e = $this->env->getExtension("native_profiler");
        $__internal_08a3604e084c69038999ead4c34b9aeef343c5661370c6a8a31c408007d10f8e->enter($__internal_08a3604e084c69038999ead4c34b9aeef343c5661370c6a8a31c408007d10f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_08a3604e084c69038999ead4c34b9aeef343c5661370c6a8a31c408007d10f8e->leave($__internal_08a3604e084c69038999ead4c34b9aeef343c5661370c6a8a31c408007d10f8e_prof);

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
