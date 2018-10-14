<?php

/* @App/student_page/discipline_report.html.twig */
class __TwigTemplate_a42d485c5901fe27825a3479dd741a21e505173cc40ac64fb4a8db56f5c5087a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/student_page/index.html.twig", "@App/student_page/discipline_report.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/student_page/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_showUser($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem");
        echo "\">Report a problem</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments");
        echo "\">View Payments</a></li>
    <li class=\"active\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_discipline");
        echo "\">Disclipine Report</a></li>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "
    <div>
        <h3 class=\"title-application\">Problem</h3>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">FORM</h3>
        </div>
    </div>

    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["repForm"] ?? null), 'form_start');
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["repForm"] ?? null), 'widget');
        echo "
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["repForm"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@App/student_page/discipline_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  90 => 32,  86 => 31,  73 => 20,  70 => 19,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  45 => 10,  42 => 9,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/discipline_report.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/discipline_report.html.twig");
    }
}
