<?php

/* @App/director_pages/members_show.html.twig */
class __TwigTemplate_23c1c762b739098e4cee5047ba14518903dea6c8b4945ae09280cd75d9781d4c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/members_show.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
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

    // line 3
    public function block_showUser($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
    <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>

";
    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 22
        echo "
    <li>/<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Director</a></li>
    <li class=\"active\">/<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\">Dormitory Members</a></li>

";
    }

    // line 29
    public function block_left_group($context, array $blocks = array())
    {
        // line 30
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"active list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        // line 44
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Dormitory Members <small>Dorm Management System</small></h1>
";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "
    ";
        // line 75
        $context["mb"] = $this->loadTemplate("@App/director_pages/members_show.html.twig", "@App/director_pages/members_show.html.twig", 75);
        // line 76
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Staff</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Nr.</th>

                    <th>Actions</th>
                    <th>Entrance</th>
                </tr>


                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staff_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 95
            echo "                    <tr>
                        <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 97
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>

                        <td>
                            <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                        <td> ";
            // line 104
            echo $context["mb"]->macro_checkServerRegistration(twig_get_attribute($this->env, $this->source, $context["row"], "existOnServer", array()), twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), ($context["server_ava"] ?? null));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
            </table>
        </div>
    </div>



    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Students</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Nr.</th>
                    <th>Actions</th>
                    <th>Entrance</th>
                </tr>


                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 130
            echo "                    <tr>
                        <td>";
            // line 131
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                        </td>
                        <td> ";
            // line 137
            echo $context["mb"]->macro_checkServerRegistration(twig_get_attribute($this->env, $this->source, $context["row"], "existOnServer", array()), twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), ($context["server_ava"] ?? null));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
            </table>
        </div>
    </div>


";
    }

    // line 48
    public function macro_checkServerRegistration($__input__ = null, $__id__ = null, $__available__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "id" => $__id__,
            "available" => $__available__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "
    ";
            // line 51
            echo "
    ";
            // line 52
            if (($context["available"] ?? null)) {
                // line 53
                echo "
        ";
                // line 54
                if (($context["input"] ?? null)) {
                    // line 55
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_images_to_server", array("mem_id" => ($context["id"] ?? null))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-block btn-danger\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is available\" ><span class=\"fa fa-trash\"></span>Remove</a>
        ";
                } else {
                    // line 57
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_images_to_server", array("mem_id" => ($context["id"] ?? null))), "html", null, true);
                    echo "\" class=\"btn-form btn-sm btn-block btn-success\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is available\"><span class=\"fa fa-check\"></span>Save</a>
        ";
                }
                // line 59
                echo "
    ";
            } else {
                // line 61
                echo "
        ";
                // line 62
                if (($context["input"] ?? null)) {
                    // line 63
                    echo "            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is not available!\" class=\"disabled btn-form btn-sm btn-block btn-warning\"><span class=\"fa fa-trash\"></span>Remove</a>
        ";
                } else {
                    // line 65
                    echo "            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Server is not available!\" class=\"disabled btn-form btn-sm btn-block btn-warning\"><span class=\"fa fa-check\"></span>Save</a>
        ";
                }
                // line 67
                echo "
    ";
            }
            // line 69
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@App/director_pages/members_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 69,  326 => 67,  322 => 65,  318 => 63,  316 => 62,  313 => 61,  309 => 59,  303 => 57,  297 => 55,  295 => 54,  292 => 53,  290 => 52,  287 => 51,  284 => 49,  270 => 48,  260 => 140,  251 => 137,  246 => 135,  241 => 133,  237 => 132,  233 => 131,  230 => 130,  226 => 129,  202 => 107,  193 => 104,  188 => 102,  182 => 99,  178 => 98,  174 => 97,  170 => 96,  167 => 95,  163 => 94,  143 => 76,  141 => 75,  138 => 74,  135 => 73,  130 => 44,  127 => 43,  120 => 37,  114 => 36,  108 => 35,  102 => 34,  96 => 30,  93 => 29,  86 => 24,  82 => 23,  79 => 22,  76 => 21,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 4,  37 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/members_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/members_show.html.twig");
    }
}
