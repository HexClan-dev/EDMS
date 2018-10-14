<?php

/* @App/assistant_pages/profile_show.html.twig */
class __TwigTemplate_de1d9a250c6e1a1a12b57ead6d5768567c14a9c0eae3e5539297aa7ce8db2443 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/assistant_pages/profile_show.html.twig", 2);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\">Students</a></li>
    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a></li>
    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\">Performance</a></li>
    <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_assistant");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  Students <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-wrench\"aria-hidden=\"true\"></span> Performances <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["performance"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tech_problems_assistant");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-wrench\"aria-hidden=\"true\"></span> Technical problems <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["tech"] ?? null), "html", null, true);
        echo "</span></a>
";
    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        // line 46
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Profile <small>Dorm Management System</small></h1>
";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "

    <div class=\"top-button-group\">

        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile_assistant");
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
            echo "                             src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\"
                         ";
        } else {
            // line 81
            echo "                             src=\"";
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/assistant_pages/profile_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 100,  239 => 99,  235 => 98,  231 => 97,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  207 => 88,  200 => 83,  194 => 81,  188 => 79,  186 => 78,  161 => 56,  155 => 52,  152 => 51,  147 => 46,  144 => 45,  136 => 40,  130 => 39,  124 => 38,  118 => 37,  112 => 33,  109 => 32,  102 => 27,  98 => 26,  95 => 25,  92 => 24,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 15,  62 => 14,  55 => 10,  52 => 9,  46 => 6,  41 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/assistant_pages/profile_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/assistant_pages/profile_show.html.twig");
    }
}
