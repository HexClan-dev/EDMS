<?php

/* @App/director_pages/events_show_page.html.twig */
class __TwigTemplate_674d5d5568d1f142c2f48d804dea4e2486428d5fd25a5ce66a335853a1387efe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/events_show_page.html.twig", 1);
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
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\">Events</a></li>
";
    }

    // line 24
    public function block_page_title($context, array $blocks = array())
    {
        // line 25
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Event Management <small>Dorm Management System</small></h1>
";
    }

    // line 28
    public function block_left_group($context, array $blocks = array())
    {
        // line 29
        echo "
    <a href=\"#\" class=\"list-group-item main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invited_events", array("eventParticiating" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-danger\">Reject</a>
                                ";
                } else {
                    // line 80
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invited_events", array("eventParticiating" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
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



    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Manage Events</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <input id=\"tech-fixed-search\"  class=\"form-control\" type=\"text\" placeholder=\"Filter Problems...\">
                </div>
            </div>
            <br>
            <table id=\"tech-fixed-show\" class=\"table table-striped table-hover\">

                <tr>

                    <th>E. Manager</th>
                    <th>Description</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Status</th>

                </tr>

                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["acc_events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 126
            echo "                    <tr>
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "eventmanager", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "y-M-d h:m"), "html", null, true);
            echo "</td>

                        <td>


                            ";
            // line 135
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "y-M-d h:m") > twig_date_format_filter($this->env, "now", "y-M-d h:m"))) {
                // line 136
                echo "
                                ";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["row"], "isConfirmed", array())) {
                    // line 138
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acc_reje_events", array("event" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-danger\">Reject</a>
                                ";
                } else {
                    // line 140
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acc_reje_events", array("event" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-success\">Accept</a>
                                ";
                }
                // line 142
                echo "
                            ";
            } else {
                // line 144
                echo "
                                ";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["row"], "isConfirmed", array())) {
                    // line 146
                    echo "                                    <span class=\"btn-form btn-sm btn-warning\">Occured</span>
                                ";
                } else {
                    // line 148
                    echo "                                    <span class=\"btn-form btn-sm btn-danger\">Not Occured</span>
                                ";
                }
                // line 150
                echo "
                            ";
            }
            // line 152
            echo "

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



    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Occured Events</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <input id=\"tech-fixed-search\"  class=\"form-control\" type=\"text\" placeholder=\"Filter Problems...\">
                </div>
            </div>
            <br>
            <table id=\"tech-fixed-show\" class=\"table table-striped table-hover\">

                <tr>

                    <th>E. Manager</th>
                    <th>Description</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Status</th>

                </tr>

                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["old_events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 189
            echo "                    <tr>
                        <td>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "eventmanager", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "y-M-d h:m"), "html", null, true);
            echo "</td>

                        <td>

                            ";
            // line 197
            if (twig_get_attribute($this->env, $this->source, $context["row"], "isConfirmed", array())) {
                // line 198
                echo "                                <span class=\"btn-form btn-sm btn-warning\">Occured</span>
                            ";
            } else {
                // line 200
                echo "                                <span class=\"btn-form btn-sm btn-danger\">Not Occured</span>
                            ";
            }
            // line 202
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "

            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/events_show_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 206,  411 => 202,  407 => 200,  403 => 198,  401 => 197,  394 => 193,  390 => 192,  386 => 191,  382 => 190,  379 => 189,  375 => 188,  342 => 157,  332 => 152,  328 => 150,  324 => 148,  320 => 146,  318 => 145,  315 => 144,  311 => 142,  305 => 140,  299 => 138,  297 => 137,  294 => 136,  292 => 135,  284 => 130,  280 => 129,  276 => 128,  272 => 127,  269 => 126,  265 => 125,  233 => 95,  224 => 91,  220 => 89,  216 => 87,  212 => 85,  210 => 84,  207 => 83,  204 => 82,  198 => 80,  192 => 78,  189 => 77,  187 => 76,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  167 => 70,  163 => 69,  135 => 43,  132 => 42,  125 => 37,  119 => 36,  113 => 35,  107 => 34,  100 => 29,  97 => 28,  92 => 25,  89 => 24,  83 => 21,  78 => 20,  75 => 19,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 5,  37 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/events_show_page.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/events_show_page.html.twig");
    }
}
