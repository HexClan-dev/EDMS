<?php

/* @App/tech_pages/technical_information.html.twig */
class __TwigTemplate_c9b3deaf26d0d4ca107009a6e2ac55376b1a68cf5ee67d7d843b3557b6c835c4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/tech_pages/technical_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/tech_pages/technical_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 4
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["pending_problems"]) || array_key_exists("pending_problems", $context) ? $context["pending_problems"] : (function () { throw new Twig_Error_Runtime('Variable "pending_problems" does not exist.', 65, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["todo_problems"]) || array_key_exists("todo_problems", $context) ? $context["todo_problems"] : (function () { throw new Twig_Error_Runtime('Variable "todo_problems" does not exist.', 111, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["fixed_problems"]) || array_key_exists("fixed_problems", $context) ? $context["fixed_problems"] : (function () { throw new Twig_Error_Runtime('Variable "fixed_problems" does not exist.', 164, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "setStatus"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "setStatus"));

            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 19, $this->source); })()) == "fixed")) {
                // line 20
                echo "        <span class=\"btn-form btn-sm btn-success\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 20, $this->source); })())), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 21
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 21, $this->source); })()) == "considered")) {
                // line 22
                echo "        <span class=\"btn-form btn-sm btn-warning\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 22, $this->source); })())), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 24
                echo "        <span class=\"btn-form btn-sm btn-danger\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 24, $this->source); })())), "html", null, true);
                echo "</span>
    ";
            }
            // line 26
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


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
        return array (  404 => 26,  398 => 24,  392 => 22,  390 => 21,  385 => 20,  383 => 19,  380 => 18,  362 => 17,  346 => 174,  343 => 172,  334 => 169,  330 => 168,  326 => 167,  322 => 166,  319 => 165,  315 => 164,  312 => 163,  283 => 135,  280 => 133,  268 => 127,  264 => 126,  258 => 123,  254 => 122,  250 => 120,  248 => 119,  243 => 116,  239 => 115,  235 => 114,  231 => 113,  228 => 112,  224 => 111,  221 => 110,  189 => 79,  176 => 74,  173 => 73,  168 => 70,  164 => 69,  160 => 68,  156 => 67,  153 => 66,  149 => 65,  146 => 64,  144 => 63,  114 => 34,  112 => 33,  108 => 31,  99 => 30,  86 => 12,  82 => 11,  78 => 10,  75 => 9,  66 => 8,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/tech_pages/index.html.twig\" %}

{% block showUser %}

{% endblock %}


{% block navbar %}

    <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li class=\"active\"><a href=\"{{ path('technical_problems') }}\">Tech Problems</a></li>
    <li><a href=\"{{ path('show_profile_tech') }}\">Profile</a></li>

{% endblock %}


{% macro setStatus(status) %}

    {% if status == 'fixed' %}
        <span class=\"btn-form btn-sm btn-success\">{{ status|upper }}</span>
    {% elseif status == 'considered' %}
        <span class=\"btn-form btn-sm btn-warning\">{{ status|upper }}</span>
    {% else %}
        <span class=\"btn-form btn-sm btn-danger\">{{ status|upper }}</span>
    {% endif %}

{% endmacro %}


{% block body %}


    {% import '@App/tech_pages/technical_information.html.twig' as mc %}


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


                {#<a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"#}
                   {#data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to remove this Log','{{ path('delete_log', { 'log_id': row.id }) }}')\" >Delete</a>#}

                {% for row in pending_problems %}
                    <tr>
                        <td>{{ row.name }}</td>
                        <td>{{  row.description }}</td>
                        <td>{{ row.place }}</td>
                        <td>{{ mc.setStatus(row.status) }}</td>
                        <td>
                            {#<a href=\"\" class=\"btn-form btn-sm btn-success\">Consider</a>#}
                            <a class='btn-form btn-sm btn-block btn-success' type=\"button\" data-toggle=\"modal\"
                            data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you consider \\'{{ row.name }}\\' Problem ?','{{ path('considering_tech_problems', {'prob_id': row.id}) }}')\" >Consider</a>

                        </td>
                    </tr>
                {% endfor %}

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

                {# body table start #}

                {% for row in todo_problems %}
                    <tr>
                        <td>{{ row.name }}</td>
                        <td>{{  row.description }}</td>
                        <td>{{ row.place }}</td>
                        <td>{{ mc.setStatus(row.status) }}</td>
                        <td>
                            {#<a href=\"{{ path('fixing_tech_problems', {'prob_id': row.id}) }}\" class=\"btn-form btn-sm btn-success\">Set Fixed</a>#}
                            {#<a href=\"{{ path('unconsidering_tech_problems', {'prob_id': row.id}) }}\" class=\"btn-form btn-sm btn-danger\">Set Unconsidered</a>#}

                            <a class='btn-form btn-sm btn-block btn-success' type=\"button\" data-toggle=\"modal\"
                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you have fixed \\'{{ row.name }}\\' Problem ?',
                                    '{{ path('fixing_tech_problems', {'prob_id': row.id}) }}')\" >Set Fixed</a>

                            <a class='btn-form btn-sm btn-block btn-danger' type=\"button\" data-toggle=\"modal\"
                               data-target=\"#lost_modal\"  onclick=\"showModalUser('Are you sure that you want to Unconsider \\'{{ row.name }}\\' Problem ?',
                                    '{{ path('unconsidering_tech_problems', {'prob_id': row.id}) }}')\" >Unconsider</a>


                        </td>
                    </tr>
                {% endfor %}

                {# body table end #}

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

                {# body table start #}

                {% for row in fixed_problems %}
                    <tr>
                        <td>{{ row.name }}</td>
                        <td>{{  row.description }}</td>
                        <td>{{ row.place }}</td>
                        <td>{{ mc.setStatus(row.status) }}</td>
                    </tr>
                {% endfor %}

                {# body table end #}

            </table>
        </div>
    </div>


{% endblock %}


", "@App/tech_pages/technical_information.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/technical_information.html.twig");
    }
}
