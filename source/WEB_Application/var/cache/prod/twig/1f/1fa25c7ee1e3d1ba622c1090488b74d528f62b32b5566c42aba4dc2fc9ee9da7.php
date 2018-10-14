<?php

/* @App/director_pages/academicYearDetailedInformation.html.twig */
class __TwigTemplate_2eea4a5e144d35ff585a7680ed17391b63a73406bb4da2c059ba5e0e5b840868 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/academicYearDetailedInformation.html.twig", 3);
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
    <li>/<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year");
        echo "\">Academic Years</a></li>
    <li class=\"active\">/<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year_info", array("aca" => twig_get_attribute($this->env, $this->source, ($context["ac"] ?? null), "id", array()))), "html", null, true);
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
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Camera <span class=\"badge\">1</span></a>

";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "
    <div class=\"top-button-group\">
        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>


    ";
        // line 59
        echo "
    <h3 class='title-application'> Academic Year Details </h3>

    <div class=\"position_0\" >


        <dl id=\"p_info\">
            <dt id=\"shw\">
                <span class=\"middle_con\"></span>
                Academic Year
            </dt>
            <dd id=\"shw\">
                ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ac"] ?? null), "year", array()), "html", null, true);
        echo "
            </dd>

            <dt id=\"shw\">
                <span class=\"middle_con\"></span>
                Semester
            </dt>
            <dd id=\"shw\">
                ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ac"] ?? null), "semester", array()), "html", null, true);
        echo "
            </dd>

            <dt id=\"shw\">
                <span class=\"middle_con\"></span>
                Start Day
            </dt>
            <dd id=\"shw\">
                ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ac"] ?? null), "startDate", array()), "Y-m-d"), "html", null, true);
        echo "
            </dd>


            <dt id=\"shw\">
                <span class=\"middle_con\"></span>
                End Day
            </dt>
            <dd id=\"shw\">
                ";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ac"] ?? null), "endDate", array()), "Y-m-d"), "html", null, true);
        echo "
            </dd>

        </dl>
    </div>


    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Staff</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Nr.</th>
                    <th>Actions</th>
                </tr>


                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staff"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 118
            echo "                    <tr>
                        <td>";
            // line 119
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
            </table>
        </div>
    </div>



    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Students</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Nr.</th>
                    <th>Actions</th>
                </tr>

                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["student"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 148
            echo "                    <tr>
                        <td>";
            // line 149
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/academicYearDetailedInformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 157,  297 => 153,  292 => 151,  288 => 150,  284 => 149,  281 => 148,  277 => 147,  255 => 127,  245 => 123,  240 => 121,  236 => 120,  232 => 119,  229 => 118,  225 => 117,  201 => 96,  189 => 87,  178 => 79,  167 => 71,  153 => 59,  146 => 54,  142 => 52,  139 => 51,  132 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  103 => 35,  100 => 34,  95 => 29,  92 => 28,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  71 => 19,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 11,  45 => 10,  40 => 7,  37 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/academicYearDetailedInformation.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/academicYearDetailedInformation.html.twig");
    }
}
