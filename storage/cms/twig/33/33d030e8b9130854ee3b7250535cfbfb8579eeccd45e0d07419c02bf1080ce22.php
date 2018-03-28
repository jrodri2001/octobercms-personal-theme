<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/header.htm */
class __TwigTemplate_1de716e46998984fe4175eed5e3623b15bc87be23b2523f4eb98102801ec2fc0 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "description", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
<link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icon.png");
        echo "\" />     

";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_fontawesome", array())) {
            // line 12
            echo "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        }
        // line 14
        echo "

<link href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/main.css"));
        echo "\" rel=\"stylesheet\">
";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  61 => 16,  57 => 14,  53 => 12,  51 => 11,  46 => 9,  42 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
<meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
<meta name=\"author\" content=\"{{ this.theme.website_author }}\">
<title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
<link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />     

{% if this.theme.load_fontawesome %}
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
{% endif %}


<link href=\"{{ ['assets/main.css']|theme }}\" rel=\"stylesheet\">
{% component 'googleTracker' %}", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/header.htm", "");
    }
}
