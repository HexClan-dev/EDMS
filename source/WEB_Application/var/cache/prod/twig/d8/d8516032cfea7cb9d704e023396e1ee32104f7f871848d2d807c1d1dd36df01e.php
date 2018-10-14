<?php

/* @App/tech_pages/technical_information.html.twig */
class __TwigTemplate_1d7d746f1fb36e56f1fbae1782dad7e1f455947369d487f2d6059230bb72197d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/tech_pages/index.html.twig", "@App/tech_pages/technical_information.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
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

    // line 3
    public function block_showUser($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "
    <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_tech");
        echo "\">Profile</a></li>

";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "

    ";
        // line 33
        $context["mc"] = $this->loadTemplate("@App/tech_pages/technical_information.html.twig", "@App/tech_pages/technical_information.html.twig", 33);
        // line 34
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
                    <th>Action</th>
                </tr>


                ";
        // line 63
        echo "                   ";
        // line 64
        echo "
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pending_problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 66
            echo "                    <tr>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo $context["mc"]->macro_setStatus(twig_get_attribute($this->env, $this->source, $context["row"], "status", array()));
            echo "</td>
                        <td>
                            ";
            // line 73
            echo "                            <a class='btn-form btn-sm btn-block btn-success' type=\"button\" data-toggle=\"modal\"
                            data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you consider \\'";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "\\' Problem ?','";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("considering_tech_problems", array("prob_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\" >Consider</a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            </table>
        </div>
    </div>



    <div class=\"panel panel-default\">

        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">TODO Problems</h3>
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
                    <th>Action</th>
                </tr>

                ";
        // line 110
        echo "
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todo_problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 112
            echo "                    <tr>
                        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 116
            echo $context["mc"]->macro_setStatus(twig_get_attribute($this->env, $this->source, $context["row"], "status", array()));
            echo "</td>
                        <td>
                            ";
            // line 119
            echo "                            ";
            // line 120
            echo "
                            <a class='btn-form btn-sm btn-block btn-success' type=\"button\" data-toggle=\"modal\"
                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you have fixed \\'";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "\\' Problem ?',
                                    '";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fixing_tech_problems", array("prob_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\" >Set Fixed</a>

                            <a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"
                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to Unconsider \\'";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "\\' Problem ?',
                                    '";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unconsidering_tech_problems", array("prob_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\" >Unconsider</a>


                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
                ";
        // line 135
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
                </tr>

                ";
        // line 163
        echo "
                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fixed_problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 165
            echo "                    <tr>
                        <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "place", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 169
            echo $context["mc"]->macro_setStatus(twig_get_attribute($this->env, $this->source, $context["row"], "status", array()));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
                ";
        // line 174
        echo "
            </table>
        </div>
    </div>


";
    }

    // line 17
    public function macro_setStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "
    ";
            // line 19
            if ((($context["status"] ?? null) == "fixed")) {
                // line 20
                echo "        <span class=\"btn-form btn-sm btn-success\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["status"] ?? null)), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 21
($context["status"] ?? null) == "considered")) {
                // line 22
                echo "        <span class=\"btn-form btn-sm btn-warning\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["status"] ?? null)), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 24
                echo "        <span class=\"btn-form btn-sm btn-danger\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["status"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
            // line 26
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@App/tech_pages/technical_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 26,  344 => 24,  338 => 22,  336 => 21,  331 => 20,  329 => 19,  326 => 18,  314 => 17,  304 => 174,  301 => 172,  292 => 169,  288 => 168,  284 => 167,  280 => 166,  277 => 165,  273 => 164,  270 => 163,  241 => 135,  238 => 133,  226 => 127,  222 => 126,  216 => 123,  212 => 122,  208 => 120,  206 => 119,  201 => 116,  197 => 115,  193 => 114,  189 => 113,  186 => 112,  182 => 111,  179 => 110,  147 => 79,  134 => 74,  131 => 73,  126 => 70,  122 => 69,  118 => 68,  114 => 67,  111 => 66,  107 => 65,  104 => 64,  102 => 63,  72 => 34,  70 => 33,  66 => 31,  63 => 30,  56 => 12,  52 => 11,  48 => 10,  45 => 9,  42 => 8,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/tech_pages/technical_information.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/technical_information.html.twig");
    }
}
