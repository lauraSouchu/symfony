<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_594a8bc9989e9c2aeecf387486e5bffb679e59eb2536bbf2d808db4c3dd5e6a7 extends Twig_Template
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
        $__internal_8a82437a78ed227592674607a01281d50037da0412f8a6dca6dacd19c2405e4d = $this->env->getExtension("native_profiler");
        $__internal_8a82437a78ed227592674607a01281d50037da0412f8a6dca6dacd19c2405e4d->enter($__internal_8a82437a78ed227592674607a01281d50037da0412f8a6dca6dacd19c2405e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8a82437a78ed227592674607a01281d50037da0412f8a6dca6dacd19c2405e4d->leave($__internal_8a82437a78ed227592674607a01281d50037da0412f8a6dca6dacd19c2405e4d_prof);

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
