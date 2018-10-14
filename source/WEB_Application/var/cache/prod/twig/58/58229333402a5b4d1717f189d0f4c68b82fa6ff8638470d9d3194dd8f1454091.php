<?php

/* @App/assistant_pages/newEvent.html.twig */
class __TwigTemplate_3ee3b88b6837c2314e1e989b0494931edbdca6c388b8a4b42dd32212a8dd8b95 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                        <div class=\"form-group\">
                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "place", array()), 'row');
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "event_manager", array()), 'row');
        echo "
                        </div>

                        <button type=\"submit\" class=\"button-style btn btn-success\"> Create event </button>


                        ";
        // line 184
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 35
    public function block_navbar($context, array $blocks = array())
    {
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
    }

    // line 48
    public function block_showUser($context, array $blocks = array())
    {
        // line 49
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 53
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 54
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 56
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 58
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
    }

    // line 77
    public function block_page_title($context, array $blocks = array())
    {
        // line 78
        echo "                        <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                    ";
    }

    // line 92
    public function block_breadcrumb($context, array $blocks = array())
    {
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
    }

    // line 130
    public function block_left_group($context, array $blocks = array())
    {
        // line 131
        echo "                            <a href=\"#\" class=\"list-group-item active main-color-bg\">
                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                            </a>
                            <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
                            <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
                            <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["performance"] ?? null), "html", null, true);
        echo "</span></a>
                            <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Technical Problem <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["tech"] ?? null), "html", null, true);
        echo "</span></a>
                        ";
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
        return array (  455 => 137,  449 => 136,  443 => 135,  437 => 134,  432 => 131,  429 => 130,  422 => 95,  418 => 94,  415 => 93,  412 => 92,  407 => 78,  404 => 77,  396 => 60,  392 => 58,  386 => 56,  380 => 54,  378 => 53,  372 => 50,  369 => 49,  366 => 48,  360 => 41,  356 => 40,  352 => 39,  348 => 38,  344 => 37,  339 => 36,  336 => 35,  329 => 13,  325 => 12,  321 => 11,  317 => 10,  314 => 9,  311 => 8,  304 => 215,  300 => 213,  296 => 212,  292 => 211,  288 => 210,  277 => 202,  256 => 184,  247 => 178,  240 => 174,  233 => 170,  226 => 166,  220 => 163,  207 => 153,  201 => 149,  199 => 148,  196 => 147,  194 => 146,  185 => 139,  183 => 130,  175 => 124,  169 => 123,  162 => 121,  156 => 118,  153 => 117,  151 => 116,  148 => 115,  142 => 112,  139 => 111,  137 => 110,  134 => 109,  129 => 108,  125 => 107,  114 => 98,  112 => 92,  98 => 80,  96 => 77,  82 => 66,  78 => 64,  76 => 48,  69 => 43,  67 => 35,  58 => 29,  43 => 16,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/assistant_pages/newEvent.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/newEvent.html.twig");
    }
}
