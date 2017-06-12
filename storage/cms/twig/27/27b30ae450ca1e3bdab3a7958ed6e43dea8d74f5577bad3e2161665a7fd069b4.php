<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/plugins.htm */
class __TwigTemplate_ed1cf89635995fb795ad617b98a48ce2c4a50045a5df91f28e8d3e9a8e9cdeab extends Twig_Template
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
        echo "<div class=\"callout secondary large\">
    <div class=\"column row\">
        <h1>Plugin components</h1>
        <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
    </div>
</div>

<div class=\"column row\">
    ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("demoTodo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>

<!-- Page Explanation -->
<div class=\"column row\">";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/plugins.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"button\">Learn more at October's Documentation</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"callout secondary large\">
    <div class=\"column row\">
        <h1>Plugin components</h1>
        <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
    </div>
</div>

<div class=\"column row\">
    {% component 'demoTodo' %}
</div>

<!-- Page Explanation -->
<div class=\"column row\">{% partial \"explain/plugins.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"button\">Learn more at October's Documentation</a></p>
</div>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/plugins.htm", "");
    }
}
