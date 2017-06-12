<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/ajax.htm */
class __TwigTemplate_a03cfcb1ba7a26430e30c921c50dfeeba3505fb067e40110ae17e53bf2096814 extends Twig_Template
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
        <h1>AJAX framework</h1>
        <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
    </div>
</div>

<div class=\"column row\">

    <div class=\"callout\">
        <h3>Calculator</h3>

        <form class=\"row\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <div class=\"small-2 columns\">
                    <input type=\"text\" value=\"15\" name=\"value1\">
                </div>
                <div class=\"small-1 columns\">
                    <select name=\"operation\">
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select>
                </div>
                <div class=\"small-2 columns\">
                    <input type=\"text\" value=\"5\" name=\"value2\">
                </div>
                <div class=\"small-7 columns\">
                    <button type=\"submit\" class=\"button\" data-attach-loading>Calculate</button>
                </div>
            </div>
        </form>

        <div id=\"result\">
            ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calcresult"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"column row\">";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/ajax.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 47,  67 => 42,  59 => 36,  55 => 35,  19 => 1,);
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
        <h1>AJAX framework</h1>
        <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
    </div>
</div>

<div class=\"column row\">

    <div class=\"callout\">
        <h3>Calculator</h3>

        <form class=\"row\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <div class=\"small-2 columns\">
                    <input type=\"text\" value=\"15\" name=\"value1\">
                </div>
                <div class=\"small-1 columns\">
                    <select name=\"operation\">
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select>
                </div>
                <div class=\"small-2 columns\">
                    <input type=\"text\" value=\"5\" name=\"value2\">
                </div>
                <div class=\"small-7 columns\">
                    <button type=\"submit\" class=\"button\" data-attach-loading>Calculate</button>
                </div>
            </div>
        </form>

        <div id=\"result\">
            {% partial \"calcresult\" %}
        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"column row\">{% partial \"explain/ajax.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a href=\"{{ 'plugins'|page }}\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/ajax.htm", "");
    }
}
