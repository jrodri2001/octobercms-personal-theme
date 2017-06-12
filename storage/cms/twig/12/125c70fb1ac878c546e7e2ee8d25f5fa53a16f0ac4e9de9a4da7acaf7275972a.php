<?php

/* /Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/home.htm */
class __TwigTemplate_0cc8959d9949a86ce0e6aa5b6d0ec4ff7299b225d7338046849ade476d651af6 extends Twig_Template
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
        echo "<div class=\"callout secondary large\">
    <div class=\"column row\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"column row\">

    <h2>Overview <small>Basic concepts</small></h2>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3 class=\"subheader\">Layouts</h3>
    <p class=\"lead\">
        <i class=\"fa fa-th-large\" aria-hidden=\"true\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in this theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3 class=\"subheader\">Pages</h3>
    <p class=\"lead\">
        <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <code>";
        // line 38
        echo "{% page %}";
        echo "</code>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3 class=\"subheader\">Partials</h3>
    <p class=\"lead\">
        <i class=\"fa fa-tags\" aria-hidden=\"true\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <code>";
        // line 52
        echo "{% partial \"partial-name\" %}";
        echo "</code>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <code>";
        // line 54
        echo "{% partial \"site/footer\" %}";
        echo "</code>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3 class=\"subheader\">Content blocks</h3>
    <p class=\"lead\">
        <i class=\"fa fa-font\" aria-hidden=\"true\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <code>";
        // line 67
        echo "{% content \"content-name.htm\" %}";
        echo "</code>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3 class=\"subheader\">Placeholders</h3>
    <p class=\"lead\">
        <i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>

    <div class=\"row\">
        <div class=\"small-6 columns\">
            <p>Layout file:</p>
            <div class=\"callout secondary\">
                <pre>";
        // line 87
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/layout.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
            </div>
        </div>
        <div class=\"small-6 columns\">
            <p>Page file:</p>
            <div class=\"callout secondary\">
                <pre>";
        // line 93
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/page.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
            </div>
        </div>
    
        <div class=\"small-12 columns\"><hr /></div>
    </div>

    <!-- Assets -->
    <h3 class=\"subheader\">Assets</h3>
    <p class=\"lead\">
        <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>assets/</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://foundation.zurb.com/sites\">Foundation Sites 6</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://zurb.com/playground/motion-ui\">Motion UI</a></li>
        <li><a target=\"_blank\" href=\"http://gulpjs.com/\">Gulp</a></li>
        <li><a target=\"_blank\" href=\"https://bower.io/\">Bower</a></li>
    </ul>

    <br />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 117
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\" class=\"button\">Continue to AJAX framework</a></p>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 117,  135 => 93,  124 => 87,  101 => 67,  85 => 54,  80 => 52,  63 => 38,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"callout secondary large\">
    <div class=\"column row\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"column row\">

    <h2>Overview <small>Basic concepts</small></h2>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3 class=\"subheader\">Layouts</h3>
    <p class=\"lead\">
        <i class=\"fa fa-th-large\" aria-hidden=\"true\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in this theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3 class=\"subheader\">Pages</h3>
    <p class=\"lead\">
        <i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <code>{{ \"{% page %}\" }}</code>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3 class=\"subheader\">Partials</h3>
    <p class=\"lead\">
        <i class=\"fa fa-tags\" aria-hidden=\"true\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <code>{{ \"{% partial \\\"partial-name\\\" %}\" }}</code>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <code>{{ \"{% partial \\\"site/footer\\\" %}\" }}</code>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3 class=\"subheader\">Content blocks</h3>
    <p class=\"lead\">
        <i class=\"fa fa-font\" aria-hidden=\"true\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <code>{{ \"{% content \\\"content-name.htm\\\" %}\" }}</code>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3 class=\"subheader\">Placeholders</h3>
    <p class=\"lead\">
        <i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>

    <div class=\"row\">
        <div class=\"small-6 columns\">
            <p>Layout file:</p>
            <div class=\"callout secondary\">
                <pre>{% content \"placeholder/layout.txt\" %}</pre>
            </div>
        </div>
        <div class=\"small-6 columns\">
            <p>Page file:</p>
            <div class=\"callout secondary\">
                <pre>{% content \"placeholder/page.txt\" %}</pre>
            </div>
        </div>
    
        <div class=\"small-12 columns\"><hr /></div>
    </div>

    <!-- Assets -->
    <h3 class=\"subheader\">Assets</h3>
    <p class=\"lead\">
        <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>assets/</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://foundation.zurb.com/sites\">Foundation Sites 6</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://zurb.com/playground/motion-ui\">Motion UI</a></li>
        <li><a target=\"_blank\" href=\"http://gulpjs.com/\">Gulp</a></li>
        <li><a target=\"_blank\" href=\"https://bower.io/\">Bower</a></li>
    </ul>

    <br />

    <div class=\"text-center\">
        <p><a href=\"{{ 'ajax'|page }}\" class=\"button\">Continue to AJAX framework</a></p>
    </div>

</div>", "/Users/jrodri/october-cms/themes/zietbukuel-oktober-foundation/pages/home.htm", "");
    }
}
