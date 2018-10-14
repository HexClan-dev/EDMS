<?php

/* @App/assistant_pages/profile_show.html.twig */
class __TwigTemplate_c2e427de4f80372603050044a851f195ffdb89c8d6861c903ae5d1f9b8392bae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/assistant_pages/profile_show.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/assistant_pages/profile_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/assistant_pages/profile_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>
    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
    <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 25
        echo "
    <li>/<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 33
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-wrench\"aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["performance"]) || array_key_exists("performance", $context) ? $context["performance"] : (function () { throw new Twig_Error_Runtime('Variable "performance" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-wrench\"aria-hidden=\"true\"></span> Technical problems <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["tech"]) || array_key_exists("tech", $context) ? $context["tech"] : (function () { throw new Twig_Error_Runtime('Variable "tech" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</span></a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 46
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Profile <small>Dorm Management System</small></h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "

    <div class=\"top-button-group\">

        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile_assistant");
        echo "\" class=\"button-style btn btn-success top-button\"><i class=\"glyphicon glyphicon-pencil\"></i> Edit</a>
    </div>



    <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
    </div>


    <div class=\"\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading main-color-bg\">

                <h3 class=\"panel-title\">User profile</h3>

            </div>
            <div class=\"panel-body\">

                <div class=\"row\">
                    <div class=\"col-md-4 text-center\">
                        <img class=\"img-circle avatar avatar-original\" style=\"-webkit-user-select:none;
  display:block; margin:auto;\"
                         ";
        // line 78
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->source); })()), "image", array()))) {
            // line 79
            echo "                             src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\"
                         ";
        } else {
            // line 81
            echo "                             src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 81, $this->source); })()), "image", array()))), "html", null, true);
            echo "\"
                         ";
        }
        // line 83
        echo "                        >
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"only-bottom-margin\">";
        // line 88
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 88, $this->source); })()), "name", array()) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 88, $this->source); })()), "surname", array())), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <span class=\"text-muted\">Username:</span> ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 93, $this->source); })()), "username", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Email:</span> ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 94, $this->source); })()), "email", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Phone Nr.:</span> ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 95, $this->source); })()), "phoneNr", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Birth date:</span>";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 96, $this->source); })()), "birthday", array()), "Y-m-d"), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Nationality:</span>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 97, $this->source); })()), "nationality", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">City:</span>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 98, $this->source); })()), "city", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Address:</span>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 99, $this->source); })()), "address", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Department:</span>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 100, $this->source); })()), "department", array()), "html", null, true);
        echo "<br><br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/profile_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 100,  329 => 99,  325 => 98,  321 => 97,  317 => 96,  313 => 95,  309 => 94,  305 => 93,  297 => 88,  290 => 83,  284 => 81,  278 => 79,  276 => 78,  251 => 56,  245 => 52,  236 => 51,  225 => 46,  216 => 45,  202 => 40,  196 => 39,  190 => 38,  184 => 37,  178 => 33,  169 => 32,  156 => 27,  152 => 26,  149 => 25,  140 => 24,  128 => 20,  124 => 19,  120 => 18,  116 => 17,  112 => 16,  107 => 15,  98 => 14,  85 => 10,  76 => 9,  64 => 6,  59 => 5,  50 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '@App/director_pages/index.html.twig' %}

{% block stylesheet %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/profile.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block javascript %}
    {{ parent() }}
{% endblock %}


{% block navbar %}
    <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li><a href=\"{{ path('students') }}\">Students</a></li>
    <li><a href=\"{{ path('events') }}\">Events</a></li>
    <li><a href=\"{{ path('tech_problems_assistant') }}\">Tech Problems</a></li>
    <li><a href=\"{{ path('performance') }}\">Performance</a></li>
    <li class=\"active\"><a href=\"{{ path('show_profile_assistant') }}\">Profile</a></li>
{% endblock %}


{% block breadcrumb %}

    <li>/<a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li class=\"active\">/<a href=\"{{ path('show_profile_assistant') }}\">Profile</a></li>

{% endblock %}


{% block left_group %}
    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"{{ path('students') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  Students <span class=\"badge\">{{ members }}</span></a>
    <a href=\"{{ path('events') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span> Events <span class=\"badge\">{{ events }}</span></a>
    <a href=\"{{ path('performance') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-wrench\"aria-hidden=\"true\"></span> Performances <span class=\"badge\">{{ performance }}</span></a>
    <a href=\"{{ path('tech_problems_assistant') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-wrench\"aria-hidden=\"true\"></span> Technical problems <span class=\"badge\">{{ tech }}</span></a>
{% endblock %}



{% block page_title %}
    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Profile <small>Dorm Management System</small></h1>
{% endblock %}



{% block body %}


    <div class=\"top-button-group\">

        <a href=\"{{ path('edit_profile_assistant') }}\" class=\"button-style btn btn-success top-button\"><i class=\"glyphicon glyphicon-pencil\"></i> Edit</a>
    </div>



    <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
    </div>


    <div class=\"\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading main-color-bg\">

                <h3 class=\"panel-title\">User profile</h3>

            </div>
            <div class=\"panel-body\">

                <div class=\"row\">
                    <div class=\"col-md-4 text-center\">
                        <img class=\"img-circle avatar avatar-original\" style=\"-webkit-user-select:none;
  display:block; margin:auto;\"
                         {% if user.image is empty %}
                             src=\"{{ asset('assets/person_images/default.png') }}\"
                         {% else %}
                             src=\"{{ asset('assets/person_images/'~user.image) }}\"
                         {% endif %}
                        >
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"only-bottom-margin\">{{ user.name~\" \"~user.surname }}</h1>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <span class=\"text-muted\">Username:</span> {{ user.username }}<br><br>
                                <span class=\"text-muted\">Email:</span> {{ user.email }}<br><br>
                                <span class=\"text-muted\">Phone Nr.:</span> {{ user.phoneNr }}<br><br>
                                <span class=\"text-muted\">Birth date:</span>{{ user.birthday|date('Y-m-d') }}<br><br>
                                <span class=\"text-muted\">Nationality:</span>{{ user.nationality }}<br><br>
                                <span class=\"text-muted\">City:</span>{{ user.city }}<br><br>
                                <span class=\"text-muted\">Address:</span>{{ user.address }}<br><br>
                                <span class=\"text-muted\">Department:</span>{{ user.department }}<br><br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


{% endblock %}", "@App/assistant_pages/profile_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/profile_show.html.twig");
    }
}
