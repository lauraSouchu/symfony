<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cb176badd64cd4f0a3aad671753e8e6c893d620a4913429c33cf80db5c0362fd extends Twig_Template
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
        $__internal_2fb0d4b912f7caab2f7fa79518d35f08e6153aa399d507c613a72a1867cd6a0b = $this->env->getExtension("native_profiler");
        $__internal_2fb0d4b912f7caab2f7fa79518d35f08e6153aa399d507c613a72a1867cd6a0b->enter($__internal_2fb0d4b912f7caab2f7fa79518d35f08e6153aa399d507c613a72a1867cd6a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2fb0d4b912f7caab2f7fa79518d35f08e6153aa399d507c613a72a1867cd6a0b->leave($__internal_2fb0d4b912f7caab2f7fa79518d35f08e6153aa399d507c613a72a1867cd6a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
