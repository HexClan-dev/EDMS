<?php

/* @App/director_pages/index.html.twig */
class __TwigTemplate_d86b8a86273e9a011829cd8bb3391f12a8f02742b25bae7b45674d32f05b0996 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/index.html.twig"));

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
        // line 22
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
          <a class=\"navbar-brand\" href=\"#\">
              EDMS
          </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">

          ";
        // line 43
        $this->displayBlock('navbar', $context, $blocks);
        // line 51
        echo "          </ul>

           <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 55
        $this->displayBlock('showUser', $context, $blocks);
        // line 71
        echo "

               <li><a href=\"";
        // line 73
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
        // line 84
        $this->displayBlock('page_title', $context, $blocks);
        // line 90
        echo "          </div>
        </div>
      </div>
    </header>



    <section id=\"breadcrumb\">
      <div class=\"container\">
        <ol class=\"breadcrumb\">

          ";
        // line 101
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 106
        echo "        </ol>
      </div>
    </section>

    <section id=\"main\">


        <div class=\"container\">
            <div class=\"\" id=\"messages\">
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 115, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 116
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 117
                echo "
                        ";
                // line 118
                if (($context["type"] == "success")) {
                    // line 119
                    echo "                            <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
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
                // line 124
                if (($context["type"] == "failure")) {
                    // line 125
                    echo "                            <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                ";
                    // line 126
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                // line 129
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            </div>

          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"list-group\">

                ";
        // line 138
        $this->displayBlock('left_group', $context, $blocks);
        // line 147
        echo "
              </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 154
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/director_pages/index.html.twig", 154)->display($context);
        // line 155
        echo "
                ";
        // line 156
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/director_pages/index.html.twig", 156)->display($context);
        // line 157
        echo "
                ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 234
        echo "          </div>
        </div>


    </section>

    <footer id=\"footer\">
      <p>Copyright EDMS &copy; ";
        // line 241
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 248
        $this->displayBlock('javascript', $context, $blocks);
        // line 255
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


      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 44
        echo "              <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
              <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
              <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
              <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
              <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 56
        echo "               <li>
                   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">
                       <li class=\"active\">
                            ";
        // line 60
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "image", array()))) {
            // line 61
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                            ";
        } else {
            // line 63
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->source); })()), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                            ";
        }
        // line 65
        echo "                       </li>
                       <li role=\"separator\" class=\"divider\"></li>
                       <li class=\"dropdown-header\">";
        // line 67
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 67, $this->source); })()), "type", array())), "html", null, true);
        echo "</li>
                   </ul>
               </li>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 85
        echo "              <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Director <small>Dorm Management System</small></h1>



            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 102
        echo "
            <li class=\"active\">/<a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>

          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 139
        echo "                    <a href=\"#\" class=\"list-group-item active main-color-bg\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                    </a>
                    <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["applicants"]) || array_key_exists("applicants", $context) ? $context["applicants"] : (function () { throw new Twig_Error_Runtime('Variable "applicants" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "</span></a>
                    <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "</span></a>
                    <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "</span></a>
                    <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>
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
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">
                        <div class=\"well dash-box blue card_outer\" >
                            <div class=\"card_inner\">
                                <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                <h4 class=\"left\"> Assistants </h4>
                            </div>
                        </div>
                      </a>
                  </div>



                    <div class=\"col-md-4\">
                        <a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">
                            <div class=\"well dash-box red card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-paste\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Student-</h4> <h4 class=\"left\"> Performance </h4>
                                </div>
                            </div>
                        </a>
                    </div>




                    <div class=\"col-md-4\">
                        <a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">
                            <div class=\"well dash-box lightgreen card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Tech-</h4> <h4 class=\"left\"> Problems </h4>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class=\"col-md-4\">
                        <a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">
                            <div class=\"well dash-box green card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Applicants </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-4\">
                        <a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("academic_year");
        echo "\">
                            <div class=\"well dash-box brown card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-bishop\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Academic Year </h4>
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

    // line 248
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 249
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal_show.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 254
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/director_pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 254,  606 => 252,  602 => 251,  598 => 250,  593 => 249,  584 => 248,  558 => 218,  544 => 207,  528 => 194,  511 => 180,  495 => 167,  485 => 159,  476 => 158,  464 => 145,  458 => 144,  452 => 143,  446 => 142,  441 => 139,  432 => 138,  419 => 103,  416 => 102,  407 => 101,  393 => 85,  384 => 84,  370 => 67,  366 => 65,  360 => 63,  354 => 61,  352 => 60,  346 => 57,  343 => 56,  334 => 55,  322 => 49,  318 => 48,  314 => 47,  310 => 46,  306 => 45,  301 => 44,  292 => 43,  278 => 18,  274 => 17,  270 => 16,  266 => 15,  262 => 14,  259 => 13,  250 => 12,  236 => 255,  234 => 248,  224 => 241,  215 => 234,  213 => 158,  210 => 157,  208 => 156,  205 => 155,  203 => 154,  194 => 147,  192 => 138,  184 => 132,  178 => 131,  171 => 129,  165 => 126,  162 => 125,  160 => 124,  157 => 123,  151 => 120,  148 => 119,  146 => 118,  143 => 117,  138 => 116,  134 => 115,  123 => 106,  121 => 101,  108 => 90,  106 => 84,  92 => 73,  88 => 71,  86 => 55,  80 => 51,  78 => 43,  55 => 22,  53 => 12,  47 => 9,  37 => 1,);
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
          <a class=\"navbar-brand\" href=\"#\">
              EDMS
          </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">

          {% block navbar %}
              <li class=\"active\"><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
              <li><a href=\"{{ path('manage_assistants') }}\">Assistants</a></li>
              <li><a href=\"{{ path('student_performances') }}\">Student Performances</a></li>
              <li><a href=\"{{ path('technical_problems') }}\">Tech Problems</a></li>
              <li><a href=\"{{ path('applicants_show') }}\">Applicants</a></li>
              <li><a href=\"{{ path('director_show_profile') }}\">Profile</a></li>
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
              <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Director <small>Dorm Management System</small></h1>



            {% endblock %}
          </div>
        </div>
      </div>
    </header>



    <section id=\"breadcrumb\">
      <div class=\"container\">
        <ol class=\"breadcrumb\">

          {% block breadcrumb %}

            <li class=\"active\">/<a href=\"{{ path('redirect_pages') }}\">Home</a></li>

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
                    <a href=\"{{ path('applicants_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">{{ applicants }}</span></a>
                    <a href=\"{{ path('dormitory_members') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">{{ members }}</span></a>
                    <a href=\"{{ path('events_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">{{ events }}</span></a>
                    <a href=\"{{ path('camera_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>
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
                      <a href=\"{{ path('manage_assistants') }}\">
                        <div class=\"well dash-box blue card_outer\" >
                            <div class=\"card_inner\">
                                <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                <h4 class=\"left\"> Assistants </h4>
                            </div>
                        </div>
                      </a>
                  </div>



                    <div class=\"col-md-4\">
                        <a href=\"{{ path('student_performances') }}\">
                            <div class=\"well dash-box red card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-paste\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Student-</h4> <h4 class=\"left\"> Performance </h4>
                                </div>
                            </div>
                        </a>
                    </div>




                    <div class=\"col-md-4\">
                        <a href=\"{{ path('technical_problems') }}\">
                            <div class=\"well dash-box lightgreen card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Tech-</h4> <h4 class=\"left\"> Problems </h4>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class=\"col-md-4\">
                        <a href=\"{{ path('applicants_show') }}\">
                            <div class=\"well dash-box green card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Applicants </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-4\">
                        <a href=\"{{ path('academic_year') }}\">
                            <div class=\"well dash-box brown card_outer\" >
                                <div class=\"card_inner\">
                                    <span class=\"img_icon left glyphicon glyphicon-bishop\" aria-hidden=\"true\"></span>
                                    <h4 class=\"left\"> Academic Year </h4>
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
", "@App/director_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/index.html.twig");
    }
}
