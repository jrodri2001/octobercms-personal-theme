<?php

/* /srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/pages/home.htm */
class __TwigTemplate_a294b71a859b02a1e66129f7cdfd9609624f73fea1eb8a5f16818b9e3b62a378 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = $this->env->getExtension('System\Twig\Extension')->mediaFilter("coding_screen.jpg")        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("components/hero"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!-- <div class=\"uk-section uk-section-primary uk-preserve-color\">
    <div class=\"uk-container\">

        <div class=\"uk-panel uk-light uk-margin-medium\">
            <h3>Section Primary with cards</h3>
        </div>

        <div class=\"uk-grid-match uk-child-width-expand@m\" uk-grid>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

    </div>
</div>
 -->


<!-- <div class=\"uk-section uk-section-large uk-section-muted\">
    <div class=\"uk-container\">

        <h3>Section Large</h3>

        <div class=\"uk-grid-match uk-child-width-1-3@m\" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class=\"uk-section uk-section-primary uk-preserve-color\">
    <div class=\"uk-container\">

        <div class=\"uk-panel uk-light uk-margin-medium\">
            <h3>Section Primary with cards</h3>
        </div>

        <div class=\"uk-grid-match uk-child-width-expand@m\" uk-grid>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

    </div>
</div> -->";
    }

    public function getTemplateName()
    {
        return "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial \"components/hero\" image=\"coding_screen.jpg\"|media %}

<!-- <div class=\"uk-section uk-section-primary uk-preserve-color\">
    <div class=\"uk-container\">

        <div class=\"uk-panel uk-light uk-margin-medium\">
            <h3>Section Primary with cards</h3>
        </div>

        <div class=\"uk-grid-match uk-child-width-expand@m\" uk-grid>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

    </div>
</div>
 -->


<!-- <div class=\"uk-section uk-section-large uk-section-muted\">
    <div class=\"uk-container\">

        <h3>Section Large</h3>

        <div class=\"uk-grid-match uk-child-width-1-3@m\" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class=\"uk-section uk-section-primary uk-preserve-color\">
    <div class=\"uk-container\">

        <div class=\"uk-panel uk-light uk-margin-medium\">
            <h3>Section Primary with cards</h3>
        </div>

        <div class=\"uk-grid-match uk-child-width-expand@m\" uk-grid>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div>
                <div class=\"uk-card uk-card-default uk-card-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

    </div>
</div> -->", "/srv/users/serverpilot/apps/juliorodriguez/public/themes/basic-uikit-theme/pages/home.htm", "");
    }
}
