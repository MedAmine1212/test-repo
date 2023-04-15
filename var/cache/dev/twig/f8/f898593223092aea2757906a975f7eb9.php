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

/* components/sessionsResultDisplaySettings.html.twig */
class __TwigTemplate_77acf7b921dc63361d55404edb0359d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sessionsResultDisplaySettings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sessionsResultDisplaySettings.html.twig"));

        // line 1
        echo "<div class=\"display-settings\">
\t<div class=\"left\">

\t\t<div class=\"sort-by\">
\t\t\t<label class=\"me-1\" for=\"sort-by-select\">Trier par :</label>
\t\t\t<select id=\"sort-by-select\" class=\"form-select me-1\">
\t\t\t\t<option value=\"price\" selected>Prix</option>
\t\t\t\t<option value=\"date\">Date</option>
\t\t\t\t<option value=\"places\">Places Restantes</option>
\t\t\t</select>
\t\t\t<button type=\"button\" class=\"btn btn-outline-primary waves-effect waves-light sort-btn\">
\t\t\t\t<i class=\"fas fa-sort-amount-down sort-desc\"></i>
\t\t\t\t<i class=\"fas fa-sort-amount-up sort-asc\"></i>
\t\t\t</button>
\t\t</div>

\t</div>

\t<div class=\"center\">

\t\t<ul class=\"pagination m-0\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"javascript: void(0);\" aria-label=\"Previous\">
\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"javascript: void(0);\">1</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"javascript: void(0);\" aria-label=\"Next\">
\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>

\t</div>

\t<div class=\"right\">

\t\t<div class=\"show-n me-3\">
\t\t\t<label class=\"me-1\" for=\"show-n-select\">Afficher :</label>
\t\t\t<select id=\"show-n-select\" class=\"form-select\">
\t\t\t\t<option value=\"10\" selected>10</option>
\t\t\t\t<option value=\"20\">20</option>
\t\t\t\t<option value=\"50\">50</option>
\t\t\t</select>

\t\t</div>


\t\t<button type=\"button\" class=\"btn btn-outline-primary waves-effect waves-light grid-view-btn me-1\">
\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t</button>

\t\t<button type=\"button\" class=\"btn btn-outline-primary waves-effect waves-light list-view-btn\">
\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t</button>

\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/sessionsResultDisplaySettings.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"display-settings\">
\t<div class=\"left\">

\t\t<div class=\"sort-by\">
\t\t\t<label class=\"me-1\" for=\"sort-by-select\">Trier par :</label>
\t\t\t<select id=\"sort-by-select\" class=\"form-select me-1\">
\t\t\t\t<option value=\"price\" selected>Prix</option>
\t\t\t\t<option value=\"date\">Date</option>
\t\t\t\t<option value=\"places\">Places Restantes</option>
\t\t\t</select>
\t\t\t<button type=\"button\" class=\"btn btn-outline-primary waves-effect waves-light sort-btn\">
\t\t\t\t<i class=\"fas fa-sort-amount-down sort-desc\"></i>
\t\t\t\t<i class=\"fas fa-sort-amount-up sort-asc\"></i>
\t\t\t</button>
\t\t</div>

\t</div>

\t<div class=\"center\">

\t\t<ul class=\"pagination m-0\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"javascript: void(0);\" aria-label=\"Previous\">
\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"javascript: void(0);\">1</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"javascript: void(0);\" aria-label=\"Next\">
\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>

\t</div>

\t<div class=\"right\">

\t\t<div class=\"show-n me-3\">
\t\t\t<label class=\"me-1\" for=\"show-n-select\">Afficher :</label>
\t\t\t<select id=\"show-n-select\" class=\"form-select\">
\t\t\t\t<option value=\"10\" selected>10</option>
\t\t\t\t<option value=\"20\">20</option>
\t\t\t\t<option value=\"50\">50</option>
\t\t\t</select>

\t\t</div>


\t\t<button type=\"button\" class=\"btn btn-outline-primary waves-effect waves-light grid-view-btn me-1\">
\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t</button>

\t\t<button type=\"button\" class=\"btn btn-outline-primary waves-effect waves-light list-view-btn\">
\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t</button>

\t</div>
</div>
", "components/sessionsResultDisplaySettings.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\components\\sessionsResultDisplaySettings.html.twig");
    }
}
