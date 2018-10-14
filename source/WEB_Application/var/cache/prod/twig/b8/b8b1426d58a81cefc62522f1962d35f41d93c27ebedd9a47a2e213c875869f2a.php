<?php

/* @App/director_pages/assistant_add_page.html.twig */
class __TwigTemplate_5c671f7d3dbfdc983f19eecf2c5aeaf3706412f1b64cef9495830dcbfb6c4fbe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/assistant_add_page.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
";
    }

    // line 16
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 17
        echo "    <li>/<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li>/<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li class=\"active\">/<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_assistants");
        echo "\">Add new</a></li>
";
    }

    // line 23
    public function block_page_title($context, array $blocks = array())
    {
        // line 24
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Add Assistant <small>Dorm Management System</small></h1>
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "
    <!-- Latest Users -->

    <div class=\"top-button-group\">
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>


    <div>

        <h3 class='title-application'> New Assistant </h3>

        <div class=\"col-md-6\">

            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cardId", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNr", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationality", array()), 'row');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "department", array()), 'row');
        echo "
                </div>

            <button type=\"submit\" class=\"button-style btn btn-success\"> Save New Assistant </button>


            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/assistant_add_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 87,  186 => 81,  179 => 77,  172 => 73,  166 => 70,  159 => 66,  152 => 62,  145 => 58,  138 => 54,  131 => 50,  124 => 46,  118 => 43,  105 => 33,  99 => 29,  96 => 28,  91 => 24,  88 => 23,  82 => 19,  78 => 18,  73 => 17,  70 => 16,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/assistant_add_page.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/assistant_add_page.html.twig");
    }
}
