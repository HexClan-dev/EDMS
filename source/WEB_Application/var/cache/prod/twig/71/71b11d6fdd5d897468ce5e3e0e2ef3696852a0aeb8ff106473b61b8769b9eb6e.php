<?php

/* @App/director_pages/applications_show.html.twig */
class __TwigTemplate_f9306b0e883111aa6e6d1d2c433aa9a8410fde8abd6544d1627160a2708a2bfc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/applications_show.html.twig", 1);
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
    <li class=\"active\"><a href=\"";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>

";
    }

    // line 28
    public function block_page_title($context, array $blocks = array())
    {
        // line 29
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Applicants <small>Dorm Management System</small></h1>
";
    }

    // line 34
    public function block_left_group($context, array $blocks = array())
    {
        // line 35
        echo "
   <a href=\"#\" class=\"list-group-item active main-color-bg\">
       <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage</a>
   <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">
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

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "
    <h3 class=\"title-application\"> All Applicants </h3>

    <div class=\"space-maker\"></div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Approved Students</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["approved_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 66
            echo "
                    <tr>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_contracts", array("student_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-warning \">Contract</a>
                            </div>
                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            </table>
        </div>
    </div>

    <div class=\"space-maker\"></div>

    <h3 class=\"title-application\"> Student Applications </h3>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Accepted Students</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accepted_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 100
            echo "
                    <tr>
                        <td>";
            // line 102
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_applicants_info", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                                ";
            // line 108
            echo "
                                <a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"
                                   data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to reject ";
            // line 110
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_reject_applicants", array("dormapplication" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\">Reject</a>

                            </div>
                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
            </table>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Pending Students</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rejected_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 134
            echo "                <tr>
                    <td>";
            // line 135
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div>
                            <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_applicants_info", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                            ";
            // line 141
            echo "
                            <a class='btn-form btn-sm btn-block btn-success' type=\"button\" data-toggle=\"modal\"
                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to accept ";
            // line 143
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_reject_applicants", array("dormapplication" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\" class='btn-form btn-sm btn-danger'>Accept</a>

                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/applications_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 149,  298 => 143,  294 => 141,  290 => 139,  284 => 136,  280 => 135,  277 => 134,  273 => 133,  255 => 117,  240 => 110,  236 => 108,  232 => 106,  226 => 103,  222 => 102,  218 => 100,  214 => 99,  192 => 79,  180 => 73,  176 => 72,  170 => 69,  166 => 68,  162 => 66,  158 => 65,  140 => 49,  137 => 48,  130 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  103 => 35,  100 => 34,  95 => 29,  92 => 28,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 11,  45 => 10,  40 => 5,  37 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/applications_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/applications_show.html.twig");
    }
}
