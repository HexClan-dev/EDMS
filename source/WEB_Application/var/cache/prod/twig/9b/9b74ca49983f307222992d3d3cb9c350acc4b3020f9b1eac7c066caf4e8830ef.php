<?php

/* @App/director_pages/technical_information.html.twig */
class __TwigTemplate_4dc32ac64d09f91df099c9c6d4db834828a17268ef70730729dfc4f37007551c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/technical_information.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
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
    public function block_showUser($context, array $blocks = array())
    {
        // line 5
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
    <li class=\"active\"><a href=\"";
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

    // line 19
    public function block_page_title($context, array $blocks = array())
    {
        // line 20
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Technical Problems <small>Dorm Management System</small></h1>
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "
    <div>
        <h3 class=\"title-application\">Technical Problems</h3>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Pending Problems</h3>
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pending_problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 50
            echo "                    <tr>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td><span class=\"btn-form btn-sm btn-warning\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "status", array()), "html", null, true);
            echo "</span></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
                    <th>Confirmed</th>
                </tr>

                ";
        // line 86
        echo "
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fixed_problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 88
            echo "                    <tr>
                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>
                            <span class=\"btn-form btn-sm btn-success\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "status", array()), "html", null, true);
            echo "</span>
                        </td>
                        <td>
                            ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, $context["row"], "isconfirmed", array())) {
                // line 97
                echo "                                <span class=\"btn-form btn-sm btn-success\">Yes</span>
                            ";
            } else {
                // line 99
                echo "                                <span class=\"btn-form btn-sm btn-danger\">No</span>
                            ";
            }
            // line 101
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
                ";
        // line 106
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/technical_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 106,  216 => 104,  208 => 101,  204 => 99,  200 => 97,  198 => 96,  192 => 93,  187 => 91,  183 => 90,  179 => 89,  176 => 88,  172 => 87,  169 => 86,  139 => 57,  130 => 54,  126 => 53,  122 => 52,  118 => 51,  115 => 50,  111 => 49,  84 => 24,  81 => 23,  76 => 20,  73 => 19,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  46 => 10,  43 => 9,  38 => 5,  35 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/technical_information.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/technical_information.html.twig");
    }
}
