<?php

/* @App/tech_pages/index.html.twig */
class __TwigTemplate_2ac59b17bd6d111eced6b170773df7c76c42b6c264c559a1524492453c48fb16 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/tech_pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/tech_pages/index.html.twig"));

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
        // line 20
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
          <a class=\"navbar-brand\" href=\"#\">EMDS
            ";
        // line 36
        echo "          </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">

          ";
        // line 41
        $this->displayBlock('navbar', $context, $blocks);
        // line 47
        echo "          </ul>

           <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 51
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
        // line 78
        $this->displayBlock('page_title', $context, $blocks);
        // line 81
        echo "          </div>

        </div>
      </div>
    </header>


    <section id=\"breadcrumb\">
      <div class=\"container\">
        <ol class=\"breadcrumb\">

          ";
        // line 92
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 97
        echo "        </ol>
      </div>
    </section>

    <section id=\"main\">


        <div class=\"container\">
            <div class=\"\" id=\"messages\">
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 106, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 107
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 108
                echo "
                        ";
                // line 109
                if (($context["type"] == "success")) {
                    // line 110
                    echo "                            <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                                ";
                    // line 111
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                // line 114
                echo "
                        ";
                // line 115
                if (($context["type"] == "failure")) {
                    // line 116
                    echo "                            <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                ";
                    // line 117
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                // line 120
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "            </div>

          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"list-group\">

                ";
        // line 129
        $this->displayBlock('left_group', $context, $blocks);
        // line 138
        echo "
              </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 145
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/tech_pages/index.html.twig", 145)->display($context);
        // line 146
        echo "
                ";
        // line 147
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/tech_pages/index.html.twig", 147)->display($context);
        // line 148
        echo "
                ";
        // line 149
        $this->displayBlock('body', $context, $blocks);
        // line 174
        echo "          </div>
        </div>


    </section>

    <footer id=\"footer\">
      <p>Copyright EDMS &copy; ";
        // line 181
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 187
        $this->displayBlock('javascript', $context, $blocks);
        // line 194
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

      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 42
        echo "              <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
              <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_tech");
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
        echo "               <li>
                   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->source); })()), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">

                       <li><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "image", array()))), "html", null, true);
        echo "\" class=\"avatar_image unselectable\"/></li>
                       <li><a href=\"#\" >Profile</a></li>
                       <li role=\"separator\" class=\"divider\"></li>
                       <li class=\"dropdown-header\">Account Options</li>

                   </ul>
               </li>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 79
        echo "              <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Tech <small>Dorm Management System</small></h1>
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
            <li class=\"active\">/<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>

          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_left_group($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_group"));

        // line 130
        echo "                    <a href=\"#\" class=\"list-group-item active main-color-bg\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                    </a>
                    <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_tech_problems");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Dorm Problems <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["problems_count"]) || array_key_exists("problems_count", $context) ? $context["problems_count"] : (function () { throw new Twig_Error_Runtime('Variable "problems_count" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "</span></a>
                    ";
        // line 135
        echo "                    ";
        // line 136
        echo "                    ";
        // line 137
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "
              <!-- Website Overview -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading main-color-bg\">
                  <h3 class=\"panel-title\">Dorm Management</h3>
                </div>
                <div class=\"panel-body\">

                  <div class=\"col-md-4\">
                      <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_tech_problems");
        echo "\">
                        <div class=\"well dash-box blue card_outer\" >
                            <div class=\"card_inner\">
                                <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                <h4 class=\"left\"> Dorm Problems </h4>
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

    // line 187
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 188
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal_show.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 193
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/tech_pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 193,  501 => 191,  497 => 190,  493 => 189,  488 => 188,  479 => 187,  454 => 159,  443 => 150,  434 => 149,  424 => 137,  422 => 136,  420 => 135,  414 => 133,  409 => 130,  400 => 129,  387 => 94,  384 => 93,  375 => 92,  364 => 79,  355 => 78,  337 => 56,  331 => 53,  328 => 52,  319 => 51,  306 => 44,  302 => 43,  297 => 42,  288 => 41,  275 => 17,  271 => 16,  267 => 15,  263 => 14,  260 => 13,  251 => 12,  237 => 194,  235 => 187,  226 => 181,  217 => 174,  215 => 149,  212 => 148,  210 => 147,  207 => 146,  205 => 145,  196 => 138,  194 => 129,  186 => 123,  180 => 122,  173 => 120,  167 => 117,  164 => 116,  162 => 115,  159 => 114,  153 => 111,  150 => 110,  148 => 109,  145 => 108,  140 => 107,  136 => 106,  125 => 97,  123 => 92,  110 => 81,  108 => 78,  93 => 66,  89 => 64,  87 => 51,  81 => 47,  79 => 41,  72 => 36,  55 => 20,  53 => 12,  47 => 9,  37 => 1,);
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
          <a class=\"navbar-brand\" href=\"#\">EMDS
            {#<svg href=\"{{ asset('assets/images/edms.icon') }}\"></svg>#}
          </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">

          {% block navbar %}
              <li class=\"active\"><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
              <li><a href=\"{{ path('technical_problems') }}\">Tech Problems</a></li>
              <li><a href=\"{{ path('show_profile_tech') }}\">Profile</a></li>

          {% endblock %}
          </ul>

           <ul class=\"nav navbar-nav navbar-right\">

            {% block showUser %}
               <li>
                   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, {{ user.name }} <span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">

                       <li><img src=\"{{ asset('assets/person_images/'~user.image) }}\" class=\"avatar_image unselectable\"/></li>
                       <li><a href=\"#\" >Profile</a></li>
                       <li role=\"separator\" class=\"divider\"></li>
                       <li class=\"dropdown-header\">Account Options</li>

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
              <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Tech <small>Dorm Management System</small></h1>
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
                    <a href=\"{{ path('tech_tech_problems') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Dorm Problems <span class=\"badge\">{{ problems_count }}</span></a>
                    {#<a href=\"{{ path('dormitory_members') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">{{ members }}</span></a>#}
                    {#<a href=\"{{ path('events_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">{{ events }}</span></a>#}
                    {#<a href=\"{{ path('camera_show') }}\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>#}
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
                      <a href=\"{{ path('tech_tech_problems') }}\">
                        <div class=\"well dash-box blue card_outer\" >
                            <div class=\"card_inner\">
                                <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                <h4 class=\"left\"> Dorm Problems </h4>
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
", "@App/tech_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/index.html.twig");
    }
}
