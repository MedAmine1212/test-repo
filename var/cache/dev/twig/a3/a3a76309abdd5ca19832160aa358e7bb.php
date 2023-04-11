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

/* passage_test/tests.html.twig */
class __TwigTemplate_dfab6e34379c5de67bb9f98beb7c0a95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage_test/tests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage_test/tests.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "passage_test/tests.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div data-bs-spy=\"scroll\" data-bs-target=\".navbar\" data-bs-offset=\"58\" class=\"scrollspy-example \">

\t\t<section class=\"section bg-home bg-gradient\" id=\"services\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"title text-center\">
\t\t\t\t\t\t\t<!--\t<h6 class=\"text-primary small-title\">Mes testes</h6> -->
\t\t\t\t\t\t\t<h2>Mes testes</h2>
\t\t\t\t\t\t\t<p class=\"text-muted\">Notre équipe vous souhaite beaucoup de succès :)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_tests"]) || array_key_exists("user_tests", $context) ? $context["user_tests"] : (function () { throw new RuntimeError('Variable "user_tests" does not exist.', 17, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t<img src=\"images/icons/education.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\tTeste n°
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t<div class=\"badge text-wrap\" style=\"width: 6rem; background-color:#97A8F8;\">
\t\t\t\t\t\t\t\t\t\tDurée :
\t\t\t\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "duration", [], "any", false, false, false, 30), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"badge text-wrap\" style=\"width: 6rem;background-color:#EFBBCF;\">
\t\t\t\t\t\t\t\t\t\tSeuil :
\t\t\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "minPoints", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-5\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum quis voluptatibus vel iste a expedita vero quisquam necessitatibus recusandae tempore qui fuga, consectetur ullam inventore doloribus quia rem sapiente?.</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getTest", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"text-custom\"><input class=\"btn btn-light fw-semibold\" type=\"button\" value=\"Passer le test\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container-fluid -->
\t\t</section>
\t\t<!-- services end -->
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "passage_test/tests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  133 => 39,  125 => 34,  118 => 30,  111 => 26,  101 => 18,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<div data-bs-spy=\"scroll\" data-bs-target=\".navbar\" data-bs-offset=\"58\" class=\"scrollspy-example \">

\t\t<section class=\"section bg-home bg-gradient\" id=\"services\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"title text-center\">
\t\t\t\t\t\t\t<!--\t<h6 class=\"text-primary small-title\">Mes testes</h6> -->
\t\t\t\t\t\t\t<h2>Mes testes</h2>
\t\t\t\t\t\t\t<p class=\"text-muted\">Notre équipe vous souhaite beaucoup de succès :)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% for i in user_tests %}
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"services-box p-4 bg-white mt-4\">
\t\t\t\t\t\t\t\t<div class=\"services-img float-start me-4\">
\t\t\t\t\t\t\t\t\t<img src=\"images/icons/education.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\tTeste n°
\t\t\t\t\t\t\t\t\t{{loop.index}}</h5>
\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t<div class=\"badge text-wrap\" style=\"width: 6rem; background-color:#97A8F8;\">
\t\t\t\t\t\t\t\t\t\tDurée :
\t\t\t\t\t\t\t\t\t\t{{i.duration}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"badge text-wrap\" style=\"width: 6rem;background-color:#EFBBCF;\">
\t\t\t\t\t\t\t\t\t\tSeuil :
\t\t\t\t\t\t\t\t\t\t{{i.minPoints}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-5\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum quis voluptatibus vel iste a expedita vero quisquam necessitatibus recusandae tempore qui fuga, consectetur ullam inventore doloribus quia rem sapiente?.</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('getTest',{id:i.id}) }}\" class=\"text-custom\"><input class=\"btn btn-light fw-semibold\" type=\"button\" value=\"Passer le test\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container-fluid -->
\t\t</section>
\t\t<!-- services end -->
\t</div>
{% endblock %}
", "passage_test/tests.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\passage_test\\tests.html.twig");
    }
}
