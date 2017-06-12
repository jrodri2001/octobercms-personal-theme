<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/calcresult.htm */
class __TwigTemplate_289e805c17a6925a102566876aa1a5232787fa9ff51908faaa90ab18a3ffb193 extends Twig_Template
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
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label success\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <p>Click the <em>Calculate</em> button to find the answer.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if result %}
    <span class=\"lead\">
        The result is <span class=\"label success\">{{ result }}</span>
    </span>
{% else %}
    <p>Click the <em>Calculate</em> button to find the answer.</p>
{% endif %}", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/calcresult.htm", "");
    }
}
