<?php

/* @App/finance_pages/index.html.twig */
class __TwigTemplate_d6086c61984e71c032a289cc773b5ab791c4e7e85bf0c7f41a00f088feeea43b extends Twig_Template
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
        // line 23
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
            <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">EMDS
                ";
        // line 39
        echo "            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">

                ";
        // line 44
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "            </ul>

            <ul class=\"nav navbar-nav navbar-right\">

                ";
        // line 54
        $this->displayBlock('showUser', $context, $blocks);
        // line 70
        echo "

                <li><a href=\"";
        // line 72
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
        // line 83
        $this->displayBlock('page_title', $context, $blocks);
        // line 86
        echo "            </div>

        </div>
    </div>
</header>



<section id=\"breadcrumb\">
    <div class=\"container\">
        <ol class=\"breadcrumb\">

            ";
        // line 98
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 105
        echo "        </ol>
    </div>
</section>

<section id=\"main\">


    <div class=\"container\">
        <div class=\"\" id=\"messages\">
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 115
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 116
                echo "
                    ";
                // line 117
                if (($context["type"] == "success")) {
                    // line 118
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                            ";
                    // line 119
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 122
                echo "
                    ";
                // line 123
                if (($context["type"] == "failure")) {
                    // line 124
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                            ";
                    // line 125
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 128
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"list-group\">

                    ";
        // line 137
        $this->displayBlock('left_group', $context, $blocks);
        // line 147
        echo "
                </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 154
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/finance_pages/index.html.twig", 154)->display($context);
        // line 155
        echo "
                ";
        // line 156
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/finance_pages/index.html.twig", 156)->display($context);
        // line 157
        echo "
                ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "        </div>
    </div>


</section>

<footer id=\"footer\">
    <p>Copyright EDMS &copy; ";
        // line 217
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 224
        $this->displayBlock('javascript', $context, $blocks);
        // line 231
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
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    ";
    }

    // line 44
    public function block_navbar($context, array $blocks = array())
    {
        // line 45
        echo "                    <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\">Students</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">Profile</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_payments");
        echo "\">Payments</a></li>
                ";
    }

    // line 54
    public function block_showUser($context, array $blocks = array())
    {
        // line 55
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 59
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 60
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 62
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 64
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 66
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
    }

    // line 83
    public function block_page_title($context, array $blocks = array())
    {
        // line 84
        echo "                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Finance <small>Dorm Management System</small></h1>
                ";
    }

    // line 98
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 99
        echo "
                <li class=\"active\">/<a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\">Home</a></li>
                ";
        // line 102
        echo "                ";
        // line 103
        echo "
            ";
    }

    // line 137
    public function block_left_group($context, array $blocks = array())
    {
        // line 138
        echo "                        <a href=\"#\" class=\"list-group-item active main-color-bg\">
                            <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                        </a>
                        <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Home <span class=\"badge\"></span></a>
                        ";
        // line 143
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> students <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_payments");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span> Payments <span class=\"badge\"></span></a>
                        <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Profile <span class=\"badge\"></span></a>
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
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\">Students</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_payments");
        echo "\">
                                <div class=\"well dash-box blue card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-euro\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\">Show Payments</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
                                <div class=\"well dash-box green card_outer\" >
                                    <div class=\"card_inner\">
                                        <span class=\"img_icon left glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                        <h4 class=\"left\"> Profile</h4>
                                    </div>
                                </div>
                            </a>
                        </div>




                    </div>
                </div>

            </div>
            ";
    }

    // line 224
    public function block_javascript($context, array $blocks = array())
    {
        // line 225
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal_show.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 230
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@App/finance_pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 230,  470 => 228,  466 => 227,  462 => 226,  457 => 225,  454 => 224,  432 => 192,  418 => 181,  404 => 170,  391 => 159,  388 => 158,  382 => 145,  378 => 144,  371 => 143,  367 => 141,  362 => 138,  359 => 137,  354 => 103,  352 => 102,  348 => 100,  345 => 99,  342 => 98,  337 => 84,  334 => 83,  326 => 66,  322 => 64,  316 => 62,  310 => 60,  308 => 59,  302 => 56,  299 => 55,  296 => 54,  290 => 48,  286 => 47,  282 => 46,  277 => 45,  274 => 44,  266 => 19,  262 => 18,  258 => 17,  254 => 16,  250 => 15,  246 => 14,  243 => 13,  240 => 12,  232 => 231,  230 => 224,  220 => 217,  211 => 210,  209 => 158,  206 => 157,  204 => 156,  201 => 155,  199 => 154,  190 => 147,  188 => 137,  180 => 131,  174 => 130,  167 => 128,  161 => 125,  158 => 124,  156 => 123,  153 => 122,  147 => 119,  144 => 118,  142 => 117,  139 => 116,  134 => 115,  130 => 114,  119 => 105,  117 => 98,  103 => 86,  101 => 83,  87 => 72,  83 => 70,  81 => 54,  75 => 50,  73 => 44,  66 => 39,  49 => 23,  47 => 12,  41 => 9,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/finance_pages/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/finance_pages/index.html.twig");
    }
}
