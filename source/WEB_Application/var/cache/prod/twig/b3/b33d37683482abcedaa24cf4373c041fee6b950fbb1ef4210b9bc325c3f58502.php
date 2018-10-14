<?php

/* @App/director_pages/info_show.html.twig */
class __TwigTemplate_a8ebf8c7b9edfb016d49955056e0f6f1630f4b6d8af698adaa51522173421ff9 extends Twig_Template
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
    }

    // line 16
    public function block_page_title($context, array $blocks = array())
    {
        // line 17
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Information <small>Dorm Management System</small></h1>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "
    <!-- Latest Users -->

    <div class=\"top-button-group\">
        ";
        // line 26
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, ($context["back"] ?? null), "html", null, true);
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
    </div>

    <h3 class='title-application'> Member Information </h3>

    <div class=\"image_show col-md-12\">

        <div class=\"personal-details\">
            ";
        // line 34
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "image", array()))) {
            // line 35
            echo "                <img alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" />
            ";
        } else {
            // line 37
            echo "                <img alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "image", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "name", array()), "html", null, true);
        echo "</dd>
                <dt>Surname</dt>
                <dd class=\"left_position\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "surname", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "type", array())), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Card Id
                </dt>
                <dd id=\"shw\">
                    ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "cardId", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Email
                </dt>
                <dd id=\"shw\">
                    ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "email", array()), "html", null, true);
        echo "
                </dd>



                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Phone Nr.
                </dt>
                <dd id=\"shw\">
                    ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "phoneNr", array()), "html", null, true);
        echo "
                </dd>


                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Nationality
                </dt>
                <dd id=\"shw\">
                    ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "nationality", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    City
                </dt>
                <dd id=\"shw\">
                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "city", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Birthday
                </dt>
                <dd id=\"shw\">
                    ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "birthday", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Address
                </dt>
                <dd id=\"shw\">
                    ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Department
                </dt>
                <dd id=\"shw\">
                    ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "department", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersname", array()))) {
            // line 155
            echo "                        <br>
                    ";
        } else {
            // line 157
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fatherssurname", array()))) {
            // line 168
            echo "                        <br>
                    ";
        } else {
            // line 170
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fatherssurname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersJob", array()))) {
            // line 181
            echo "                        <br>
                    ";
        } else {
            // line 183
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersJob", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersphoneNr", array()))) {
            // line 195
            echo "                        <br>
                    ";
        } else {
            // line 197
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersphoneNr", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersname", array()))) {
            // line 213
            echo "                        <br>
                    ";
        } else {
            // line 215
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "motherssurname", array()))) {
            // line 226
            echo "                        <br>
                    ";
        } else {
            // line 228
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "motherssurname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersJob", array()))) {
            // line 239
            echo "                        <br>
                    ";
        } else {
            // line 241
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersJob", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersphoneNr", array()))) {
            // line 253
            echo "                        <br>
                    ";
        } else {
            // line 255
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersphoneNr", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "parentMaritStatus", array()))) {
            // line 274
            echo "                        <br>
                    ";
        } else {
            // line 276
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "parentMaritStatus", array()), "html", null, true);
            echo "
                    ";
        }
        // line 278
        echo "                </dd>
            </dl>
        </div>

    </div>



";
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
        return array (  467 => 278,  461 => 276,  457 => 274,  455 => 273,  437 => 257,  431 => 255,  427 => 253,  425 => 252,  414 => 243,  408 => 241,  404 => 239,  402 => 238,  392 => 230,  386 => 228,  382 => 226,  380 => 225,  370 => 217,  364 => 215,  360 => 213,  358 => 212,  343 => 199,  337 => 197,  333 => 195,  331 => 194,  320 => 185,  314 => 183,  310 => 181,  308 => 180,  298 => 172,  292 => 170,  288 => 168,  286 => 167,  276 => 159,  270 => 157,  266 => 155,  264 => 154,  242 => 135,  231 => 127,  220 => 119,  209 => 111,  198 => 103,  186 => 94,  173 => 84,  162 => 76,  151 => 68,  136 => 55,  127 => 48,  122 => 46,  117 => 43,  112 => 39,  106 => 37,  100 => 35,  98 => 34,  86 => 26,  80 => 21,  77 => 20,  72 => 17,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  46 => 9,  43 => 8,  38 => 5,  35 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/info_show.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/info_show.html.twig");
    }
}
