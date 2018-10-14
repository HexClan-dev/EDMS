<?php

/* @App/director_pages/profile_show.html.twig */
class __TwigTemplate_783c42b48b350f11f793ed768d3f33bd6e8a1d08db73f162d49e3ddc126f6a31 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/profile_show.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'left_group' => array($this, 'block_left_group'),
            'page_title' => array($this, 'block_page_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/director_pages/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        // line 15
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
    <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>
";
    }

    // line 24
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 25
        echo "
    <li>/<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>

";
    }

    // line 32
    public function block_left_group($context, array $blocks = array())
    {
        // line 33
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
    }

    // line 46
    public function block_page_title($context, array $blocks = array())
    {
        // line 47
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Profile <small>Dorm Management System</small></h1>
";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "

    <div class=\"top-button-group\">

        ";
        // line 58
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_edit_profile");
        echo "\" class=\"button-style btn btn-success top-button\"><i class=\"glyphicon glyphicon-pencil\"></i> Edit</a>
    </div>



    <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
    </div>


    <div class=\"\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading main-color-bg\">

                <h3 class=\"panel-title\">User profile</h3>

            </div>
            <div class=\"panel-body\">

                <div class=\"row\">
                    <div class=\"col-md-4 text-center\">
                        <img class=\"img-circle avatar avatar-original\" style=\"-webkit-user-select:none;
  display:block; margin:auto;\"
                         ";
        // line 80
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 81
            echo "                             src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\"
                         ";
        } else {
            // line 83
            echo "                             src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\"
                         ";
        }
        // line 85
        echo "                        >
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"only-bottom-margin\">";
        // line 90
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()) . " ") . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array())), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <span class=\"text-muted\">Username:</span> ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Email:</span> ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Phone Nr.:</span> ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phoneNr", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Birth date:</span>";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthday", array()), "Y-m-d"), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Nationality:</span>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nationality", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">City:</span>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Address:</span>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Department:</span>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "department", array()), "html", null, true);
        echo "<br><br>
                                ";
        // line 104
        echo "                            </div>

                            ";
        // line 107
        echo "                                ";
        // line 108
        echo "                                    ";
        // line 109
        echo "                                ";
        // line 110
        echo "                                ";
        // line 111
        echo "                                    ";
        // line 112
        echo "                                ";
        // line 113
        echo "                            ";
        // line 114
        echo "                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/profile_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 114,  263 => 113,  261 => 112,  259 => 111,  257 => 110,  255 => 109,  253 => 108,  251 => 107,  247 => 104,  243 => 102,  239 => 101,  235 => 100,  231 => 99,  227 => 98,  223 => 97,  219 => 96,  215 => 95,  207 => 90,  200 => 85,  194 => 83,  188 => 81,  186 => 80,  160 => 58,  154 => 53,  151 => 52,  146 => 47,  143 => 46,  136 => 40,  130 => 39,  124 => 38,  118 => 37,  112 => 33,  109 => 32,  102 => 27,  98 => 26,  95 => 25,  92 => 24,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 15,  62 => 14,  55 => 10,  52 => 9,  46 => 6,  41 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/profile_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/profile_show.html.twig");
    }
}
