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

/* adminBase.html.twig */
class __TwigTemplate_7a49d7ee896207a949685981dae2fcab extends Template
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
            'dropdown_pic' => [$this, 'block_dropdown_pic'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'side_bar' => [$this, 'block_side_bar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminBase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminBase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>Starter | Adminto - Responsive Admin Dashboard Template</title>
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

\t<!-- body start -->
\t<body
\t\tclass=\"loading\" data-layout='{\"mode\": \"light\", \"width\": \"fluid\", \"menuPosition\": \"fixed\", \"sidebar\": { \"color\": \"light\", \"size\": \"default\", \"showuser\": true}, \"topbar\": {\"color\": \"light\"}, \"showRightSidebarOnPageLoad\": true}'>

\t\t<!-- Begin page -->
\t\t<div id=\"wrapper\">
\t\t\t";
        // line 34
        $this->displayBlock('nav', $context, $blocks);
        // line 301
        echo "\t\t\t<!-- end Topbar -->

\t\t\t<!-- ========== Left Sidebar Start ========== -->
\t\t\t";
        // line 304
        $this->displayBlock('side_bar', $context, $blocks);
        // line 897
        echo "\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Start Page Content here -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t";
        // line 900
        $this->displayBlock('body', $context, $blocks);
        // line 918
        echo "\t\t\t\t<!-- content -->
\t\t\t\t";
        // line 919
        $this->displayBlock('footer', $context, $blocks);
        // line 943
        echo "\t\t\t</div>

\t\t\t<!-- ============================================================== -->
\t\t<!-- End Page content -->
\t\t\t<!-- ============================================================== -->


\t\t</div>
\t\t<!-- END wrapper -->

\t\t<!-- Right Sidebar -->
\t\t<div class=\"right-bar\">

\t\t\t<div data-simplebar class=\"h-100\">

\t\t\t\t<div class=\"rightbar-title\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"right-bar-toggle float-end\">
\t\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<h4 class=\"font-16 m-0 text-white\">Theme Customizer</h4>
\t\t\t\t</div>

\t\t\t\t<!-- Tab panes -->
\t\t\t\t<div class=\"tab-content pt-0\">

\t\t\t\t\t<div class=\"tab-pane active\" id=\"settings-tab\" role=\"tabpanel\">

\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\t<strong>Customize
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\tthe overall color scheme, Layout, etc.
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Color Scheme</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"color-scheme-mode\" value=\"light\" id=\"light-mode-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"light-mode-check\">Light Mode</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"color-scheme-mode\" value=\"dark\" id=\"dark-mode-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"dark-mode-check\">Dark Mode</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Width -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Width</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"width\" value=\"fluid\" id=\"fluid-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"fluid-check\">Fluid</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"width\" value=\"boxed\" id=\"boxed-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"boxed-check\">Boxed</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Menu positions -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Menus (Leftsidebar and Topbar) Positon</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"menus-position\" value=\"fixed\" id=\"fixed-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"fixed-check\">Fixed</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"menus-position\" value=\"scrollable\" id=\"scrollable-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"scrollable-check\">Scrollable</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Left Sidebar-->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Left Sidebar Color</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"light\" id=\"light-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"light-check\">Light</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"dark\" id=\"dark-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"dark-check\">Dark</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"brand\" id=\"brand-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"brand-check\">Brand</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-3\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"gradient\" id=\"gradient-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gradient-check\">Gradient</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- size -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Left Sidebar Size</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-size\" value=\"default\" id=\"default-size-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"default-size-check\">Default</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-size\" value=\"condensed\" id=\"condensed-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"condensed-check\">Condensed
\t\t\t\t\t\t\t\t\t<small>(Extra Small size)</small>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-size\" value=\"compact\" id=\"compact-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"compact-check\">Compact
\t\t\t\t\t\t\t\t\t<small>(Small size)</small>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- User info -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Sidebar User Info</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-user\" value=\"fixed\" id=\"sidebaruser-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"sidebaruser-check\">Enable</label>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Topbar</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"topbar-color\" value=\"dark\" id=\"darktopbar-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"darktopbar-check\">Dark</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"topbar-color\" value=\"light\" id=\"lighttopbar-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"lighttopbar-check\">Light</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"d-grid mt-4\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"resetBtn\">Reset to Default</button>
\t\t\t\t\t\t\t\t<a href=\"https://1.envato.market/admintoadmin\" class=\"btn btn-danger mt-3\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-basket me-1\"></i>
\t\t\t\t\t\t\t\t\tPurchase Now</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- end slimscroll-menu-->
\t\t</div>
\t\t<!-- /Right-bar -->

\t\t<!-- Right bar overlay-->
\t\t<div class=\"rightbar-overlay\"></div>

\t\t<!-- Vendor js -->
\t\t<script src=\"../assets/js/vendor.min.js\"></script>

\t\t<!-- App js -->
\t\t<script src=\"../assets/js/app.min.js\"></script>

\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 35
        echo "\t\t\t\t<!-- Topbar Start -->
\t\t\t\t<div class=\"navbar-custom\">
\t\t\t\t\t<ul class=\"list-unstyled topnav-menu float-end mb-0\">

\t\t\t\t\t\t<li class=\"d-none d-lg-block\">
\t\t\t\t\t\t\t<form class=\"app-search\">
\t\t\t\t\t\t\t\t<div class=\"app-search-box\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" id=\"top-search\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn input-group-text\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-lg\" id=\"search-dropdown\">
\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-overflow mb-2\">Found 22 results</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-home me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Analytics Report</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-aperture me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>How can I help you?</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-settings me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>User profile settings</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow mb-2 text-uppercase\">Users</h6>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-flex me-2 rounded-circle\" src=\"../assets/images/users/user-2.jpg\" alt=\"Generic placeholder image\" height=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 font-14\">Erwin E. Brown</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-12 mb-0\">UI Designer</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-flex me-2 rounded-circle\" src=\"../assets/images/users/user-5.jpg\" alt=\"Generic placeholder image\" height=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 font-14\">Jacob Deo</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-12 mb-0\">Developer</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown d-inline-block d-lg-none\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle arrow-none waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fe-search noti-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-lg dropdown-menu-end p-0\">
\t\t\t\t\t\t\t\t<form class=\"p-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Recipient's username\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown notification-list topbar-dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fe-bell noti-icon\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge bg-danger rounded-circle noti-icon-badge\">9</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end dropdown-lg\">

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<div class=\"dropdown-item noti-title\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t<span class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<small>Clear All</small>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>Notification
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"noti-scroll\" data-simplebar>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" class=\"img-fluid rounded-circle\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Cristina Pride</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 user-msg\">
\t\t\t\t\t\t\t\t\t\t\t<small>Hi, How are you? What about our next meeting</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-comment-account-outline\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Caleb Flakelar commented on Admin
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1 min ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-4.jpg\" class=\"img-fluid rounded-circle\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Karen Robinson</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 user-msg\">
\t\t\t\t\t\t\t\t\t\t\t<small>Wow ! this admin looks good and awesome design</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">New user registered.
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">5 hours ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-info\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-comment-account-outline\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Caleb Flakelar commented on Admin
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">4 days ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-secondary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Carlos Crouch liked
\t\t\t\t\t\t\t\t\t\t\t<b>Admin</b>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">13 days ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- All-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
\t\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t\t<i class=\"fe-arrow-right\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown notification-list topbar-dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle nav-user me-0 waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" alt=\"user-image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<span class=\"pro-user-name ms-1\">
\t\t\t\t\t\t\t\t\tNowak
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 222
        $this->displayBlock('dropdown_pic', $context, $blocks);
        // line 254
        echo "\t\t\t\t\t\t<li class=\"dropdown notification-list\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"nav-link right-bar-toggle waves-effect waves-light\">
\t\t\t\t\t\t\t\t<i class=\"fe-settings noti-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t<div class=\"logo-box\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light text-center\">
\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark text-center\">
\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<ul class=\"list-unstyled topnav-menu topnav-menu-left mb-0\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<button class=\"button-menu-mobile disable-btn waves-effect\">
\t\t\t\t\t\t\t\t<i class=\"fe-menu\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 288
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 293
        echo "

\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t</div>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_dropdown_pic($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdown_pic"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdown_pic"));

        // line 223
        echo "
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end profile-dropdown \">
\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow m-0\">Bonjour !</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getTests");
        echo "\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Testes</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getTestQuestions");
        echo "\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-lock\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Questions</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"auth-logout.html\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-log-out\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 288
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 289
        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4 class=\"page-title-main\">Starter</h4>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 304
    public function block_side_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "side_bar"));

        // line 305
        echo "

\t\t\t\t<div class=\"left-side-menu\">

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"h-100\" data-simplebar>

\t\t\t\t\t\t<!-- User box -->
\t\t\t\t\t\t<div class=\"user-box text-center\">

\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" alt=\"user-img\" title=\"Mat Helme\" class=\"rounded-circle img-thumbnail avatar-md\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-name dropdown-toggle h5 mt-2 mb-1 d-block\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Nowak Helme</a>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu user-pro-dropdown\">

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-user me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>My Account</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-settings me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-lock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Lock Screen</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-log-out me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"text-muted left-user-info\">Admin Head</p>

\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted left-user-info\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-cog\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-power\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--- Sidemenu -->
\t\t\t\t\t\t<div id=\"sidebar-menu\">

\t\t\t\t\t\t\t<ul id=\"side-menu\">

\t\t\t\t\t\t\t\t<li class=\"menu-title\">Navigation</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"menu-title mt-2\">Apps</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"apps-calendar.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"apps-chat.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-forum\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tChat
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#email\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-email\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"email\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"email-inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"email-templates.html\">Email Templates</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarTasks\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clipboard\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tTasks
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarTasks\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"task-kanban-board.html\">Kanban Board</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"task-details.html\">Details</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"apps-projects.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-page-next\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tProjects
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#contacts\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tContacts
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"contacts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contacts-list.html\">Members List</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contacts-profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"menu-title mt-2\">Custom</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarAuth\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-file-multiple\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tAuth Pages
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarAuth\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-login.html\">Log In</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-recoverpw.html\">Recover Password</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-lock-screen.html\">Lock Screen</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-confirm-mail.html\">Confirm Mail</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarExpages\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-layers\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tExtra Pages
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarExpages\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-starter.html\">Starter</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-pricing.html\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-timeline.html\">Timeline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-invoice.html\">Invoice</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-faqs.html\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-gallery.html\">Gallery</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-404.html\">Error 404</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-500.html\">Error 500</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-maintenance.html\">Maintenance</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-coming-soon.html\">Coming Soon</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarLayouts\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-page-layout-sidebar-left\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tLayouts
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarLayouts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-horizontal.html\">Horizontal</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-preloader.html\">Preloader</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"menu-title mt-2\">Components</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarBaseui\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tBase UI
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarBaseui\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-avatars.html\">Avatars</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-tabs-accordions.html\">Tabs & Accordions</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-progress.html\">Progress</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-notifications.html\">Notifications</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-offcanvas.html\">Offcanvas</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-placeholders.html\">Placeholders</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-spinners.html\">Spinners</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-images.html\">Images</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-carousel.html\">Carousel</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-video.html\">Embed Video</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-tooltips-popovers.html\">Tooltips & Popovers</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-general.html\">General UI</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-grid.html\">Grid</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"widgets.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-gift\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tWidgets
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarExtendedui\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-layers\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info float-end\">Hot</span>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tExtended UI
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarExtendedui\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-range-slider.html\">Range Slider</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-sweet-alert.html\">Sweet Alert</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-draggable-cards.html\">Draggable Cards</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-tour.html\">Tour Page</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-notification.html\">Notification</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-treeview.html\">Tree View</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarIcons\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-shield\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tIcons
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarIcons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-feather.html\">Feather Icons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-mdi.html\">Material Design Icons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-dripicons.html\">Dripicons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-font-awesome.html\">Font Awesome 5</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-themify.html\">Themify</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarForms\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-texture\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tForms
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarForms\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-elements.html\">General Elements</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-advanced.html\">Advanced</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-validation.html\">Validation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-quilljs.html\">Quilljs Editor</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-pickers.html\">Picker</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-file-uploads.html\">File Uploads</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-x-editable.html\">X Editable</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarTables\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-list\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarTables\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-basic.html\">Basic Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-datatables.html\">Data Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-editable.html\">Editable Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-responsive.html\">Responsive Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-tablesaw.html\">Tablesaw Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarCharts\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chart-donut-variant\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarCharts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-flot.html\">Flot Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-morris.html\">Morris Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-chartjs.html\">Chartjs Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-chartist.html\">Chartist Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-sparklines.html\">Sparkline Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMaps\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-map\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMaps
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMaps\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-google.html\">Google Maps</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-vector.html\">Vector Maps</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-share-variant\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMulti Level
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel2\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSecond Level
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel3\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\tThird Level
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel4\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tItem 2
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Sidebar -->

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Sidebar -left -->

\t\t\t\t</div>
\t\t\t\t<!-- Left Sidebar End -->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 900
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 901
        echo "\t\t\t\t\t<div class=\"content-page\"> <div
\t\t\t\t\t\tclass=\"content\">

\t\t\t\t\t\t<!-- Start Content-->
\t\t\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- container -->

\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 919
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 920
        echo "\t\t\t\t\t<!-- Footer Start -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t&copy; Adminto theme by
\t\t\t\t\t\t\t\t\t<a href=\"\">Coderthemes</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-md-end footer-links d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">About Us</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Help</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Contact Us</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- end Footer -->
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adminBase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1271 => 920,  1261 => 919,  1235 => 901,  1225 => 900,  624 => 305,  614 => 304,  601 => 289,  591 => 288,  565 => 238,  556 => 232,  545 => 223,  535 => 222,  518 => 293,  516 => 288,  480 => 254,  478 => 222,  289 => 35,  279 => 34,  105 => 943,  103 => 919,  100 => 918,  98 => 900,  93 => 897,  91 => 304,  86 => 301,  84 => 34,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>Starter | Adminto - Responsive Admin Dashboard Template</title>
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

\t<!-- body start -->
\t<body
\t\tclass=\"loading\" data-layout='{\"mode\": \"light\", \"width\": \"fluid\", \"menuPosition\": \"fixed\", \"sidebar\": { \"color\": \"light\", \"size\": \"default\", \"showuser\": true}, \"topbar\": {\"color\": \"light\"}, \"showRightSidebarOnPageLoad\": true}'>

\t\t<!-- Begin page -->
\t\t<div id=\"wrapper\">
\t\t\t{% block nav %}
\t\t\t\t<!-- Topbar Start -->
\t\t\t\t<div class=\"navbar-custom\">
\t\t\t\t\t<ul class=\"list-unstyled topnav-menu float-end mb-0\">

\t\t\t\t\t\t<li class=\"d-none d-lg-block\">
\t\t\t\t\t\t\t<form class=\"app-search\">
\t\t\t\t\t\t\t\t<div class=\"app-search-box\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" id=\"top-search\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn input-group-text\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-lg\" id=\"search-dropdown\">
\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-overflow mb-2\">Found 22 results</h5>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-home me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Analytics Report</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-aperture me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>How can I help you?</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe-settings me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>User profile settings</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow mb-2 text-uppercase\">Users</h6>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-flex me-2 rounded-circle\" src=\"../assets/images/users/user-2.jpg\" alt=\"Generic placeholder image\" height=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 font-14\">Erwin E. Brown</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-12 mb-0\">UI Designer</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-flex me-2 rounded-circle\" src=\"../assets/images/users/user-5.jpg\" alt=\"Generic placeholder image\" height=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 font-14\">Jacob Deo</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-12 mb-0\">Developer</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown d-inline-block d-lg-none\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle arrow-none waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fe-search noti-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-lg dropdown-menu-end p-0\">
\t\t\t\t\t\t\t\t<form class=\"p-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Recipient's username\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown notification-list topbar-dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fe-bell noti-icon\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge bg-danger rounded-circle noti-icon-badge\">9</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end dropdown-lg\">

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<div class=\"dropdown-item noti-title\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t<span class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<small>Clear All</small>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>Notification
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"noti-scroll\" data-simplebar>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" class=\"img-fluid rounded-circle\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Cristina Pride</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 user-msg\">
\t\t\t\t\t\t\t\t\t\t\t<small>Hi, How are you? What about our next meeting</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-comment-account-outline\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Caleb Flakelar commented on Admin
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1 min ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-4.jpg\" class=\"img-fluid rounded-circle\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Karen Robinson</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 user-msg\">
\t\t\t\t\t\t\t\t\t\t\t<small>Wow ! this admin looks good and awesome design</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">New user registered.
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">5 hours ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-info\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-comment-account-outline\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Caleb Flakelar commented on Admin
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">4 days ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-secondary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"notify-details\">Carlos Crouch liked
\t\t\t\t\t\t\t\t\t\t\t<b>Admin</b>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">13 days ago</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- All-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
\t\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t\t<i class=\"fe-arrow-right\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown notification-list topbar-dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle nav-user me-0 waves-effect waves-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" alt=\"user-image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<span class=\"pro-user-name ms-1\">
\t\t\t\t\t\t\t\t\tNowak
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% block dropdown_pic %}

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end profile-dropdown \">
\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header noti-title\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow m-0\">Bonjour !</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"{{path('getTests')}}\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Testes</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"{{path('getTestQuestions')}}\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-lock\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Questions</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"auth-logout.html\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-log-out\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t<li class=\"dropdown notification-list\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"nav-link right-bar-toggle waves-effect waves-light\">
\t\t\t\t\t\t\t\t<i class=\"fe-settings noti-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t<div class=\"logo-box\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light text-center\">
\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark text-center\">
\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/ourLogo.png\" alt=\"\" height=\"50\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<ul class=\"list-unstyled topnav-menu topnav-menu-left mb-0\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<button class=\"button-menu-mobile disable-btn waves-effect\">
\t\t\t\t\t\t\t\t<i class=\"fe-menu\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% block pageTitle %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4 class=\"page-title-main\">Starter</h4>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endblock %}


\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t\t<!-- end Topbar -->

\t\t\t<!-- ========== Left Sidebar Start ========== -->
\t\t\t{% block side_bar %}


\t\t\t\t<div class=\"left-side-menu\">

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"h-100\" data-simplebar>

\t\t\t\t\t\t<!-- User box -->
\t\t\t\t\t\t<div class=\"user-box text-center\">

\t\t\t\t\t\t\t<img src=\"../assets/images/users/user-1.jpg\" alt=\"user-img\" title=\"Mat Helme\" class=\"rounded-circle img-thumbnail avatar-md\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-name dropdown-toggle h5 mt-2 mb-1 d-block\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Nowak Helme</a>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu user-pro-dropdown\">

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-user me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>My Account</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-settings me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-lock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Lock Screen</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe-log-out me-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Logout</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p class=\"text-muted left-user-info\">Admin Head</p>

\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted left-user-info\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-cog\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-power\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--- Sidemenu -->
\t\t\t\t\t\t<div id=\"sidebar-menu\">

\t\t\t\t\t\t\t<ul id=\"side-menu\">

\t\t\t\t\t\t\t\t<li class=\"menu-title\">Navigation</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-dashboard\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"menu-title mt-2\">Apps</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"apps-calendar.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"apps-chat.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-forum\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tChat
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#email\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-email\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"email\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"email-inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"email-templates.html\">Email Templates</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarTasks\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clipboard\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tTasks
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarTasks\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"task-kanban-board.html\">Kanban Board</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"task-details.html\">Details</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"apps-projects.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-page-next\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tProjects
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#contacts\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tContacts
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"contacts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contacts-list.html\">Members List</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contacts-profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"menu-title mt-2\">Custom</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarAuth\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-file-multiple\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tAuth Pages
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarAuth\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-login.html\">Log In</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-recoverpw.html\">Recover Password</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-lock-screen.html\">Lock Screen</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-confirm-mail.html\">Confirm Mail</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarExpages\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-layers\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tExtra Pages
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarExpages\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-starter.html\">Starter</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-pricing.html\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-timeline.html\">Timeline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-invoice.html\">Invoice</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-faqs.html\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-gallery.html\">Gallery</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-404.html\">Error 404</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-500.html\">Error 500</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-maintenance.html\">Maintenance</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-coming-soon.html\">Coming Soon</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarLayouts\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-page-layout-sidebar-left\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tLayouts
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarLayouts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-horizontal.html\">Horizontal</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-preloader.html\">Preloader</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"menu-title mt-2\">Components</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarBaseui\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tBase UI
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarBaseui\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-avatars.html\">Avatars</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-tabs-accordions.html\">Tabs & Accordions</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-progress.html\">Progress</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-notifications.html\">Notifications</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-offcanvas.html\">Offcanvas</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-placeholders.html\">Placeholders</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-spinners.html\">Spinners</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-images.html\">Images</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-carousel.html\">Carousel</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-video.html\">Embed Video</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-tooltips-popovers.html\">Tooltips & Popovers</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-general.html\">General UI</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-grid.html\">Grid</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"widgets.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-gift\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tWidgets
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarExtendedui\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-layers\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info float-end\">Hot</span>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tExtended UI
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarExtendedui\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-range-slider.html\">Range Slider</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-sweet-alert.html\">Sweet Alert</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-draggable-cards.html\">Draggable Cards</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-tour.html\">Tour Page</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-notification.html\">Notification</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"extended-treeview.html\">Tree View</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarIcons\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-shield\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tIcons
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarIcons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-feather.html\">Feather Icons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-mdi.html\">Material Design Icons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-dripicons.html\">Dripicons</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-font-awesome.html\">Font Awesome 5</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons-themify.html\">Themify</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarForms\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-texture\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tForms
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarForms\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-elements.html\">General Elements</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-advanced.html\">Advanced</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-validation.html\">Validation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-quilljs.html\">Quilljs Editor</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-pickers.html\">Picker</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-file-uploads.html\">File Uploads</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-x-editable.html\">X Editable</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarTables\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-list\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarTables\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-basic.html\">Basic Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-datatables.html\">Data Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-editable.html\">Editable Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-responsive.html\">Responsive Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-tablesaw.html\">Tablesaw Tables</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarCharts\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chart-donut-variant\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarCharts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-flot.html\">Flot Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-morris.html\">Morris Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-chartjs.html\">Chartjs Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-chartist.html\">Chartist Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"charts-sparklines.html\">Sparkline Charts</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMaps\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-map\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMaps
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMaps\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-google.html\">Google Maps</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-vector.html\">Vector Maps</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-share-variant\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tMulti Level
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel2\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSecond Level
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel3\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\tThird Level
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sidebarMultilevel4\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tItem 2
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"sidebarMultilevel4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Item 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Sidebar -->

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Sidebar -left -->

\t\t\t\t</div>
\t\t\t\t<!-- Left Sidebar End -->
\t\t\t{% endblock %}
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Start Page Content here -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t{% block body %}
\t\t\t\t\t<div class=\"content-page\"> <div
\t\t\t\t\t\tclass=\"content\">

\t\t\t\t\t\t<!-- Start Content-->
\t\t\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- container -->

\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t\t<!-- content -->
\t\t\t\t{% block footer %}
\t\t\t\t\t<!-- Footer Start -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t&copy; Adminto theme by
\t\t\t\t\t\t\t\t\t<a href=\"\">Coderthemes</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"text-md-end footer-links d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">About Us</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Help</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Contact Us</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- end Footer -->
\t\t\t\t{% endblock %}
\t\t\t</div>

\t\t\t<!-- ============================================================== -->
\t\t<!-- End Page content -->
\t\t\t<!-- ============================================================== -->


\t\t</div>
\t\t<!-- END wrapper -->

\t\t<!-- Right Sidebar -->
\t\t<div class=\"right-bar\">

\t\t\t<div data-simplebar class=\"h-100\">

\t\t\t\t<div class=\"rightbar-title\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"right-bar-toggle float-end\">
\t\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<h4 class=\"font-16 m-0 text-white\">Theme Customizer</h4>
\t\t\t\t</div>

\t\t\t\t<!-- Tab panes -->
\t\t\t\t<div class=\"tab-content pt-0\">

\t\t\t\t\t<div class=\"tab-pane active\" id=\"settings-tab\" role=\"tabpanel\">

\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\t<strong>Customize
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\tthe overall color scheme, Layout, etc.
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Color Scheme</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"color-scheme-mode\" value=\"light\" id=\"light-mode-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"light-mode-check\">Light Mode</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"color-scheme-mode\" value=\"dark\" id=\"dark-mode-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"dark-mode-check\">Dark Mode</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Width -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Width</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"width\" value=\"fluid\" id=\"fluid-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"fluid-check\">Fluid</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"width\" value=\"boxed\" id=\"boxed-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"boxed-check\">Boxed</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Menu positions -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Menus (Leftsidebar and Topbar) Positon</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"menus-position\" value=\"fixed\" id=\"fixed-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"fixed-check\">Fixed</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"menus-position\" value=\"scrollable\" id=\"scrollable-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"scrollable-check\">Scrollable</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Left Sidebar-->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Left Sidebar Color</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"light\" id=\"light-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"light-check\">Light</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"dark\" id=\"dark-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"dark-check\">Dark</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"brand\" id=\"brand-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"brand-check\">Brand</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-3\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-color\" value=\"gradient\" id=\"gradient-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"gradient-check\">Gradient</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- size -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Left Sidebar Size</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-size\" value=\"default\" id=\"default-size-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"default-size-check\">Default</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-size\" value=\"condensed\" id=\"condensed-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"condensed-check\">Condensed
\t\t\t\t\t\t\t\t\t<small>(Extra Small size)</small>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-size\" value=\"compact\" id=\"compact-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"compact-check\">Compact
\t\t\t\t\t\t\t\t\t<small>(Small size)</small>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- User info -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Sidebar User Info</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"leftsidebar-user\" value=\"fixed\" id=\"sidebaruser-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"sidebaruser-check\">Enable</label>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t\t\t<h6 class=\"fw-medium font-14 mt-4 mb-2 pb-1\">Topbar</h6>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"topbar-color\" value=\"dark\" id=\"darktopbar-check\" checked/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"darktopbar-check\">Dark</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check form-switch mb-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"topbar-color\" value=\"light\" id=\"lighttopbar-check\"/>
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"lighttopbar-check\">Light</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"d-grid mt-4\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"resetBtn\">Reset to Default</button>
\t\t\t\t\t\t\t\t<a href=\"https://1.envato.market/admintoadmin\" class=\"btn btn-danger mt-3\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-basket me-1\"></i>
\t\t\t\t\t\t\t\t\tPurchase Now</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- end slimscroll-menu-->
\t\t</div>
\t\t<!-- /Right-bar -->

\t\t<!-- Right bar overlay-->
\t\t<div class=\"rightbar-overlay\"></div>

\t\t<!-- Vendor js -->
\t\t<script src=\"../assets/js/vendor.min.js\"></script>

\t\t<!-- App js -->
\t\t<script src=\"../assets/js/app.min.js\"></script>

\t</body>
</html>
", "adminBase.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\adminBase.html.twig");
    }
}
