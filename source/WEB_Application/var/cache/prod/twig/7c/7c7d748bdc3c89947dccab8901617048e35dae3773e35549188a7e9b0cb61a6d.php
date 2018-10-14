<?php

/* @App/assistant_pages/index.html.twig */
class __TwigTemplate_e685af31251124ccc155a649c09f52e232d40e8aabcf159c397a121da291958b extends Twig_Template
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
            </a>
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
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/assistant_pages/index.html.twig", 148)->display($context);
        // line 149
        echo "
                ";
        // line 150
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/assistant_pages/index.html.twig", 150)->display($context);
        // line 151
        echo "
                ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 219
        echo "        </div>
    </div>

</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 225
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 232
        $this->displayBlock('javascript', $context, $blocks);
        // line 239
        echo "
</body>

</html>
";
    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 13
        echo "        <link href=\"";
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
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 39
    public function block_navbar($context, array $blocks = array())
    {
        // line 40
        echo "                    <li class=\"active\"><a href=\"";
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
                    <li><a href=\"";
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

    // line 152
    public function block_body($context, array $blocks = array())
    {
        // line 153
        echo "
                <!-- Website Overview -->
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading main-color-bg\">
                        <h3 class=\"panel-title\">Dashboard</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Students </h4>
                                    </div>
                                </div>
                            </a>
                        </div>



                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
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
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_tech_problem");
        echo "\">
                                <div class=\"well dash-box lightgreen card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-wrench\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Technical-</h4> <h4 class=\"left\"> Problems </h4>
                                    </div>
                                </div>
                            </a>
                        </div>



                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">
                                <div class=\"well dash-box green card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Events </h4>
                                    </div>
                                </div>
                            </a>
                        </div>




                    </div>
                </div>

            </div>
            ";
    }

    // line 232
    public function block_javascript($context, array $blocks = array())
    {
        // line 233
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal_show.js"), "html", null, true);
        echo "\"></script>
      ";
    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 236,  482 => 235,  478 => 234,  473 => 233,  470 => 232,  448 => 201,  432 => 188,  415 => 174,  399 => 161,  389 => 153,  386 => 152,  378 => 139,  372 => 138,  366 => 137,  360 => 136,  355 => 133,  352 => 132,  345 => 97,  342 => 96,  339 => 95,  334 => 81,  331 => 80,  323 => 63,  319 => 61,  313 => 59,  307 => 57,  305 => 56,  299 => 53,  296 => 52,  293 => 51,  287 => 45,  283 => 44,  279 => 43,  275 => 42,  271 => 41,  266 => 40,  263 => 39,  257 => 17,  253 => 16,  249 => 15,  245 => 14,  240 => 13,  237 => 12,  229 => 239,  227 => 232,  217 => 225,  209 => 219,  207 => 152,  204 => 151,  202 => 150,  199 => 149,  197 => 148,  188 => 141,  186 => 132,  178 => 126,  172 => 125,  165 => 123,  159 => 120,  156 => 119,  154 => 118,  151 => 117,  145 => 114,  142 => 113,  140 => 112,  137 => 111,  132 => 110,  128 => 109,  117 => 100,  115 => 95,  101 => 83,  99 => 80,  85 => 69,  81 => 67,  79 => 51,  73 => 47,  71 => 39,  49 => 19,  47 => 12,  41 => 9,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/assistant_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/index.html.twig");
    }
}
