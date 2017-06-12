<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/layouts/default.htm */
class __TwigTemplate_1412a32aec067f321c90be04b6b2bd5871b615a1252847a709c18602bec1979c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta charset=\"utf-8\">
        <title>Oktober Foundation - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/app.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "    </head>
    <body>
        <div class=\"off-canvas-wrapper\">
            <div data-off-canvas-wrapper class=\"off-canvas-wrapper-inner\">
                <!-- Header -->
                <header id=\"layout-header\">
                    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "                </header>

                <!-- Content -->
                <section id=\"layout-content\">
                    ";
        // line 25
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 26
        echo "                </section>

                <!-- Footer -->
                <footer id=\"layout-footer\">
                    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/libraries.js");
        echo "\"></script>
        <script src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/foundation.js");
        echo "\"></script>
        <script src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "\"></script>
        ";
        // line 39
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 40
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 41
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  107 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  81 => 31,  77 => 30,  71 => 26,  69 => 25,  63 => 21,  59 => 20,  51 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta charset=\"utf-8\">
        <title>Oktober Foundation - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/app.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>
        <div class=\"off-canvas-wrapper\">
            <div data-off-canvas-wrapper class=\"off-canvas-wrapper-inner\">
                <!-- Header -->
                <header id=\"layout-header\">
                    {% partial 'site/header' %}
                </header>

                <!-- Content -->
                <section id=\"layout-content\">
                    {% page %}
                </section>

                <!-- Footer -->
                <footer id=\"layout-footer\">
                    {% partial 'site/footer' %}
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src=\"{{ 'assets/js/libraries.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/foundation.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/layouts/default.htm", "");
    }
}
