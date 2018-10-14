<?php

/* @App/student_page/profile.html.twig */
class __TwigTemplate_d3ae758f22f556824a5a95b2167fc678d98d4a279acd288bf875004ad63b66c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/student_page/index.html.twig", "@App/student_page/profile.html.twig", 2);
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
        return "@App/student_page/index.html.twig";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">Report a problem</a></li>
    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\">View Payments</a></li>
    <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">Profile</a></li>
";
    }

    // line 23
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 24
        echo "
    <li>/<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Student</a></li>
    <li class=\"active\">/<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">Profile</a></li>

";
    }

    // line 31
    public function block_left_group($context, array $blocks = array())
    {
        // line 32
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Problem Report </a>
    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Assistants </a>
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span> Payments </a>

";
    }

    // line 44
    public function block_page_title($context, array $blocks = array())
    {
        // line 45
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Profile <small>Dorm Management System</small></h1>
";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "

    <div class=\"top-button-group\">

        ";
        // line 56
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile_stud");
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
        // line 78
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 79
            echo "                                    src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\"
                                ";
        } else {
            // line 81
            echo "                                    src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\"
                                ";
        }
        // line 83
        echo "                        >
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"only-bottom-margin\">";
        // line 88
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()) . " ") . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array())), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <span class=\"text-muted\">Username:</span> ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Email:</span> ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Phone Nr.:</span> ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phoneNr", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Birth date:</span>";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthday", array()), "Y-m-d"), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Nationality:</span>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nationality", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">City:</span>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Address:</span>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Department:</span>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "department", array()), "html", null, true);
        echo "<br><br>
                                ";
        // line 102
        echo "                            </div>

                            ";
        // line 105
        echo "                            ";
        // line 106
        echo "                            ";
        // line 107
        echo "                            ";
        // line 108
        echo "                            ";
        // line 109
        echo "                            ";
        // line 110
        echo "                            ";
        // line 111
        echo "                            ";
        // line 112
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
        return "@App/student_page/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 112,  249 => 111,  247 => 110,  245 => 109,  243 => 108,  241 => 107,  239 => 106,  237 => 105,  233 => 102,  229 => 100,  225 => 99,  221 => 98,  217 => 97,  213 => 96,  209 => 95,  205 => 94,  201 => 93,  193 => 88,  186 => 83,  180 => 81,  174 => 79,  172 => 78,  146 => 56,  140 => 51,  137 => 50,  132 => 45,  129 => 44,  122 => 38,  118 => 37,  114 => 36,  108 => 32,  105 => 31,  98 => 26,  94 => 25,  91 => 24,  88 => 23,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 15,  62 => 14,  55 => 10,  52 => 9,  46 => 6,  41 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/profile.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/profile.html.twig");
    }
}
