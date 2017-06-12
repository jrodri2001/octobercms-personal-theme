<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/explain/plugins.htm */
class __TwigTemplate_bb018f3b0a3356551143a122f542123781e77ebdaf11c9006a712c5c3bdf71dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_b59a68487fe05298bb650cc97dcd67ec9cde36ff60ce81feed63fa0e79cffa4f' => array($this, 'block___internal_b59a68487fe05298bb650cc97dcd67ec9cde36ff60ce81feed63fa0e79cffa4f'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> &nbsp; The HTML markup for this example:
</p>
<code>
";
        // line 7
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_b59a68487fe05298bb650cc97dcd67ec9cde36ff60ce81feed63fa0e79cffa4f", $context, $blocks));
        // line 9
        echo "</code>

<hr />

<p class=\"lead\">
    <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_b59a68487fe05298bb650cc97dcd67ec9cde36ff60ce81feed63fa0e79cffa4f($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr />

<p class=\"lead\">
    <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> &nbsp; The HTML markup for this example:
</p>
<code>
{% filter escape %}
{{ \"{% component 'demoTodo' %}\" }}
{% endfilter %}</code>

<hr />

<p class=\"lead\">
    <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"{{ 'ajax'|page }}\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/explain/plugins.htm", "");
    }
}
