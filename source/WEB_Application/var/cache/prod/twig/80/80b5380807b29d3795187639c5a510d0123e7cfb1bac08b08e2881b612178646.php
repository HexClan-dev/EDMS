<?php

/* @App/director_pages/addAcademicYears.html.twig */
class __TwigTemplate_182b863c3b9a7d8e3cfdfd9f3656094618fbe957e37c8a49c9a9d907fe144b74 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/addAcademicYears.html.twig", 2);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'page_title' => array($this, 'block_page_title'),
            'left_group' => array($this, 'block_left_group'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/director_pages/index.html.twig";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
    <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>
";
    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 20
        echo "
    <li>/<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year");
        echo "\">Academic Year</a></li>

";
    }

    // line 27
    public function block_page_title($context, array $blocks = array())
    {
        // line 28
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Academic Year <small>Dorm Management System</small></h1>
";
    }

    // line 33
    public function block_left_group($context, array $blocks = array())
    {
        // line 34
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">
       </span> Applicants <span class=\"badge\">";
        // line 39
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\">
       </span> Members <span class=\"badge\">";
        // line 41
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "
    <div class=\"top-button-group\">
        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>


    <div>

        <h3 class='title-application'> New Academic Year </h3>

        <div class=\"col-md-6\">

            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

            ";
        // line 65
        echo "                ";
        // line 66
        echo "            ";
        // line 67
        echo "
            <div class=\"form-group\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "semester", array()), 'row');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "startDate", array()), 'row');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "endDate", array()), 'row');
        echo "
            </div>

            <button type=\"submit\" class=\"button-style btn btn-success\"> Save Academic Year </button>

            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/addAcademicYears.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 82,  185 => 77,  178 => 73,  171 => 69,  167 => 67,  165 => 66,  163 => 65,  158 => 62,  145 => 52,  141 => 50,  138 => 49,  131 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  103 => 34,  100 => 33,  95 => 28,  92 => 27,  85 => 22,  81 => 21,  78 => 20,  75 => 19,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/addAcademicYears.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/addAcademicYears.html.twig");
    }
}
