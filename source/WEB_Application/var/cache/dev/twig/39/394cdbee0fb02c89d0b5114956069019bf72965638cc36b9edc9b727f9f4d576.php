<?php

/* @App/director_pages/info_show.html.twig */
class __TwigTemplate_d71253750bc2798fc0f665dcc984d36d3114e782279d69c30af49ae6d30296f8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/info_show.html.twig", 1);
        $this->blocks = array(
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/info_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/director_pages/info_show.html.twig"));

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
        echo "     <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
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

    ";
        // line 55
        echo "    <div class=\"space-maker col-md-12\">


        <h3 class='title-application'> </h3>

        <div class=\"position_0\" >
            <dl id=\"p_info\">

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    User mode
                </dt>
                <dd id=\"shw\">
                    ";
        // line 68
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 68, $this->source); })()), "type", array())), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Card Id
                </dt>
                <dd id=\"shw\">
                    ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 76, $this->source); })()), "cardId", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Email
                </dt>
                <dd id=\"shw\">
                    ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 84, $this->source); })()), "email", array()), "html", null, true);
        echo "
                </dd>



                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Phone Nr.
                </dt>
                <dd id=\"shw\">
                    ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 94, $this->source); })()), "phoneNr", array()), "html", null, true);
        echo "
                </dd>


                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Nationality
                </dt>
                <dd id=\"shw\">
                    ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 103, $this->source); })()), "nationality", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    City
                </dt>
                <dd id=\"shw\">
                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 111, $this->source); })()), "city", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Birthday
                </dt>
                <dd id=\"shw\">
                    ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 119, $this->source); })()), "birthday", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Address
                </dt>
                <dd id=\"shw\">
                    ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 127, $this->source); })()), "address", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Department
                </dt>
                <dd id=\"shw\">
                    ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 135, $this->source); })()), "department", array()), "html", null, true);
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
        // line 154
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 154, $this->source); })()), "fathersname", array()))) {
            // line 155
            echo "                        <br>
                    ";
        } else {
            // line 157
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 157, $this->source); })()), "fathersname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 159
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Surname
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 167
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 167, $this->source); })()), "fatherssurname", array()))) {
            // line 168
            echo "                        <br>
                    ";
        } else {
            // line 170
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 170, $this->source); })()), "fatherssurname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 172
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 180
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 180, $this->source); })()), "fathersJob", array()))) {
            // line 181
            echo "                        <br>
                    ";
        } else {
            // line 183
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 183, $this->source); })()), "fathersJob", array()), "html", null, true);
            echo "
                    ";
        }
        // line 185
        echo "                </dd>



                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 194
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 194, $this->source); })()), "fathersphoneNr", array()))) {
            // line 195
            echo "                        <br>
                    ";
        } else {
            // line 197
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 197, $this->source); })()), "fathersphoneNr", array()), "html", null, true);
            echo "
                    ";
        }
        // line 199
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
        // line 212
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 212, $this->source); })()), "mothersname", array()))) {
            // line 213
            echo "                        <br>
                    ";
        } else {
            // line 215
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 215, $this->source); })()), "mothersname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 217
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Mothers's Surname
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 225
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 225, $this->source); })()), "motherssurname", array()))) {
            // line 226
            echo "                        <br>
                    ";
        } else {
            // line 228
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 228, $this->source); })()), "motherssurname", array()), "html", null, true);
            echo "
                    ";
        }
        // line 230
        echo "                </dd>


                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 238
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 238, $this->source); })()), "mothersJob", array()))) {
            // line 239
            echo "                        <br>
                    ";
        } else {
            // line 241
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 241, $this->source); })()), "mothersJob", array()), "html", null, true);
            echo "
                    ";
        }
        // line 243
        echo "                </dd>



                <dt id=\"shw1\">
                    <span class=\"middle_con1\"></span>
                    Father's Profession
                </dt>
                <dd id=\"shw1\">
                    ";
        // line 252
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 252, $this->source); })()), "mothersphoneNr", array()))) {
            // line 253
            echo "                        <br>
                    ";
        } else {
            // line 255
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 255, $this->source); })()), "mothersphoneNr", array()), "html", null, true);
            echo "
                    ";
        }
        // line 257
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
        // line 273
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 273, $this->source); })()), "parentMaritStatus", array()))) {
            // line 274
            echo "                        <br>
                    ";
        } else {
            // line 276
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new Twig_Error_Runtime('Variable "person" does not exist.', 276, $this->source); })()), "parentMaritStatus", array()), "html", null, true);
            echo "
                    ";
        }
        // line 278
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
        return "@App/director_pages/info_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 278,  515 => 276,  511 => 274,  509 => 273,  491 => 257,  485 => 255,  481 => 253,  479 => 252,  468 => 243,  462 => 241,  458 => 239,  456 => 238,  446 => 230,  440 => 228,  436 => 226,  434 => 225,  424 => 217,  418 => 215,  414 => 213,  412 => 212,  397 => 199,  391 => 197,  387 => 195,  385 => 194,  374 => 185,  368 => 183,  364 => 181,  362 => 180,  352 => 172,  346 => 170,  342 => 168,  340 => 167,  330 => 159,  324 => 157,  320 => 155,  318 => 154,  296 => 135,  285 => 127,  274 => 119,  263 => 111,  252 => 103,  240 => 94,  227 => 84,  216 => 76,  205 => 68,  190 => 55,  181 => 48,  176 => 46,  171 => 43,  166 => 39,  160 => 37,  154 => 35,  152 => 34,  140 => 26,  134 => 21,  125 => 20,  114 => 17,  105 => 16,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  76 => 9,  67 => 8,  56 => 5,  47 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/director_pages/index.html.twig\" %}


{% block showUser %}

{% endblock %}

{% block navbar %}
     <li><a href=\"{{ path('redirect_pages') }}\">Home</a></li>
    <li><a href=\"{{ path('manage_assistants') }}\">Assistants</a></li>
    <li><a href=\"{{ path('student_performances') }}\">Student Performances</a></li>
    <li><a href=\"{{ path('technical_problems') }}\">Tech Problems</a></li>
    <li><a href=\"{{ path('applicants_show') }}\">Applicants</a></li>
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

    {#  show details related to every person ( use the intern project ' show details page ')  #}
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































", "@App/director_pages/info_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/info_show.html.twig");
    }
}
