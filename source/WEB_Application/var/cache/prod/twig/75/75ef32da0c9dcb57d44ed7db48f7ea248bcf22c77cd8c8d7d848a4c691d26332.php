<?php

/* @App/director_pages/assistant_manage.html.twig */
class __TwigTemplate_19b94d69bfed94adc6231d87a191060dd496f80868b4f334d862a265af7a54a0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/assistant_manage.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'page_title' => array($this, 'block_page_title'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        // line 9
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage Assistants <small>Dorm Management System</small></h1>
";
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "
    <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
    <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>

";
    }

    // line 24
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 25
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\">/<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
    <!-- Latest Users -->

    <div class=\"top-button-group\">
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_assistants");
        echo "\" class=\"button-style btn btn-success top-button\">Add New Assistant</a>
    </div>


    <h3 class=\"title-application\">Assistants</h3>

    <div class=\"panel panel-default\">
        ";
        // line 43
        echo "        <div class=\"panel-heading main-color-bg\">
            <h3 class=\"panel-title\">Registered Assistants</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>


                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assistants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 56
            echo "                    <tr>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div>

                                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_information", array("person" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-form btn-sm btn-block btn-primary\">Info</a>
                                ";
            // line 64
            echo "                                        ";
            // line 65
            echo "                                ";
            // line 66
            echo "                                <a class=\"btn-form btn-sm btn-block btn-danger\" type=\"button\" data-toggle=\"modal\"
                                        data-target=\"#lost_modal\" onclick=\"showModalUser('Are you sure that you want to remove \\'";
            // line 67
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "name", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "surname", array())), "html", null, true);
            echo "\\' ','";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_assistants", array("user_id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
            echo "')\">
                                    Delete</span>
                                 </a>


                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "

            </table>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/assistant_manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 76,  161 => 67,  158 => 66,  156 => 65,  154 => 64,  150 => 62,  143 => 58,  139 => 57,  136 => 56,  132 => 55,  118 => 43,  108 => 35,  102 => 31,  99 => 30,  93 => 26,  88 => 25,  85 => 24,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  52 => 13,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/assistant_manage.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/assistant_manage.html.twig");
    }
}
