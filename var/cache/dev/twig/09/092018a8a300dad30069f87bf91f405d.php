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

/* tests/modal_test.html.twig */
class __TwigTemplate_b7a065934fcbb292480d1b8af26ed503 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tests/modal_test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tests/modal_test.html.twig"));

        // line 1
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

<button id=\"my-button\" class=\"btn btn-primary\">Open Modal</button>

<div class=\"modal fade\" id=\"my-modal\">

\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\">Modal title</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form id=\"my-form\" action=\"POST\">";
        // line 15
        echo "\t\t\t\t\t";
        // line 16
        echo "\t\t\t\t\t";
        // line 17
        echo "
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
event.preventDefault()
var myButton = document.getElementById('my-button');
var myModal = document.getElementById('my-modal');

myButton.addEventListener('click', function () {
myModal.classList.add('show');
myModal.style.display = 'block';
});
});
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tests/modal_test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  60 => 16,  58 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

<button id=\"my-button\" class=\"btn btn-primary\">Open Modal</button>

<div class=\"modal fade\" id=\"my-modal\">

\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\">Modal title</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form id=\"my-form\" action=\"POST\">{# {{ form(form) }} #}
\t\t\t\t\t{# <a href=\"{{path('addTest')}}\"><input type=\"submit\" value=\"Ajouter\"></a> #}
\t\t\t\t\t{# {% include \"tests/form.html.twig\" %} #}

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
event.preventDefault()
var myButton = document.getElementById('my-button');
var myModal = document.getElementById('my-modal');

myButton.addEventListener('click', function () {
myModal.classList.add('show');
myModal.style.display = 'block';
});
});
</script>
", "tests/modal_test.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev\\templates\\tests\\modal_test.html.twig");
    }
}
