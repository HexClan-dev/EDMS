<?php

/* @App/assistant_pages/performances.html.twig */
class __TwigTemplate_1f7a1e7dbd571d10aadb236e80359b3f46b3be5a8b63be47c8f48590fee47c32 extends Twig_Template
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
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        echo "            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">

                ";
        // line 39
        $this->displayBlock('navbar', $context, $blocks);
        // line 47
        echo "            </ul>

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
        echo "            </div>

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
        echo "        </ol>
    </div>
</section>

<section id=\"main\">


    <div class=\"container\">
        <div class=\"\" id=\"messages\">
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 110
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 111
                echo "
                    ";
                // line 112
                if (($context["type"] == "success")) {
                    // line 113
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
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
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
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
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        </div>

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
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/assistant_pages/performances.html.twig", 148)->display($context);
        // line 149
        echo "
                ";
        // line 150
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/assistant_pages/performances.html.twig", 150)->display($context);
        // line 151
        echo "

                ";
        // line 153
        $this->displayBlock('body', $context, $blocks);
        // line 236
        echo "            </div>
        </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 243
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 250
        $this->displayBlock('javascript', $context, $blocks);
        // line 255
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 39
    public function block_navbar($context, array $blocks = array())
    {
        // line 40
        echo "                    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                    <li><a href=\"";
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
                    <li class=\"active\"><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
                    <li ><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>
                ";
    }

    // line 51
    public function block_showUser($context, array $blocks = array())
    {
        // line 52
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 56
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 57
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 59
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 61
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 63
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
    }

    // line 80
    public function block_page_title($context, array $blocks = array())
    {
        // line 81
        echo "                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                ";
    }

    // line 95
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 96
        echo "                <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                <li class=\"active\">/<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>

            ";
    }

    // line 132
    public function block_left_group($context, array $blocks = array())
    {
        // line 133
        echo "                        <a href=\"#\" class=\"list-group-item active main-color-bg\">
                            <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                        </a>
                        <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["performance"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Technical Problem <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["tech"] ?? null), "html", null, true);
        echo "</span></a>
                    ";
    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        // line 154
        echo "                    ";
        // line 155
        echo "                        ";
        // line 156
        echo "                    ";
        // line 157
        echo "
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading main-color-bg\">
                            <h3 class=\"panel-title\">Your reported performances</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Performances...\">
                                </div>
                            </div>
                            <br>
                            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                                <tr>
                                    <th>Student</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Assigned Date</th>
                                    <th></th>
                                </tr>

                                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myPerformance"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 180
            echo "                                    <tr>
                                        <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "student", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 184
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "dateAssigned", array()), "d-M-Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn-form btn-sm btn-success\">Edit</a>
                                            <a class=\"btn-form btn-sm btn-danger\">Delete</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
                            </table>
                        </div>
                    </div>



                    ";
        // line 199
        echo "                        ";
        // line 200
        echo "                            ";
        // line 201
        echo "                        ";
        // line 202
        echo "                        ";
        // line 203
        echo "                            ";
        // line 204
        echo "                                ";
        // line 205
        echo "                                    ";
        // line 206
        echo "                                ";
        // line 207
        echo "                            ";
        // line 208
        echo "                            ";
        // line 209
        echo "                            ";
        // line 210
        echo "
                                ";
        // line 212
        echo "                                    ";
        // line 213
        echo "                                    ";
        // line 214
        echo "                                    ";
        // line 215
        echo "                                    ";
        // line 216
        echo "                                    ";
        // line 217
        echo "                                ";
        // line 218
        echo "
                                ";
        // line 220
        echo "                                    ";
        // line 221
        echo "                                        ";
        // line 222
        echo "                                        ";
        // line 223
        echo "                                        ";
        // line 224
        echo "                                        ";
        // line 225
        echo "                                        ";
        // line 226
        echo "                                    ";
        // line 227
        echo "                                ";
        // line 228
        echo "
                            ";
        // line 230
        echo "                        ";
        // line 231
        echo "                    ";
        // line 232
        echo "


                ";
    }

    // line 250
    public function block_javascript($context, array $blocks = array())
    {
        // line 251
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/performances.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 253,  543 => 252,  538 => 251,  535 => 250,  528 => 232,  526 => 231,  524 => 230,  521 => 228,  519 => 227,  517 => 226,  515 => 225,  513 => 224,  511 => 223,  509 => 222,  507 => 221,  505 => 220,  502 => 218,  500 => 217,  498 => 216,  496 => 215,  494 => 214,  492 => 213,  490 => 212,  487 => 210,  485 => 209,  483 => 208,  481 => 207,  479 => 206,  477 => 205,  475 => 204,  473 => 203,  471 => 202,  469 => 201,  467 => 200,  465 => 199,  456 => 191,  443 => 184,  439 => 183,  435 => 182,  431 => 181,  428 => 180,  424 => 179,  400 => 157,  398 => 156,  396 => 155,  394 => 154,  391 => 153,  383 => 139,  377 => 138,  371 => 137,  365 => 136,  360 => 133,  357 => 132,  350 => 97,  345 => 96,  342 => 95,  337 => 81,  334 => 80,  326 => 63,  322 => 61,  316 => 59,  310 => 57,  308 => 56,  302 => 53,  299 => 52,  296 => 51,  290 => 45,  286 => 44,  282 => 43,  278 => 42,  274 => 41,  269 => 40,  266 => 39,  259 => 15,  255 => 14,  251 => 13,  247 => 12,  244 => 11,  241 => 10,  234 => 255,  232 => 250,  222 => 243,  213 => 236,  211 => 153,  207 => 151,  205 => 150,  202 => 149,  200 => 148,  191 => 141,  189 => 132,  181 => 126,  175 => 125,  168 => 123,  162 => 120,  159 => 119,  157 => 118,  154 => 117,  148 => 114,  145 => 113,  143 => 112,  140 => 111,  135 => 110,  131 => 109,  120 => 100,  118 => 95,  104 => 83,  102 => 80,  88 => 69,  84 => 67,  82 => 51,  76 => 47,  74 => 39,  67 => 34,  63 => 32,  47 => 18,  45 => 10,  39 => 7,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/assistant_pages/performances.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/performances.html.twig");
    }
}
