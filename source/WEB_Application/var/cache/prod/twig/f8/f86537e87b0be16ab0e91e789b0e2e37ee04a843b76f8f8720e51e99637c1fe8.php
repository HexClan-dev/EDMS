<?php

/* @App/director_pages/logs_show_details.html.twig */
class __TwigTemplate_20792dd94e679ab778547fec74534fee700589c785a6704fe75c6a48f8e126ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/logs_show_details.html.twig", 1);
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
        echo "\">Camera</a></li>

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
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Entrance Security Information <small>Dorm Management System</small></h1>
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "
    <div>
        <h3 class=\"title-application\">Security Logs</h3>
    </div>


    <div class=\"top-button-group\">
        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["back"] ?? null), "html", null, true);
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>

    <div class=\"space-maker\"></div>

    <div class=\"tab-content\">

        <div id=\"camera\">

            <div class=\"space-maker\"></div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading main-color-bg\">
                    <h3 class=\"panel-title\">Log Information</h3>
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
                            <th>Log</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>

                            <tr>
                                <td><img id=\"MyImg\" width=\"30px\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/log.ico"), "html", null, true);
        echo "\"></td>
                                <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "name", array()), "html", null, true);
        echo "</td>
                                <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "type", array()), "html", null, true);
        echo "</td>
                                <td><a type=\"button\" data-toggle=\"modal\"
                                       data-target=\"#lost_modal\" onclick=\"showModalUser('Are you sure that you want to remove this Log','";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_log", array("log_id" => twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "id", array()))), "html", null, true);
        echo "')\" class='btn-form btn-sm btn-danger'>Delete</a></td>
                            </tr>

                    </table>
                </div>
            </div>

        </div>

    </div>


    <div class=\"space-maker\">
        <h3 class=\"title-application\">Log information</h3>
    </div>

    <div class=\"col-md-9\">

        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["log_info"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cont"]) {
            // line 112
            echo "            <div class=\"log-c\">";
            echo twig_escape_filter($this->env, $context["cont"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cont'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </div>




";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/logs_show_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 114,  215 => 112,  211 => 111,  190 => 93,  185 => 91,  181 => 90,  177 => 89,  142 => 57,  133 => 50,  130 => 49,  125 => 42,  122 => 41,  115 => 36,  109 => 35,  103 => 34,  97 => 33,  91 => 29,  88 => 28,  81 => 23,  77 => 22,  74 => 21,  71 => 20,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 11,  45 => 10,  40 => 5,  37 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/logs_show_details.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/logs_show_details.html.twig");
    }
}
