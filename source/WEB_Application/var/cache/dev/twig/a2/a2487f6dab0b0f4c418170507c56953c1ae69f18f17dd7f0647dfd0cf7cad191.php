<?php

/* @App/login.html.twig */
class __TwigTemplate_b7a4e5f86ec479da50a2a1e061602840510a217e8c2ca5afb07e769566782380 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</title>
    <!-- Bootstrap core CSS -->

      ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
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

              <a class=\"navbar-brand\" href=\"#\">Epoka Dormitory Management System</a>

          </div>
          ";
        // line 40
        echo "          ";
        // line 41
        echo "          ";
        // line 42
        echo "
          <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                  <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
                  <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("information");
        echo "\">Information</a></li>
                  <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dorm_application");
        echo "\">Apply</a></li>
                  <li class=\"active\"><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li>
              </ul>

          </div><!--/.nav-collapse -->


      </div>
  </nav>

    <header id=\"header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <h1 class=\"text-center\">

                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ts_icon.svg"), "html", null, true);
        echo "\" class=\"logo-image\" />
                ";
        // line 65
        echo "            </h1>
          </div>
        </div>
      </div>
    </header>

    <section id=\"main\">
      <div class=\"container\">
        <div class=\"row\">


            ";
        // line 76
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "
                <div class=\"col-md-4 col-md-offset-4\" style=\"background-color: red; color: white;\">
                    ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 79, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 79, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>

            ";
        }
        // line 83
        echo "

          <div class=\"col-md-4 col-md-offset-4\">

            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), 'form_start');
        echo "

              <div class=\"form-group\">
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "username", array()), 'row');
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "password", array()), 'row');
        echo "
              </div>

              <button type=\"submit\" class=\"btn btn-default btn-block\">Login</button>

            ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "

          </div>
        </div>
      </div>
    </section>

    ";
        // line 107
        echo "      ";
        // line 108
        echo "    ";
        // line 109
        echo "
  <script>
     CKEDITOR.replace( 'editor1' );
  </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    ";
        // line 118
        $this->displayBlock('javascript', $context, $blocks);
        // line 123
        echo "

  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/coming-soon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 119
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 121,  255 => 120,  250 => 119,  241 => 118,  228 => 15,  224 => 14,  220 => 13,  217 => 12,  208 => 11,  194 => 123,  192 => 118,  181 => 109,  179 => 108,  177 => 107,  167 => 99,  159 => 94,  152 => 90,  146 => 87,  140 => 83,  133 => 79,  129 => 77,  127 => 76,  114 => 65,  110 => 63,  92 => 48,  88 => 47,  84 => 46,  80 => 45,  75 => 42,  73 => 41,  71 => 40,  48 => 18,  46 => 11,  40 => 8,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{{ title }}</title>
    <!-- Bootstrap core CSS -->

      {% block stylesheet %}

          <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
          <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
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

              <a class=\"navbar-brand\" href=\"#\">Epoka Dormitory Management System</a>

          </div>
          {#<div id=\"navbar\" class=\"collapse navbar-collapse \">#}
          {#<a class=\"nav navbar-nav\" href=\"#\" > sa </a>#}
          {#</div><!--/.nav-collapse -->#}

          <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                  <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                  <li><a href=\"{{ path('information') }}\">Information</a></li>
                  <li><a href=\"{{ path('dorm_application') }}\">Apply</a></li>
                  <li class=\"active\"><a href=\"{{ path('login') }}\">Login</a></li>
              </ul>

          </div><!--/.nav-collapse -->


      </div>
  </nav>

    <header id=\"header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <h1 class=\"text-center\">

                <img src=\"{{ asset('assets/images/ts_icon.svg') }}\" class=\"logo-image\" />
                {#EDMS <small>Account Login</small>#}
            </h1>
          </div>
        </div>
      </div>
    </header>

    <section id=\"main\">
      <div class=\"container\">
        <div class=\"row\">


            {% if error %}

                <div class=\"col-md-4 col-md-offset-4\" style=\"background-color: red; color: white;\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>

            {% endif %}


          <div class=\"col-md-4 col-md-offset-4\">

            {{ form_start(form) }}

              <div class=\"form-group\">
                {{ form_row(form.username) }}
              </div>

              <div class=\"form-group\">
                {{ form_row(form.password) }}
              </div>

              <button type=\"submit\" class=\"btn btn-default btn-block\">Login</button>

            {{ form_end(form) }}

          </div>
        </div>
      </div>
    </section>

    {#<footer id=\"footer\">#}
      {#<p>Copyright EDMS Group, &copy {{ 'now'|date('Y') }} </p>#}
    {#</footer>#}

  <script>
     CKEDITOR.replace( 'editor1' );
  </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    {% block javascript %}
        <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/ckeditor.js') }}\"></script>
    {% endblock %}


  </body>
</html>
", "@App/login.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/login.html.twig");
    }
}
