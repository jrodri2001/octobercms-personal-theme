<?php

/* /Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm */
class __TwigTemplate_b5e705485090a90272eadf1acaefe14c029abf1c3291ceca31148dc022f1926b extends Twig_Template
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
        echo "<html>
<head>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</head>
<body>
    <div id=\"wrapper\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home_page/navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <div id=\"main\">
            <section id=\"content\" class=\"main\">
                ";
        // line 11
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 12
        echo "            </section>

            ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "show_about_me", array())) {
            // line 15
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/about_me"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "show_section_two", array())) {
            // line 19
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_two"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "show_section_three", array())) {
            // line 23
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_three"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "            ";
        }
        // line 25
        echo "
            ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "show_section_four", array())) {
            // line 27
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_four"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </div>
        ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    </div>
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  110 => 32,  107 => 31,  103 => 30,  100 => 29,  97 => 28,  92 => 27,  90 => 26,  87 => 25,  84 => 24,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  66 => 19,  64 => 18,  61 => 17,  58 => 16,  53 => 15,  51 => 14,  47 => 12,  45 => 11,  41 => 9,  36 => 8,  32 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% partial \"html_base/meta_head\" %}
</head>
<body>
    <div id=\"wrapper\">
        {% partial \"all_pages/header\" %}
        {% partial \"home_page/navigation\" %}
        <div id=\"main\">
            <section id=\"content\" class=\"main\">
                {% page %}
            </section>

            {% if this.theme.show_about_me %}
                {% partial \"home_page/about_me\" %}
            {% endif %}

            {% if this.theme.show_section_two %}
                {% partial \"home_page/section_two\" %}
            {% endif %}

            {% if this.theme.show_section_three %}
                {% partial \"home_page/section_three\" %}
            {% endif %}

            {% if this.theme.show_section_four %}
                {% partial \"home_page/section_four\" %}
            {% endif %}
        </div>
        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "/Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm", "");
    }
}
