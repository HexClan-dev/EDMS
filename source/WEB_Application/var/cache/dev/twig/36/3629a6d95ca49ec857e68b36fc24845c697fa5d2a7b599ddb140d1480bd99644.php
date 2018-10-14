<?php

/* @App/default/application_page.html.twig */
class __TwigTemplate_93ec6528fa12fd2379b4446bae1c0ac0c2fee100b469736067fbbddbc4a5fa70 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "@App/default/application_page.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/application_page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/application_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/application_form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 11
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/face_detection_javascript/node_modules/jquery.facedetection/dist/jquery.facedetection.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" rel=\"javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/application_form.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 20
        echo "
    <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("information");
        echo "\">Information</a></li>
    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dorm_application");
        echo "\">Apply</a></li>
    <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
    <div class=\"container\">

        <div class=\"navbar col-md-12\">
            <h3 class=\"title-application\">Application Form</h3>
        </div>


        <div class=\"col-md-3\">

            <div>
                <div class=\"list-group\">
                    <div class=\"alert alert-info\">
                        <div>
                            <span class=\"glyphicon glyphicon-alert\"></span>
                            Please try to fill all the information necessary
                        </div>
                    </div>
                </div>

                <div class=\"list-group\">
                    <a href=\"index.html.twig\" class=\"list-group-item active main-color-bg\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Steps
                    </a>

                    <a id=\"first_part\" class=\"list-group-item active\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Your Information</a>
                    <a id=\"second_part\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Family Information </a>
                </div>
            </div>

        </div>
        <div class=\"col-md-1\">
        </div>

        <div class=\"row col-md-8\">

            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
        echo "


            <div  id=\"first-part_application-form\">

                <h4 class=\"title-application\"> Your Information </h4>

                <div class=\"space-maker\">
                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
        echo "\" />
                </div>

                <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
                </div>

                <div class=\"form-group\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "image", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "card_id", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "name", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "surname", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "nationality", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "birthday", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "city", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->source); })()), "phoneNumber", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "address", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "email", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->source); })()), "department", array()), 'row');
        echo "
                </div>

                <hr>
                <div class=\"space-maker\"></div>
                <h4 class=\"title-application\"> Family Information </h4>

                <div class=\"form-group\">
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->source); })()), "fathersName", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "fathersSurname", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "fathersJob", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->source); })()), "fathersPhoneNumber", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->source); })()), "mothersName", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->source); })()), "mothersSurname", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->source); })()), "mothersJob", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 162, $this->source); })()), "mothersPhoneNumber", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), "maritalStatus", array()), 'row');
        echo "
                </div>



                <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

            </div>


            ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        echo "

        </div>


    </div>

    <div class=\"space-maker\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/application_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 177,  360 => 167,  352 => 162,  344 => 157,  336 => 152,  329 => 148,  321 => 143,  313 => 138,  305 => 133,  298 => 129,  287 => 121,  280 => 117,  273 => 113,  266 => 109,  259 => 105,  252 => 101,  245 => 97,  238 => 93,  231 => 89,  224 => 85,  217 => 81,  207 => 74,  196 => 66,  158 => 30,  149 => 29,  136 => 24,  132 => 23,  128 => 22,  124 => 21,  121 => 20,  112 => 19,  99 => 14,  95 => 13,  91 => 12,  86 => 11,  77 => 10,  65 => 6,  61 => 5,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/default/index.html.twig\" %}

{% block stylesheet %}
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/application_form.css') }}\" rel=\"stylesheet\">
{% endblock %}


{% block javascript %}
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/face_detection_javascript/node_modules/jquery.facedetection/dist/jquery.facedetection.min.js') }}\"></script>
    <script type=\"text/javascript\" rel=\"javascript\" src=\"{{ asset('assets/js/application_form.js') }}\"></script>

{% endblock %}


{% block navbar %}

    <li><a href=\"{{ path('homepage') }}\">Home</a></li>
    <li><a href=\"{{ path('information') }}\">Information</a></li>
    <li class=\"active\"><a href=\"{{ path('dorm_application') }}\">Apply</a></li>
    <li><a href=\"{{ path('login') }}\">Login</a></li>

{% endblock %}


{% block body %}

    <div class=\"container\">

        <div class=\"navbar col-md-12\">
            <h3 class=\"title-application\">Application Form</h3>
        </div>


        <div class=\"col-md-3\">

            <div>
                <div class=\"list-group\">
                    <div class=\"alert alert-info\">
                        <div>
                            <span class=\"glyphicon glyphicon-alert\"></span>
                            Please try to fill all the information necessary
                        </div>
                    </div>
                </div>

                <div class=\"list-group\">
                    <a href=\"index.html.twig\" class=\"list-group-item active main-color-bg\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Steps
                    </a>

                    <a id=\"first_part\" class=\"list-group-item active\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Your Information</a>
                    <a id=\"second_part\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Family Information </a>
                </div>
            </div>

        </div>
        <div class=\"col-md-1\">
        </div>

        <div class=\"row col-md-8\">

            {{ form_start(form) }}


            <div  id=\"first-part_application-form\">

                <h4 class=\"title-application\"> Your Information </h4>

                <div class=\"space-maker\">
                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"{{ asset('assets/person_images/default.png' ) }}\" />
                </div>

                <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.image) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.card_id) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.name) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.surname) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.nationality) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.birthday) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.city) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.phoneNumber) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.address) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.email) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.department) }}
                </div>

                <hr>
                <div class=\"space-maker\"></div>
                <h4 class=\"title-application\"> Family Information </h4>

                <div class=\"form-group\">
                    {{ form_row(form.fathersName) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.fathersSurname) }}
                </div>


                <div class=\"form-group\">
                    {{ form_row(form.fathersJob) }}
                </div>


                <div class=\"form-group\">
                    {{ form_row(form.fathersPhoneNumber) }}
                </div>


                <div class=\"form-group\">
                    {{ form_row(form.mothersName) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.mothersSurname) }}
                </div>


                <div class=\"form-group\">
                    {{ form_row(form.mothersJob) }}
                </div>


                <div class=\"form-group\">
                    {{ form_row(form.mothersPhoneNumber) }}
                </div>


                <div class=\"form-group\">
                    {{ form_row(form.maritalStatus) }}
                </div>



                <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

            </div>


            {{ form_end(form) }}

        </div>


    </div>

    <div class=\"space-maker\"></div>

{% endblock %}



", "@App/default/application_page.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/default/application_page.html.twig");
    }
}
