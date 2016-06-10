<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c2a076755964f640efc9241ce91b861d583400b49d4632aae44b955e2ea7e2d8 extends Twig_Template
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
        $__internal_e0e8fd3db8f2ec51ac8d3a6dcacd9a699ab335f5f857cf29bbcad3f0cdbbda59 = $this->env->getExtension("native_profiler");
        $__internal_e0e8fd3db8f2ec51ac8d3a6dcacd9a699ab335f5f857cf29bbcad3f0cdbbda59->enter($__internal_e0e8fd3db8f2ec51ac8d3a6dcacd9a699ab335f5f857cf29bbcad3f0cdbbda59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e0e8fd3db8f2ec51ac8d3a6dcacd9a699ab335f5f857cf29bbcad3f0cdbbda59->leave($__internal_e0e8fd3db8f2ec51ac8d3a6dcacd9a699ab335f5f857cf29bbcad3f0cdbbda59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
