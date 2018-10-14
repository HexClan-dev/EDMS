<?php

/* @App/assistant_pages/newEvent.html.twig */
class __TwigTemplate_47574d9d4f867bf16fe796c2cc218fd3b9c09304ada823ee5a4543ffd5510700 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/assistant_pages/newEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/assistant_pages/newEvent.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>
      ";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 16
        echo "  </head>

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
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">EMDS
              </a>
          </div>
          <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav\">

                  ";
        // line 35
        $this->displayBlock('navbar', $context, $blocks);
        // line 43
        echo "              </ul>

              <ul class=\"nav navbar-nav navbar-right\">


              ";
        // line 48
        $this->displayBlock('showUser', $context, $blocks);
        // line 64
        echo "

                <li><a href=\"";
        // line 66
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
        // line 77
        $this->displayBlock('page_title', $context, $blocks);
        // line 80
        echo "                </div>

            </div>
        </div>
    </header>



    <section id=\"breadcrumb\">
        <div class=\"container\">
            <ol class=\"breadcrumb\">

                ";
        // line 92
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 98
        echo "            </ol>
        </div>
    </section>

    <section id=\"main\">


        <div class=\"container\">
            <div class=\"\" id=\"messages\">
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 108
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 109
                echo "
                        ";
                // line 110
                if (($context["type"] == "success")) {
                    // line 111
                    echo "                            <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                                ";
                    // line 112
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                // line 115
                echo "
                        ";
                // line 116
                if (($context["type"] == "failure")) {
                    // line 117
                    echo "                            <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                ";
                    // line 118
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                // line 121
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "            </div>

            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"list-group\">

                        ";
        // line 130
        $this->displayBlock('left_group', $context, $blocks);
        // line 139
        echo "
                    </div>


                </div>
                <div class=\"col-md-9\">

                    ";
        // line 146
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/assistant_pages/newEvent.html.twig", 146)->display($context);
        // line 147
        echo "
                    ";
        // line 148
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/assistant_pages/newEvent.html.twig", 148)->display($context);
        // line 149
        echo "


                    <div class=\"top-button-group\">
                    <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
                </div>

                <!-- Website Overview -->
                <div class=\"col-md-12\">



                    <div class=\"col-md-6\">

                        ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->source); })()), 'form_start');
        echo "

                        <div class=\"form-group\">
                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->source); })()), "description", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->source); })()), "date", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 174, $this->source); })()), "place", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->source); })()), "event_manager", array()), 'row');
        echo "
                        </div>

                        <button type=\"submit\" class=\"button-style btn btn-success\"> Create event </button>


                        ";
        // line 184
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->source); })()), 'form_end');
        echo "


                    </div>


                </div>

          </div>
        </div>
        </div>

        </div>
    </section>



    <footer id=\"footer\">
        <p>Copyright EDMS, &copy; ";
        // line 202
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal_show.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 215
        echo "
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "
          <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/director_styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/homepage_blocks.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 36
        echo "                      <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                      <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>
                      <li class=\"active\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
                      <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">Tech Problems</a></li>
                      <li ><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
                      <li ><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 49
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 50, $this->source); })()), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 53
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->source); })()), "image", array()))) {
            // line 54
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 56
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 58
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 78
        echo "                        <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 93
        echo "
                    <li >/<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Event</a></li>
                    <li class=\"active\">/<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_event");
        echo "\">New</a></li>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 131
        echo "                            <a href=\"#\" class=\"list-group-item active main-color-bg\">
                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                            </a>
                            <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "</span></a>
                            <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 135, $this->source); })()), "html", null, true);
        echo "</span></a>
                            <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["performance"]) || array_key_exists("performance", $context) ? $context["performance"] : (function () { throw new Twig_Error_Runtime('Variable "performance" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "</span></a>
                            <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Technical Problem <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["tech"]) || array_key_exists("tech", $context) ? $context["tech"] : (function () { throw new Twig_Error_Runtime('Variable "tech" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "</span></a>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/newEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 137,  527 => 136,  521 => 135,  515 => 134,  510 => 131,  501 => 130,  488 => 95,  484 => 94,  481 => 93,  472 => 92,  461 => 78,  452 => 77,  438 => 60,  434 => 58,  428 => 56,  422 => 54,  420 => 53,  414 => 50,  411 => 49,  402 => 48,  390 => 41,  386 => 40,  382 => 39,  378 => 38,  374 => 37,  369 => 36,  360 => 35,  347 => 13,  343 => 12,  339 => 11,  335 => 10,  332 => 9,  323 => 8,  310 => 215,  306 => 213,  302 => 212,  298 => 211,  294 => 210,  283 => 202,  262 => 184,  253 => 178,  246 => 174,  239 => 170,  232 => 166,  226 => 163,  213 => 153,  207 => 149,  205 => 148,  202 => 147,  200 => 146,  191 => 139,  189 => 130,  181 => 124,  175 => 123,  168 => 121,  162 => 118,  159 => 117,  157 => 116,  154 => 115,  148 => 112,  145 => 111,  143 => 110,  140 => 109,  135 => 108,  131 => 107,  120 => 98,  118 => 92,  104 => 80,  102 => 77,  88 => 66,  84 => 64,  82 => 48,  75 => 43,  73 => 35,  64 => 29,  49 => 16,  47 => 8,  43 => 7,  35 => 1,);
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
              </a>
          </div>
          <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav\">

                  {% block navbar %}
                      <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
                      <li><a href=\"{{ path('students') }}\">Students</a></li>
                      <li class=\"active\"><a href=\"{{ path('events') }}\">Events</a></li>
                      <li><a href=\"{{ path('tech_problems_assistant') }}\">Tech Problems</a></li>
                      <li ><a href=\"{{ path('performance') }}\">Performance</a></li>
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

                    <li >/<a href=\"{{ path('events') }}\">Event</a></li>
                    <li class=\"active\">/<a href=\"{{ path('new_event') }}\">New</a></li>

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



                    <div class=\"top-button-group\">
                    <a href=\"{{ path('events') }}\" class=\"button-style btn btn-warning top-button\">Back</a>
                </div>

                <!-- Website Overview -->
                <div class=\"col-md-12\">



                    <div class=\"col-md-6\">

                        {{ form_start(form) }}

                        <div class=\"form-group\">
                            {{ form_row(form.description) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_row(form.date) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_row(form.place) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_row(form.event_manager) }}
                        </div>

                        <button type=\"submit\" class=\"button-style btn btn-success\"> Create event </button>


                        {{ form_end(form) }}


                    </div>


                </div>

          </div>
        </div>
        </div>

        </div>
    </section>



    <footer id=\"footer\">
        <p>Copyright EDMS, &copy; {{ 'today'|date('Y') }}</p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
      <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
      <script src=\"{{ asset('assets/js/ckeditor.js') }}\"></script>
      <script src=\"{{ asset('assets/js/modal_show.js') }}\"></script>
      {#<script src=\"{{ asset('assets/js/application_form.js') }}\"></script>#}

  </body>
</html>
", "@App/assistant_pages/newEvent.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/newEvent.html.twig");
    }
}
