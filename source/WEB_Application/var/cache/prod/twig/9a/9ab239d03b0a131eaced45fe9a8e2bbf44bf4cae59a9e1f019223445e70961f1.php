<?php

/* @App/director_pages/modal_show_image.html.twig */
class __TwigTemplate_d89105956beba042aeadd6b6ed4a2a7c4ef357338a6e0ccf88da3ef890b80374 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div id=\"modal-image\" class=\"modal-image\">
    <span class=\"close-image\">×</span>
    <img class=\"modal-image-epoka\" id=\"img01\" src=\"\" />
    <div id=\"caption-m-image\"></div>
</div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/modal_show_image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/modal_show_image.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/modal_show_image.html.twig");
    }
}
