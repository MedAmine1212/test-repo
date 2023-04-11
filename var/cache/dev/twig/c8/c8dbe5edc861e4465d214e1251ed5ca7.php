<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b9d5eee1d542469374b3e8782f7c07a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>Adminto - Responsive Bootstrap 4 Landing Page Template</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\"/>
\t\t<meta content=\"Coderthemes\" name=\"author\"/>
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

\t\t<!-- App favicon -->
\t\t<link
\t\trel=\"shortcut icon\" href=\"images/favicon.ico\">

\t\t<!-- Bootstrap core CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">

\t\t<!--Material Icon -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/materialdesignicons.min.css\"/>

\t\t<!--pe-7 Icon -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/pe-icon-7-stroke.css\"/>

\t\t<!-- Custom  sCss -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"/>

\t</head>


\t<body
\t\tdata-bs-spy=\"scroll\" data-bs-target=\".navbar\" data-bs-offset=\"58\" class=\"scrollspy-example\">

\t\t<!--Navbar Start-->
\t\t";
        // line 38
        $this->displayBlock('nav', $context, $blocks);
        // line 80
        echo "\t\t<!-- Navbar End -->
\t\t";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 928
        echo "\t\t\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 993
        echo "\t\t\t\t<!-- Back to top -->
\t\t\t\t<a href=\"#\" class=\"back-to-top\" id=\"back-to-top\">
\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t</a>

\t\t\t\t<!-- javascript -->
\t\t\t\t<script src=\"js/bootstrap.bundle.min.js\"></script>
\t\t\t\t<!-- counter js -->
\t\t\t\t<script src=\"js/counter.int.js\"></script>
\t\t\t\t<!-- custom js -->
\t\t\t\t<script src=\"js/app.js\"></script>
\t\t\t</body>

\t\t</html>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 39
        echo "\t\t\t<nav class=\"navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark\" id=\"nav-sticky\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t<a class=\"logo text-uppercase\" href=\"index.html\">
\t\t\t\t\t\t<img src=\"images/ourLogo.png\" alt=\"\" class=\"logo-light\" height=\"50\"/>
\t\t\t\t\t\t<img src=\"images/ourLogo.png\" alt=\"\" class=\"logo-dark\" height=\"50\"/>
\t\t\t\t\t</a>

\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\" id=\"mySidenav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("load");
        echo "\" class=\"nav-link active\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#features\" class=\"nav-link\">Features</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getUserTests");
        echo "\" class=\"nav-link\">Mes testes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#demo\" class=\"nav-link\">Demos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#clients\" class=\"nav-link\">Clients</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#pricing\" class=\"nav-link\">Pricing</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#contact\" class=\"nav-link\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "\t\t\t<!-- home start -->
\t\t\t<section class=\"bg-home bg-gradient\" id=\"home\">
\t\t\t\t<div class=\"home-center\">
\t\t\t\t\t<div class=\"home-desc-center\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"home-title\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3 text-white-50\">Discover Adminto Today</h5>
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-4 text-white\">Make your Site Amazing & Unique with Adminto</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-white-50 home-desc font-16 mb-5\">Adminto is a fully featured premium Landing template built on top of awesome Bootstrap 4.3.1, modern web technology HTML5, CSS3 and jQuery.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"watch-video mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom me-4\">Get Started
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://vimeo.com/99025203\" class=\"video-play-icon text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-play play-icon-circle me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Watch The Video</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-1 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"home-img mo-mt-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home-img.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- home end -->

\t\t\t<!-- features start -->
\t\t\t<section class=\"features\" id=\"features\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified features-tab mb-5\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-code-tab\" data-bs-toggle=\"pill\" href=\"#pills-code\" role=\"tab\" aria-controls=\"pills-code\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"features-icon float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-notebook tab-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-block me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"tab-title\">Quality Code</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>At vero eos et accusam et</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-customize-tab\" data-bs-toggle=\"pill\" href=\"#pills-customize\" role=\"tab\" aria-controls=\"pills-customize\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"features-icon float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-edit tab-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-block me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"tab-title\">Easy to customize</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sed ut unde iste error sit</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-support-tab\" data-bs-toggle=\"pill\" href=\"#pills-support\" role=\"tab\" aria-controls=\"pills-support\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<div class=\"features-icon float-end\">
\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-headphones tab-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-block me-4\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"tab-title\">Awesome Support</h5>
\t\t\t\t\t\t\t\t\t\t\t<p>It will be as simple as fact</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-code\" role=\"tabpanel\" aria-labelledby=\"pills-code-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/features-img/img-1.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-notebook text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quality Code</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">It will be as simple as Occidental in fact, it will be Occidental. To an English person it will seem like simplified English as a skeptical Cambridge.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar of the resulting language
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNemo enim ipsam quia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUt enim ad minima</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAt vero eos accusamus et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom\">Learn More
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fades how active\" id=\"pills-customize\" role=\"tabpanel\" aria-labelledby=\"pills-customize-tab\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/features-img/img-2.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-edit text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Easy to customize</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar of the resulting language
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNemo enim ipsam quia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUt enim ad minima</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAt vero eos accusamus et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom\">Learn More
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-support\" role=\"tabpanel\" aria-labelledby=\"pills-support-tab\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/features-img/img-3.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-headphones h1 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Awesome Support</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">It will be as simple as Occidental in fact, it will be Occidental. To an English person it will seem like simplified English as a skeptical Cambridge.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar of the resulting language
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNemo enim ipsam quia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUt enim ad minima</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAt vero eos accusamus et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom\">Learn More
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end tab-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- features end -->

\t\t\t\t\t<!-- services start -->
\t\t\t\t\t<section class=\"section bg-light\" id=\"services\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Services</h6>
\t\t\t\t\t\t\t\t\t\t<h4>What we do</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/layers.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Responsive Layouts</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">The new common language will be more simple and regular than the existing European languages.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/core.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Based on Bootstrap UI</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar language is more than that of indual languages.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/paperdesk.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Creative Design</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">It will be as simple as occidental it will be to an english person. It will be as simple as occidental</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/solarsystem.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Awesome Support</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/datatext.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Easy to customize</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Everyone realizes why a new common language would be one could refuse to pay translators.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/browserscript.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Quality Code</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis deleniti atque</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- services end -->

\t\t\t\t\t<!-- Demo start -->
\t\t\t\t\t<section class=\"section\" id=\"demo\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Demos</h6>
\t\t\t\t\t\t\t\t\t\t<h4>Available Demos</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-1.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Light Layouts</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-2.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Horizontal Layouts</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-3.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Semi Dark Layout</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-4.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Semi Dark Horizontal</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-5.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Landing Page</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-6.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Dark Sidebar</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-custom\">More Demos
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Demo end -->

\t\t\t\t\t<!-- clients start -->
\t\t\t\t\t<section class=\"section bg-light\" id=\"clients\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center mb-4\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Clients</h6>
\t\t\t\t\t\t\t\t\t\t<h4>What our Users Says</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-box p-4 bg-white mt-4 text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">\" The designer of this theme delivered a quality product. I am not a front-end developer and I hate when the theme I download has glitches or needs minor tweaks here and there. This worked for my needs just out of the boxes. Also, it is fast and elegant.\"</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/testi/img-1.png\" alt=\"\" class=\"rounded-circle img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\">
\t\t\t\t\t\t\t\t\t\t\t- Adminto User</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Xpanta</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"testi-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-format-quote-open display-2\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-box p-4 bg-white mt-4 text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">\"  Extremely well designed and the documentation is very well done. Super happy with the purchase and definitely recommend this! \"</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/testi/img-2.png\" alt=\"\" class=\"rounded-circle img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\">
\t\t\t\t\t\t\t\t\t\t\t- Adminto User</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">G_Sam</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"testi-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-format-quote-open display-2\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-box p-4 bg-white mt-4 text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">\"  We used this theme to save some design time but... wow it has everything you didn't realize you would need later. I highly recommend this template to get your web design headed in the right direction quickly.  \"</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/testi/img-3.png\" alt=\"\" class=\"rounded-circle img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\">
\t\t\t\t\t\t\t\t\t\t\t- Adminto User</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Isaacfab</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"testi-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-format-quote-open display-2\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t<div class=\"row mt-5 pt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/1.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/2.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/3.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/4.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- clients end -->

\t\t\t\t\t<!-- counter start -->
\t\t\t\t\t<section class=\"section bg-gradient\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\" id=\"counter\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-add-user display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"counter_value mb-3 text-white\" data-target=\"1200\">0</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Fans</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-3 text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter_value\" data-target=\"1500\">10</span>
\t\t\t\t\t\t\t\t\t\t\t\t+</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Total Sales</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-smile display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"counter_value mb-3 text-white\" data-target=\"6931\">608</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Happy Clients</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-medal display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"counter_value mb-3 text-white\" data-target=\"800\">2</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Won Prices</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- counter end -->

\t\t\t\t\t<!-- pricing start -->
\t\t\t\t\t<section class=\"section bg-light\" id=\"pricing\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center mb-4\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Pricing</h6>
\t\t\t\t\t\t\t\t\t\t<h4>Our Pricing plans</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"pricing-plans bg-white text-center p-4 mt-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-title mt-2 mb-4\">Single</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3 price\">
\t\t\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>\$</small>
\t\t\t\t\t\t\t\t\t\t\t\t</sup>24</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-duration text-muted font-18\">Per license</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pricing-content p-4 text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Number of end products 1</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Customer support</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Free Updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Monthly updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>24 x 7 Support</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom d-block\">Purchase Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"pricing-plans bg-white text-center p-4 mt-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-title mt-2 mb-4\">Multiple</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3 price\">
\t\t\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>\$</small>
\t\t\t\t\t\t\t\t\t\t\t\t</sup>120</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-duration text-muted font-18\">Per license</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pricing-content p-4 text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Number of end products 1</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Customer support</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Free Updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Monthly updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>24 x 7 Support</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom d-block\">Purchase Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"pricing-plans bg-white text-center p-4 mt-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-title mt-2 mb-4\">Extended</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3 price\">
\t\t\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>\$</small>
\t\t\t\t\t\t\t\t\t\t\t\t</sup>999</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-duration text-muted font-18\">Per license</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pricing-content p-4 text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Number of end products 1</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Customer support</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Free Updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Monthly updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>24 x 7 Support</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom d-block\">Purchase Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- pricing end -->

\t\t\t\t\t<!-- contact start -->
\t\t\t\t\t<section class=\"section\" id=\"contact\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Contact</h6>
\t\t\t\t\t\t\t\t\t\t<h4>Have any Questions ?</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"get-in-touch\">
\t\t\t\t\t\t\t\t\t\t<h5>Get in touch</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-5\">At solmen va esser necessi far</p>

\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"get-touch-icon float-start me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-mail text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-16 mb-0\">E-mail</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">example@abc.com</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"get-touch-icon float-start me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-phone text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-16 mb-0\">Phone</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">012-345-6789</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"get-touch-icon float-start me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-map-marker text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-16 mb-0\">Address</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">20 Rollins Road Cotesfield, NE 68829</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-form bg-white\">
\t\t\t\t\t\t\t\t\t\t<span id=\"error-msg\"></span>
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" name=\"myForm\" onsubmit=\"return validateForm()\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Enter your name...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" id=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Enter your email...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"subject\" class=\"form-label\">Subject</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"subject\" id=\"subject\" type=\"text\" class=\"form-control\" placeholder=\"Enter Subject...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"comments\" class=\"form-label\">Message</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"comments\" id=\"comments\" rows=\"4\" class=\"form-control\" placeholder=\"Enter your message...\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" name=\"send\" class=\"submitBnt btn btn-custom\" value=\"Send Message\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end custom-form -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- contact end -->
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 928
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 929
        echo "\t\t\t\t\t<!-- footer start -->
\t\t\t\t\t<footer class=\"footer bg-dark\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer-logo mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo-light.png\" alt=\"\" height=\"20\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline footer-list text-center mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Mes testes</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Clients</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline social-links mb-4 mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-white-50 mb-4\">2016 - 2020 © Adminto. Design by
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"text-white-50\">Coderthemes</a>
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- footer end -->
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1062 => 929,  1052 => 928,  197 => 82,  187 => 81,  157 => 60,  148 => 54,  131 => 39,  121 => 38,  95 => 993,  92 => 928,  90 => 81,  87 => 80,  85 => 38,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>Adminto - Responsive Bootstrap 4 Landing Page Template</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\"/>
\t\t<meta content=\"Coderthemes\" name=\"author\"/>
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

\t\t<!-- App favicon -->
\t\t<link
\t\trel=\"shortcut icon\" href=\"images/favicon.ico\">

\t\t<!-- Bootstrap core CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">

\t\t<!--Material Icon -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/materialdesignicons.min.css\"/>

\t\t<!--pe-7 Icon -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/pe-icon-7-stroke.css\"/>

\t\t<!-- Custom  sCss -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"/>

\t</head>


\t<body
\t\tdata-bs-spy=\"scroll\" data-bs-target=\".navbar\" data-bs-offset=\"58\" class=\"scrollspy-example\">

\t\t<!--Navbar Start-->
\t\t{% block nav %}
\t\t\t<nav class=\"navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark\" id=\"nav-sticky\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t<a class=\"logo text-uppercase\" href=\"index.html\">
\t\t\t\t\t\t<img src=\"images/ourLogo.png\" alt=\"\" class=\"logo-light\" height=\"50\"/>
\t\t\t\t\t\t<img src=\"images/ourLogo.png\" alt=\"\" class=\"logo-dark\" height=\"50\"/>
\t\t\t\t\t</a>

\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\" id=\"mySidenav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{path('load')}}\" class=\"nav-link active\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#features\" class=\"nav-link\">Features</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{path('getUserTests')}}\" class=\"nav-link\">Mes testes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#demo\" class=\"nav-link\">Demos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#clients\" class=\"nav-link\">Clients</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#pricing\" class=\"nav-link\">Pricing</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#contact\" class=\"nav-link\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t{% endblock %}
\t\t<!-- Navbar End -->
\t\t{% block body %}
\t\t\t<!-- home start -->
\t\t\t<section class=\"bg-home bg-gradient\" id=\"home\">
\t\t\t\t<div class=\"home-center\">
\t\t\t\t\t<div class=\"home-desc-center\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"home-title\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3 text-white-50\">Discover Adminto Today</h5>
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-4 text-white\">Make your Site Amazing & Unique with Adminto</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-white-50 home-desc font-16 mb-5\">Adminto is a fully featured premium Landing template built on top of awesome Bootstrap 4.3.1, modern web technology HTML5, CSS3 and jQuery.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"watch-video mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom me-4\">Get Started
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://vimeo.com/99025203\" class=\"video-play-icon text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-play play-icon-circle me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Watch The Video</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-1 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"home-img mo-mt-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home-img.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- home end -->

\t\t\t<!-- features start -->
\t\t\t<section class=\"features\" id=\"features\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified features-tab mb-5\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-code-tab\" data-bs-toggle=\"pill\" href=\"#pills-code\" role=\"tab\" aria-controls=\"pills-code\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"features-icon float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-notebook tab-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-block me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"tab-title\">Quality Code</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>At vero eos et accusam et</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-customize-tab\" data-bs-toggle=\"pill\" href=\"#pills-customize\" role=\"tab\" aria-controls=\"pills-customize\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"features-icon float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-edit tab-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-block me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"tab-title\">Easy to customize</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sed ut unde iste error sit</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-support-tab\" data-bs-toggle=\"pill\" href=\"#pills-support\" role=\"tab\" aria-controls=\"pills-support\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<div class=\"features-icon float-end\">
\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-headphones tab-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-block me-4\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"tab-title\">Awesome Support</h5>
\t\t\t\t\t\t\t\t\t\t\t<p>It will be as simple as fact</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-code\" role=\"tabpanel\" aria-labelledby=\"pills-code-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/features-img/img-1.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-notebook text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quality Code</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">It will be as simple as Occidental in fact, it will be Occidental. To an English person it will seem like simplified English as a skeptical Cambridge.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar of the resulting language
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNemo enim ipsam quia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUt enim ad minima</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAt vero eos accusamus et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom\">Learn More
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fades how active\" id=\"pills-customize\" role=\"tabpanel\" aria-labelledby=\"pills-customize-tab\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/features-img/img-2.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-edit text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Easy to customize</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar of the resulting language
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNemo enim ipsam quia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUt enim ad minima</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAt vero eos accusamus et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom\">Learn More
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-support\" role=\"tabpanel\" aria-labelledby=\"pills-support-tab\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/features-img/img-3.png\" alt=\"\" class=\"img-fluid mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-headphones h1 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Awesome Support</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">It will be as simple as Occidental in fact, it will be Occidental. To an English person it will seem like simplified English as a skeptical Cambridge.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar of the resulting language
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNemo enim ipsam quia</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUt enim ad minima</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-marked-outline text-primary me-2 h6\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAt vero eos accusamus et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom\">Learn More
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end tab-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- features end -->

\t\t\t\t\t<!-- services start -->
\t\t\t\t\t<section class=\"section bg-light\" id=\"services\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Services</h6>
\t\t\t\t\t\t\t\t\t\t<h4>What we do</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/layers.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Responsive Layouts</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">The new common language will be more simple and regular than the existing European languages.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/core.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Based on Bootstrap UI</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">If several languages coalesce the grammar language is more than that of indual languages.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/paperdesk.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Creative Design</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">It will be as simple as occidental it will be to an english person. It will be as simple as occidental</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/solarsystem.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Awesome Support</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/datatext.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Easy to customize</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Everyone realizes why a new common language would be one could refuse to pay translators.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/icons/browserscript.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5>Quality Code</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis deleniti atque</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-custom\">Read more...</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- services end -->

\t\t\t\t\t<!-- Demo start -->
\t\t\t\t\t<section class=\"section\" id=\"demo\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Demos</h6>
\t\t\t\t\t\t\t\t\t\t<h4>Available Demos</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-1.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Light Layouts</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-2.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Horizontal Layouts</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-3.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Semi Dark Layout</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-4.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Semi Dark Horizontal</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-5.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Landing Page</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"demo-box text-center p-3 mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative demo-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/demo/demo-6.jpg\" alt=\"\" class=\"img-fluid mx-auto d-block rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"demo-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-expand1 h1 text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Dark Sidebar</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-custom\">More Demos
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- Demo end -->

\t\t\t\t\t<!-- clients start -->
\t\t\t\t\t<section class=\"section bg-light\" id=\"clients\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center mb-4\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Clients</h6>
\t\t\t\t\t\t\t\t\t\t<h4>What our Users Says</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-box p-4 bg-white mt-4 text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">\" The designer of this theme delivered a quality product. I am not a front-end developer and I hate when the theme I download has glitches or needs minor tweaks here and there. This worked for my needs just out of the boxes. Also, it is fast and elegant.\"</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/testi/img-1.png\" alt=\"\" class=\"rounded-circle img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\">
\t\t\t\t\t\t\t\t\t\t\t- Adminto User</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Xpanta</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"testi-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-format-quote-open display-2\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-box p-4 bg-white mt-4 text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">\"  Extremely well designed and the documentation is very well done. Super happy with the purchase and definitely recommend this! \"</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/testi/img-2.png\" alt=\"\" class=\"rounded-circle img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\">
\t\t\t\t\t\t\t\t\t\t\t- Adminto User</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">G_Sam</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"testi-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-format-quote-open display-2\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-box p-4 bg-white mt-4 text-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">\"  We used this theme to save some design time but... wow it has everything you didn't realize you would need later. I highly recommend this template to get your web design headed in the right direction quickly.  \"</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi-img mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/testi/img-3.png\" alt=\"\" class=\"rounded-circle img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\">
\t\t\t\t\t\t\t\t\t\t\t- Adminto User</p>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-18\">Isaacfab</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"testi-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-format-quote-open display-2\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t<div class=\"row mt-5 pt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/1.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/2.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/3.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"client-images\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/clients/4.png\" alt=\"logo-img\" class=\"mx-auto img-fluid d-block\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- clients end -->

\t\t\t\t\t<!-- counter start -->
\t\t\t\t\t<section class=\"section bg-gradient\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\" id=\"counter\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-add-user display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"counter_value mb-3 text-white\" data-target=\"1200\">0</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Fans</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-3 text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter_value\" data-target=\"1500\">10</span>
\t\t\t\t\t\t\t\t\t\t\t\t+</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Total Sales</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-smile display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"counter_value mb-3 text-white\" data-target=\"6931\">608</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Happy Clients</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-icon text-white-50 mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-medal display-4\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"counter-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"counter_value mb-3 text-white\" data-target=\"800\">2</h2>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"counter-name text-white\">Won Prices</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- counter end -->

\t\t\t\t\t<!-- pricing start -->
\t\t\t\t\t<section class=\"section bg-light\" id=\"pricing\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center mb-4\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Pricing</h6>
\t\t\t\t\t\t\t\t\t\t<h4>Our Pricing plans</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"pricing-plans bg-white text-center p-4 mt-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-title mt-2 mb-4\">Single</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3 price\">
\t\t\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>\$</small>
\t\t\t\t\t\t\t\t\t\t\t\t</sup>24</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-duration text-muted font-18\">Per license</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pricing-content p-4 text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Number of end products 1</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Customer support</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Free Updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Monthly updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>24 x 7 Support</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom d-block\">Purchase Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"pricing-plans bg-white text-center p-4 mt-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-title mt-2 mb-4\">Multiple</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3 price\">
\t\t\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>\$</small>
\t\t\t\t\t\t\t\t\t\t\t\t</sup>120</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-duration text-muted font-18\">Per license</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pricing-content p-4 text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Number of end products 1</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Customer support</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Free Updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Monthly updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>24 x 7 Support</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom d-block\">Purchase Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"pricing-plans bg-white text-center p-4 mt-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-title mt-2 mb-4\">Extended</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3 price\">
\t\t\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>\$</small>
\t\t\t\t\t\t\t\t\t\t\t\t</sup>999</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"plan-duration text-muted font-18\">Per license</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pricing-content p-4 text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Number of end products 1</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Customer support</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Free Updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Monthly updates</p>
\t\t\t\t\t\t\t\t\t\t\t<p>24 x 7 Support</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-custom d-block\">Purchase Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- pricing end -->

\t\t\t\t\t<!-- contact start -->
\t\t\t\t\t<section class=\"section\" id=\"contact\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"title text-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary small-title\">Contact</h6>
\t\t\t\t\t\t\t\t\t\t<h4>Have any Questions ?</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">At solmen va esser far uniform grammatica.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"get-in-touch\">
\t\t\t\t\t\t\t\t\t\t<h5>Get in touch</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-5\">At solmen va esser necessi far</p>

\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"get-touch-icon float-start me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-mail text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-16 mb-0\">E-mail</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">example@abc.com</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"get-touch-icon float-start me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-phone text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-16 mb-0\">Phone</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">012-345-6789</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"get-touch-icon float-start me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-map-marker text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-16 mb-0\">Address</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">20 Rollins Road Cotesfield, NE 68829</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-form bg-white\">
\t\t\t\t\t\t\t\t\t\t<span id=\"error-msg\"></span>
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" name=\"myForm\" onsubmit=\"return validateForm()\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Enter your name...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" id=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Enter your email...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"subject\" class=\"form-label\">Subject</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"subject\" id=\"subject\" type=\"text\" class=\"form-control\" placeholder=\"Enter Subject...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"comments\" class=\"form-label\">Message</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"comments\" id=\"comments\" rows=\"4\" class=\"form-control\" placeholder=\"Enter your message...\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" name=\"send\" class=\"submitBnt btn btn-custom\" value=\"Send Message\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end custom-form -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- contact end -->
\t\t\t\t{% endblock %}
\t\t\t\t{% block footer %}
\t\t\t\t\t<!-- footer start -->
\t\t\t\t\t<footer class=\"footer bg-dark\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer-logo mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo-light.png\" alt=\"\" height=\"20\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline footer-list text-center mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Mes testes</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Clients</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline social-links mb-4 mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-white-50 mb-4\">2016 - 2020 © Adminto. Design by
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"text-white-50\">Coderthemes</a>
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- footer end -->
\t\t\t\t{% endblock %}
\t\t\t\t<!-- Back to top -->
\t\t\t\t<a href=\"#\" class=\"back-to-top\" id=\"back-to-top\">
\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t</a>

\t\t\t\t<!-- javascript -->
\t\t\t\t<script src=\"js/bootstrap.bundle.min.js\"></script>
\t\t\t\t<!-- counter js -->
\t\t\t\t<script src=\"js/counter.int.js\"></script>
\t\t\t\t<!-- custom js -->
\t\t\t\t<script src=\"js/app.js\"></script>
\t\t\t</body>

\t\t</html>
\t</body>
</html>
", "base.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\base.html.twig");
    }
}
