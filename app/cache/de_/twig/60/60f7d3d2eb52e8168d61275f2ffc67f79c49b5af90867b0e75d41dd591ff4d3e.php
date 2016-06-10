<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_61ed92c3bfde8e8320869c7da9e0f7ec78182454e1ef615be79031c42db0b423 extends Twig_Template
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
        $__internal_1e0cc274a24b90f98852be9e2a525494d417c17be6532f67def932f36da33464 = $this->env->getExtension("native_profiler");
        $__internal_1e0cc274a24b90f98852be9e2a525494d417c17be6532f67def932f36da33464->enter($__internal_1e0cc274a24b90f98852be9e2a525494d417c17be6532f67def932f36da33464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1e0cc274a24b90f98852be9e2a525494d417c17be6532f67def932f36da33464->leave($__internal_1e0cc274a24b90f98852be9e2a525494d417c17be6532f67def932f36da33464_prof);

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
