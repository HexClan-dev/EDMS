<?php

/* @App/student_page/show_info_stud.html.twig */
class __TwigTemplate_927a0ab13be420ec7b0023056271b48491316864ff97d46ef8a8c60cd066fa36 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "type", array())), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Card Id
                </dt>
                <dd id=\"shw\">
                    ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "cardId", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Email
                </dt>
                <dd id=\"shw\">
                    ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "email", array()), "html", null, true);
        echo "
                </dd>



                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Phone Nr.
                </dt>
                <dd id=\"shw\">
                    ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "phoneNr", array()), "html", null, true);
        echo "
                </dd>


                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Nationality
                </dt>
                <dd id=\"shw\">
                    ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "nationality", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    City
                </dt>
                <dd id=\"shw\">
                    ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "city", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Birthday
                </dt>
                <dd id=\"shw\">
                    ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "birthday", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Address
                </dt>
                <dd id=\"shw\">
                    ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address", array()), "html", null, true);
        echo "
                </dd>

                <dt id=\"shw\">
                    <span class=\"middle_con\"></span>
                    Department
                </dt>
                <dd id=\"shw\">
                    ";
        // line 134
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
        // line 153
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersname", array()))) {
            // line 154
            echo "                        <br>
                    ";
        } else {
            // line 156
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fatherssurname", array()))) {
            // line 167
            echo "                        <br>
                    ";
        } else {
            // line 169
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fatherssurname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersJob", array()))) {
            // line 180
            echo "                        <br>
                    ";
        } else {
            // line 182
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersJob", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersphoneNr", array()))) {
            // line 194
            echo "                        <br>
                    ";
        } else {
            // line 196
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "fathersphoneNr", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersname", array()))) {
            // line 212
            echo "                        <br>
                    ";
        } else {
            // line 214
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "motherssurname", array()))) {
            // line 225
            echo "                        <br>
                    ";
        } else {
            // line 227
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "motherssurname", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersJob", array()))) {
            // line 238
            echo "                        <br>
                    ";
        } else {
            // line 240
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersJob", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersphoneNr", array()))) {
            // line 252
            echo "                        <br>
                    ";
        } else {
            // line 254
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "mothersphoneNr", array()), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "parentMaritStatus", array()))) {
            // line 273
            echo "                        <br>
                    ";
        } else {
            // line 275
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "parentMaritStatus", array()), "html", null, true);
            echo "
                    ";
        }
        // line 277
        echo "                </dd>
            </dl>
        </div>

    </div>



";
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
        return array (  465 => 277,  459 => 275,  455 => 273,  453 => 272,  435 => 256,  429 => 254,  425 => 252,  423 => 251,  412 => 242,  406 => 240,  402 => 238,  400 => 237,  390 => 229,  384 => 227,  380 => 225,  378 => 224,  368 => 216,  362 => 214,  358 => 212,  356 => 211,  341 => 198,  335 => 196,  331 => 194,  329 => 193,  318 => 184,  312 => 182,  308 => 180,  306 => 179,  296 => 171,  290 => 169,  286 => 167,  284 => 166,  274 => 158,  268 => 156,  264 => 154,  262 => 153,  240 => 134,  229 => 126,  218 => 118,  207 => 110,  196 => 102,  184 => 93,  171 => 83,  160 => 75,  149 => 67,  127 => 48,  122 => 46,  117 => 43,  112 => 39,  106 => 37,  100 => 35,  98 => 34,  86 => 26,  80 => 21,  77 => 20,  72 => 17,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  46 => 9,  43 => 8,  38 => 5,  35 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/student_page/show_info_stud.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/student_page/show_info_stud.html.twig");
    }
}
