<?php

/* @App/login.html.twig */
class __TwigTemplate_a50a6c29f17e550311930a360151c415d9eb4f51d0cc3b3569441879d774a52d extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        if (($context["error"] ?? null)) {
            // line 77
            echo "
                <div class=\"col-md-4 col-md-offset-4\" style=\"background-color: red; color: white;\">
                    ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>

            ";
        }
        // line 83
        echo "

          <div class=\"col-md-4 col-md-offset-4\">

            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

              <div class=\"form-group\">
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", array()), 'row');
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", array()), 'row');
        echo "
              </div>

              <button type=\"submit\" class=\"btn btn-default btn-block\">Login</button>

            ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 118
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  229 => 121,  225 => 120,  220 => 119,  217 => 118,  210 => 15,  206 => 14,  202 => 13,  199 => 12,  196 => 11,  188 => 123,  186 => 118,  175 => 109,  173 => 108,  171 => 107,  161 => 99,  153 => 94,  146 => 90,  140 => 87,  134 => 83,  127 => 79,  123 => 77,  121 => 76,  108 => 65,  104 => 63,  86 => 48,  82 => 47,  78 => 46,  74 => 45,  69 => 42,  67 => 41,  65 => 40,  42 => 18,  40 => 11,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/login.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/login.html.twig");
    }
}
