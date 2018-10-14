<?php

/* @App/tech_pages/profile_edit.html.twig */
class __TwigTemplate_bb5390d625ceef783bfb561509e18bb691daecaade32a470ed2fe8a50a395adc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/tech_pages/index.html.twig", "@App/tech_pages/profile_edit.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/tech_pages/profile_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/tech_pages/profile_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/face_detection_javascript/node_modules/jquery.facedetection/dist/jquery.facedetection.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" rel=\"javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/application_form.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_showUser($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "showUser"));

        // line 16
        echo "
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
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li  class=\"active\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_tech");
        echo "\">Profile</a></li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "

    <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
    </div>

    <div>
        <br>
        <div class=\"\">
            <div class=\"\">

                <div class=\"\">
                    <div class=\"col-md-12\">
                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "


                        <div  id=\"first-part_application-form\">

                            <div class=\"top-button-group\">
                                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_tech");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
                            </div>


                            <h4 class=\"title-application\"> Your Information </h4>

                            <div class=\"space-maker\">
                                ";
        // line 53
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->source); })()), "image", array()))) {
            // line 54
            echo "                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 56
            echo "                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "image", array()))), "html", null, true);
            echo "\" />
                                ";
        }
        // line 58
        echo "

                            </div>

                            <div class=\"form-group\">
                                ";
        // line 63
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->source); })()), "image", array()))) {
            // line 64
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "image", array()), 'row');
            echo "
                                ";
        }
        // line 66
        echo "                            </div>

                            <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "card_id", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "name", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "surname", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "nationality", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "birthday", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "city", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "phoneNr", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "address", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "email", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->source); })()), "department", array()), 'row');
        echo "
                            </div>


                            <div class=\"space-maker\">
                            </div>

                            <h4 class=\"title-application\"> Family Information </h4>

                            <div class=\"form-group\">
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "fathersName", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "fathersSurname", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "fathersJob", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "fathersphoneNr", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "mothersName", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->source); })()), "mothersSurname", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "mothersJob", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->source); })()), "mothersphoneNr", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->source); })()), "parentMaritStatus", array()), 'row');
        echo "
                            </div>



                            <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

                        </div>


                        ";
        // line 167
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), 'form_end');
        echo "

                        ";
        // line 170
        echo "                        ";
        // line 171
        echo "                        ";
        // line 172
        echo "                        ";
        // line 173
        echo "                        ";
        // line 174
        echo "                        ";
        // line 175
        echo "                        ";
        // line 176
        echo "                        ";
        // line 177
        echo "                        ";
        // line 178
        echo "                    </div>

                    ";
        // line 181
        echo "                        ";
        // line 182
        echo "                            ";
        // line 183
        echo "                        ";
        // line 184
        echo "                        ";
        // line 185
        echo "                            ";
        // line 186
        echo "                        ";
        // line 187
        echo "                    ";
        // line 188
        echo "                </div>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/tech_pages/profile_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 188,  423 => 187,  421 => 186,  419 => 185,  417 => 184,  415 => 183,  413 => 182,  411 => 181,  407 => 178,  405 => 177,  403 => 176,  401 => 175,  399 => 174,  397 => 173,  395 => 172,  393 => 171,  391 => 170,  386 => 167,  373 => 157,  365 => 152,  357 => 147,  349 => 142,  342 => 138,  334 => 133,  326 => 128,  318 => 123,  311 => 119,  298 => 109,  291 => 105,  284 => 101,  277 => 97,  270 => 93,  263 => 89,  256 => 85,  249 => 81,  242 => 77,  235 => 73,  226 => 66,  220 => 64,  218 => 63,  211 => 58,  205 => 56,  199 => 54,  197 => 53,  187 => 46,  178 => 40,  164 => 28,  155 => 27,  142 => 22,  138 => 21,  133 => 20,  124 => 19,  113 => 16,  104 => 15,  92 => 12,  88 => 11,  83 => 10,  74 => 9,  62 => 6,  57 => 5,  48 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '@App/tech_pages/index.html.twig' %}

{% block stylesheet %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/profile.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/face_detection_javascript/node_modules/jquery.facedetection/dist/jquery.facedetection.min.js') }}\"></script>
    <script type=\"text/javascript\" rel=\"javascript\" src=\"{{ asset('assets/js/application_form.js') }}\"></script>
{% endblock %}

{% block showUser %}

{% endblock %}

{% block navbar %}
    <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li><a href=\"{{ path('technical_problems') }}\">Tech Problems</a></li>
    <li  class=\"active\"><a href=\"{{ path('show_profile_tech') }}\">Profile</a></li>

{% endblock %}


{% block body %}


    <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
    </div>

    <div>
        <br>
        <div class=\"\">
            <div class=\"\">

                <div class=\"\">
                    <div class=\"col-md-12\">
                        {{ form_start(form) }}


                        <div  id=\"first-part_application-form\">

                            <div class=\"top-button-group\">
                                <a href=\"{{ path('show_profile_tech') }}\" class=\"button-style btn btn-warning top-button\">Back</a>
                            </div>


                            <h4 class=\"title-application\"> Your Information </h4>

                            <div class=\"space-maker\">
                                {% if user.image is empty %}
                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"{{ asset('assets/person_images/default.png' ) }}\" />
                                {% else %}
                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"{{ asset('assets/person_images/'~user.image ) }}\" />
                                {% endif %}


                            </div>

                            <div class=\"form-group\">
                                {% if user.image is empty  %}
                                    {{ form_row(form.image) }}
                                {% endif %}
                            </div>

                            <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
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
                                {{ form_row(form.phoneNr) }}
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


                            <div class=\"space-maker\">
                            </div>

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
                                {{ form_row(form.fathersphoneNr) }}
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
                                {{ form_row(form.mothersphoneNr) }}
                            </div>


                            <div class=\"form-group\">
                                {{ form_row(form.parentMaritStatus) }}
                            </div>



                            <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

                        </div>


                        {{ form_end(form) }}

                        {#<span class=\"text-muted\">Username:</span> {{ user.username }}<br><br>#}
                        {#<span class=\"text-muted\">Email:</span> {{ user.email }}<br><br>#}
                        {#<span class=\"text-muted\">Phone Nr.:</span> {{ user.phoneNr }}<br><br>#}
                        {#<span class=\"text-muted\">Birth date:</span>{{ user.birthday|date('Y-m-d') }}<br><br>#}
                        {#<span class=\"text-muted\">Nationality:</span>{{ user.nationality }}<br><br>#}
                        {#<span class=\"text-muted\">City:</span>{{ user.city }}<br><br>#}
                        {#<span class=\"text-muted\">Address:</span>{{ user.address }}<br><br>#}
                        {#<span class=\"text-muted\">Department:</span>{{ user.department }}<br><br>#}
                        {#<small class=\"text-muted\">Created: 0</small>#}
                    </div>

                    {#<div class=\"col-md-6\">#}
                        {#<div class=\"activity-mini\">#}
                            {#<i class=\"glyphicon glyphicon-comment text-muted\"></i> 500#}
                        {#</div>#}
                        {#<div class=\"activity-mini\">#}
                            {#<i class=\"glyphicon glyphicon-thumbs-up text-muted\"></i> 1500#}
                        {#</div>#}
                    {#</div>#}
                </div>

            </div>
        </div>
    </div>

{% endblock %}




", "@App/tech_pages/profile_edit.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/profile_edit.html.twig");
    }
}
