<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/components/hero.htm */
class __TwigTemplate_be0777448b29f785dfc44deaf2765fba14fa9d61cdf1b37e1473e46f28b45d35 extends Twig_Template
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
        echo "<div class=\"uk-cover-container\">
    <canvas width=\"600\" height=\"700\"></canvas>
    <img uk-cover src=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo "\" alt=\"Hero banner\" class=\"\" >
    <div class=\"uk-position-center uk-light uk-text-center\">
        <p uk-scrollspy=\"cls: uk-animation-fade; delay: 500; repeat: true\" class=\"uk-text-center\"><img class=\"uk-animation-fade fade\" src=\"";
        // line 5
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), array($this->env->getExtension('System\Twig\Extension')->mediaFilter("julio-copei.png"), 250, 100));
        echo "\" alt=\"\" uk-width-medium></p>
        <div class=\"uk-h1 uk-light uk-overlay uk-overlay-primary uk-animation-fade\">
            <p uk-scrollspy=\"cls: uk-animation-fade; delay: 500; repeat: true\" class=\"uk-animation-fade fade\">Julio Rodriguez</p>
            
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:250\" href=\"https://facebook.com/jrodri2001\" target=\"_blank\" uk-icon=\"icon: facebook\" title=\"Facebook\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:750\" href=\"https://www.instagram.com/jrodri2001/\" target=\"_blank\" uk-icon=\"icon: instagram\" title=\"Instagram\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:1250\" href=\"https://twitter.com/jrodri\" target=\"_blank\" uk-icon=\"icon: twitter\" title=\"twitter\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:1750\" href=\"mailto:juliojrg@gmail.com\" uk-icon=\"icon: mail\" title=\"juliojrg@gmail.com\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
        </div>
        <p class=\"uk-animation-fade\">Full Stack Developer</p>
    </div> 
</div>


<!-- <div class=\"uk-container\">
    <div>
        <div class=\"uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle uk-light\" style=\"background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo ")\">
        <div class=\"uk-child-width-1\">
            <div>
            <img src=\"";
        // line 24
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), array($this->env->getExtension('System\Twig\Extension')->mediaFilter("julio-copei.png"), 250, 100));
        echo "\" alt=\"\" uk-width-medium>
            </div>
        </div>
            <div class=\"uk-child-width-1\">
            <div>
            <p class=\"uk-h1 uk-light\">Julio Rodriguez</p>
            </div>
            </div>
        </div>
    </div>    
</div> -->";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/components/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  47 => 21,  28 => 5,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"uk-cover-container\">
    <canvas width=\"600\" height=\"700\"></canvas>
    <img uk-cover src=\"{{image}}\" alt=\"Hero banner\" class=\"\" >
    <div class=\"uk-position-center uk-light uk-text-center\">
        <p uk-scrollspy=\"cls: uk-animation-fade; delay: 500; repeat: true\" class=\"uk-text-center\"><img class=\"uk-animation-fade fade\" src=\"{{ \"julio-copei.png\"|media|resize(250, 100) }}\" alt=\"\" uk-width-medium></p>
        <div class=\"uk-h1 uk-light uk-overlay uk-overlay-primary uk-animation-fade\">
            <p uk-scrollspy=\"cls: uk-animation-fade; delay: 500; repeat: true\" class=\"uk-animation-fade fade\">Julio Rodriguez</p>
            
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:250\" href=\"https://facebook.com/jrodri2001\" target=\"_blank\" uk-icon=\"icon: facebook\" title=\"Facebook\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:750\" href=\"https://www.instagram.com/jrodri2001/\" target=\"_blank\" uk-icon=\"icon: instagram\" title=\"Instagram\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:1250\" href=\"https://twitter.com/jrodri\" target=\"_blank\" uk-icon=\"icon: twitter\" title=\"twitter\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
            <a uk-scrollspy=\"cls: uk-animation-slide-top; repeat: true; delay:1750\" href=\"mailto:juliojrg@gmail.com\" uk-icon=\"icon: mail\" title=\"juliojrg@gmail.com\" uk-tooltip=\"delay: 400; animation: uk-animation-slide-bottom, uk-animation-slide-top\"></a>
        </div>
        <p class=\"uk-animation-fade\">Full Stack Developer</p>
    </div> 
</div>


<!-- <div class=\"uk-container\">
    <div>
        <div class=\"uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle uk-light\" style=\"background-image: url({{image}})\">
        <div class=\"uk-child-width-1\">
            <div>
            <img src=\"{{ \"julio-copei.png\"|media|resize(250, 100) }}\" alt=\"\" uk-width-medium>
            </div>
        </div>
            <div class=\"uk-child-width-1\">
            <div>
            <p class=\"uk-h1 uk-light\">Julio Rodriguez</p>
            </div>
            </div>
        </div>
    </div>    
</div> -->", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/components/hero.htm", "");
    }
}
