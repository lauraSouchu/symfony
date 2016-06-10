<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b7ba7e19562cfcdfdc0c29307fa34845f92d370a6e67d2edd976f9b65a7bf61a extends Twig_Template
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
        $__internal_e9bc28630ab3354edd9f1018c19bde41d9dfd379bd3502c27a95a5db72b636fd = $this->env->getExtension("native_profiler");
        $__internal_e9bc28630ab3354edd9f1018c19bde41d9dfd379bd3502c27a95a5db72b636fd->enter($__internal_e9bc28630ab3354edd9f1018c19bde41d9dfd379bd3502c27a95a5db72b636fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e9bc28630ab3354edd9f1018c19bde41d9dfd379bd3502c27a95a5db72b636fd->leave($__internal_e9bc28630ab3354edd9f1018c19bde41d9dfd379bd3502c27a95a5db72b636fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
