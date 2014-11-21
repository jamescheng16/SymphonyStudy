<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_4cf40d68b2a89d48098a0fa1d2f4f0f6d244c9203ff1424da6b23fd520d1e422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 18
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 20
        echo "
";
    }

    // line 18
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  55 => 20,  52 => 18,  46 => 13,  43 => 11,  40 => 10,  33 => 7,  30 => 6,  84 => 27,  77 => 25,  69 => 22,  65 => 21,  60 => 18,  56 => 18,  53 => 17,  48 => 16,  42 => 12,  39 => 11,  32 => 8,  29 => 7,);
    }
}
