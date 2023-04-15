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

/* components/nav.html.twig */
class __TwigTemplate_338434bd6cbff39979e408a0087dc92f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/nav.html.twig"));

        // line 1
        echo "<div
\tclass=\"navbar-custom\">";
        // line 79
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 79,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
\tclass=\"navbar-custom\">{# <div class=\"container-fluid\">
\t\t\t\t<ul class=\"list-unstyled topnav-menu float-end mb-0\">
\t\t
\t\t\t\t\t<li class=\"dropdown notification-list topbar-dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle nav-user me-0 waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" alt=\"user-image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<span class=\"pro-user-name ms-1\">
\t\t\t\t\t\t\t\tuserName
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end profile-dropdown \">
\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t<h6 class=\"text-overflow m-0\">Bienvenue !</h6>
\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t<a href=\"contacts-profile.html\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t<i class=\"fe-user\"></i>
\t\t\t\t\t\t\t\t<span>Mon Profil</span>
\t\t\t\t\t\t\t</a>
\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t
\t\t\t\t\t\t\t<a href=\"auth-logout.html\" class=\"dropdown-item notify-item text-danger\">
\t\t\t\t\t\t\t\t<i class=\"fe-log-out\"></i>
\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t</a>
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t
\t\t\t\t\t<li class=\"dropdown notification-list\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"nav-link right-bar-toggle waves-effect waves-light\">
\t\t\t\t\t\t\t<i class=\"fe-settings noti-icon\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t
\t\t\t\t</ul>
\t\t
\t\t
\t\t\t\t<div class=\"logo-box\">
\t\t
\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light text-center\">
\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t<img src=\"../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t<img src=\"../assets/images/logo-light.png\" alt=\"\" height=\"16\">
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t
\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark text-center\">
\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t<img src=\"../assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t<img src=\"../assets/images/logo-dark.png\" alt=\"\" height=\"16\">
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t
\t\t\t\t</div>
\t\t
\t\t\t\t<ul class=\"list-unstyled topnav-menu topnav-menu-left mb-0\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"navbar-toggle nav-link\" data-bs-toggle=\"collapse\" data-bs-target=\"#topnav-menu-content\">
\t\t\t\t\t\t\t<div class=\"lines\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t
\t\t\t\t<div class=\"clearfix\"></div>
\t\t
\t\t\t</div> #}

</div>
", "components/nav.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\components\\nav.html.twig");
    }
}
