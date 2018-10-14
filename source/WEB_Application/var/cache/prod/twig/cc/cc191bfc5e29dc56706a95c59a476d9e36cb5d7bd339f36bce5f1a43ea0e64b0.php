<?php

/* @App/assistant_pages/report_tech_problem.html.twig */
class __TwigTemplate_82c756486e022f794cb284acbcaf5ca0778f8a38ee676dae9e3eaadd24c85817 extends Twig_Template
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
            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">

                ";
        // line 38
        $this->displayBlock('navbar', $context, $blocks);
        // line 46
        echo "            </ul>

            <ul class=\"nav navbar-nav navbar-right\">

                ";
        // line 50
        $this->displayBlock('showUser', $context, $blocks);
        // line 66
        echo "

                <li><a href=\"";
        // line 68
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
        // line 79
        $this->displayBlock('page_title', $context, $blocks);
        // line 82
        echo "            </div>

        </div>
    </div>
</header>



<section id=\"breadcrumb\">
    <div class=\"container\">
        <ol class=\"breadcrumb\">

            ";
        // line 94
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 99
        echo "        </ol>
    </div>
</section>

<section id=\"main\">


    <div class=\"container\">
        <div class=\"\" id=\"messages\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 109
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 110
                echo "
                    ";
                // line 111
                if (($context["type"] == "success")) {
                    // line 112
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                            ";
                    // line 113
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 116
                echo "
                    ";
                // line 117
                if (($context["type"] == "failure")) {
                    // line 118
                    echo "                        <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"list-group\">

                    ";
        // line 131
        $this->displayBlock('left_group', $context, $blocks);
        // line 140
        echo "
                </div>


            </div>
            <div class=\"col-md-9\">

                ";
        // line 147
        $this->loadTemplate("@App/director_pages/modal_view.html.twig", "@App/assistant_pages/report_tech_problem.html.twig", 147)->display($context);
        // line 148
        echo "
                ";
        // line 149
        $this->loadTemplate("@App/director_pages/modal_show_image.html.twig", "@App/assistant_pages/report_tech_problem.html.twig", 149)->display($context);
        // line 150
        echo "

                ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 243
        echo "

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

    // line 38
    public function block_navbar($context, array $blocks = array())
    {
        // line 39
        echo "                    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>
                    <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
                    <li class=\"active\"><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">Tech Problems</a></li>
                    <li ><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
                    <li ><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
        echo "\">Profile</a></li>
                ";
    }

    // line 50
    public function block_showUser($context, array $blocks = array())
    {
        // line 51
        echo "                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"active\">
                                ";
        // line 55
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 56
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        } else {
            // line 58
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                                ";
        }
        // line 60
        echo "                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">";
        // line 62
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
                        </ul>
                    </li>
                ";
    }

    // line 79
    public function block_page_title($context, array $blocks = array())
    {
        // line 80
        echo "                    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Welcome Assistant <small>Dorm Management System</small></h1>
                ";
    }

    // line 94
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 95
        echo "                <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
                <li class=\"active\">/<a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">TechProblem</a></li>

            ";
    }

    // line 131
    public function block_left_group($context, array $blocks = array())
    {
        // line 132
        echo "                        <a href=\"#\" class=\"list-group-item active main-color-bg\">
                            <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
                        </a>
                        <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["performance"] ?? null), "html", null, true);
        echo "</span></a>
                        <a href=\"";
        // line 138
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
    <div>
        <h3 class=\"title-application\">Technical Problems</h3>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Pending Problems <i>(Confirmed by Tech staff)</i></h3>
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
                    <th>Problem</th>
                    <th>Description</th>
                    <th>Place</th>
                    <th>Status</th>
                </tr>

                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pending"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 179
            echo "                    <tr>
                        <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td><span class=\"btn-form btn-sm btn-warning\">";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "status", array()), "html", null, true);
            echo "</span></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
            </table>
        </div>
    </div>



    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Fixed Problems</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <input id=\"tech-fixed-search\"  class=\"form-control\" type=\"text\" placeholder=\"Filter Problems...\">
                </div>
            </div>
            <br>
            <table id=\"tech-fixed-show\" class=\"table table-striped table-hover\">

                <tr>
                    <th>Problem</th>
                    <th>Description</th>
                    <th>Place</th>
                    <th>Status</th>
                    <th>Confirmation</th>
                </tr>


                ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fixed_problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 216
            echo "                    <tr>
                        <td>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>
                            <span class=\"btn-form btn-sm btn-success\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "status", array()), "html", null, true);
            echo "</span>
                        </td>
                        <td>

                            ";
            // line 225
            if (twig_get_attribute($this->env, $this->source, $context["row"], "confirmed", array())) {
                // line 226
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("approve_problem", array("techProblems" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-form btn-sm btn-danger\">Unconfirm</a>
                            ";
            } else {
                // line 228
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("approve_problem", array("techProblems" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-form btn-sm btn-success\">Confirm</a>
                            ";
            }
            // line 230
            echo "
                        </td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/report_tech_problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 236,  496 => 230,  490 => 228,  484 => 226,  482 => 225,  475 => 221,  470 => 219,  466 => 218,  462 => 217,  459 => 216,  455 => 215,  424 => 186,  415 => 183,  411 => 182,  407 => 181,  403 => 180,  400 => 179,  396 => 178,  369 => 153,  366 => 152,  358 => 138,  352 => 137,  346 => 136,  340 => 135,  335 => 132,  332 => 131,  325 => 96,  320 => 95,  317 => 94,  312 => 80,  309 => 79,  301 => 62,  297 => 60,  291 => 58,  285 => 56,  283 => 55,  277 => 52,  274 => 51,  271 => 50,  265 => 44,  261 => 43,  257 => 42,  253 => 41,  249 => 40,  244 => 39,  241 => 38,  234 => 15,  230 => 14,  226 => 13,  222 => 12,  219 => 11,  216 => 10,  210 => 243,  208 => 152,  204 => 150,  202 => 149,  199 => 148,  197 => 147,  188 => 140,  186 => 131,  178 => 125,  172 => 124,  165 => 122,  159 => 119,  156 => 118,  154 => 117,  151 => 116,  145 => 113,  142 => 112,  140 => 111,  137 => 110,  132 => 109,  128 => 108,  117 => 99,  115 => 94,  101 => 82,  99 => 79,  85 => 68,  81 => 66,  79 => 50,  73 => 46,  71 => 38,  62 => 32,  46 => 18,  44 => 10,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/assistant_pages/report_tech_problem.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/report_tech_problem.html.twig");
    }
}
