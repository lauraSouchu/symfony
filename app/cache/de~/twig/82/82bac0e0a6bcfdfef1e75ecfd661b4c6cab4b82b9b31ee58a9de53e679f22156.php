<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a4effca6f8fb6b3931a221193d3d4598afaedd212408b7cfa3c97d471204c211 extends Twig_Template
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
        $__internal_7ccbc72028e59ec034da7edac5933cd91a2e7bd600f5e5a5eecdd609df65968f = $this->env->getExtension("native_profiler");
        $__internal_7ccbc72028e59ec034da7edac5933cd91a2e7bd600f5e5a5eecdd609df65968f->enter($__internal_7ccbc72028e59ec034da7edac5933cd91a2e7bd600f5e5a5eecdd609df65968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7ccbc72028e59ec034da7edac5933cd91a2e7bd600f5e5a5eecdd609df65968f->leave($__internal_7ccbc72028e59ec034da7edac5933cd91a2e7bd600f5e5a5eecdd609df65968f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
