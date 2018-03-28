<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/navigation/main_menu.htm */
class __TwigTemplate_5f4cbbce06edcd2db2c45aaa4ba886e0e7cfd51b90614755588582efb32d5fcf extends Twig_Template
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
        echo "<li class=\"";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "uk-active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
<li class=\"";
        // line 2
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "uk-active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/navigation/main_menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"{% if this.page.id == 'home' %}uk-active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
<li class=\"{% if this.page.id == 'blog' %}uk-active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/navigation/main_menu.htm", "");
    }
}
