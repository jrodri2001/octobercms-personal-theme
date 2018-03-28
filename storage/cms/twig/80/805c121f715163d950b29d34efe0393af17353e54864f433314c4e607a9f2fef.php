<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/scripts.htm */
class __TwigTemplate_da6cfe185bbc74adaf0c6c97ac9340e5d6dcf8d134723baf9d72ff58eb856357 extends Twig_Template
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
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>



<script src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/uikit/dist/js/uikit.min.js", 1 => "assets/uikit/dist/js/uikit-icons.min.js"));
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>



<script src=\"{{ ['assets/uikit/dist/js/uikit.min.js','assets/uikit/dist/js/uikit-icons.min.js']|theme }}\"></script>", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/partials/all_pages/scripts.htm", "");
    }
}
