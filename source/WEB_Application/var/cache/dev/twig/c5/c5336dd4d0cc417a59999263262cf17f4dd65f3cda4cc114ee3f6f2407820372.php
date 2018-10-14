<?php

/* @App/student_page/view_payments.html.twig */
class __TwigTemplate_967d0c9d8f3f1b45371cbb438273a3244e468f422814187d3ddaffc156ece49b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/student_page/index.html.twig", "@App/student_page/view_payments.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/student_page/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/student_page/view_payments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/student_page/view_payments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 5
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 10
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">Report a problem</a></li>
    <li class=\"active\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\">View Payments</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">Profile</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
    <div>
        <h3 class=\"title-application\">Payments</h3>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Payments History</h3>
        </div>
        <div class=\"panel-body\">
            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Notes</th>
                    <th>Amount</th>
                    <th>Types</th>
                </tr>

                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pending_problems"]) || array_key_exists("pending_problems", $context) ? $context["pending_problems"] : (function () { throw new Twig_Error_Runtime('Variable "pending_problems" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 40
            echo "                    <tr>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "dateP", array()), "M-d-Y"), "html", null, true);
            echo "</td>

                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "notes", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "amount", array()), "html", null, true);
            echo "</td>
                        ";
            // line 47
            echo "                        ";
            // line 48
            echo "                        ";
            // line 49
            echo "                        <td>";
            if (twig_get_attribute($this->env, $this->source, $context["row"], "isprocessed", array())) {
                // line 50
                echo "                            <span class=\"btn-form btn-sm btn-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array()), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 52
                echo "                            <span class=\"btn-form btn-sm btn-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array()), "html", null, true);
                echo "</span>
                        ";
            }
            // line 53
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            </table>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/student_page/view_payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 56,  178 => 53,  172 => 52,  166 => 50,  163 => 49,  161 => 48,  159 => 47,  155 => 45,  151 => 44,  147 => 43,  142 => 41,  139 => 40,  135 => 39,  113 => 19,  104 => 18,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  75 => 10,  66 => 9,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/student_page/index.html.twig\" %}


{% block showUser %}

{% endblock %}


{% block navbar %}
    <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li><a href=\"{{ path('view_assistant_stud') }}\">Assistants</a></li>
    <li><a href=\"{{ path('report_problem_stud') }}\">Report a problem</a></li>
    <li class=\"active\"><a href=\"{{ path('view_payments_stud') }}\">View Payments</a></li>
    <li><a href=\"{{ path('show_profile_stud') }}\">Profile</a></li>
{% endblock %}


{% block body %}

    <div>
        <h3 class=\"title-application\">Payments</h3>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Payments History</h3>
        </div>
        <div class=\"panel-body\">
            <table  id=\"tech-pending-show\"  class=\"table table-striped table-hover\">

                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Notes</th>
                    <th>Amount</th>
                    <th>Types</th>
                </tr>

                {% for row in pending_problems %}
                    <tr>
                        <td>{{ row.dateP|date('M-d-Y') }}</td>

                        <td>{{  row.description }}</td>
                        <td>{{ row.notes }}</td>
                        <td>{{ row.amount }}</td>
                        {#<td>{{ row.type }}</td>#}
                        {#<!--<td><span class=\"btn-form btn-sm btn-warning\">{{ row.status }}</span></td>-->#}
                        {#<!--<td><span class=\"btn-form btn-sm btn-danger\">{{ row.isConfirmed }}</span></td>-->#}
                        <td>{% if row.isprocessed %}
                            <span class=\"btn-form btn-sm btn-success\">{{ row.type }}</span>
                        {% else %}
                            <span class=\"btn-form btn-sm btn-danger\">{{ row.type }}</span>
                        {% endif %}</td>
                    </tr>
                {% endfor %}

            </table>
        </div>
    </div>

{% endblock %}


", "@App/student_page/view_payments.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/view_payments.html.twig");
    }
}
