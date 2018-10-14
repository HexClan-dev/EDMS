<?php

/* @App/default/information.html.twig */
class __TwigTemplate_2602f3b429bce56c5d00b8d937662ab45521c2ccb1eefd6097c2d977816c767c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "@App/default/information.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'script_B' => array($this, 'block_script_B'),
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

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "

     ";
        // line 8
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

     <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">
     ";
        // line 13
        echo "
     <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i\" rel=\"stylesheet\">
     <link href=\"https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\">
     <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">

     <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     ";
        // line 20
        echo "

";
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "

";
    }

    // line 30
    public function block_navbar($context, array $blocks = array())
    {
        // line 31
        echo "   <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
   <li class=\"active\"><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("information");
        echo "\">Information</a></li>
   <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dorm_application");
        echo "\">Apply</a></li>
   <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li>
";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "



    <body class=\"w3-light-grey\">

    <!-- w3-content defines a container for fixed size centered content,
    and is wrapped around the whole page content, except for the footer in this example -->
    <div class=\"w3-content\" style=\"max-width:1400px\">

        <!-- Header -->
        <header class=\"w3-container w3-center w3-padding-32\">
            <h1 style=\"color: black !important\"><b>EPOKA DORMITORY</b></h1>

        </header>

        <!-- Grid -->
        <div class=\"row\">

            <!-- Blog entries -->
            <div class=\"col-lg-8 col-sm-12\">
                <!-- Blog entry -->
                <div class=\"w3-card-4 w3-margin w3-white\">
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ed.png"), "html", null, true);
        echo "\" alt=\"Nature\" style=\"width:100%\">
                    <div class=\"w3-container\">
                        <h1><b>Accommodation | Epoka Dormitory </b></h1>
                    </div>
                    <div class=\"w3-container\">
                            <p>
                                Part of the university experience and the setting of many fond memories
                                is the dormitory. The term “dormitory” in Albania may invoke a vast variety
                                of images in the minds of university graduates depending on their experiences
                                of dorm life and the physical setting of their experience.
                            </p>

                            <p>
                                For us, dormitories are an essential part of a proper university education
                                and a happy life at university, where friendships are made and where tolerance,
                                sharing, helping others, the art of living together in short is learned.
                            </p>

                            <p>
                                Our accommodation facilities are designed properly and students can gather
                                around for a friendly conversation or study in solitude, all within a friendship
                                atmosphere.
                            </p>

                            <p>
                                We believe that staying in a dormitory where all types of technological,
                                cultural and sportive facilities are offered under campus safety, will be a
                                best start for your academic life.
                            </p>


                            <p>
                                Rooms are built for 2 or 3 students and designed to allow their occupants to
                                study or sleep without outside disturbances – even when there are other occupants
                                in the room.
                            </p>


                            <p>
                                You will carry out your education in a safe and peaceful environment, away
                                from traffic, noise and disorder of the city. This is an issue on which the
                                university is highly sensitive. The warm friendship you will build with our
                                staff will make you feel at home.
                            </p>

                            <p>
                                We are continuing to do everything in the best possible way to make your
                                university years the most unforgettable years of your life.
                            </p>

                            <p>For more information please click <a href=\"https://dos.epoka.edu.al/home-accommodation-674-797.html\">here</a>.</p>
                    </div>
                    <div class=\"space-maker\"></div>
                </div>
                <hr>


            </div>

            <!-- Introduction menu -->
            <div class=\"w3-col l4\">
                <!-- About Card -->
                <div class=\"w3-card w3-margin w3-margin-top\">

                    <div class=\"w3-container w3-white\">
                        <h4><b>Why US ?</b></h4>
                        <ul>
                            <li>Max 3 persons per room</li>
                            <li>Study hall</li>
                            <li>Free wifi</li>
                            <li>Rest halls</li>
                            <li>Washhouse</li>
                            <li>24 hours hot water</li>
                            <li>Kitchens</li>
                            <li>Ironing room</li>
                            <li>TV</li>
                            <li>Dinner</li>
                        </ul>
                        <p>Epoka Dormitory is planed to provide our students a great and qualified accomodation and a healthier student life.
                            </p>
                    </div>
                </div><hr>



";
    }

    // line 150
    public function block_script_B($context, array $blocks = array())
    {
        // line 151
        echo "
";
    }

    public function getTemplateName()
    {
        return "@App/default/information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 151,  220 => 150,  130 => 62,  105 => 39,  102 => 38,  96 => 34,  92 => 33,  88 => 32,  83 => 31,  80 => 30,  74 => 25,  71 => 24,  65 => 20,  61 => 18,  54 => 13,  48 => 9,  43 => 8,  39 => 5,  36 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/default/information.html.twig", "/var/www/html/EDMS/src/AppBundle/Resources/views/default/information.html.twig");
    }
}
