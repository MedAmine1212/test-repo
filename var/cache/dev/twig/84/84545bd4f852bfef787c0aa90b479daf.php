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

/* components/sessionCard.html.twig */
class __TwigTemplate_79c3e8b6cf59e6ecd7f15d1315f0d275 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sessionCard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sessionCard.html.twig"));

        // line 1
        echo "<div class=\"col-sm-12 col-lg-6\">

\t<div class=\"card session-card p-0\">
\t\t<img class=\"card-img-top img-fluid\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 4, $this->source); })()), "imageLink", [], "any", false, false, false, 4)), "html", null, true);
        echo "\">


\t\t<div class=\"card-body pb-2\">

\t\t\t<div class=\"card-title mb-2\">
\t\t\t\t<div>
\t\t\t\t\t<h4 class=\"card-title h3 p-0 m-0\">Course Name</h4>
\t\t\t\t\t<div class=\"creator\">
\t\t\t\t\t\t<h5 class=\"card-title text-muted h6 p-0 m-0\">Creator Name</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<span class=\"badge bg-success fw-bolder fs-6\">
\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), 3), "html", null, true);
        echo "
\t\t\t\t\tDT</span>
\t\t\t</div>


\t\t\t<div class=\"card-content\">
\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
\t\t\t\t\t<p class=\"fs-6 text-muted\">
\t\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "Y - m - d"), "html", null, true);
        echo "


\t\t\t\t\t\t<span class=\"mx-1\">
\t\t\t\t\t\t\t|
\t\t\t\t\t\t</span>

\t\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 33, $this->source); })()), "startTime", [], "any", false, false, false, 33), "H:i"), "html", null, true);
        echo "
\t\t\t\t\t\t-
\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "endTime", [], "any", false, false, false, 35), "H:i"), "html", null, true);
        echo "

\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text text-body\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 38, $this->source); })()), "topics", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>

\t\t\t\t\t<a class=\"details-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">Voir Details
\t\t\t\t\t\t<i class=\"ps-1 fas fa-external-link-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t</a>
\t\t\t</div>


\t\t\t<div class=\"card-actions mt-2 p-0\">
\t\t\t\t<small class=\"text-body-secondary\">Nombre de places :
\t\t\t\t\t<br>
\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "places", [], "any", false, false, false, 50), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 51
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 51, $this->source); })()), "maxPlaces", [], "any", false, false, false, 51))) {
            // line 52
            echo "\t\t\t\t\t\t/
\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 53, $this->source); })()), "maxPlaces", [], "any", false, false, false, 53), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t</small>

\t\t\t\t<button class=\"participate-action btn btn-primary waves-effect waves-light fs-5\">
\t\t\t\t\t<span class=\"btn-label\">
\t\t\t\t\t\t<i class=\"fas fa-shopping-cart fs-6\"></i>
\t\t\t\t\t</span>
\t\t\t\t\tParticiper
\t\t\t\t</button>

\t\t\t\t<button class=\"mobile-btn participate-action btn btn-lg btn-primary waves-effect waves-light \">
\t\t\t\t\t<i class=\"fas fa-shopping-cart fs-4\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/sessionCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  127 => 53,  124 => 52,  122 => 51,  118 => 50,  105 => 40,  100 => 38,  94 => 35,  89 => 33,  79 => 26,  74 => 24,  65 => 18,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-12 col-lg-6\">

\t<div class=\"card session-card p-0\">
\t\t<img class=\"card-img-top img-fluid\" src=\"{{asset(session.imageLink)}}\">


\t\t<div class=\"card-body pb-2\">

\t\t\t<div class=\"card-title mb-2\">
\t\t\t\t<div>
\t\t\t\t\t<h4 class=\"card-title h3 p-0 m-0\">Course Name</h4>
\t\t\t\t\t<div class=\"creator\">
\t\t\t\t\t\t<h5 class=\"card-title text-muted h6 p-0 m-0\">Creator Name</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<span class=\"badge bg-success fw-bolder fs-6\">
\t\t\t\t\t{{session.price|number_format(3)}}
\t\t\t\t\tDT</span>
\t\t\t</div>


\t\t\t<div class=\"card-content\">
\t\t\t\t<a href=\"{{path('session', {id:session.id})}}\">
\t\t\t\t\t<p class=\"fs-6 text-muted\">
\t\t\t\t\t\t{{session.date|date('Y - m - d')}}


\t\t\t\t\t\t<span class=\"mx-1\">
\t\t\t\t\t\t\t|
\t\t\t\t\t\t</span>

\t\t\t\t\t\t{{session.startTime|date('H:i')}}
\t\t\t\t\t\t-
\t\t\t\t\t\t{{session.endTime|date('H:i')}}

\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text text-body\">{{session.topics}}</p>

\t\t\t\t\t<a class=\"details-link\" href=\"{{path('session', {id:session.id})}}\">Voir Details
\t\t\t\t\t\t<i class=\"ps-1 fas fa-external-link-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t</a>
\t\t\t</div>


\t\t\t<div class=\"card-actions mt-2 p-0\">
\t\t\t\t<small class=\"text-body-secondary\">Nombre de places :
\t\t\t\t\t<br>
\t\t\t\t\t{{session.places}}
\t\t\t\t\t{% if session.maxPlaces is not null %}
\t\t\t\t\t\t/
\t\t\t\t\t\t{{session.maxPlaces}}
\t\t\t\t\t{% endif %}
\t\t\t\t</small>

\t\t\t\t<button class=\"participate-action btn btn-primary waves-effect waves-light fs-5\">
\t\t\t\t\t<span class=\"btn-label\">
\t\t\t\t\t\t<i class=\"fas fa-shopping-cart fs-6\"></i>
\t\t\t\t\t</span>
\t\t\t\t\tParticiper
\t\t\t\t</button>

\t\t\t\t<button class=\"mobile-btn participate-action btn btn-lg btn-primary waves-effect waves-light \">
\t\t\t\t\t<i class=\"fas fa-shopping-cart fs-4\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
", "components/sessionCard.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\components\\sessionCard.html.twig");
    }
}
