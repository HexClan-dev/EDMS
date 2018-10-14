<?php

/* @App/tech_pages/profile_edit.html.twig */
class __TwigTemplate_3ff64dba0574c31aa0473c3918bfc3b9621beed23638a0eaec35d5ed9cfadb04 extends Twig_Template
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

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
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
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 54
            echo "                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/person_images/default.png"), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 56
            echo "                                    <img id=\"img-preview\" alt=\"Profile picture\" class=\"img img-thumbnail profile-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/person_images/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))), "html", null, true);
            echo "\" />
                                ";
        }
        // line 58
        echo "

                            </div>

                            <div class=\"form-group\">
                                ";
        // line 63
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", array()))) {
            // line 64
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_id", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationality", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNr", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "department", array()), 'row');
        echo "
                            </div>


                            <div class=\"space-maker\">
                            </div>

                            <h4 class=\"title-application\"> Family Information </h4>

                            <div class=\"form-group\">
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersName", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersSurname", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersJob", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersphoneNr", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersName", array()), 'row');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersSurname", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersJob", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersphoneNr", array()), 'row');
        echo "
                            </div>


                            <div class=\"form-group\">
                                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parentMaritStatus", array()), 'row');
        echo "
                            </div>



                            <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

                        </div>


                        ";
        // line 167
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  359 => 188,  357 => 187,  355 => 186,  353 => 185,  351 => 184,  349 => 183,  347 => 182,  345 => 181,  341 => 178,  339 => 177,  337 => 176,  335 => 175,  333 => 174,  331 => 173,  329 => 172,  327 => 171,  325 => 170,  320 => 167,  307 => 157,  299 => 152,  291 => 147,  283 => 142,  276 => 138,  268 => 133,  260 => 128,  252 => 123,  245 => 119,  232 => 109,  225 => 105,  218 => 101,  211 => 97,  204 => 93,  197 => 89,  190 => 85,  183 => 81,  176 => 77,  169 => 73,  160 => 66,  154 => 64,  152 => 63,  145 => 58,  139 => 56,  133 => 54,  131 => 53,  121 => 46,  112 => 40,  98 => 28,  95 => 27,  88 => 22,  84 => 21,  79 => 20,  76 => 19,  71 => 16,  68 => 15,  62 => 12,  58 => 11,  53 => 10,  50 => 9,  44 => 6,  39 => 5,  36 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/tech_pages/profile_edit.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/tech_pages/profile_edit.html.twig");
    }
}
