<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/site/footer.htm */
class __TwigTemplate_fd15377d3ebe7ababb85ef2c699698d728d28094dd6399cea99804cd56d875f2 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"column row\">
        <hr />
        <p class=\"credit\">&copy; 2016 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Juan Timaná.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"column row\">
        <hr />
        <p class=\"credit\">&copy; 2016 - {{ \"now\"|date(\"Y\") }} Juan Timaná.</p>
    </div>
</div>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/site/footer.htm", "");
    }
}
