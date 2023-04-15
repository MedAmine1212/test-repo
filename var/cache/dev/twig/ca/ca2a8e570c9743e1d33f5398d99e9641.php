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

/* tests/tests_list.html.twig */
class __TwigTemplate_34e577e01d6381f4c5e72a9f497333ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tests/tests_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tests/tests_list.html.twig"));

        $this->parent = $this->loadTemplate("adminBase.html.twig", "tests/tests_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 3
        echo "\t<li>
\t\t<h4 class=\"page-title-main\">Liste des testes</h4>
\t</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<style>
\t\tth,
\t\ttd {
\t\t\twidth: 30%; /* set a fixed width for each th element */
\t\t\tpadding: 30px; /* adjust the padding as needed */
\t\t\ttext-align: left; /* center the text within each th element */
\t\t}
\t\t.btn-container {
\t\t\ttext-align: right;
\t\t\tmargin: 20px 40px 20px 0;
\t\t}
\t</style>
\t<div class=\"content-page\">
\t\t<div class=\"content\">

\t\t\t<!-- Start Content-->

\t\t\t<!--button-->
\t\t\t\t<div class=\"btn-container\"> <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTest");
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\tAjouter un test</a>
\t\t\t</div>
\t\t\t<br>
\t\t\t<form class=\"input-group mb-3\" method=\"post\" action=\"find\">
\t\t\t\t<input type=\"search\" class=\"form-control rounded\" id=\"name\" placeholder=\"Nom cours\" name=\"name\"/>
\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" value=\"search\">
\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\tChercher
\t\t\t\t</button>


\t\t\t</form>
\t\t\t<div class=\"container-fluid\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-left\" id=\"btn-editable\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Seuil</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Durée</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "minPoints", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "duration", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateTest", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteTest", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end .table-responsive-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end col -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- container -->

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body></html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tests/tests_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 74,  174 => 68,  168 => 65,  163 => 63,  159 => 62,  155 => 61,  152 => 60,  148 => 59,  112 => 26,  92 => 8,  82 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}
{% block pageTitle %}
\t<li>
\t\t<h4 class=\"page-title-main\">Liste des testes</h4>
\t</li>
{% endblock %}
{% block body %}
\t<style>
\t\tth,
\t\ttd {
\t\t\twidth: 30%; /* set a fixed width for each th element */
\t\t\tpadding: 30px; /* adjust the padding as needed */
\t\t\ttext-align: left; /* center the text within each th element */
\t\t}
\t\t.btn-container {
\t\t\ttext-align: right;
\t\t\tmargin: 20px 40px 20px 0;
\t\t}
\t</style>
\t<div class=\"content-page\">
\t\t<div class=\"content\">

\t\t\t<!-- Start Content-->

\t\t\t<!--button-->
\t\t\t\t<div class=\"btn-container\"> <a href=\"{{path('addTest')}}\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\tAjouter un test</a>
\t\t\t</div>
\t\t\t<br>
\t\t\t<form class=\"input-group mb-3\" method=\"post\" action=\"find\">
\t\t\t\t<input type=\"search\" class=\"form-control rounded\" id=\"name\" placeholder=\"Nom cours\" name=\"name\"/>
\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" value=\"search\">
\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\tChercher
\t\t\t\t</button>


\t\t\t</form>
\t\t\t<div class=\"container-fluid\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-left\" id=\"btn-editable\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Seuil</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Durée</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for i in tests %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.type}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.minPoints}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.duration}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('updateTest',{'id':i.id})}}\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('deleteTest',{'id':i.id})}}\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end .table-responsive-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end col -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- container -->

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body></html>{% endblock %}
", "tests/tests_list.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\tests\\tests_list.html.twig");
    }
}
