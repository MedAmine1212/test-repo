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

/* passage_test/result.html.twig */
class __TwigTemplate_7f01586037bf1b11881389914b29bea7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage_test/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage_test/result.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Certificate of Completion</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css\">
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\tfont-size: 12pt;
\t\t\t}
\t\t\t.container {
\t\t\t\tmax-width: 800px;
\t\t\t\tmargin: 0 auto;
\t\t\t}
\t\t\t.certificate {
\t\t\t\tbackground-color: #fff;
\t\t\t\tborder: 2px solid #000;
\t\t\t\tpadding: 50px;
\t\t\t\tmargin-top: 50px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.certificate h1 {
\t\t\t\tfont-size: 24pt;
\t\t\t\tmargin-bottom: 30px;
\t\t\t}
\t\t\t.certificate p {
\t\t\t\tfont-size: 16pt;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\ttext-align: justify;
\t\t\t}
\t\t\t.signature {
\t\t\t\tmargin-top: 100px;
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.signature img {
\t\t\t\tmax-width: 200px;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"certificate\">
\t\t\t\t<h1>Certificate of Completion</h1>
\t\t\t\t<p>Fièrement décerné à</p>
\t\t\t\t<h2>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 46, $this->source); })()), 0, [], "array", false, false, false, 46), "users", [], "any", false, false, false, 46), "firstName", [], "any", false, false, false, 46), "html", null, true);
        echo "
\t\t\t\t\t<span>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 47, $this->source); })()), 0, [], "array", false, false, false, 47), "users", [], "any", false, false, false, 47), "lastName", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
\t\t\t\t</h2>
\t\t\t\t<p>Présenté en :</p>
\t\t\t\t<h2 id=\"system-date\"></h2>
\t\t\t\t<br>
\t\t\t\t<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, unde? At, numquam ea, eaque tempora ipsa error assumenda inventore in a esse deserunt praesentium repellendus. Magnam laboriosam sunt eum nostrum!
\t\t\t\t</h6>
\t\t\t\t<div class=\"signature\">
\t\t\t\t\t<img src=\"signature.png\" alt=\"Signature\">
\t\t\t\t\t<p>Bug Diggers<br>Developpeurs de Myalo</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tfunction updateSystemDate() {
var dateElement = document.getElementById(\"system-date\");
var currentDate = new Date();
var options = {
year: 'numeric',
month: 'long',
day: 'numeric'
};
var formattedDate = currentDate.toLocaleDateString('fr-FR', options);
dateElement.innerHTML = formattedDate;
}
window.onload = function () {
updateSystemDate();
};
\t\t</script>
\t</body>
</html>


<table class=\"table\">

\t<thead>
\t\t<tr>
\t\t\t<th>Mark</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td scope=\"row\"></td>
\t\t\t<td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 92, $this->source); })()), 0, [], "array", false, false, false, 92), "mark", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
\t\t\t<td></td>
\t\t</tr>
\t</tbody>

</table>


";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 100, $this->source); })()));
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "passage_test/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 100,  142 => 92,  94 => 47,  90 => 46,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Certificate of Completion</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css\">
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\tfont-size: 12pt;
\t\t\t}
\t\t\t.container {
\t\t\t\tmax-width: 800px;
\t\t\t\tmargin: 0 auto;
\t\t\t}
\t\t\t.certificate {
\t\t\t\tbackground-color: #fff;
\t\t\t\tborder: 2px solid #000;
\t\t\t\tpadding: 50px;
\t\t\t\tmargin-top: 50px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.certificate h1 {
\t\t\t\tfont-size: 24pt;
\t\t\t\tmargin-bottom: 30px;
\t\t\t}
\t\t\t.certificate p {
\t\t\t\tfont-size: 16pt;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\ttext-align: justify;
\t\t\t}
\t\t\t.signature {
\t\t\t\tmargin-top: 100px;
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.signature img {
\t\t\t\tmax-width: 200px;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"certificate\">
\t\t\t\t<h1>Certificate of Completion</h1>
\t\t\t\t<p>Fièrement décerné à</p>
\t\t\t\t<h2>{{result[0].users.firstName}}
\t\t\t\t\t<span>{{result[0].users.lastName}}</span>
\t\t\t\t</h2>
\t\t\t\t<p>Présenté en :</p>
\t\t\t\t<h2 id=\"system-date\"></h2>
\t\t\t\t<br>
\t\t\t\t<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, unde? At, numquam ea, eaque tempora ipsa error assumenda inventore in a esse deserunt praesentium repellendus. Magnam laboriosam sunt eum nostrum!
\t\t\t\t</h6>
\t\t\t\t<div class=\"signature\">
\t\t\t\t\t<img src=\"signature.png\" alt=\"Signature\">
\t\t\t\t\t<p>Bug Diggers<br>Developpeurs de Myalo</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tfunction updateSystemDate() {
var dateElement = document.getElementById(\"system-date\");
var currentDate = new Date();
var options = {
year: 'numeric',
month: 'long',
day: 'numeric'
};
var formattedDate = currentDate.toLocaleDateString('fr-FR', options);
dateElement.innerHTML = formattedDate;
}
window.onload = function () {
updateSystemDate();
};
\t\t</script>
\t</body>
</html>


<table class=\"table\">

\t<thead>
\t\t<tr>
\t\t\t<th>Mark</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td scope=\"row\"></td>
\t\t\t<td>{{result[0].mark}}</td>
\t\t\t<td></td>
\t\t</tr>
\t</tbody>

</table>


{{ dump(result) }}
", "passage_test/result.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\passage_test\\result.html.twig");
    }
}
