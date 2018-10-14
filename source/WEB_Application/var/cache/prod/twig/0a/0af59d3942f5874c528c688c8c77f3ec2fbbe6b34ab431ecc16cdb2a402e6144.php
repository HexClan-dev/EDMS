<?php

/* @App/student_page/form_report.html.twig */
class __TwigTemplate_6814361cfa60abaa96f58e357120fc77a0acf2d3de748647740ded1a4bdff308 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/student_page/index.html.twig", "@App/student_page/form_report.html.twig", 2);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'page_title' => array($this, 'block_page_title'),
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

    // line 5
    public function block_showUser($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">Assistants</a></li>
    <li class=\"active\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">Report a problem</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\">View Payments</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">Profile</a></li>
";
    }

    // line 17
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 18
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">Problem Report</a></li>
";
    }

    // line 23
    public function block_page_title($context, array $blocks = array())
    {
        // line 24
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Report Problem <small>Dorm Management System</small></h1>
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "
    <!-- Latest Users -->

    <div class=\"top-button-group\">
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>


    <div>

        <h3 class='title-application'> Report a Problem </h3>

        <div class=\"col-md-6\">

            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["repForm"] ?? null), 'form_start');
        echo "

            <div class=\"form-group\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["repForm"] ?? null), "name", array()), 'row');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["repForm"] ?? null), "place", array()), 'row');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["repForm"] ?? null), "description", array()), 'row');
        echo "
            </div>

            <button type=\"submit\" class=\"button-style btn btn-success\"> Submit </button>


            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["repForm"] ?? null), 'form_end');
        echo "


        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@App/student_page/form_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  134 => 54,  127 => 50,  120 => 46,  114 => 43,  101 => 33,  95 => 29,  92 => 28,  87 => 24,  84 => 23,  78 => 19,  73 => 18,  70 => 17,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/form_report.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/form_report.html.twig");
    }
}
