<?php

/* @App/student_page/view_payments.html.twig */
class __TwigTemplate_a0645b61faa7d8a3a821632160110db7963978531b8ff84ce5babe103704a04b extends Twig_Template
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
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["pending_problems"] ?? null));
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
        return array (  144 => 56,  136 => 53,  130 => 52,  124 => 50,  121 => 49,  119 => 48,  117 => 47,  113 => 45,  109 => 44,  105 => 43,  100 => 41,  97 => 40,  93 => 39,  71 => 19,  68 => 18,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  45 => 10,  42 => 9,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/view_payments.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/view_payments.html.twig");
    }
}
