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

/* passage_test/quiz.html.twig */
class __TwigTemplate_ee8aec42a17e563e372709b56fd55c67 extends Template
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
        return "quizbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage_test/quiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage_test/quiz.html.twig"));

        $this->parent = $this->loadTemplate("quizbase.html.twig", "passage_test/quiz.html.twig", 1);
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
        echo "\t<body class=\"loading authentication-bg authentication-bg-pattern\">

\t\t<div class=\"account-pages mt-5 mb-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-8 col-lg-6 col-xl-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/logo-dark.png\" alt=\"\" height=\"22\" class=\"logo-light mx-auto\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h1 class=\"display-4 text-center\">
\t\t\t\t\t\t\t\tPage du
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Quiz</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted mt-2 mb-4\">Bonne chance :)</p>
\t\t\t\t\t\t\t<div class=\"timer\">Temps restant :
\t\t\t\t\t\t\t\t<li class=\"fs-3 text-danger\" style=\"list-style-type: none;\" id=\"countdown\" value=";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 19, $this->source); })()), "duration", [], "any", false, false, false, 19), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 19, $this->source); })()), "duration", [], "any", false, false, false, 19), "html", null, true);
        echo ":00</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 23, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush \">
\t\t\t\t\t\t\t\t\t\t<label class=\"fw-semibold fs-4\" for=\"question\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 28, $this->source); })()), $context["i"], [], "array", false, false, false, 28), "question", [], "any", false, false, false, 28), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question";
            // line 31
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 31, $this->source); })()), $context["i"], [], "array", false, false, false, 31), "optiona", [], "any", false, false, false, 31), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 32, $this->source); })()), $context["i"], [], "array", false, false, false, 32), "optiona", [], "any", false, false, false, 32), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question";
            // line 35
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 35, $this->source); })()), $context["i"], [], "array", false, false, false, 35), "optionb", [], "any", false, false, false, 35), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 36, $this->source); })()), $context["i"], [], "array", false, false, false, 36), "optionb", [], "any", false, false, false, 36), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question";
            // line 39
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 39, $this->source); })()), $context["i"], [], "array", false, false, false, 39), "optionc", [], "any", false, false, false, 39), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 40, $this->source); })()), $context["i"], [], "array", false, false, false, 40), "optionc", [], "any", false, false, false, 40), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question";
            // line 43
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 43, $this->source); })()), $context["i"], [], "array", false, false, false, 43), "optiond", [], "any", false, false, false, 43), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 44, $this->source); })()), $context["i"], [], "array", false, false, false, 44), "optiond", [], "any", false, false, false, 44), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label hidden><input type=\"radio\" name=\"question";
            // line 47
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), "correctOption", [], "any", false, false, false, 47), "html", null, true);
            echo " id=\"correctOption\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), "correctOption", [], "any", false, false, false, 47), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card-body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t<button id=\"btn\" type=\"submit\" class=\"btn btn-info\" onclick=\"terminer_test(); \">Terminer test</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</div>
\t\t<!-- end page -->
\t\t<!-- result modal -->
\t\t<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content text-center\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"staticBackdropLabel\">Résultat test</h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body bg-light \">
\t\t\t\t\t\t<p id=\"nb_questions\" data-nb=";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["nb_questions"]) || array_key_exists("nb_questions", $context) ? $context["nb_questions"] : (function () { throw new RuntimeError('Variable "nb_questions" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "></p>
\t\t\t\t\t\t<p>Félicitations pour avoir terminé le test !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger  col-6 mx-auto\" data-bs-dismiss=\"modal\" onclick=\"redirect()\">Quitter</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col-6 mx-auto \">Imprimer</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Danger Alert Modal -->
\t\t<div id=\"danger-alert-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t\t<div class=\"modal-content modal-filled bg-danger\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"dripicons-wrong h1 text-white\"></i>
\t\t\t\t\t\t\t<h4 class=\"mt-2 text-white\">Erreur</h4>
\t\t\t\t\t\t\t<p class=\"mt-3 text-white\">Veuillez répondre à toutes les questions !</p>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light my-2\" data-bs-dismiss=\"modal\">Ok</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.modal-content -->
\t\t\t</div>
\t\t\t<!-- /.modal-dialog -->
\t\t</div>
\t\t<!-- /.modal -->

\t\t<!-- Vendor js -->
\t\t<script src=\"../assets/js/vendor.min.js\"></script>

\t\t<!-- App js -->
\t\t<script src=\"../assets/js/app.min.js\"></script>


\t\t<!-- my js -->
\t\t<script>
\t\t\tdocument.getElementById(\"btn\").addEventListener(\"click\", function (event) {
event.preventDefault()
});

let score = 0;
let radioCount = 0;

let nbQuestionsEl = document.getElementById('nb_questions');
let nbQuestions = parseInt(nbQuestionsEl.getAttribute('data-nb'));
console.log(nbQuestions);


function terminer_test() {

const limit = nbQuestions;
const finishBtn = document.getElementById(\"btn\");
const correctOptions = document.querySelectorAll('input[id=\"correctOption\"]');
var selectedValues = document.querySelectorAll('input[type=\"radio\"]:checked');
var checkbtn = document.querySelectorAll('input[type=\"radio\"]');

selectedValues.forEach(selectedValue => {
correctOptions.forEach(option => {

if (selectedValue.value.toString() === option.value.toString()) 
score++;



if (score > limit) 
score = limit;



})

});

checkbtn.forEach((btn) => {
if (btn.checked) {
radioCount++;
if (radioCount > limit) 
radioCount = limit;



}


});

if (radioCount === nbQuestions) {
finishBtn.setAttribute('data-bs-toggle', 'modal');
finishBtn.setAttribute('data-bs-target', '#staticBackdrop');
}
console.log(nbQuestions)
console.log('score' + score);
console.log('selected' + radioCount);

var modal = new bootstrap.Modal(document.getElementById(\"staticBackdrop\"));
if (radioCount === nbQuestions)  // all the questions are answered
modal.toggle();
 else 
toggleErrorModal()





var resultText = `Vous avez obtenu une note de \${score}  sur \${nbQuestions}`
document.getElementById('nb_questions').innerHTML = resultText;

}

function redirect() {
const newPageUrl = '";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getUserTests");
        echo "';
window.location.href = newPageUrl;
}

// ------------------------ countdown timer -------------------------------------
let durationMinutes = document.querySelector('li[id=\"countdown\"]').value

let time = durationMinutes * 60 - 1

let countdownEl = document.querySelector('li[id=\"countdown\"]')
setInterval(updateCoundown, 1000)

if (time === 0) {
clearInterval(x)
}

function updateCoundown() {
let minutes = Math.floor(time / 60)
let seconds = time % 60
seconds = seconds < durationMinutes ? '0' + seconds : seconds;


countdownEl.innerHTML = `\${minutes}:\${seconds}`
time--;
if (seconds < 10 && seconds != 0) 
countdownEl.innerHTML = `\${minutes}:0\${seconds}`





}

/*
function toggleModal() {
var button = document.getElementById(\"btn\");
button.addEventListener(\"click\", function () {
var modal = new bootstrap.Modal(document.getElementById(\"staticBackdrop\"));
if (radioCount === nbQuestions)  // + all the questions are answered
modal.toggle();
 else 
toggleErrorModal()





var resultText = `Vous avez obtenu une note de \${
score - 1
}  sur \${nbQuestions}`
document.getElementById('nb_questions').innerHTML = resultText;


});
}
*/

function toggleErrorModal() {
var button = document.getElementById(\"btn\");

var modal = new bootstrap.Modal(document.getElementById(\"danger-alert-modal\"));
modal.toggle();

}
\t\t</script>
\t\t<!-- Bootstrap JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "passage_test/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 186,  197 => 73,  177 => 55,  159 => 47,  153 => 44,  147 => 43,  141 => 40,  135 => 39,  129 => 36,  123 => 35,  117 => 32,  111 => 31,  105 => 28,  99 => 24,  95 => 23,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'quizbase.html.twig' %}
{% block body %}
\t<body class=\"loading authentication-bg authentication-bg-pattern\">

\t\t<div class=\"account-pages mt-5 mb-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-8 col-lg-6 col-xl-5\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"../assets/images/logo-dark.png\" alt=\"\" height=\"22\" class=\"logo-light mx-auto\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h1 class=\"display-4 text-center\">
\t\t\t\t\t\t\t\tPage du
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Quiz</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted mt-2 mb-4\">Bonne chance :)</p>
\t\t\t\t\t\t\t<div class=\"timer\">Temps restant :
\t\t\t\t\t\t\t\t<li class=\"fs-3 text-danger\" style=\"list-style-type: none;\" id=\"countdown\" value={{test.duration}}>{{test.duration}}:00</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for i in 0..q|length-1 %}
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush \">
\t\t\t\t\t\t\t\t\t\t<label class=\"fw-semibold fs-4\" for=\"question\">{{q[i].question}}</label>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value={{q[i].optiona}}>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optiona}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value={{q[i].optionb}}>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optionb}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value={{q[i].optionc}}>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optionc}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value={{q[i].optiond}}>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optiond}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label hidden><input type=\"radio\" name=\"question{{i}}\" value={{q[i].correctOption}} id=\"correctOption\">{{q[i].correctOption}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card-body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<button id=\"btn\" type=\"submit\" class=\"btn btn-info\" onclick=\"terminer_test(); \">Terminer test</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</div>
\t\t<!-- end page -->
\t\t<!-- result modal -->
\t\t<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content text-center\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"staticBackdropLabel\">Résultat test</h1>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body bg-light \">
\t\t\t\t\t\t<p id=\"nb_questions\" data-nb={{nb_questions}}></p>
\t\t\t\t\t\t<p>Félicitations pour avoir terminé le test !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger  col-6 mx-auto\" data-bs-dismiss=\"modal\" onclick=\"redirect()\">Quitter</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col-6 mx-auto \">Imprimer</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Danger Alert Modal -->
\t\t<div id=\"danger-alert-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t\t<div class=\"modal-content modal-filled bg-danger\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"dripicons-wrong h1 text-white\"></i>
\t\t\t\t\t\t\t<h4 class=\"mt-2 text-white\">Erreur</h4>
\t\t\t\t\t\t\t<p class=\"mt-3 text-white\">Veuillez répondre à toutes les questions !</p>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light my-2\" data-bs-dismiss=\"modal\">Ok</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.modal-content -->
\t\t\t</div>
\t\t\t<!-- /.modal-dialog -->
\t\t</div>
\t\t<!-- /.modal -->

\t\t<!-- Vendor js -->
\t\t<script src=\"../assets/js/vendor.min.js\"></script>

\t\t<!-- App js -->
\t\t<script src=\"../assets/js/app.min.js\"></script>


\t\t<!-- my js -->
\t\t<script>
\t\t\tdocument.getElementById(\"btn\").addEventListener(\"click\", function (event) {
event.preventDefault()
});

let score = 0;
let radioCount = 0;

let nbQuestionsEl = document.getElementById('nb_questions');
let nbQuestions = parseInt(nbQuestionsEl.getAttribute('data-nb'));
console.log(nbQuestions);


function terminer_test() {

const limit = nbQuestions;
const finishBtn = document.getElementById(\"btn\");
const correctOptions = document.querySelectorAll('input[id=\"correctOption\"]');
var selectedValues = document.querySelectorAll('input[type=\"radio\"]:checked');
var checkbtn = document.querySelectorAll('input[type=\"radio\"]');

selectedValues.forEach(selectedValue => {
correctOptions.forEach(option => {

if (selectedValue.value.toString() === option.value.toString()) 
score++;



if (score > limit) 
score = limit;



})

});

checkbtn.forEach((btn) => {
if (btn.checked) {
radioCount++;
if (radioCount > limit) 
radioCount = limit;



}


});

if (radioCount === nbQuestions) {
finishBtn.setAttribute('data-bs-toggle', 'modal');
finishBtn.setAttribute('data-bs-target', '#staticBackdrop');
}
console.log(nbQuestions)
console.log('score' + score);
console.log('selected' + radioCount);

var modal = new bootstrap.Modal(document.getElementById(\"staticBackdrop\"));
if (radioCount === nbQuestions)  // all the questions are answered
modal.toggle();
 else 
toggleErrorModal()





var resultText = `Vous avez obtenu une note de \${score}  sur \${nbQuestions}`
document.getElementById('nb_questions').innerHTML = resultText;

}

function redirect() {
const newPageUrl = '{{ path('getUserTests') }}';
window.location.href = newPageUrl;
}

// ------------------------ countdown timer -------------------------------------
let durationMinutes = document.querySelector('li[id=\"countdown\"]').value

let time = durationMinutes * 60 - 1

let countdownEl = document.querySelector('li[id=\"countdown\"]')
setInterval(updateCoundown, 1000)

if (time === 0) {
clearInterval(x)
}

function updateCoundown() {
let minutes = Math.floor(time / 60)
let seconds = time % 60
seconds = seconds < durationMinutes ? '0' + seconds : seconds;


countdownEl.innerHTML = `\${minutes}:\${seconds}`
time--;
if (seconds < 10 && seconds != 0) 
countdownEl.innerHTML = `\${minutes}:0\${seconds}`





}

/*
function toggleModal() {
var button = document.getElementById(\"btn\");
button.addEventListener(\"click\", function () {
var modal = new bootstrap.Modal(document.getElementById(\"staticBackdrop\"));
if (radioCount === nbQuestions)  // + all the questions are answered
modal.toggle();
 else 
toggleErrorModal()





var resultText = `Vous avez obtenu une note de \${
score - 1
}  sur \${nbQuestions}`
document.getElementById('nb_questions').innerHTML = resultText;


});
}
*/

function toggleErrorModal() {
var button = document.getElementById(\"btn\");

var modal = new bootstrap.Modal(document.getElementById(\"danger-alert-modal\"));
modal.toggle();

}
\t\t</script>
\t\t<!-- Bootstrap JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t</body>
{% endblock %}
", "passage_test/quiz.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\passage_test\\quiz.html.twig");
    }
}
