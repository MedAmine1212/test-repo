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

/* quizbase.html.twig */
class __TwigTemplate_ff3ebe7b72979a10f9c05f9d9757b566 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>Page du quiz</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\"/>
\t\t<meta content=\"Coderthemes\" name=\"author\"/>
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<!-- App favicon -->
\t\t<link
\t\trel=\"shortcut icon\" href=\"../assets/images/favicon.ico\">

\t\t<!-- App css -->
\t\t<link href=\"../assets/css/config/default/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"bs-default-stylesheet\"/>
\t\t<link href=\"../assets/css/config/default/app.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"app-default-stylesheet\"/>

\t\t<link href=\"../assets/css/config/default/bootstrap-dark.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"bs-dark-stylesheet\" disabled=\"disabled\"/>
\t\t<link
\t\thref=\"../assets/css/config/default/app-dark.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"app-dark-stylesheet\" disabled=\"disabled\"/>

\t\t<!-- icons -->
\t\t<link href=\"../assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

\t</head>
\t";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "\t\t<body class=\"loading authentication-bg authentication-bg-pattern\">

\t\t\t<div class=\"account-pages mt-5 mb-5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-md-8 col-lg-6 col-xl-5\">
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\t\t\t\t\t<img src=\"../assets/images/logo-dark.png\" alt=\"\" height=\"22\" class=\"logo-light mx-auto\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-2 mb-4\">Responsive Admin Dashboard</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-error\">404</h1>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"mt-3 mb-2\">Page not Found</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-3\">It's looking like you may have taken a wrong turn. Don't worry... it happens to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            the best of us. You might want to check your internet connection. Here's a little tip that might
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            help you get back on track.</p>

\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-danger waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tBack to Home</a>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card-body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row -->
\t\t\t\t</div>
\t\t\t\t<!-- end container -->
\t\t\t</div>
\t\t\t<!-- end page -->

\t\t\t<!-- Vendor js -->
\t\t\t<script src=\"../assets/js/vendor.min.js\"></script>

\t\t\t<!-- App js -->
\t\t\t<script src=\"../assets/js/app.min.js\"></script>

\t\t</body>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizbase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 28,  75 => 80,  73 => 28,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>Page du quiz</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\"/>
\t\t<meta content=\"Coderthemes\" name=\"author\"/>
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<!-- App favicon -->
\t\t<link
\t\trel=\"shortcut icon\" href=\"../assets/images/favicon.ico\">

\t\t<!-- App css -->
\t\t<link href=\"../assets/css/config/default/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"bs-default-stylesheet\"/>
\t\t<link href=\"../assets/css/config/default/app.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"app-default-stylesheet\"/>

\t\t<link href=\"../assets/css/config/default/bootstrap-dark.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"bs-dark-stylesheet\" disabled=\"disabled\"/>
\t\t<link
\t\thref=\"../assets/css/config/default/app-dark.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"app-dark-stylesheet\" disabled=\"disabled\"/>

\t\t<!-- icons -->
\t\t<link href=\"../assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

\t</head>
\t{% block body %}
\t\t<body class=\"loading authentication-bg authentication-bg-pattern\">

\t\t\t<div class=\"account-pages mt-5 mb-5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-md-8 col-lg-6 col-xl-5\">
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\t\t\t\t\t<img src=\"../assets/images/logo-dark.png\" alt=\"\" height=\"22\" class=\"logo-light mx-auto\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted mt-2 mb-4\">Responsive Admin Dashboard</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-error\">404</h1>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"mt-3 mb-2\">Page not Found</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-3\">It's looking like you may have taken a wrong turn. Don't worry... it happens to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            the best of us. You might want to check your internet connection. Here's a little tip that might
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            help you get back on track.</p>

\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-danger waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tBack to Home</a>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card-body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row -->
\t\t\t\t</div>
\t\t\t\t<!-- end container -->
\t\t\t</div>
\t\t\t<!-- end page -->

\t\t\t<!-- Vendor js -->
\t\t\t<script src=\"../assets/js/vendor.min.js\"></script>

\t\t\t<!-- App js -->
\t\t\t<script src=\"../assets/js/app.min.js\"></script>

\t\t</body>
\t{% endblock %}
</html>
", "quizbase.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\quizBase.html.twig");
    }
}
