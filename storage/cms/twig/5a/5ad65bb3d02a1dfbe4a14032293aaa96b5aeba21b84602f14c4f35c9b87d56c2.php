<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/explain/ajax.htm */
class __TwigTemplate_e72916af811e0350d53ca76f49b8ccbb77c1c1a03817ec3bae11b94e3e36f4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_45480ab2dbe6acd256f9906c5b42d806d50f1f1e0b896e8383ac89c427dc5149' => array($this, 'block___internal_45480ab2dbe6acd256f9906c5b42d806d50f1f1e0b896e8383ac89c427dc5149'),
            '__internal_88a9972ef16875e40e51088103444b7dfc8b9982a8a3c1659f838f221b6cf243' => array($this, 'block___internal_88a9972ef16875e40e51088103444b7dfc8b9982a8a3c1659f838f221b6cf243'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> &nbsp; The HTML markup for this example:
</p>

<div class=\"callout secondary\">
<pre>";
        // line 10
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_45480ab2dbe6acd256f9906c5b42d806d50f1f1e0b896e8383ac89c427dc5149", $context, $blocks));
        // line 25
        echo "</pre>
</div>

<hr />

<p class=\"lead\">
    <i class=\"fa fa-tags\" aria-hidden=\"true\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<div class=\"callout secondary\">
<pre>
";
        // line 36
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_88a9972ef16875e40e51088103444b7dfc8b9982a8a3c1659f838f221b6cf243", $context, $blocks));
        // line 42
        echo "</pre>
</div>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<div class=\"callout secondary\">
<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>
</div>";
    }

    // line 10
    public function block___internal_45480ab2dbe6acd256f9906c5b42d806d50f1f1e0b896e8383ac89c427dc5149($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 24
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 36
    public function block___internal_88a9972ef16875e40e51088103444b7dfc8b9982a8a3c1659f838f221b6cf243($context, array $blocks = array())
    {
        // line 37
        echo "{% if result %}";
        echo "
    The result is ";
        // line 38
        echo "{{ result }}";
        echo ".
";
        // line 39
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 41
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  119 => 39,  115 => 38,  111 => 37,  108 => 36,  102 => 24,  84 => 10,  49 => 42,  47 => 36,  34 => 25,  32 => 10,  21 => 1,);
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

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> &nbsp; The HTML markup for this example:
</p>

<div class=\"callout secondary\">
<pre>{% filter escape %}<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">{{ \"{% partial \\\"calcresult\\\" %}\" }}</div>
{% endfilter %}</pre>
</div>

<hr />

<p class=\"lead\">
    <i class=\"fa fa-tags\" aria-hidden=\"true\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<div class=\"callout secondary\">
<pre>
{% filter escape %}
{{ \"{% if result %}\" }}
    The result is {{ \"{{ result }}\" }}.
{{ \"{% else %}\" }}
    Click the <em>Calculate</em> button to find the answer.
{{ \"{% endif %}\" }}{% endfilter %}
</pre>
</div>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<div class=\"callout secondary\">
<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>
</div>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/explain/ajax.htm", "");
    }
}
