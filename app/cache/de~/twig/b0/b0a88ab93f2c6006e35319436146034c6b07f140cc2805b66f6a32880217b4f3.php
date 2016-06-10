<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fe7e2388d5b10ff56c3db7ee4ab30010e85deee5e430b7cbd132fecc17111d05 extends Twig_Template
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
        $__internal_2b489b1592ebc242e2722fb2006cfc21f1a75aefe16ef45f01bd9161081306f7 = $this->env->getExtension("native_profiler");
        $__internal_2b489b1592ebc242e2722fb2006cfc21f1a75aefe16ef45f01bd9161081306f7->enter($__internal_2b489b1592ebc242e2722fb2006cfc21f1a75aefe16ef45f01bd9161081306f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2b489b1592ebc242e2722fb2006cfc21f1a75aefe16ef45f01bd9161081306f7->leave($__internal_2b489b1592ebc242e2722fb2006cfc21f1a75aefe16ef45f01bd9161081306f7_prof);

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
