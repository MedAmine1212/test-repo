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

/* tests_qs/questionsList.html.twig */
class __TwigTemplate_e7b0ae69eda5dbeace65c9496620acda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tests_qs/questionsList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tests_qs/questionsList.html.twig"));

        $this->parent = $this->loadTemplate("adminBase.html.twig", "tests_qs/questionsList.html.twig", 1);
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
\t\t<h4 class=\"page-title-main\">Liste des questions</h4>
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
\t\t\twidth: 10%; /* set a fixed width for each th element */
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addQuestion");
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\tAjouter une question</a>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<form class=\"input-group mb-3\" method=\"post\" action=\"findQuestion\">
\t\t\t\t\t<input type=\"search\" class=\"form-control rounded\" id=\"name\" placeholder=\"Nom cours\" name=\"name\"/>
\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" value=\"search\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\tChercher
\t\t\t\t\t</button>


\t\t\t\t</form>
\t\t\t</div>


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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Numéro Question</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option A</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option B</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option C</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option D</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Réponse</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Question</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "questionNumber", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "optiona", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "optionb", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "optionc", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "optiond", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "correctOption", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "question", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateQuestion", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteQuestion", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 79)]), "html", null, true);
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
        // line 85
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tests_qs/questionsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 85,  197 => 79,  191 => 76,  186 => 74,  182 => 73,  178 => 72,  174 => 71,  170 => 70,  166 => 69,  162 => 68,  159 => 67,  155 => 66,  112 => 26,  92 => 8,  82 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}
{% block pageTitle %}
\t<li>
\t\t<h4 class=\"page-title-main\">Liste des questions</h4>
\t</li>
{% endblock %}
{% block body %}
\t<style>
\t\tth,
\t\ttd {
\t\t\twidth: 10%; /* set a fixed width for each th element */
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
\t\t\t\t<div class=\"btn-container\"> <a href=\"{{path('addQuestion')}}\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\tAjouter une question</a>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<form class=\"input-group mb-3\" method=\"post\" action=\"findQuestion\">
\t\t\t\t\t<input type=\"search\" class=\"form-control rounded\" id=\"name\" placeholder=\"Nom cours\" name=\"name\"/>
\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" value=\"search\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\tChercher
\t\t\t\t\t</button>


\t\t\t\t</form>
\t\t\t</div>


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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Numéro Question</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option A</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option B</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option C</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Option D</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Réponse</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Question</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for i in questions %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.questionNumber}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.optiona}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.optionb}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.optionc}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.optiond}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.correctOption}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{i.question}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('updateQuestion',{'id':i.id})}}\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('deleteQuestion',{'id':i.id})}}\" class=\"btn btn-danger\">
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
{% endblock %}
", "tests_qs/questionsList.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\tests_qs\\questionsList.html.twig");
    }
}
