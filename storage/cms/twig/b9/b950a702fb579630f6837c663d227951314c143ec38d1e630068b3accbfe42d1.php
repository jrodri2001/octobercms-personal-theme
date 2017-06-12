<?php

/* /Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/partials/home_page/about_me.htm */
class __TwigTemplate_043b892fd0b80f0e243cd38246ecb682176df309769231d50a1130f076074b18 extends Twig_Template
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
        echo "<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>About me</h2>
            </header>
            
            ";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("skills.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 9
        echo "            
            <ul class=\"actions\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"image\" /></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/partials/home_page/about_me.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  36 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>About me</h2>
            </header>
            
            {%content \"skills.htm\" %}
            
            <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"image\" /></span>
    </div>
</section>", "/Users/jrodri/october-cms/themes/zwiebl-zwiebl_stellar/partials/home_page/about_me.htm", "");
    }
}
