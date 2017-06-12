<?php

/* /Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_7e9e020be6481da3814773a39fc0d6ffa9d5f80eb6c20883b31e82c178caff5e extends Twig_Template
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
        // line 1
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">About me</a></li>
        <li><a href=\"#two\">Knowledge</a></li>
        <li><a href=\"#three\">Education</a></li>
        <li><a href=\"#four\">Work and Fun</a></li>
        <li><a href=\"";
        // line 8
        echo "blog";
        echo "\">Blog</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">About me</a></li>
        <li><a href=\"#two\">Knowledge</a></li>
        <li><a href=\"#three\">Education</a></li>
        <li><a href=\"#four\">Work and Fun</a></li>
        <li><a href=\"{{ 'blog' }}\">Blog</a></li>
    </ul>
</nav>", "/Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
