<?php

/* @App/tech_pages/index.html.twig */
class __TwigTemplate_3e6bcfea66813fa7d1c88542a2aac411c5651b3f20083153a2d49584c1ef94de extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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

      ";
    }

    // line 41
    public function block_navbar($context, array $blocks = array())
    {
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
    }

    // line 51
    public function block_showUser($context, array $blocks = array())
    {
        // line 52
        echo "               <li>
                   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                   <ul class=\"dropdown-menu\">

                       <li><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
        echo "\" class=\"avatar_image unselectable\"/></li>
                       <li><a href=\"#\" >Profile</a></li>
                       <li role=\"separator\" class=\"divider\"></li>
                       <li class=\"dropdown-header\">Account Options</li>

                   </ul>
               </li>
            ";
    }

    // line 78
    public function block_page_title($context, array $blocks = array())
    {
        // line 79
        echo "              <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Tech <small>Dorm Management System</small></h1>
            ";
    }

    // line 92
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 93
        echo "
            <li class=\"active\">/<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>

          ";
    }

    // line 129
    public function block_left_group($context, array $blocks = array())
    {
        // line 130
        echo "                    <a href=\"#\" class=\"list-group-item active main-color-bg\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                    </a>
                    <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_tech_problems");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Dorm Problems <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["problems_count"] ?? null), "html", null, true);
        echo "</span></a>
                    ";
        // line 135
        echo "                    ";
        // line 136
        echo "                    ";
        // line 137
        echo "                ";
    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 187
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  403 => 193,  399 => 191,  395 => 190,  391 => 189,  386 => 188,  383 => 187,  364 => 159,  353 => 150,  350 => 149,  346 => 137,  344 => 136,  342 => 135,  336 => 133,  331 => 130,  328 => 129,  321 => 94,  318 => 93,  315 => 92,  310 => 79,  307 => 78,  295 => 56,  289 => 53,  286 => 52,  283 => 51,  276 => 44,  272 => 43,  267 => 42,  264 => 41,  257 => 17,  253 => 16,  249 => 15,  245 => 14,  242 => 13,  239 => 12,  231 => 194,  229 => 187,  220 => 181,  211 => 174,  209 => 149,  206 => 148,  204 => 147,  201 => 146,  199 => 145,  190 => 138,  188 => 129,  180 => 123,  174 => 122,  167 => 120,  161 => 117,  158 => 116,  156 => 115,  153 => 114,  147 => 111,  144 => 110,  142 => 109,  139 => 108,  134 => 107,  130 => 106,  119 => 97,  117 => 92,  104 => 81,  102 => 78,  87 => 66,  83 => 64,  81 => 51,  75 => 47,  73 => 41,  66 => 36,  49 => 20,  47 => 12,  41 => 9,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/tech_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/index.html.twig");
    }
}
