<?php

/* @App/finance_pages/index.html.twig */
class __TwigTemplate_2a9ec53ad8a13cebe9a90c8072a7e0a51be0c289d951ddf4bf99fd363c273a00 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/finance_pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/finance_pages/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>


<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</title>
    <!-- Bootstrap core CSS -->

    ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 23
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
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">EMDS
                ";
        // line 39
        echo "            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">

                ";
        // line 44
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "            </ul>

            <ul class=\"nav navbar-nav navbar-right\">

                ";
        // line 54
        $this->displayBlock('showUser', $context, $blocks);
        // line 70
        echo "

                <li><a href=\"";
        // line 72
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
        // line 83
        $this->displayBlock('page_title', $context, $blocks);
        // line 86
        echo "            </div>

        </div>
    </div>
</header>



<section id=\"breadcrumb\">
    <div class=\"container\">
        <ol class=\"breadcrumb\">

            ";
        // line 98
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 105
        echo "        </ol>
    </div>
</section>

<section id=\"main\">


    <div class=\"container\">
        <div class=\"\" id=\"messages\">
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 114, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 115
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 116
                echo "
                    ";
                // line 117
                if (($context["type"] == "success")) {
                    // line 118
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                            ";
                    // line 119
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 122
                echo "
                    ";
                // line 123
                if (($context["type"] == "failure")) {
                    // line 124
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                            ";
                    // line 125
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 128
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"list-group\">

                    ";
        // line 137
        $this->displayBlock('left_group', $context, $blocks);
        // line 147
        echo "
                </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 154
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/finance_pages/index.html.twig", 154)->display($context);
        // line 155
        echo "
                ";
        // line 156
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/finance_pages/index.html.twig", 156)->display($context);
        // line 157
        echo "
                ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "        </div>
    </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 217
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 224
        $this->displayBlock('javascript', $context, $blocks);
        // line 231
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 13
        echo "
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/director_styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/homepage_blocks.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 45
        echo "                    <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\">Students</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">Profile</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_payments");
        echo "\">Payments</a></li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 55
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 59
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "image", array()))) {
            // line 60
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 62
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->source); })()), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 64
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 66
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 66, $this->source); })()), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 84
        echo "                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Finance <small>Dorm Management System</small></h1>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 99
        echo "
                <li class=\"active\">/<a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\">Home</a></li>
                ";
        // line 102
        echo "                ";
        // line 103
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 138
        echo "                        <a href=\"#\" class=\"list-group-item active main-color-bg\">
                            <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                        </a>
                        <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Home <span class=\"badge\"></span></a>
                        ";
        // line 143
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> students <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_payments");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span> Payments <span class=\"badge\"></span></a>
                        <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Profile <span class=\"badge\"></span></a>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "
                <!-- Website Overview -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading main-color-bg\">
                        <h3 class=\"panel-title\">Dorm Management</h3>
                    </div>
                    <div class=\"panel-body\">



                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\">Students</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_payments");
        echo "\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-euro\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\">Show Payments</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
                                <div class=\"well dash-box green card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Profile</h4>
                                    </div>
                                </div>
                            </a>
                        </div>




                    </div>
                </div>

            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 225
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal_show.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 230
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/finance_pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 230,  572 => 228,  568 => 227,  564 => 226,  559 => 225,  550 => 224,  522 => 192,  508 => 181,  494 => 170,  481 => 159,  472 => 158,  460 => 145,  456 => 144,  449 => 143,  445 => 141,  440 => 138,  431 => 137,  420 => 103,  418 => 102,  414 => 100,  411 => 99,  402 => 98,  391 => 84,  382 => 83,  368 => 66,  364 => 64,  358 => 62,  352 => 60,  350 => 59,  344 => 56,  341 => 55,  332 => 54,  320 => 48,  316 => 47,  312 => 46,  307 => 45,  298 => 44,  284 => 19,  280 => 18,  276 => 17,  272 => 16,  268 => 15,  264 => 14,  261 => 13,  252 => 12,  238 => 231,  236 => 224,  226 => 217,  217 => 210,  215 => 158,  212 => 157,  210 => 156,  207 => 155,  205 => 154,  196 => 147,  194 => 137,  186 => 131,  180 => 130,  173 => 128,  167 => 125,  164 => 124,  162 => 123,  159 => 122,  153 => 119,  150 => 118,  148 => 117,  145 => 116,  140 => 115,  136 => 114,  125 => 105,  123 => 98,  109 => 86,  107 => 83,  93 => 72,  89 => 70,  87 => 54,  81 => 50,  79 => 44,  72 => 39,  55 => 23,  53 => 12,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>


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
        <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/profile.css') }}\" rel=\"stylesheet\">


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
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">EMDS
                {#<svg href=\"{{ asset('assets/images/edms.icon') }}\"></svg>#}
            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">

                {% block navbar %}
                    <li class=\"active\"><a href=\"{{ path('finance') }}\">Home</a></li>
                    <li><a href=\"{{ path('show_student')}}\">Students</a></li>
                    <li><a href=\"{{ path('profile')}}\">Profile</a></li>
                    <li><a href=\"{{ path('show_payments')}}\">Payments</a></li>
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
                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Finance <small>Dorm Management System</small></h1>
                {% endblock %}
            </div>

        </div>
    </div>
</header>



<section id=\"breadcrumb\">
    <div class=\"container\">
        <ol class=\"breadcrumb\">

            {% block breadcrumb %}

                <li class=\"active\">/<a href=\"{{ path('finance') }}\">Home</a></li>
                {#<li class=\"active\">/<a href=\"{{ path('show_student') }}\">Students</a></li>#}
                {#<li class=\"active\">/<a href=\"{{ path('profile') }}\">Profile</a></li>#}

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
                        <a href=\"{{ path('finance') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Home <span class=\"badge\"></span></a>
                        {#<a href=\"#\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">1</span></a>#}
                        <a href=\"{{ path('show_student') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> students <span class=\"badge\">{{ number }}</span></a>
                        <a href=\"{{ path('show_payments') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span> Payments <span class=\"badge\"></span></a>
                        <a href=\"{{ path('profile') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Profile <span class=\"badge\"></span></a>
                    {% endblock %}

                </div>


            </div>
            <div class=\"col-md-9\">

                {% include '@App/director_pages/modal_view.html.twig' %}

                {% include '@App/director_pages/modal_show_image.html.twig' %}

                {% block body %}

                <!-- Website Overview -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading main-color-bg\">
                        <h3 class=\"panel-title\">Dorm Management</h3>
                    </div>
                    <div class=\"panel-body\">



                        <div class=\"col-md-4\">
                            <a href=\"{{ path('show_student') }}\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\">Students</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"{{ path('show_payments') }}\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-euro\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\">Show Payments</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"{{ path('profile') }}\">
                                <div class=\"well dash-box green card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Profile</h4>
                                    </div>
                                </div>
                            </a>
                        </div>




                    </div>
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
      <script src=\"{{ asset('assets/js/modal_show.js') }}\"></script>
      {#<script src=\"{{ asset('assets/js/application_form.js') }}\"></script>#}
    {% endblock %}

</body>

</html>
", "@App/finance_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/finance_pages/index.html.twig");
    }
}
