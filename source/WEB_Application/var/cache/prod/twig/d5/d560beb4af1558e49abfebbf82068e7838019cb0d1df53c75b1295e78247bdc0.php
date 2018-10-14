<?php

/* @App/director_pages/camera_show.html.twig */
class __TwigTemplate_d5a3100b664c77589388fb333ebb0c9dfdf3fa7e892674db58743c37a134fcc3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/camera_show.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'left_group' => array($this, 'block_left_group'),
            'page_title' => array($this, 'block_page_title'),
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

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "
    <li>/<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Director</a></li>
    <li class=\"active\">/<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\">Entrance Security</a></li>

";
    }

    // line 28
    public function block_left_group($context, array $blocks = array())
    {
        // line 29
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
    }

    // line 41
    public function block_page_title($context, array $blocks = array())
    {
        // line 42
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Dorm Security <small>Dorm Management System</small></h1>
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "
    <div>
        <h3 class=\"title-application\">Entrance Security</h3>
    </div>



    <ul class=\"nav nav-tabs\">
        <li role=\"presentation\" class=\"active\"><a  role=\"tab\" data-toggle=\"tab\" href=\"#camera\">Images Raported</a></li>
        <li role=\"presentation\" ><a  role=\"tab\" data-toggle=\"tab\" href=\"#logs\">Logs</a></li>
    </ul>


    <div class=\"tab-content\">

        <div id=\"camera\" role=\"tabpanel\" class=\"tab-pane fade in active\">

            <div class=\"space-maker\"></div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading main-color-bg\">
                    <h3 class=\"panel-title\">Camera Reports Problems</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Cameras...\">
                        </div>
                    </div>
                    <br>
                    <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                        <tr>
                            <th>Cam</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>

                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cameras_in_days"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 90
            echo "                            <tr>
                                <td><img id=\"MyImg\" onclick=\"DisplayImage(this);\" width=\"50px\" src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/unathorizedEntries_images/" . twig_get_attribute($this->env, $this->source, $context["row"], "name", array()))), "html", null, true);
            echo "\"></td>
                                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "y-M-d h:m"), "html", null, true);
            echo "</td>
                                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array()), "html", null, true);
            echo "</td>
                                <td><a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"
                                       data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to remove this Camera','";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_camera", array("camera_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\" >Delete</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                    </table>
                </div>
            </div>



        </div>
        <div id=\"logs\" role=\"tabpanel\" class=\"tab-pane fade\">

            <div class=\"tab-content\">

                <div id=\"camera\" role=\"tabpanel\" class=\"tab-pane fade in active\">

                    <div class=\"space-maker\"></div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading main-color-bg\">
                            <h3 class=\"panel-title\">Logs</h3>
                        </div>
                        <div class=\"panel-body\">

                            <div class=\"top-button-group\">
                                <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("today_logs");
        echo "\" class=\"button-style btn btn-primary\"> Get Today Logs </a>
                                <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_logs");
        echo "\" class=\"button-style btn btn-default \"> Get All Logs </a>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Cameras...\">
                                </div>
                            </div>

                            <br>
                            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                                <tr>
                                    <th>Log</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>

                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 142
            echo "                                    <tr>
                                        <td><a href='";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_log_content", array("log_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "'><img id=\"MyImg\" width=\"30px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/log.ico"), "html", null, true);
            echo "\"> </a></td>
                                        <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"
                                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to remove this Log','";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_log", array("log_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\" >Delete</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/camera_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 152,  281 => 148,  275 => 145,  271 => 144,  265 => 143,  262 => 142,  258 => 141,  236 => 122,  232 => 121,  207 => 98,  198 => 95,  193 => 93,  189 => 92,  185 => 91,  182 => 90,  178 => 89,  137 => 50,  134 => 49,  129 => 42,  126 => 41,  119 => 36,  113 => 35,  107 => 34,  101 => 33,  95 => 29,  92 => 28,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 5,  37 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/camera_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/camera_show.html.twig");
    }
}
