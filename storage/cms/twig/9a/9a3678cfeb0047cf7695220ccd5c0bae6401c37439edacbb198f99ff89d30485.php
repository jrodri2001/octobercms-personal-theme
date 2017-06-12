<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/site/header.htm */
class __TwigTemplate_3a1dac74f57bf58283117af0d5b432f945de94b8e3b254b8c4c553f3e4f2aee6 extends Twig_Template
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
<div data-responsive-toggle=\"widemenu\" data-hide-for=\"large\" class=\"title-bar\">
    <div class=\"title-bar-left\">
    <button type=\"button\" data-open=\"offCanvas\" class=\"menu-icon\"></button>
    <span class=\"title-bar-title\">
        <a href=\"/\"><img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" class=\"mobile-logo\"></a>
    </span>
    </div>
</div>
<div id=\"offCanvas\" data-off-canvas class=\"off-canvas position-left\">
    <div class=\"offcanvas-logo\"><a href=\"/\"><img src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\"></a></div>
    <button aria-label=\"Close menu\" type=\"button\" data-close class=\"close-button\">
    <span aria-hidden=\"true\">&times;</span>
    </button>
    <ul id=\"mobile-menu\" data-drilldown class=\"vertical menu\">
        <li class=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Basic concepts</a></li>
        <li class=\"";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
        <li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("plugins");
        echo "\">Plugin components</a></li>
    </ul>
</div>
<div id=\"widemenu\" class=\"top-bar\">
    <header class=\"column row\">
    <div class=\"small-12\">
        <div class=\"top-bar-title\">
        <div class=\"logo\"><a href=\"/\"><img src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\"></a></div>
        </div>
        <div class=\"top-bar-left\">
            <ul id=\"main-menu\" data-dropdown-menu class=\"dropdown menu\">
                <li class=\"";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Basic concepts</a></li>
                <li class=\"";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                <li class=\"";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("plugins");
        echo "\">Plugin components</a></li>
            </ul>
        </div>
    </div>
    </header>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  87 => 30,  79 => 29,  72 => 25,  58 => 18,  50 => 17,  42 => 16,  34 => 11,  26 => 6,  19 => 1,);
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
<div data-responsive-toggle=\"widemenu\" data-hide-for=\"large\" class=\"title-bar\">
    <div class=\"title-bar-left\">
    <button type=\"button\" data-open=\"offCanvas\" class=\"menu-icon\"></button>
    <span class=\"title-bar-title\">
        <a href=\"/\"><img src=\"{{ 'assets/images/october.png'|theme }}\" class=\"mobile-logo\"></a>
    </span>
    </div>
</div>
<div id=\"offCanvas\" data-off-canvas class=\"off-canvas position-left\">
    <div class=\"offcanvas-logo\"><a href=\"/\"><img src=\"{{ 'assets/images/october.png'|theme }}\"></a></div>
    <button aria-label=\"Close menu\" type=\"button\" data-close class=\"close-button\">
    <span aria-hidden=\"true\">&times;</span>
    </button>
    <ul id=\"mobile-menu\" data-drilldown class=\"vertical menu\">
        <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
        <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
        <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>
    </ul>
</div>
<div id=\"widemenu\" class=\"top-bar\">
    <header class=\"column row\">
    <div class=\"small-12\">
        <div class=\"top-bar-title\">
        <div class=\"logo\"><a href=\"/\"><img src=\"{{ 'assets/images/october.png'|theme }}\"></a></div>
        </div>
        <div class=\"top-bar-left\">
            <ul id=\"main-menu\" data-dropdown-menu class=\"dropdown menu\">
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>
            </ul>
        </div>
    </div>
    </header>
</div>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/partials/site/header.htm", "");
    }
}
