<?php

/* @App/assistant_pages/students.html.twig */
class __TwigTemplate_9fbfbc18e07a4c5c7f283351300d4f506a144cfd334e875624ecaee757782b2d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'navbar' => array($this, 'block_navbar'),
            'showUser' => array($this, 'block_showUser'),
            'page_title' => array($this, 'block_page_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'left_group' => array($this, 'block_left_group'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/assistant_pages/students.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/assistant_pages/students.html.twig"));

        // line 1
        echo "            <!DOCTYPE html>
            <html lang=\"en\">
            <head>
                <meta charset=\"utf-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>
                <!-- Bootstrap core CSS -->

                ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "
            </head>

            <body>

            <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">EMDS
                            ";
        // line 34
        echo "                        </a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav\">

                            ";
        // line 39
        $this->displayBlock('navbar', $context, $blocks);
        // line 47
        echo "                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">

                            ";
        // line 51
        $this->displayBlock('showUser', $context, $blocks);
        // line 67
        echo "

                            <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>


            <header id=\"header\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            ";
        // line 80
        $this->displayBlock('page_title', $context, $blocks);
        // line 83
        echo "                        </div>

                    </div>
                </div>
            </header>



            <section id=\"breadcrumb\">
                <div class=\"container\">
                    <ol class=\"breadcrumb\">

                        ";
        // line 95
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 100
        echo "                    </ol>
                </div>
            </section>

            <section id=\"main\">


                <div class=\"container\">
                    <div class=\"\" id=\"messages\">
                        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 110
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 111
                echo "
                                ";
                // line 112
                if (($context["type"] == "success")) {
                    // line 113
                    echo "                                    <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                                        ";
                    // line 114
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 117
                echo "
                                ";
                // line 118
                if (($context["type"] == "failure")) {
                    // line 119
                    echo "                                    <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                        ";
                    // line 120
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 123
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"list-group\">

                                ";
        // line 132
        $this->displayBlock('left_group', $context, $blocks);
        // line 141
        echo "
                            </div>


                        </div>
                        <div class=\"col-md-9\">

                            ";
        // line 148
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/assistant_pages/students.html.twig", 148)->display($context);
        // line 149
        echo "
                            ";
        // line 150
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/assistant_pages/students.html.twig", 150)->display($context);
        // line 151
        echo "


                            ";
        // line 154
        $this->displayBlock('body', $context, $blocks);
        // line 196
        echo "        </div>
    </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 203
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 210
        $this->displayBlock('javascript', $context, $blocks);
        // line 215
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "
                    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/director_styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/homepage_blocks.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 40
        echo "                                <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                                <li class=\"active\"><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>
                                <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
                                <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">Tech Problems</a></li>
                                <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
                                <li ><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 52
        echo "                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->source); })()), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"active\">
                                            ";
        // line 56
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "image", array()))) {
            // line 57
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                            ";
        } else {
            // line 59
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                            ";
        }
        // line 61
        echo "                                        </li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li class=\"dropdown-header\">";
        // line 63
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->source); })()), "type", array())), "html", null, true);
        echo "</li>
                                    </ul>
                                </li>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 81
        echo "                                <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 96
        echo "                            <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                            <li class=\"active\">/<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>

                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 133
        echo "                                    <a href=\"#\" class=\"list-group-item active main-color-bg\">
                                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                                    </a>
                                    <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "</span></a>
                                    <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "</span></a>
                                    <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["performance"]) || array_key_exists("performance", $context) ? $context["performance"] : (function () { throw new Twig_Error_Runtime('Variable "performance" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "</span></a>
                                    <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Technical Problem <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["tech"]) || array_key_exists("tech", $context) ? $context["tech"] : (function () { throw new Twig_Error_Runtime('Variable "tech" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "</span></a>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 155
        echo "
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading main-color-bg\">
                            <h3 class=\"panel-title\">Dormitory Students</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Students...\">
                                </div>
                            </div>
                            <br>
                            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Phone nr.</th>
                                    <th> </th>
                                </tr>

                                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new Twig_Error_Runtime('Variable "students" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 179
            echo "                                    <tr>
                                        <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "surname", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "birthday", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_performance", array("student_" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-success\">Report</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "
                            </table>
                        </div>
                    </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 211
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 213,  577 => 212,  572 => 211,  563 => 210,  548 => 190,  538 => 186,  533 => 184,  529 => 183,  525 => 182,  521 => 181,  517 => 180,  514 => 179,  510 => 178,  485 => 155,  476 => 154,  462 => 139,  456 => 138,  450 => 137,  444 => 136,  439 => 133,  430 => 132,  417 => 97,  412 => 96,  403 => 95,  392 => 81,  383 => 80,  369 => 63,  365 => 61,  359 => 59,  353 => 57,  351 => 56,  345 => 53,  342 => 52,  333 => 51,  321 => 45,  317 => 44,  313 => 43,  309 => 42,  305 => 41,  300 => 40,  291 => 39,  278 => 15,  274 => 14,  270 => 13,  266 => 12,  263 => 11,  254 => 10,  241 => 215,  239 => 210,  229 => 203,  220 => 196,  218 => 154,  213 => 151,  211 => 150,  208 => 149,  206 => 148,  197 => 141,  195 => 132,  187 => 126,  181 => 125,  174 => 123,  168 => 120,  165 => 119,  163 => 118,  160 => 117,  154 => 114,  151 => 113,  149 => 112,  146 => 111,  141 => 110,  137 => 109,  126 => 100,  124 => 95,  110 => 83,  108 => 80,  94 => 69,  90 => 67,  88 => 51,  82 => 47,  80 => 39,  73 => 34,  69 => 32,  53 => 18,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("            <!DOCTYPE html>
            <html lang=\"en\">
            <head>
                <meta charset=\"utf-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <title>{{ title }}</title>
                <!-- Bootstrap core CSS -->

                {% block stylesheet %}

                    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
                    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
                    <link href=\"{{ asset('assets/css/director_styles.css') }}\" rel=\"stylesheet\">
                    <link href=\"{{ asset('assets/css/homepage_blocks.css') }}\" rel=\"stylesheet\">

                {% endblock %}

            </head>

            <body>

            <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path('redirect_pages') }}\">EMDS
                            {#<svg href=\"{{ asset('assets/images/edms.icon') }}\"></svg>#}
                        </a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav\">

                            {% block navbar %}
                                <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
                                <li class=\"active\"><a href=\"{{ path('students') }}\">Students</a></li>
                                <li><a href=\"{{ path('events') }}\">Events</a></li>
                                <li><a href=\"{{ path('tech_problems_assistant') }}\">Tech Problems</a></li>
                                <li><a href=\"{{ path('performance') }}\">Performance</a></li>
                                <li ><a href=\"{{ path('show_profile_assistant') }}\">Profile</a></li>
                            {% endblock %}
                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">

                            {% block showUser %}
                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, {{ user.name }} <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"active\">
                                            {% if user.image is empty %}
                                                <img src=\"{{ asset('assets/person_images/default.png') }}\" width=\"100px\" class=\"img-rounded\">
                                            {% else %}
                                                <img src=\"{{ asset('assets/person_images/'~user.image) }}\" width=\"100px\" class=\"img-rounded\">
                                            {% endif %}
                                        </li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li class=\"dropdown-header\">{{ user.type|upper }}</li>
                                    </ul>
                                </li>
                            {% endblock %}


                            <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>


            <header id=\"header\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            {% block page_title %}
                                <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                            {% endblock %}
                        </div>

                    </div>
                </div>
            </header>



            <section id=\"breadcrumb\">
                <div class=\"container\">
                    <ol class=\"breadcrumb\">

                        {% block breadcrumb %}
                            <li>/<a href=\"{{ path('redirect_pages') }}\">Home</a></li>
                            <li class=\"active\">/<a href=\"{{ path('students') }}\">Students</a></li>

                        {% endblock %}
                    </ol>
                </div>
            </section>

            <section id=\"main\">


                <div class=\"container\">
                    <div class=\"\" id=\"messages\">
                        {% for type, messages in app.session.flashbag.all() %}
                            {% for message in messages %}

                                {% if type == 'success' %}
                                    <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                                        {{ message }}
                                    </div>
                                {% endif %}

                                {% if type == 'failure' %}
                                    <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                        {{ message }}
                                    </div>
                                {% endif %}

                            {% endfor %}
                        {% endfor %}
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"list-group\">

                                {% block left_group %}
                                    <a href=\"#\" class=\"list-group-item active main-color-bg\">
                                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                                    </a>
                                    <a href=\"{{ path('students') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">{{ members }}</span></a>
                                    <a href=\"{{ path('events') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">{{ events }}</span></a>
                                    <a href=\"{{ path('performance') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">{{ performance }}</span></a>
                                    <a href=\"{{ path('tech_problems_assistant') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Technical Problem <span class=\"badge\">{{ tech }}</span></a>
                                {% endblock %}

                            </div>


                        </div>
                        <div class=\"col-md-9\">

                            {% include '@App/director_pages/modal_view.html.twig' %}

                            {% include '@App/director_pages/modal_show_image.html.twig' %}



                            {% block body %}

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading main-color-bg\">
                            <h3 class=\"panel-title\">Dormitory Students</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Students...\">
                                </div>
                            </div>
                            <br>
                            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Phone nr.</th>
                                    <th> </th>
                                </tr>

                                {% for row in students %}
                                    <tr>
                                        <td>{{ row.name }}</td>
                                        <td>{{ row.surname }}</td>
                                        <td>{{ row.email }}</td>
                                        <td>{{ row.birthday }}</td>
                                        <td>{{ row.phoneNr }}</td>
                                        <td>
                                            <a href=\"{{ path('new_performance',{'student_':row.id}) }}\" class=\"btn-form btn-sm btn-success\">Report</a>
                                        </td>
                                    </tr>
                                {% endfor %}

                            </table>
                        </div>
                    </div>

                {% endblock %}
        </div>
    </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; {{ 'today'|date('Y') }}</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{% block javascript %}
<script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
      <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
      <script src=\"{{ asset('assets/js/ckeditor.js') }}\"></script>
    {% endblock %}

</body>
</html>
", "@App/assistant_pages/students.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/students.html.twig");
    }
}
