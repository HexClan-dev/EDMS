<?php

/* @App/tech_pages/profile_show.html.twig */
class __TwigTemplate_688b8187c9b2547c5db9298b7584d54644f1a1bbf2f7ab56d88467bdb97edecc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/tech_pages/index.html.twig", "@App/tech_pages/profile_show.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/tech_pages/index.html.twig";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li  class=\"active\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_tech");
        echo "\">Profile</a></li>

";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "

    <div class=\"top-button-group\">
        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile_tech");
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
        // line 48
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 49
            echo "                                    src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\"
                                ";
        } else {
            // line 51
            echo "                                    src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\"
                                ";
        }
        // line 53
        echo "                        >
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"only-bottom-margin\">";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()) . " ") . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array())), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <span class=\"text-muted\">Username:</span> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Email:</span> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Phone Nr.:</span> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phoneNr", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Birth date:</span>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthday", array()), "Y-m-d"), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Nationality:</span>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nationality", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">City:</span>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Address:</span>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "<br><br>
                                <span class=\"text-muted\">Department:</span>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "department", array()), "html", null, true);
        echo "<br><br>
                                ";
        // line 72
        echo "                            </div>

                            ";
        // line 75
        echo "                            ";
        // line 76
        echo "                            ";
        // line 77
        echo "                            ";
        // line 78
        echo "                            ";
        // line 79
        echo "                            ";
        // line 80
        echo "                            ";
        // line 81
        echo "                            ";
        // line 82
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
        return "@App/tech_pages/profile_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 82,  188 => 81,  186 => 80,  184 => 79,  182 => 78,  180 => 77,  178 => 76,  176 => 75,  172 => 72,  168 => 70,  164 => 69,  160 => 68,  156 => 67,  152 => 66,  148 => 65,  144 => 64,  140 => 63,  132 => 58,  125 => 53,  119 => 51,  113 => 49,  111 => 48,  86 => 26,  81 => 23,  78 => 22,  71 => 17,  67 => 16,  62 => 15,  59 => 14,  52 => 10,  49 => 9,  43 => 6,  38 => 5,  35 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/tech_pages/profile_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/profile_show.html.twig");
    }
}
