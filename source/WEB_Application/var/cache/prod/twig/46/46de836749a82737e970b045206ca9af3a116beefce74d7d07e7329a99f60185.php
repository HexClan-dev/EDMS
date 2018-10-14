<?php

/* @App/director_pages/index.html.twig */
class __TwigTemplate_4d760b02c1a7566d3d1b6af5c91b96ed940d9661c8a0831aa261420227c7ecea extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>


<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 43
    public function block_navbar($context, array $blocks = array())
    {
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
    }

    // line 55
    public function block_showUser($context, array $blocks = array())
    {
        // line 56
        echo "               <li>
                   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">
                       <li class=\"active\">
                            ";
        // line 60
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 61
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                            ";
        } else {
            // line 63
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                            ";
        }
        // line 65
        echo "                       </li>
                       <li role=\"separator\" class=\"divider\"></li>
                       <li class=\"dropdown-header\">";
        // line 67
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
                   </ul>
               </li>
            ";
    }

    // line 84
    public function block_page_title($context, array $blocks = array())
    {
        // line 85
        echo "              <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Director <small>Dorm Management System</small></h1>



            ";
    }

    // line 101
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 102
        echo "
            <li class=\"active\">/<a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>

          ";
    }

    // line 138
    public function block_left_group($context, array $blocks = array())
    {
        // line 139
        echo "                    <a href=\"#\" class=\"list-group-item active main-color-bg\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                    </a>
                    <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
                    <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
                    <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
                    <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>
                ";
    }

    // line 158
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 248
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  508 => 254,  504 => 252,  500 => 251,  496 => 250,  491 => 249,  488 => 248,  468 => 218,  454 => 207,  438 => 194,  421 => 180,  405 => 167,  395 => 159,  392 => 158,  386 => 145,  380 => 144,  374 => 143,  368 => 142,  363 => 139,  360 => 138,  353 => 103,  350 => 102,  347 => 101,  339 => 85,  336 => 84,  328 => 67,  324 => 65,  318 => 63,  312 => 61,  310 => 60,  304 => 57,  301 => 56,  298 => 55,  292 => 49,  288 => 48,  284 => 47,  280 => 46,  276 => 45,  271 => 44,  268 => 43,  260 => 18,  256 => 17,  252 => 16,  248 => 15,  244 => 14,  241 => 13,  238 => 12,  230 => 255,  228 => 248,  218 => 241,  209 => 234,  207 => 158,  204 => 157,  202 => 156,  199 => 155,  197 => 154,  188 => 147,  186 => 138,  178 => 132,  172 => 131,  165 => 129,  159 => 126,  156 => 125,  154 => 124,  151 => 123,  145 => 120,  142 => 119,  140 => 118,  137 => 117,  132 => 116,  128 => 115,  117 => 106,  115 => 101,  102 => 90,  100 => 84,  86 => 73,  82 => 71,  80 => 55,  74 => 51,  72 => 43,  49 => 22,  47 => 12,  41 => 9,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/index.html.twig");
    }
}
