<?php

/* @App/director_pages/modal_view.html.twig */
class __TwigTemplate_1163c6169dabf90617188bfa868468da5f40311609ee9886414fc792b187a4a7 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"lost_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"lost_modal_label\">
    <div class=\"modal-dialog\" role=\"document\" >
        <div class=\"modal-content\">
            <div class=\"modal-header modal-epoka-style\">
                <h5 class=\"modal-title\" id=\"lost_modal_label\"> Please Reconfirm </h5>
            </div>
            <div class=\"modal-body\" id=\"showLostObject\">
            
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/modal_view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/modal_view.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/modal_view.html.twig");
    }
}
