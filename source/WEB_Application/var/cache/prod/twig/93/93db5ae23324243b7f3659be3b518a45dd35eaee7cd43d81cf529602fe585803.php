<?php

/* @App/director_pages/manageAcademicYears.html.twig */
class __TwigTemplate_053455ee856e1afe8840a63a40ad93cba22c853e510f3958b4ef4565de04aa14 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/manageAcademicYears.html.twig", 3);
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

    // line 6
    public function block_showUser($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        // line 11
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>
";
    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "
    <li>/<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year");
        echo "\">Academic Years</a></li>

";
    }

    // line 28
    public function block_page_title($context, array $blocks = array())
    {
        // line 29
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Academic Year <small>Dorm Management System</small></h1>
";
    }

    // line 34
    public function block_left_group($context, array $blocks = array())
    {
        // line 35
        echo "
    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">
       </span> Applicants <span class=\"badge\">";
        // line 41
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\">
       </span> Members <span class=\"badge\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "
    <div class=\"top-button-group\">
        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_academic_year");
        echo "\" class=\"button-style btn btn-success top-button\">New Academic Year</a>
    </div>



    ";
        // line 62
        echo "    <h3 class=\"title-application\"> Academic Years </h3>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Active Academic Info</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">

                <tr>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>start_date</th>
                    <th>end_date</th>
                    <th>Actions</th>
                </tr>

                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["academic_active"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 80
            echo "                    <tr>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "year", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "semester", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "startDate", array()), "d-M-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "endDate", array()), "d-M-Y"), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year_info", array("aca" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-info \">More</a>
                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_academic_year", array("ac" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary \">Edit</a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
            </table>
        </div>
    </div>

    ";
        // line 100
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Inactive Academic Info</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">

                <tr>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>

                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["academic_inactive"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 117
            echo "                    <tr>
                        <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "year", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "semester", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "startDate", array()), "d-M-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "endDate", array()), "d-M-Y"), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year_info", array("aca" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-info \">More</a>
                            </div>
                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/manageAcademicYears.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 131,  265 => 125,  259 => 122,  255 => 121,  250 => 119,  246 => 118,  243 => 117,  239 => 116,  221 => 100,  214 => 94,  203 => 89,  199 => 88,  193 => 85,  189 => 84,  184 => 82,  180 => 81,  177 => 80,  173 => 79,  154 => 62,  146 => 56,  142 => 54,  139 => 53,  132 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  103 => 35,  100 => 34,  95 => 29,  92 => 28,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 11,  45 => 10,  40 => 7,  37 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/manageAcademicYears.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/manageAcademicYears.html.twig");
    }
}
