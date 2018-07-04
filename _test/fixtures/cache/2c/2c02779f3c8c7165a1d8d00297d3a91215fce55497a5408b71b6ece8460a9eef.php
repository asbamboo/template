<?php

/* test.html.twig */
class __TwigTemplate_c81a45c84c0ae5e4c964a34bd4e114b10c7727f05b6432382849905e575ebd63 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "test.html.twig", "/www/asbamboo/template/_test/fixtures/view/test.html.twig");
    }
}
