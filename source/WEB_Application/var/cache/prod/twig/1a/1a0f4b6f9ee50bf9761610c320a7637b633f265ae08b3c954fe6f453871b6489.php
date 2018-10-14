<?php

/* @App/finance_pages/show_student.html.twig */
class __TwigTemplate_5307d169116858e545fa4172f1c58c3da00b7c4713c478c264489dbff7f918fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/finance_pages/index.html.twig", "@App/finance_pages/show_student.html.twig", 1);
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
        echo "     <li>
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
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                 ";
        } else {
            // line 12
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" width=\"100px\" class=\"img-rounded\">
                 ";
        }
        // line 14
        echo "             </li>
             <li role=\"separator\" class=\"divider\"></li>
             <li class=\"dropdown-header\">";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "type", array())), "html", null, true);
        echo "</li>
         </ul>
     </li>
 ";
    }

    // line 23
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 24
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance");
        echo "\">Home</a></li>
    <li>/<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_student");
        echo "\">Students</a></li>
";
    }

    // line 28
    public function block_page_title($context, array $blocks = array())
    {
        // line 29
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Student Payments <small>Dorm Management System</small></h1>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "


    <h3 class=\"title-application\">Student Performances</h3>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Performances</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
                    ";
        // line 52
        echo "                    ";
        // line 53
        echo "                </tr>


                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 57
            echo "                    <tr>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "surname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phoneNr", array()), "html", null, true);
            echo "</td>
                        <td>

                            <div>
                                <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("id_show", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Payments</a>
                            </div>

                        </td>

                        ";
            // line 71
            echo "                        ";
            // line 72
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@App/finance_pages/show_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 74,  160 => 72,  158 => 71,  150 => 65,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  128 => 57,  124 => 56,  119 => 53,  117 => 52,  98 => 34,  95 => 33,  90 => 29,  87 => 28,  81 => 25,  76 => 24,  73 => 23,  65 => 16,  61 => 14,  55 => 12,  49 => 10,  47 => 9,  41 => 6,  38 => 5,  35 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/finance_pages/show_student.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/finance_pages/show_student.html.twig");
    }
}
