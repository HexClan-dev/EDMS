<?php

/* @App/director_pages/applications_show.html.twig */
class __TwigTemplate_30a9d9c28f1e728ac87f7b8601c0096568baa0125ff0aceebcd3f2de63f0626f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/applications_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/applications_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 5
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 29
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Applicants <small>Dorm Management System</small></h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

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
        echo twig_escape_filter($this->env, (isset($context["applicants"]) || array_key_exists("applicants", $context) ? $context["applicants"] : (function () { throw new Twig_Error_Runtime('Variable "applicants" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</span></a>
   <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\">
       </span> Members <span class=\"badge\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</span></a>
   <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</span></a>
   <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["approved_list"]) || array_key_exists("approved_list", $context) ? $context["approved_list"] : (function () { throw new Twig_Error_Runtime('Variable "approved_list" does not exist.', 65, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["accepted_list"]) || array_key_exists("accepted_list", $context) ? $context["accepted_list"] : (function () { throw new Twig_Error_Runtime('Variable "accepted_list" does not exist.', 99, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["rejected_list"]) || array_key_exists("rejected_list", $context) ? $context["rejected_list"] : (function () { throw new Twig_Error_Runtime('Variable "rejected_list" does not exist.', 133, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  390 => 149,  376 => 143,  372 => 141,  368 => 139,  362 => 136,  358 => 135,  355 => 134,  351 => 133,  333 => 117,  318 => 110,  314 => 108,  310 => 106,  304 => 103,  300 => 102,  296 => 100,  292 => 99,  270 => 79,  258 => 73,  254 => 72,  248 => 69,  244 => 68,  240 => 66,  236 => 65,  218 => 49,  209 => 48,  196 => 43,  190 => 42,  186 => 41,  182 => 40,  178 => 39,  174 => 38,  169 => 35,  160 => 34,  149 => 29,  140 => 28,  127 => 23,  123 => 22,  120 => 21,  111 => 20,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  78 => 11,  69 => 10,  58 => 5,  49 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/director_pages/index.html.twig\" %}


{% block showUser %}

{% endblock %}



{% block navbar %}
    <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li><a href=\"{{ path('manage_assistants') }}\">Assistants</a></li>
    <li><a href=\"{{ path('student_performances') }}\">Student Performances</a></li>
    <li><a href=\"{{ path('technical_problems') }}\">Tech Problems</a></li>
    <li class=\"active\"><a href=\"{{ path('applicants_show') }}\">Applicants</a></li>
    <li><a href=\"{{ path('director_show_profile') }}\">Profile</a></li>
{% endblock %}


{% block breadcrumb %}

    <li>/<a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li class=\"active\">/<a href=\"{{ path('applicants_show') }}\">Applicants</a></li>

{% endblock %}


{% block page_title %}
    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Applicants <small>Dorm Management System</small></h1>
{% endblock %}



{% block left_group %}

   <a href=\"#\" class=\"list-group-item active main-color-bg\">
       <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage</a>
   <a href=\"{{ path('applicants_show') }}\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">
       </span> Applicants <span class=\"badge\">{{ applicants }}</span></a>
   <a href=\"{{ path('dormitory_members') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\">
       </span> Members <span class=\"badge\">{{ members }}</span></a>
   <a href=\"{{ path('events_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">{{ events }}</span></a>
   <a href=\"{{ path('camera_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

{% endblock %}


{% block body %}

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
                {% for row in approved_list %}

                    <tr>
                        <td>{{ row.name~\" \"~row.surname }}</td>
                        <td>{{ row.email }}</td>
                        <td>
                            <div>
                                <a href=\"{{ path('show_information',{ 'person': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                                <a href=\"{{ path('print_contracts', { 'student_id': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-warning \">Contract</a>
                            </div>
                        </td>
                    </tr>

                {% endfor %}

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
                {% for row in accepted_list %}

                    <tr>
                        <td>{{ row.name~\" \"~row.surname }}</td>
                        <td>{{ row.email }}</td>
                        <td>
                            <div>
                                <a href=\"{{ path('show_applicants_info',{ 'person': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                                {#<a href=\"{{ path('accept_reject_applicants', { 'dormapplication': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-danger \">Reject</a>#}

                                <a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"
                                   data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to reject {{ row.name~\" \"~row.surname }}','{{ path('accept_reject_applicants', { 'dormapplication': row.id }) }}')\">Reject</a>

                            </div>
                        </td>
                    </tr>

                {% endfor %}

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
                {% for row in rejected_list %}
                <tr>
                    <td>{{ row.name~\" \"~row.surname }}</td>
                    <td>{{ row.email }}</td>
                    <td>
                        <div>
                            <a href=\"{{ path('show_applicants_info',{ 'person':row.id }) }}\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                            {#<a href=\"{{ path('accept_reject_applicants', { 'dormapplication': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-success \">Accept</a>#}

                            <a class='btn-form btn-sm btn-block btn-success' type=\"button\" data-toggle=\"modal\"
                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to accept {{ row.name~\" \"~row.surname }}','{{ path('accept_reject_applicants', { 'dormapplication': row.id }) }}')\" class='btn-form btn-sm btn-danger'>Accept</a>

                        </div>
                    </td>
                </tr>
                {% endfor %}

            </table>
        </div>
    </div>


{% endblock %}































", "@App/director_pages/applications_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/applications_show.html.twig");
    }
}
