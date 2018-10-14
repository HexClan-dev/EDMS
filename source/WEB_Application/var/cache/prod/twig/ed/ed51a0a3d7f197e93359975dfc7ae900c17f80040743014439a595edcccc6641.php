<?php

/* @App/default/index.html.twig */
class __TwigTemplate_f5b3da4c6d24f2b5cd56df8c0790bfa8b7cd62ac4d399e735e20d64a5865288e extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
    }

    // line 16
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 56
    public function block_navbar($context, array $blocks = array())
    {
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
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "

            <div class=\"container\">
                <div class=\"\" id=\"messages\">
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
    }

    // line 157
    public function block_javascript($context, array $blocks = array())
    {
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
    }

    // line 169
    public function block_script_B($context, array $blocks = array())
    {
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
        return array (  335 => 178,  331 => 177,  322 => 170,  319 => 169,  313 => 164,  310 => 163,  308 => 162,  306 => 161,  302 => 159,  297 => 158,  294 => 157,  257 => 118,  231 => 93,  225 => 92,  218 => 90,  212 => 87,  209 => 86,  207 => 85,  204 => 84,  198 => 81,  195 => 80,  193 => 79,  190 => 78,  185 => 77,  181 => 76,  175 => 72,  172 => 71,  166 => 60,  162 => 59,  158 => 58,  153 => 57,  150 => 56,  142 => 30,  138 => 29,  135 => 28,  129 => 21,  125 => 19,  121 => 18,  118 => 17,  115 => 16,  107 => 187,  105 => 169,  101 => 167,  99 => 157,  90 => 150,  88 => 71,  77 => 62,  75 => 56,  67 => 50,  50 => 34,  48 => 16,  41 => 13,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/default/index.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
