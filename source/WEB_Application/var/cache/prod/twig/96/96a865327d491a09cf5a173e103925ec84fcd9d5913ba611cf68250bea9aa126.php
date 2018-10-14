<?php

/* @App/director_pages/profile_edit.html.twig */
class __TwigTemplate_eb88d2601ab16b78d663712fa741c46976cee4e91b7cf72c4d850046faeba7fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("@App/director_pages/index.html.twig", "@App/director_pages/profile_edit.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'showUser' => array($this, 'block_showUser'),
            'navbar' => array($this, 'block_navbar'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'left_group' => array($this, 'block_left_group'),
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
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
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
    }

    // line 15
    public function block_showUser($context, array $blocks = array())
    {
        // line 16
        echo "
";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        // line 22
        echo "    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_assistants");
        echo "\">Assistants</a></li>
    <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_performances");
        echo "\">Student Performances</a></li>
    <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_problems");
        echo "\">Tech Problems</a></li>
    <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\">Applicants</a></li>
    <li class=\"active\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>

";
    }

    // line 32
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 33
        echo "
    <li>/<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("redirect_pages");
        echo "\">Home</a></li>
    <li>/<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\">Profile</a></li>
    <li class=\"active\">/<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_edit_profile");
        echo "\">Edit Profile</a></li>

";
    }

    // line 41
    public function block_left_group($context, array $blocks = array())
    {
        // line 42
        echo "    <a href=\"#\" class=\"list-group-item active main-color-bg\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Manage
    </a>

    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applicants_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Applicants <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["applicants"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dormitory_members");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Members <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Events <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["events"] ?? null), "html", null, true);
        echo "</span></a>
    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("camera_show");
        echo "\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-camera\" aria-hidden=\"true\"></span> Entrance Security </a>

";
    }

    // line 55
    public function block_page_title($context, array $blocks = array())
    {
        // line 56
        echo "    <h1><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>Profile <small>Dorm Management System</small></h1>
";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
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
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "


                        <div  id=\"first-part_application-form\">

                            <div class=\"top-button-group\">
                                <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("director_show_profile");
        echo "\" class=\"button-style btn btn-warning top-button\">Back</a>
                            </div>


                            <h4 class=\"title-application\"> Your Information </h4>

                            <div class=\"space-maker\">
                                ";
        // line 86
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 87
            echo "                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 89
            echo "                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" />
                                ";
        }
        // line 91
        echo "

                            </div>

                            <div class=\"form-group\">
                                ";
        // line 96
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 97
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), 'row');
            echo "
                                ";
        }
        // line 99
        echo "                            </div>

                            <div id='msg-upload' class=\"hidden messages alert alert-danger\" role=\"alert\">
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_id", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationality", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNr", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "department", array()), 'row');
        echo "
                            </div>


                            <div class=\"space-maker\"></div>

                            <h4 class=\"title-application\"> Family Information </h4>

                            <div class=\"form-group\">
                                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersName", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersSurname", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersJob", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersphoneNr", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersName", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersSurname", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersJob", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersphoneNr", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parentMaritStatus", array()), 'row');
        echo "
                            </div>



                            <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

                        </div>


                        ";
        // line 203
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

                        ";
        // line 206
        echo "                        ";
        // line 207
        echo "                        ";
        // line 208
        echo "                        ";
        // line 209
        echo "                        ";
        // line 210
        echo "                        ";
        // line 211
        echo "                        ";
        // line 212
        echo "                        ";
        // line 213
        echo "                        ";
        // line 214
        echo "                    </div>

                    ";
        // line 217
        echo "                        ";
        // line 218
        echo "                            ";
        // line 219
        echo "                        ";
        // line 220
        echo "                        ";
        // line 221
        echo "                            ";
        // line 222
        echo "                        ";
        // line 223
        echo "                    ";
        // line 224
        echo "                </div>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@App/director_pages/profile_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 224,  441 => 223,  439 => 222,  437 => 221,  435 => 220,  433 => 219,  431 => 218,  429 => 217,  425 => 214,  423 => 213,  421 => 212,  419 => 211,  417 => 210,  415 => 209,  413 => 208,  411 => 207,  409 => 206,  404 => 203,  391 => 193,  383 => 188,  375 => 183,  367 => 178,  360 => 174,  352 => 169,  344 => 164,  336 => 159,  329 => 155,  317 => 146,  310 => 142,  303 => 138,  296 => 134,  289 => 130,  282 => 126,  275 => 122,  268 => 118,  261 => 114,  254 => 110,  247 => 106,  238 => 99,  232 => 97,  230 => 96,  223 => 91,  217 => 89,  211 => 87,  209 => 86,  199 => 79,  190 => 73,  176 => 61,  173 => 60,  168 => 56,  165 => 55,  158 => 49,  152 => 48,  146 => 47,  140 => 46,  134 => 42,  131 => 41,  124 => 36,  120 => 35,  116 => 34,  113 => 33,  110 => 32,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  82 => 22,  79 => 21,  74 => 16,  71 => 15,  65 => 12,  61 => 11,  56 => 10,  53 => 9,  47 => 6,  42 => 5,  39 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/director_pages/profile_edit.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/director_pages/profile_edit.html.twig");
    }
}
