<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2cb03daa2809440f456102555d2682a778e5b99da60544bcb92c9032b022b459 extends Twig_Template
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
        $__internal_21b1e31c1649bc9d1a311f64e0fdf3bb4d480aaae8025d3f89b64791afe55cf8 = $this->env->getExtension("native_profiler");
        $__internal_21b1e31c1649bc9d1a311f64e0fdf3bb4d480aaae8025d3f89b64791afe55cf8->enter($__internal_21b1e31c1649bc9d1a311f64e0fdf3bb4d480aaae8025d3f89b64791afe55cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_21b1e31c1649bc9d1a311f64e0fdf3bb4d480aaae8025d3f89b64791afe55cf8->leave($__internal_21b1e31c1649bc9d1a311f64e0fdf3bb4d480aaae8025d3f89b64791afe55cf8_prof);

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
