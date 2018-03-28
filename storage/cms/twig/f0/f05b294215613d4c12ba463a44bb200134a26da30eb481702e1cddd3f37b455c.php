<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/desktop_nav.htm */
class __TwigTemplate_269f38775edbf3b03cfae5d407a8a0dbf62c8cb50b0a41722be5eaefca22b96d extends Twig_Template
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
        echo "<!-- <div id=\"desktop-nav\" class=\"uk-navbar-container\"> -->
   <!--  <div class=\"uk-container uk-container-small\"> -->
    <nav class=\"";
        // line 3
        if (($context["class"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
        }
        echo "uk-navbar-container uk-visible@m\" uk-navbar uk-sticky=\"animation: uk-animation-slide-top; media:@m\">
    
        <div class=\"uk-navbar-left\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"uk-navbar-item uk-logo\">
                <img src=\"";
        // line 7
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("julio-logo.svg");
        echo "\" width=\"60\" height=\"60\" alt=\"Logo\"  class=\"logo\" uk-svg>
            </a>
            <div >
                <span class=\"uk-text-bold uk-text-uppercase\">Julio Rodriguez</span><br>
                Full stack developer <span class=\"uk-margin-small-right\" uk-icon=\"icon: code\"></span>
            </div>
        </div>
        
        <div class=\"uk-navbar-right\">
            <ul class=\"uk-navbar-nav\">
                ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/main_menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "            </ul>
        </div>
    </nav>
    <!-- </div> -->
<!-- </div> -->";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/desktop_nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  49 => 17,  36 => 7,  32 => 6,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- <div id=\"desktop-nav\" class=\"uk-navbar-container\"> -->
   <!--  <div class=\"uk-container uk-container-small\"> -->
    <nav class=\"{%if class%}{{class}} {%endif%}uk-navbar-container uk-visible@m\" uk-navbar uk-sticky=\"animation: uk-animation-slide-top; media:@m\">
    
        <div class=\"uk-navbar-left\">
            <a href=\"{{ 'home'|page }}\" class=\"uk-navbar-item uk-logo\">
                <img src=\"{{ \"julio-logo.svg\" |media }}\" width=\"60\" height=\"60\" alt=\"Logo\"  class=\"logo\" uk-svg>
            </a>
            <div >
                <span class=\"uk-text-bold uk-text-uppercase\">Julio Rodriguez</span><br>
                Full stack developer <span class=\"uk-margin-small-right\" uk-icon=\"icon: code\"></span>
            </div>
        </div>
        
        <div class=\"uk-navbar-right\">
            <ul class=\"uk-navbar-nav\">
                {% partial \"navigation/main_menu\"%}
            </ul>
        </div>
    </nav>
    <!-- </div> -->
<!-- </div> -->", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/desktop_nav.htm", "");
    }
}
