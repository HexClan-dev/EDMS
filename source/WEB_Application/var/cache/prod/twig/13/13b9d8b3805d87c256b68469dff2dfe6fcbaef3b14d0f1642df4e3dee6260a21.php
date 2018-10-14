<?php

/* @App/default/application_page.html.twig */
class __TwigTemplate_a2337cf3ee67b5388928dd3c0c30cdc82db87ab6ae78fc2e582685a571dfb220 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
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
    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
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
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_id", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationality", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "department", array()), 'row');
        echo "
                </div>

                <hr>
                <div class=\"space-maker\"></div>
                <h4 class=\"title-application\"> Family Information </h4>

                <div class=\"form-group\">
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersName", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersSurname", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersJob", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fathersPhoneNumber", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersName", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersSurname", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersJob", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mothersPhoneNumber", array()), 'row');
        echo "
                </div>


                <div class=\"form-group\">
                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "maritalStatus", array()), 'row');
        echo "
                </div>



                <button type=\"submit\" class=\"btn btn-default btn-block\">Apply</button>

            </div>


            ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div>


    </div>

    <div class=\"space-maker\"></div>

";
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
        return array (  319 => 177,  306 => 167,  298 => 162,  290 => 157,  282 => 152,  275 => 148,  267 => 143,  259 => 138,  251 => 133,  244 => 129,  233 => 121,  226 => 117,  219 => 113,  212 => 109,  205 => 105,  198 => 101,  191 => 97,  184 => 93,  177 => 89,  170 => 85,  163 => 81,  153 => 74,  142 => 66,  104 => 30,  101 => 29,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  79 => 20,  76 => 19,  69 => 14,  65 => 13,  61 => 12,  56 => 11,  53 => 10,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/default/application_page.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/default/application_page.html.twig");
    }
}
