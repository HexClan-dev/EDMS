<?php

/* @App/director_pages/members_show.html.twig */
class __TwigTemplate_0d021421d548b6eee0b4c8f99f0040f6d43b1a8976a51f18ba5923695bfb8d22 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/members_show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/members_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/members_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 4
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 22
        echo "
    <li>/<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Director</a></li>
    <li class=\"active\">/<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\">Dormitory Members</a></li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 30
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["applicants"]) || array_key_exists("applicants", $context) ? $context["applicants"] : (function () { throw new Twig_Error_Runtime('Variable "applicants" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 44
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Dormitory Members <small>Dorm Management System</small></h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "
    ";
        // line 75
        $context["mb"] = $this->loadTemplate("@App/director_pages/members_show.html.twig", "@App/director_pages/members_show.html.twig", 75);
        // line 76
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Staff</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Nr.</th>

                    <th>Actions</th>
                    <th>Entrance</th>
                </tr>


                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["staff_list"]) || array_key_exists("staff_list", $context) ? $context["staff_list"] : (function () { throw new Twig_Error_Runtime('Variable "staff_list" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 95
            echo "                    <tr>
                        <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 97
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>

                        <td>
                            <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                        <td> ";
            // line 104
            echo $context["mb"]->macro_checkServerRegistration(twig_get_attribute($this->env, $this->source, $context["row"], "existOnServer", array()), twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), (isset($context["server_ava"]) || array_key_exists("server_ava", $context) ? $context["server_ava"] : (function () { throw new Twig_Error_Runtime('Variable "server_ava" does not exist.', 104, $this->source); })()));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
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
                    <th>Entrance</th>
                </tr>


                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students_list"]) || array_key_exists("students_list", $context) ? $context["students_list"] : (function () { throw new Twig_Error_Runtime('Variable "students_list" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 130
            echo "                    <tr>
                        <td>";
            // line 131
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                        <td> ";
            // line 137
            echo $context["mb"]->macro_checkServerRegistration(twig_get_attribute($this->env, $this->source, $context["row"], "existOnServer", array()), twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), (isset($context["server_ava"]) || array_key_exists("server_ava", $context) ? $context["server_ava"] : (function () { throw new Twig_Error_Runtime('Variable "server_ava" does not exist.', 137, $this->source); })()));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
            </table>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function macro_checkServerRegistration($__input__ = null, $__id__ = null, $__available__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "id" => $__id__,
            "available" => $__available__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkServerRegistration"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkServerRegistration"));

            // line 49
            echo "
    ";
            // line 51
            echo "
    ";
            // line 52
            if ((isset($context["available"]) || array_key_exists("available", $context) ? $context["available"] : (function () { throw new Twig_Error_Runtime('Variable "available" does not exist.', 52, $this->source); })())) {
                // line 53
                echo "
        ";
                // line 54
                if ((isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 54, $this->source); })())) {
                    // line 55
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_images_to_server", array("mem_id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 55, $this->source); })()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-block btn-danger\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is available\" ><span class=\"fa fa-trash\"></span>Remove</a>
        ";
                } else {
                    // line 57
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_images_to_server", array("mem_id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 57, $this->source); })()))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-block btn-success\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is available\"><span class=\"fa fa-check\"></span>Save</a>
        ";
                }
                // line 59
                echo "
    ";
            } else {
                // line 61
                echo "
        ";
                // line 62
                if ((isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 62, $this->source); })())) {
                    // line 63
                    echo "            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is not available!\" class=\"disabled btn-form btn-sm btn-block btn-warning\"><span class=\"fa fa-trash\"></span>Remove</a>
        ";
                } else {
                    // line 65
                    echo "            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is not available!\" class=\"disabled btn-form btn-sm btn-block btn-warning\"><span class=\"fa fa-check\"></span>Save</a>
        ";
                }
                // line 67
                echo "
    ";
            }
            // line 69
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@App/director_pages/members_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 69,  416 => 67,  412 => 65,  408 => 63,  406 => 62,  403 => 61,  399 => 59,  393 => 57,  387 => 55,  385 => 54,  382 => 53,  380 => 52,  377 => 51,  374 => 49,  354 => 48,  338 => 140,  329 => 137,  324 => 135,  319 => 133,  315 => 132,  311 => 131,  308 => 130,  304 => 129,  280 => 107,  271 => 104,  266 => 102,  260 => 99,  256 => 98,  252 => 97,  248 => 96,  245 => 95,  241 => 94,  221 => 76,  219 => 75,  216 => 74,  207 => 73,  196 => 44,  187 => 43,  174 => 37,  168 => 36,  162 => 35,  156 => 34,  150 => 30,  141 => 29,  128 => 24,  124 => 23,  121 => 22,  112 => 21,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  78 => 10,  69 => 9,  58 => 4,  49 => 3,  15 => 1,);
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
    <li><a href=\"{{ path('applicants_show') }}\">Applicants</a></li>
    <li><a href=\"{{ path('director_show_profile') }}\">Profile</a></li>

{% endblock %}



{% block breadcrumb %}

    <li>/<a href=\"{{ path('redirect_pages') }}\">Director</a></li>
    <li class=\"active\">/<a href=\"{{ path('dormitory_members') }}\">Dormitory Members</a></li>

{% endblock %}


{% block left_group %}
    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"{{ path('applicants_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">{{ applicants }}</span></a>
    <a href=\"{{ path('dormitory_members') }}\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">{{ members }}</span></a>
    <a href=\"{{ path('events_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">{{ events }}</span></a>
    <a href=\"{{ path('camera_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

{% endblock %}



{% block page_title %}
    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Dormitory Members <small>Dorm Management System</small></h1>
{% endblock %}


{% macro checkServerRegistration(input,id,available) %}

    {#<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Tooltip on left\">Tooltip on left</button>#}

    {% if available %}

        {% if input %}
            <a href=\"{{ path('send_images_to_server', {'mem_id':id }) }}\" class=\"btn-form btn-sm btn-block btn-danger\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is available\" ><span class=\"fa fa-trash\"></span>Remove</a>
        {% else %}
            <a href=\"{{ path('send_images_to_server', {'mem_id':id }) }}\" class=\"btn-form btn-sm btn-block btn-success\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is available\"><span class=\"fa fa-check\"></span>Save</a>
        {% endif %}

    {% else %}

        {% if input %}
            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is not available!\" class=\"disabled btn-form btn-sm btn-block btn-warning\"><span class=\"fa fa-trash\"></span>Remove</a>
        {% else %}
            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is not available!\" class=\"disabled btn-form btn-sm btn-block btn-warning\"><span class=\"fa fa-check\"></span>Save</a>
        {% endif %}

    {% endif %}

{% endmacro %}


{% block body %}

    {% import '@App/director_pages/members_show.html.twig' as mb %}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Staff</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Nr.</th>

                    <th>Actions</th>
                    <th>Entrance</th>
                </tr>


                {% for row in staff_list %}
                    <tr>
                        <td>{{ row.type|upper }}</td>
                        <td>{{ row.name~\" \"~row.surname }}</td>
                        <td> {{ row.email }}</td>
                        <td> {{ row.phoneNr }}</td>

                        <td>
                            <a href=\"{{ path('show_information', {'person': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                        <td> {{ mb.checkServerRegistration(row.existOnServer,row.id,server_ava) }}</td>
                    </tr>
                {% endfor %}

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
                    <th>Entrance</th>
                </tr>


                {% for row in students_list %}
                    <tr>
                        <td>{{ row.name~\" \"~row.surname }}</td>
                        <td> {{ row.email }}</td>
                        <td> {{ row.phoneNr }}</td>
                        <td>
                            <a href=\"{{ path('show_information', {'person': row.id }) }}\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                        <td> {{ mb.checkServerRegistration(row.existOnServer,row.id,server_ava) }}</td>
                    </tr>
                {% endfor %}

            </table>
        </div>
    </div>


{% endblock %}






", "@App/director_pages/members_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/members_show.html.twig");
    }
}
