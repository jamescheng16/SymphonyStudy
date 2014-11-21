<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_98e5e15f420738382d668be6ac8a2039a41ab8a831eab8122ad410ff229d1c7e extends Twig_Template
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
        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id"))), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title"), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  26 => 7,  22 => 5,  19 => 2,  132 => 58,  130 => 57,  127 => 56,  123 => 45,  120 => 44,  115 => 13,  113 => 12,  110 => 11,  104 => 9,  98 => 61,  96 => 56,  89 => 52,  81 => 46,  79 => 44,  73 => 41,  66 => 37,  62 => 36,  37 => 10,  23 => 2,  63 => 19,  55 => 20,  52 => 18,  46 => 13,  43 => 11,  40 => 10,  33 => 9,  30 => 8,  84 => 27,  77 => 25,  69 => 22,  65 => 21,  60 => 18,  56 => 18,  53 => 17,  48 => 16,  42 => 12,  39 => 15,  32 => 9,  29 => 7,);
    }
}
