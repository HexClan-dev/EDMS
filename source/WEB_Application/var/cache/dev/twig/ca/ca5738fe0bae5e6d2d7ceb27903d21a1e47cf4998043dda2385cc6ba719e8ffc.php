<?php

/* @App/default/index.html.twig */
class __TwigTemplate_d43af01fd259cc89e2b85a6fbeb7e63d0476787395981c1967f95a9001ed45dd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'script_B' => array($this, 'block_script_B'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    ";
        // line 13
        echo "    <title>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</title>
    <!-- Bootstrap core CSS -->

    ";
        // line 16
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 34
        echo "
</head>

<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">
                    Epoka Dormitory Management System
                    ";
        // line 50
        echo "                </a>
            </div>

            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">

                    ";
        // line 56
        $this->displayBlock('navbar', $context, $blocks);
        // line 62
        echo "
                </ul>

            </div><!--/.nav-collapse -->

        </div>
    </nav>


        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

";
        // line 157
        $this->displayBlock('javascript', $context, $blocks);
        // line 167
        echo "

";
        // line 169
        $this->displayBlock('script_B', $context, $blocks);
        // line 187
        echo "

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 17
        echo "
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 21
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\"> 
        ";
        // line 28
        echo "
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/coming-soon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 57
        echo "                        <li class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("information");
        echo "\">Information</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dorm_application");
        echo "\">Apply</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "

            <div class=\"container\">
                <div class=\"\" id=\"messages\">
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 77
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 78
                echo "
                            ";
                // line 79
                if (($context["type"] == "success")) {
                    // line 80
                    echo "                                <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                                    ";
                    // line 81
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                // line 84
                echo "
                            ";
                // line 85
                if (($context["type"] == "failure")) {
                    // line 86
                    echo "                                <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                    ";
                    // line 87
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                // line 90
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </div>
            </div>

        <div class=\"overlay\"></div>

            <div class=\"masthead\">
                <div class=\"masthead-bg\"></div>
                <div class=\"continer h-100\">
                    <div class=\"h-100\">
                        <div class=\"col-12 my-auto\">
                            <div class=\"masthead-content text-white py-5 py-md-0\">


                                <div class=\"col-md-12\">
                                    <h1>Welcome to Epoka Dormitory Management System</h1>

                                    <h6>We're working hard to finish the development of this site. Our target launch date is
                                       <strong>12-06-2019</strong></h6>
                                   <div class=\"space-maker\"></div>
                                    <h2><small  style=\"color:lightcoral;\"> The Application for the Dormitory <b>had started!</b></small></h2>
                                    <h2><small  style=\"color:lightcoral;\"> <b>Apply now</b> for this academic semester!</small></h2>
                                   <div class=\"space-maker\"></div>
                                   <div class=\"input-group input-group-newsletter\">

                                           ";
        // line 118
        echo "                                           <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dorm_application");
        echo "\" class=\"show_pointer btn-lg btn-secondary\">Apply Now !</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"social-icons\">
                <ul class=\"list-unstyled text-center mb-0\">
                    <li class=\"list-unstyled-item\">
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                    </li>
                    <li class=\"list-unstyled-item\">
                        <a href=\"#\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                    </li>
                    <li class=\"list-unstyled-item\">
                        <a href=\"#\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                    </li>
                </ul>
            </div>



        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 158
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 161
        echo "    ";
        // line 162
        echo "    ";
        // line 163
        echo "
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.vide.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_script_B($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_B"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_B"));

        // line 170
        echo "
    <script>
        (function(\$) {
            // \"use strict\"; // Start of use strict

            // Vide - Video Background Settings
            \$('body').vide({
                mp4: \"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mp4/ep.mp4"), "html", null, true);
        echo "\",
                poster: \"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wb.jpg"), "html", null, true);
        echo "\"
            }, {
                posterType: 'jpg'
            });

        })(jQuery); // End of use strict
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 178,  397 => 177,  388 => 170,  379 => 169,  367 => 164,  364 => 163,  362 => 162,  360 => 161,  356 => 159,  351 => 158,  342 => 157,  299 => 118,  273 => 93,  267 => 92,  260 => 90,  254 => 87,  251 => 86,  249 => 85,  246 => 84,  240 => 81,  237 => 80,  235 => 79,  232 => 78,  227 => 77,  223 => 76,  217 => 72,  208 => 71,  196 => 60,  192 => 59,  188 => 58,  183 => 57,  174 => 56,  160 => 30,  156 => 29,  153 => 28,  147 => 21,  143 => 19,  139 => 18,  136 => 17,  127 => 16,  113 => 187,  111 => 169,  107 => 167,  105 => 157,  96 => 150,  94 => 71,  83 => 62,  81 => 56,  73 => 50,  56 => 34,  54 => 16,  47 => 13,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    {#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">#}
    <title>{{ title }}</title>
    <!-- Bootstrap core CSS -->

    {% block stylesheet %}

        <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
        {#<link href=\"{{ asset('assets/css/slider_with_content.css') }}\" rel=\"stylesheet\">#}

        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\"> 
        {# 
            font-family: 'Montserrat', sans-serif;
        #}

        <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/coming-soon.css') }}\" rel=\"stylesheet\">


    {% endblock %}

</head>

<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">
                    Epoka Dormitory Management System
                    {#<img style=\"\" src=\"{{ asset('assets/images/edms.png') }}\" height=\"100px\">#}
                </a>
            </div>

            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">

                    {% block navbar %}
                        <li class=\"active\"><a href=\"{{ path('homepage') }}\">Home</a></li>
                        <li><a href=\"{{ path('information') }}\">Information</a></li>
                        <li><a href=\"{{ path('dorm_application') }}\">Apply</a></li>
                        <li><a href=\"{{ path('login') }}\">Login</a></li>
                    {% endblock %}

                </ul>

            </div><!--/.nav-collapse -->

        </div>
    </nav>


        {% block body %}


            <div class=\"container\">
                <div class=\"\" id=\"messages\">
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}

                            {% if type == 'success' %}
                                <div id=\"alert-box\" class=\"messages alert alert-success\" role=\"alert\">
                                    {{ message }}
                                </div>
                            {% endif %}

                            {% if type == 'failure' %}
                                <div id=\"alert-box\" class=\"messages alert alert-danger\" role=\"alert\">
                                    {{ message }}
                                </div>
                            {% endif %}

                        {% endfor %}
                    {% endfor %}
                </div>
            </div>

        <div class=\"overlay\"></div>

            <div class=\"masthead\">
                <div class=\"masthead-bg\"></div>
                <div class=\"continer h-100\">
                    <div class=\"h-100\">
                        <div class=\"col-12 my-auto\">
                            <div class=\"masthead-content text-white py-5 py-md-0\">


                                <div class=\"col-md-12\">
                                    <h1>Welcome to Epoka Dormitory Management System</h1>

                                    <h6>We're working hard to finish the development of this site. Our target launch date is
                                       <strong>12-06-2019</strong></h6>
                                   <div class=\"space-maker\"></div>
                                    <h2><small  style=\"color:lightcoral;\"> The Application for the Dormitory <b>had started!</b></small></h2>
                                    <h2><small  style=\"color:lightcoral;\"> <b>Apply now</b> for this academic semester!</small></h2>
                                   <div class=\"space-maker\"></div>
                                   <div class=\"input-group input-group-newsletter\">

                                           {#class=\"btn btn-secondary\" type=\"button\"#}
                                           <a href=\"{{ path('dorm_application') }}\" class=\"show_pointer btn-lg btn-secondary\">Apply Now !</a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"social-icons\">
                <ul class=\"list-unstyled text-center mb-0\">
                    <li class=\"list-unstyled-item\">
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                    </li>
                    <li class=\"list-unstyled-item\">
                        <a href=\"#\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                    </li>
                    <li class=\"list-unstyled-item\">
                        <a href=\"#\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                    </li>
                </ul>
            </div>



        {% endblock %}



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

{% block javascript %}
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    {#<script src=\"{{ asset('assets/js/ckeditor.js') }}\"></script>#}
    {#<script src=\"{{ asset('assets/js/slider_with_content.js') }}\"></script>#}
    {#<script src=\"vendor/vide/jquery.vide.min.js\"></script>#}

    <script src=\"{{ asset('assets/js/jquery.vide.min.js') }}\"></script>
    {#<script src=\"{{ asset('assets/js/coming-soon.min.js') }}\"></script>#}
{% endblock %}


{% block script_B %}

    <script>
        (function(\$) {
            // \"use strict\"; // Start of use strict

            // Vide - Video Background Settings
            \$('body').vide({
                mp4: \"{{ asset('assets/mp4/ep.mp4') }}\",
                poster: \"{{ asset('assets/images/wb.jpg') }}\"
            }, {
                posterType: 'jpg'
            });

        })(jQuery); // End of use strict
    </script>

{% endblock %}


</body>
</html>
", "@App/default/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
