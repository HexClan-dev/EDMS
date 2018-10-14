<?php

/* @App/assistant_pages/events.html.twig */
class __TwigTemplate_6118bee9c9209b5a41652b5fe209fed4a0cd81680e21dfeebe2fe65321809a27 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <!-- Bootstrap core CSS -->

    ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
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
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">EMDS
                ";
        // line 35
        echo "            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">

                ";
        // line 40
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "            </ul>

            <ul class=\"nav navbar-nav navbar-right\">

                ";
        // line 52
        $this->displayBlock('showUser', $context, $blocks);
        // line 68
        echo "

                <li><a href=\"";
        // line 70
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
        // line 81
        $this->displayBlock('page_title', $context, $blocks);
        // line 84
        echo "            </div>

        </div>
    </div>
</header>



<section id=\"breadcrumb\">
    <div class=\"container\">
        <ol class=\"breadcrumb\">

            ";
        // line 96
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 101
        echo "        </ol>
    </div>
</section>

<section id=\"main\">


    <div class=\"container\">
        <div class=\"\" id=\"messages\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 111
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 112
                echo "
                    ";
                // line 113
                if (($context["type"] == "success")) {
                    // line 114
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                            ";
                    // line 115
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 118
                echo "
                    ";
                // line 119
                if (($context["type"] == "failure")) {
                    // line 120
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                            ";
                    // line 121
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 124
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"list-group\">

                    ";
        // line 133
        $this->displayBlock('left_group', $context, $blocks);
        // line 142
        echo "
                </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 149
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/assistant_pages/events.html.twig", 149)->display($context);
        // line 150
        echo "
                ";
        // line 151
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/assistant_pages/events.html.twig", 151)->display($context);
        // line 152
        echo "








                ";
        // line 161
        $this->displayBlock('body', $context, $blocks);
        // line 253
        echo "























        </div>
    </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 284
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 291
        $this->displayBlock('javascript', $context, $blocks);
        // line 296
        echo "
</body>
</html>
";
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 12
        echo "
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/director_styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/homepage_blocks.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
    }

    // line 40
    public function block_navbar($context, array $blocks = array())
    {
        // line 41
        echo "                    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>
                    <li class=\"active\"><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">Tech Problems</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>
                ";
    }

    // line 52
    public function block_showUser($context, array $blocks = array())
    {
        // line 53
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 57
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 58
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 60
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 62
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 64
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
    }

    // line 81
    public function block_page_title($context, array $blocks = array())
    {
        // line 82
        echo "                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                ";
    }

    // line 96
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 97
        echo "
                <li class=\"active\">/<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>

            ";
    }

    // line 133
    public function block_left_group($context, array $blocks = array())
    {
        // line 134
        echo "                        <a href=\"#\" class=\"list-group-item active main-color-bg\">
                            <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                        </a>
                        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["performance"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Technical Problem <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["tech"] ?? null), "html", null, true);
        echo "</span></a>
                    ";
    }

    // line 161
    public function block_body($context, array $blocks = array())
    {
        // line 162
        echo "
                    <div class=\"top-button-group\">
                        <a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_event");
        echo "\" class=\"button-style btn btn-success top-button\">Create an event</a>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading main-color-bg\">
                            <h3 class=\"panel-title\">Your created events</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Problems...\">
                                </div>
                            </div>
                            <br>
                            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                                <tr>
                                    <th>Description</th>
                                    <th>Place</th>
                                    <th>Date</th>
                                    <th>Hour</th>
                                    <th>Confirmation</th>
                                </tr>

                                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["event"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 188
            echo "                                    ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "y-M-d h:m") > twig_date_format_filter($this->env, "now", "y-M-d h:m"))) {
                // line 189
                echo "                                    <tr>
                                        <td>";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 192
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "Y-M-d "), "html", null, true);
                echo "</td>
                                        <td>";
                // line 193
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), " h :sa "), "html", null, true);
                echo "</td>
                                        <td>

                                            ";
                // line 196
                if (twig_get_attribute($this->env, $this->source, $context["row"], "isConfirmed", array())) {
                    // line 197
                    echo "                                                <span class=\"btn-form btn-sm btn-success\">Accepted</span>
                                            ";
                } else {
                    // line 199
                    echo "                                                <span class=\"btn-form btn-sm btn-danger\">Rejected</span>
                                            ";
                }
                // line 201
                echo "                                        </td>
                                    </tr>
                                    ";
            }
            // line 204
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
                            </table>
                        </div>
                    </div>







                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading main-color-bg\">
                            <h3 class=\"panel-title\">Events With Your Participation</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input id=\"tech-pending-search\" class=\"form-control\" type=\"text\" placeholder=\"Filter Invitations...\">
                                </div>
                            </div>
                            <br>
                            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                                <tr>
                                    <th>E. Manager</th>
                                    <th>Description</th>
                                    <th>Place</th>
                                    <th>Date</th>
                                </tr>

                                ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["event"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 237
            echo "                                    <tr>
                                        <td>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "eventmanager", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 241
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", array()), "y-M-d h:m"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "
                            </table>
                        </div>
                    </div>




                ";
    }

    // line 291
    public function block_javascript($context, array $blocks = array())
    {
        // line 292
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 294,  584 => 293,  579 => 292,  576 => 291,  564 => 244,  555 => 241,  551 => 240,  547 => 239,  543 => 238,  540 => 237,  536 => 236,  503 => 205,  497 => 204,  492 => 201,  488 => 199,  484 => 197,  482 => 196,  476 => 193,  472 => 192,  468 => 191,  464 => 190,  461 => 189,  458 => 188,  454 => 187,  428 => 164,  424 => 162,  421 => 161,  413 => 140,  407 => 139,  401 => 138,  395 => 137,  390 => 134,  387 => 133,  380 => 98,  377 => 97,  374 => 96,  369 => 82,  366 => 81,  358 => 64,  354 => 62,  348 => 60,  342 => 58,  340 => 57,  334 => 54,  331 => 53,  328 => 52,  322 => 46,  318 => 45,  314 => 44,  310 => 43,  306 => 42,  301 => 41,  298 => 40,  291 => 16,  287 => 15,  283 => 14,  279 => 13,  276 => 12,  273 => 11,  266 => 296,  264 => 291,  254 => 284,  221 => 253,  219 => 161,  208 => 152,  206 => 151,  203 => 150,  201 => 149,  192 => 142,  190 => 133,  182 => 127,  176 => 126,  169 => 124,  163 => 121,  160 => 120,  158 => 119,  155 => 118,  149 => 115,  146 => 114,  144 => 113,  141 => 112,  136 => 111,  132 => 110,  121 => 101,  119 => 96,  105 => 84,  103 => 81,  89 => 70,  85 => 68,  83 => 52,  77 => 48,  75 => 40,  68 => 35,  64 => 33,  48 => 19,  46 => 11,  40 => 8,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/assistant_pages/events.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/events.html.twig");
    }
}
