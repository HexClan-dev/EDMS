<?php

/* @App/student_page/index.html.twig */
class __TwigTemplate_2ccdadeb99bf7c2a90a3caf706598818b3d84c671df241e2da64314a950d8aa2 extends Twig_Template
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
            <a class=\"navbar-brand\" href=\"#\">EMDS
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
        // line 53
        $this->displayBlock('showUser', $context, $blocks);
        // line 69
        echo "                <li><a href=\"";
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
                echo "                    ";
                if (($context["type"] == "success")) {
                    // line 112
                    echo "                        <div class=\"messages alert alert-success\" role=\"alert\">
                            ";
                    // line 113
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
                    echo "                        <div class=\"messages alert alert-danger\" role=\"alert\">
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
        // line 144
        echo "                </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 150
        $this->displayBlock('body', $context, $blocks);
        // line 225
        echo "        </div>
    </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 232
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 239
        $this->displayBlock('javascript', $context, $blocks);
        // line 244
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
        echo "
                    <li class=\"active\"><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">Assistants</a></li>
                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">Report a problem</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\">View Payments</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">Profile</a></li>
                ";
    }

    // line 53
    public function block_showUser($context, array $blocks = array())
    {
        // line 54
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 58
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 59
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 61
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 63
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 65
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
        echo "                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Student <small>Dorm Management System</small></h1>
                ";
    }

    // line 95
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 96
        echo "
                <li class=\"active\">/<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_events_stud");
        echo "\" class=\"list-group-item\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>  Events <span class=\"badge\">";
        // line 137
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span>
                        </a>
                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Problem Report </a>
                        <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Assistants </a>
                        <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span> Payments </a>

                    ";
    }

    // line 150
    public function block_body($context, array $blocks = array())
    {
        // line 151
        echo "
                <!-- Website Overview -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading main-color-bg\">
                        <h3 class=\"panel-title\">Dashboard</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Assistants Info</h4>
                                    </div>
                                </div>
                            </a>
                        </div>



                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">
                                <div class=\"well dash-box red card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-record\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Problem Report</h4>
                                    </div>
                                </div>
                            </a>
                        </div>




                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\">
                                <div class=\"well dash-box lightgreen card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Payments</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">
                                <div class=\"well dash-box green card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Profile</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_events_stud");
        echo "\">
                                <div class=\"well dash-box green card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Events</h4>
                                    </div>
                                </div>
                            </a>
                        </div>



                    </div>
                </div>

            </div>
            ";
    }

    // line 239
    public function block_javascript($context, array $blocks = array())
    {
        // line 240
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@App/student_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 242,  472 => 241,  467 => 240,  464 => 239,  443 => 208,  429 => 197,  415 => 186,  398 => 172,  382 => 159,  372 => 151,  369 => 150,  362 => 141,  358 => 140,  354 => 139,  349 => 137,  345 => 136,  340 => 133,  337 => 132,  330 => 97,  327 => 96,  324 => 95,  319 => 81,  316 => 80,  308 => 65,  304 => 63,  298 => 61,  292 => 59,  290 => 58,  284 => 55,  281 => 54,  278 => 53,  272 => 46,  268 => 45,  264 => 44,  260 => 43,  256 => 42,  253 => 41,  250 => 40,  243 => 16,  239 => 15,  235 => 14,  231 => 13,  228 => 12,  225 => 11,  217 => 244,  215 => 239,  205 => 232,  196 => 225,  194 => 150,  186 => 144,  184 => 132,  176 => 126,  170 => 125,  163 => 123,  157 => 120,  154 => 119,  152 => 118,  149 => 117,  142 => 113,  139 => 112,  136 => 111,  131 => 110,  127 => 109,  116 => 100,  114 => 95,  100 => 83,  98 => 80,  83 => 69,  81 => 53,  74 => 48,  72 => 40,  65 => 35,  48 => 19,  46 => 11,  40 => 8,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/index.html.twig");
    }
}
