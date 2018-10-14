<?php

/* @App/student_page/show_info_stud.html.twig */
class __TwigTemplate_b9c37e2406bab20fb847d3980741f29e13f1cd4757aa1556b2128ff0e55f78b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/student_page/index.html.twig", "@App/student_page/show_info_stud.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/student_page/show_info_stud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/student_page/show_info_stud.html.twig"));

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

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 9
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_assistant_stud");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_problem_stud");
        echo "\">Report a problem</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_payments_stud");
        echo "\">View Payments</a></li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_profile_stud");
        echo "\">Profile</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 17
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Information <small>Dorm Management System</small></h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
    <!-- Latest Users -->

    <div class=\"top-button-group\">
        ";
        // line 26
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new Twig_Error_Runtime('Variable "back" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>

    <h3 class='title-application'> Member Information </h3>

    <div class=\"image_show col-md-12\">

        <div class=\"personal-details\">
            ";
        // line 34
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 34, $this->source); })()), "image", array()))) {
            // line 35
            echo "                <img alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" />
            ";
        } else {
            // line 37
            echo "                <img alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 37, $this->source); })()), "image", array()))), "html", null, true);
            echo "\" />
            ";
        }
        // line 39
        echo "        </div>

        <div class=\"container-details\">
            ";
        // line 43
        echo "            <hr>
            <dl>
                <dt>Name</dt>
                <dd class=\"left_position\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 46, $this->source); })()), "name", array()), "html", null, true);
        echo "</dd>
                <dt>Surname</dt>
                <dd class=\"left_position\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 48, $this->source); })()), "surname", array()), "html", null, true);
        echo "</dd>
            </dl>
        </div>

    </div>

    <div class=\"space-maker col-md-12\">


        <h3 class='title-application'> </h3>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    User mode
                </dt>
                <dd id=\"shw\">
                    ";
        // line 67
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 67, $this->source); })()), "type", array())), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Card Id
                </dt>
                <dd id=\"shw\">
                    ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 75, $this->source); })()), "cardId", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Email
                </dt>
                <dd id=\"shw\">
                    ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 83, $this->source); })()), "email", array()), "html", null, true);
        echo "
                </dd>



                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Phone Nr.
                </dt>
                <dd id=\"shw\">
                    ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 93, $this->source); })()), "phoneNr", array()), "html", null, true);
        echo "
                </dd>


                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Nationality
                </dt>
                <dd id=\"shw\">
                    ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 102, $this->source); })()), "nationality", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    City
                </dt>
                <dd id=\"shw\">
                    ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 110, $this->source); })()), "city", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Birthday
                </dt>
                <dd id=\"shw\">
                    ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 118, $this->source); })()), "birthday", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Address
                </dt>
                <dd id=\"shw\">
                    ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 126, $this->source); })()), "address", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Department
                </dt>
                <dd id=\"shw\">
                    ";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 134, $this->source); })()), "department", array()), "html", null, true);
        echo "
                </dd>

            </dl>
        </div>

    </div>

    <div>
        <h3 class='title-application'> Family Information </h3>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Name
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 153
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 153, $this->source); })()), "fathersname", array()))) {
            // line 154
            echo "                        <br>
                    ";
        } else {
            // line 156
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 156, $this->source); })()), "fathersname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 158
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Surname
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 166
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 166, $this->source); })()), "fatherssurname", array()))) {
            // line 167
            echo "                        <br>
                    ";
        } else {
            // line 169
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 169, $this->source); })()), "fatherssurname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 171
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 179
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 179, $this->source); })()), "fathersJob", array()))) {
            // line 180
            echo "                        <br>
                    ";
        } else {
            // line 182
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 182, $this->source); })()), "fathersJob", array()), "html", null, true);
            echo "
                    ";
        }
        // line 184
        echo "                </dd>



                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 193
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 193, $this->source); })()), "fathersphoneNr", array()))) {
            // line 194
            echo "                        <br>
                    ";
        } else {
            // line 196
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 196, $this->source); })()), "fathersphoneNr", array()), "html", null, true);
            echo "
                    ";
        }
        // line 198
        echo "                </dd>

            </dl>
        </div>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Mother's Name
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 211
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 211, $this->source); })()), "mothersname", array()))) {
            // line 212
            echo "                        <br>
                    ";
        } else {
            // line 214
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 214, $this->source); })()), "mothersname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 216
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Mothers's Surname
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 224
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 224, $this->source); })()), "motherssurname", array()))) {
            // line 225
            echo "                        <br>
                    ";
        } else {
            // line 227
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 227, $this->source); })()), "motherssurname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 229
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 237
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 237, $this->source); })()), "mothersJob", array()))) {
            // line 238
            echo "                        <br>
                    ";
        } else {
            // line 240
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 240, $this->source); })()), "mothersJob", array()), "html", null, true);
            echo "
                    ";
        }
        // line 242
        echo "                </dd>



                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 251
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 251, $this->source); })()), "mothersphoneNr", array()))) {
            // line 252
            echo "                        <br>
                    ";
        } else {
            // line 254
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 254, $this->source); })()), "mothersphoneNr", array()), "html", null, true);
            echo "
                    ";
        }
        // line 256
        echo "                </dd>

            </dl>


        </div>


        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Parent Marital Status
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 272
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 272, $this->source); })()), "parentMaritStatus", array()))) {
            // line 273
            echo "                        <br>
                    ";
        } else {
            // line 275
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 275, $this->source); })()), "parentMaritStatus", array()), "html", null, true);
            echo "
                    ";
        }
        // line 277
        echo "                </dd>
            </dl>
        </div>

    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/student_page/show_info_stud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 277,  513 => 275,  509 => 273,  507 => 272,  489 => 256,  483 => 254,  479 => 252,  477 => 251,  466 => 242,  460 => 240,  456 => 238,  454 => 237,  444 => 229,  438 => 227,  434 => 225,  432 => 224,  422 => 216,  416 => 214,  412 => 212,  410 => 211,  395 => 198,  389 => 196,  385 => 194,  383 => 193,  372 => 184,  366 => 182,  362 => 180,  360 => 179,  350 => 171,  344 => 169,  340 => 167,  338 => 166,  328 => 158,  322 => 156,  318 => 154,  316 => 153,  294 => 134,  283 => 126,  272 => 118,  261 => 110,  250 => 102,  238 => 93,  225 => 83,  214 => 75,  203 => 67,  181 => 48,  176 => 46,  171 => 43,  166 => 39,  160 => 37,  154 => 35,  152 => 34,  140 => 26,  134 => 21,  125 => 20,  114 => 17,  105 => 16,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  76 => 9,  67 => 8,  56 => 5,  47 => 4,  15 => 1,);
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
    <li><a href=\"{{ path('view_payments_stud') }}\">View Payments</a></li>
    <li><a href=\"{{ path('show_profile_stud') }}\">Profile</a></li>
{% endblock %}

{% block page_title %}
    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Information <small>Dorm Management System</small></h1>
{% endblock %}

{% block body %}

    <!-- Latest Users -->

    <div class=\"top-button-group\">
        {# TODO ->>  this is a general show information  #}
        <a href=\"{{ back }}\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>

    <h3 class='title-application'> Member Information </h3>

    <div class=\"image_show col-md-12\">

        <div class=\"personal-details\">
            {% if person.image is empty %}
                <img alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"{{ asset('assets/person_images/default.png' ) }}\" />
            {% else %}
                <img alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"{{ asset('assets/person_images/'~person.image ) }}\" />
            {% endif %}
        </div>

        <div class=\"container-details\">
            {#<h4  style=\"text-decoration-style: wavy; width:100% \"> Personal Information</h4>#}
            <hr>
            <dl>
                <dt>Name</dt>
                <dd class=\"left_position\">{{ person.name }}</dd>
                <dt>Surname</dt>
                <dd class=\"left_position\">{{ person.surname }}</dd>
            </dl>
        </div>

    </div>

    <div class=\"space-maker col-md-12\">


        <h3 class='title-application'> </h3>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    User mode
                </dt>
                <dd id=\"shw\">
                    {{ person.type|upper }}
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Card Id
                </dt>
                <dd id=\"shw\">
                    {{ person.cardId }}
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Email
                </dt>
                <dd id=\"shw\">
                    {{ person.email }}
                </dd>



                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Phone Nr.
                </dt>
                <dd id=\"shw\">
                    {{ person.phoneNr }}
                </dd>


                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Nationality
                </dt>
                <dd id=\"shw\">
                    {{ person.nationality }}
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    City
                </dt>
                <dd id=\"shw\">
                    {{ person.city }}
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Birthday
                </dt>
                <dd id=\"shw\">
                    {{ person.birthday }}
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Address
                </dt>
                <dd id=\"shw\">
                    {{ person.address }}
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Department
                </dt>
                <dd id=\"shw\">
                    {{ person.department }}
                </dd>

            </dl>
        </div>

    </div>

    <div>
        <h3 class='title-application'> Family Information </h3>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Name
                </dt>
                <dd id=\"shw1\">
                    {% if person.fathersname is empty %}
                        <br>
                    {% else %}
                        {{ person.fathersname }}
                    {% endif %}
                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Surname
                </dt>
                <dd id=\"shw1\">
                    {% if person.fatherssurname is empty %}
                        <br>
                    {% else %}
                        {{ person.fatherssurname }}
                    {% endif %}
                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    {% if person.fathersJob is empty %}
                        <br>
                    {% else %}
                        {{ person.fathersJob }}
                    {% endif %}
                </dd>



                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    {% if person.fathersphoneNr is empty %}
                        <br>
                    {% else %}
                        {{ person.fathersphoneNr }}
                    {% endif %}
                </dd>

            </dl>
        </div>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Mother's Name
                </dt>
                <dd id=\"shw1\">
                    {% if person.mothersname is empty %}
                        <br>
                    {% else %}
                        {{ person.mothersname }}
                    {% endif %}
                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Mothers's Surname
                </dt>
                <dd id=\"shw1\">
                    {% if person.motherssurname is empty %}
                        <br>
                    {% else %}
                        {{ person.motherssurname }}
                    {% endif %}
                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    {% if person.mothersJob is empty %}
                        <br>
                    {% else %}
                        {{ person.mothersJob }}
                    {% endif %}
                </dd>



                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    {% if person.mothersphoneNr is empty %}
                        <br>
                    {% else %}
                        {{ person.mothersphoneNr }}
                    {% endif %}
                </dd>

            </dl>


        </div>


        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Parent Marital Status
                </dt>
                <dd id=\"shw1\">
                    {% if person.parentMaritStatus is empty %}
                        <br>
                    {% else %}
                        {{ person.parentMaritStatus }}
                    {% endif %}
                </dd>
            </dl>
        </div>

    </div>



{% endblock %}































", "@App/student_page/show_info_stud.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/show_info_stud.html.twig");
    }
}
