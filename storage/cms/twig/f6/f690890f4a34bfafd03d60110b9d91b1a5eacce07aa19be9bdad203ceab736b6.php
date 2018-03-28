<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/layouts/homepage.htm */
class __TwigTemplate_493616fac05c4f23e8ba2859ad36c5bba089687eef33c3bd192b61c2d33d54d6 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</head>
<body id=\"homepage\">
    <div id=\"wrapper\">  
        <div class=\"uk-offcanvas-content\">
            <!-- mobile nav -->
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/mobile_nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            <!-- end mobile nav -->
            
            <!-- desktop nav -->
            ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/desktop_nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "            <!-- end desktop nav -->
            
            <!-- main container -->                       
            ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo " 
            <!-- end main container -->
        
            <div id=\"offcanvas-nav-primary\" uk-offcanvas=\"overlay: true\">
                <div class=\"uk-offcanvas-bar uk-flex uk-flex-column\">
        
                    <ul class=\"uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical\">
                       ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/main_menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "                    </ul>
        
                </div>
            </div>     
        </div>

        ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    </div>
    ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/layouts/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  81 => 33,  78 => 32,  74 => 31,  66 => 25,  62 => 24,  52 => 17,  47 => 14,  43 => 13,  38 => 10,  34 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% partial \"all_pages/header\" %}
</head>
<body id=\"homepage\">
    <div id=\"wrapper\">  
        <div class=\"uk-offcanvas-content\">
            <!-- mobile nav -->
            {% partial \"all_pages/mobile_nav.htm\"%}
            <!-- end mobile nav -->
            
            <!-- desktop nav -->
            {% partial \"all_pages/desktop_nav.htm\"%}
            <!-- end desktop nav -->
            
            <!-- main container -->                       
            {% page %} 
            <!-- end main container -->
        
            <div id=\"offcanvas-nav-primary\" uk-offcanvas=\"overlay: true\">
                <div class=\"uk-offcanvas-bar uk-flex uk-flex-column\">
        
                    <ul class=\"uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical\">
                       {% partial \"navigation/main_menu\"%}
                    </ul>
        
                </div>
            </div>     
        </div>

        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"all_pages/scripts\" %}
</body>
</html>", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/layouts/homepage.htm", "");
    }
}
