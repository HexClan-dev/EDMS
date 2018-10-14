<?php

/* @App/finance_pages/info_student.html.twig */
class __TwigTemplate_35c58ac03c38ad31f9f7ec6f7be4981bfebac9b3cb088a5edceda54214c83422 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/finance_pages/index.html.twig", "@App/finance_pages/info_student.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'page_title' => array($this, 'block_page_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/finance_pages/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_showUser($context, array $blocks = array())
    {
        // line 5
        echo "    <li>
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Welcome, ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li class=\"active\">
                ";
        // line 9
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 10
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                ";
        } else {
            // line 12
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                ";
        }
        // line 14
        echo "            </li>
            <li role=\"separator\" class=\"divider\"></li>
            <li class=\"dropdown-header\">";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
        </ul>
    </li>
";
    }

    // line 22
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 23
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\">showStudent</a></li>
    <li class=\"active\">/<a href=\"#\">student ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["students"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["students"] ?? null), "surname", array()), "html", null, true);
        echo "</a></li>
";
    }

    // line 28
    public function block_page_title($context, array $blocks = array())
    {
        // line 29
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Student Finance <small>Dorm Management System</small></h1>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "


    <div class=\"top-button-group\">
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_payments", array("p_ers" => twig_get_attribute($this->env, $this->source, ($context["students"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"button-style btn btn-success top-button\"><i class=\"glyphicon glyphicon-pencil\"></i> Add Payment</a>
    </div>


    <h3 class=\"title-application\">Payments</h3>

    <div class=\"space-maker\"></div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["students"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["students"] ?? null), "surname", array()), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">

            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Type</th>
                </tr>

                   ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["em"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 61
            echo "                <tr>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "dateP", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "notes", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "amount", array()), "html", null, true);
            echo "</td>
                    <td>
                        <span class=\"btn-form btn-sm btn-warning\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", array()), "html", null, true);
            echo "</span>
                    </td>
                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/finance_pages/info_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  164 => 67,  159 => 65,  155 => 64,  151 => 63,  147 => 62,  144 => 61,  140 => 60,  122 => 47,  110 => 38,  104 => 34,  101 => 33,  96 => 29,  93 => 28,  85 => 25,  81 => 24,  76 => 23,  73 => 22,  65 => 16,  61 => 14,  55 => 12,  49 => 10,  47 => 9,  41 => 6,  38 => 5,  35 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/finance_pages/info_student.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/finance_pages/info_student.html.twig");
    }
}
