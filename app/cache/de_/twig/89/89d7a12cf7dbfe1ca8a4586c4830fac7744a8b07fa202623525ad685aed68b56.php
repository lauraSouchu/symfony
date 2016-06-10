<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a80d30528d78403199dec6c804d6877c3b3c2c14aae92732c57d85cd6de986cd extends Twig_Template
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
        $__internal_9a07f390bcbcd9b32f9248b001114895df32fbe0745fee150fe144df8c58c9a7 = $this->env->getExtension("native_profiler");
        $__internal_9a07f390bcbcd9b32f9248b001114895df32fbe0745fee150fe144df8c58c9a7->enter($__internal_9a07f390bcbcd9b32f9248b001114895df32fbe0745fee150fe144df8c58c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9a07f390bcbcd9b32f9248b001114895df32fbe0745fee150fe144df8c58c9a7->leave($__internal_9a07f390bcbcd9b32f9248b001114895df32fbe0745fee150fe144df8c58c9a7_prof);

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
