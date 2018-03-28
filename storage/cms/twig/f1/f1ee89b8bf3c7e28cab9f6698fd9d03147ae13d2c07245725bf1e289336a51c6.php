<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/mobile_nav.htm */
class __TwigTemplate_de87b4ce0f59ef8433f95c471f922bd5d1a2b39efcfcd6445f86f8d20af99d48 extends Twig_Template
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
        echo "<nav class=\"uk-navbar uk-navbar-container uk-hidden@m\">
    <div class=\"uk-navbar-left\">
        <a class=\"uk-navbar-toggle\" href=\"#\" uk-toggle=\"target: #offcanvas-nav-primary\">
            <span uk-navbar-toggle-icon></span> <span class=\"uk-margin-small-left\">Menu</span>
        </a>
    </div>
    <div class=\"uk-navbar-right\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"uk-navbar-item uk-logo\">
                <img src=\"";
        // line 9
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("julio-logo.svg");
        echo "\" width=\"60\" height=\"60\" alt=\"Logo\"  class=\"logo\" uk-svg>
            </a>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/mobile_nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"uk-navbar uk-navbar-container uk-hidden@m\">
    <div class=\"uk-navbar-left\">
        <a class=\"uk-navbar-toggle\" href=\"#\" uk-toggle=\"target: #offcanvas-nav-primary\">
            <span uk-navbar-toggle-icon></span> <span class=\"uk-margin-small-left\">Menu</span>
        </a>
    </div>
    <div class=\"uk-navbar-right\">
        <a href=\"{{ 'home'|page }}\" class=\"uk-navbar-item uk-logo\">
                <img src=\"{{ \"julio-logo.svg\" |media }}\" width=\"60\" height=\"60\" alt=\"Logo\"  class=\"logo\" uk-svg>
            </a>
    </div>
</nav>", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/mobile_nav.htm", "");
    }
}
