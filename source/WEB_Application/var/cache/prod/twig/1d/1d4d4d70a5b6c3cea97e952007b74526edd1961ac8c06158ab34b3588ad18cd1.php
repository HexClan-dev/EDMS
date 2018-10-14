<?php

/* @App/student_page/events_stud.html.twig */
class __TwigTemplate_83b29dcb090273deb7cf535feaa39cf5c9c63d2d6e83a9c1fadbe14e20677a09 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/student_page/events_stud.html.twig", 1);
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
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">Assistants</a></li>
    <li><a href=\"";
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

    // line 18
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 19
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_events_stud");
        echo "\">Events</a></li>
";
    }

    // line 23
    public function block_page_title($context, array $blocks = array())
    {
        // line 24
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Event Management <small>Dorm Management System</small></h1>
";
    }

    // line 27
    public function block_left_group($context, array $blocks = array())
    {
        // line 28
        echo "
    <a href=\"#\" class=\"list-group-item main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Problem Report </a>
    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Assistants </a>
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span> Payments </a>

";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "
    <div>
        <h3 class=\"title-application\">Events</h3>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Events With Your Participation</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Problems...\">
                </div>
            </div>
            <br>
            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                <tr>
                    <th>E. Manager</th>
                    <th>Description</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Invitation</th>
                </tr>

                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["your_events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 70
            echo "                    <tr>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "event", array()), "eventmanager", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "event", array()), "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "event", array()), "place", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "event", array()), "date", array()), "y-M-d h:m"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 76
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "event", array()), "date", array()), "y-M-d h:m") > twig_date_format_filter($this->env, "now", "y-M-d h:m"))) {
                // line 77
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["row"], "isParticipating", array())) {
                    // line 78
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invited_events_stud", array("ventParticiating" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-danger\">Reject</a>
                                ";
                } else {
                    // line 80
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invited_events_stud", array("ventParticiating" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-success\">Accept</a>
                                ";
                }
                // line 82
                echo "                            ";
            } else {
                // line 83
                echo "
                                ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["row"], "isParticipating", array())) {
                    // line 85
                    echo "                                    <span class=\"btn-form btn-sm btn-danger\">Rejected</span>
                                ";
                } else {
                    // line 87
                    echo "                                    <span class=\"btn-form btn-sm btn-success\">Accepted</span>
                                ";
                }
                // line 89
                echo "
                            ";
            }
            // line 91
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
            </table>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "@App/student_page/events_stud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 95,  210 => 91,  206 => 89,  202 => 87,  198 => 85,  196 => 84,  193 => 83,  190 => 82,  184 => 80,  178 => 78,  175 => 77,  173 => 76,  168 => 74,  164 => 73,  160 => 72,  156 => 71,  153 => 70,  149 => 69,  121 => 43,  118 => 42,  111 => 35,  107 => 34,  103 => 33,  96 => 28,  93 => 27,  88 => 24,  85 => 23,  79 => 20,  74 => 19,  71 => 18,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 5,  37 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/events_stud.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/events_stud.html.twig");
    }
}
