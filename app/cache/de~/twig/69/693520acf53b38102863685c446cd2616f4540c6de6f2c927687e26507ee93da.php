<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d477dbde8d05b7390eaffeb719987d2800de3c58426cd72b4e9791643e16953b extends Twig_Template
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
        $__internal_c264ac7626f735ffbfecc1a9c9f2f2af60287635aea37ea9f9b0bf349e4cbc17 = $this->env->getExtension("native_profiler");
        $__internal_c264ac7626f735ffbfecc1a9c9f2f2af60287635aea37ea9f9b0bf349e4cbc17->enter($__internal_c264ac7626f735ffbfecc1a9c9f2f2af60287635aea37ea9f9b0bf349e4cbc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c264ac7626f735ffbfecc1a9c9f2f2af60287635aea37ea9f9b0bf349e4cbc17->leave($__internal_c264ac7626f735ffbfecc1a9c9f2f2af60287635aea37ea9f9b0bf349e4cbc17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
