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
\t\t\t\t\t\t\t<input hidden type=\"text\" id=\"testId\" value=";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 24, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush \">
\t\t\t\t\t\t\t\t\t\t<label class=\"fw-semibold fs-4\" for=\"question\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 29, $this->source); })()), $context["i"], [], "array", false, false, false, 29), "question", [], "any", false, false, false, 29), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 33, $this->source); })()), $context["i"], [], "array", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"form-check-input\" type=\"radio\" name=\"question";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 33, $this->source); })()), $context["i"], [], "array", false, false, false, 33), "optiona", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 34, $this->source); })()), $context["i"], [], "array", false, false, false, 34), "optiona", [], "any", false, false, false, 34), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 37, $this->source); })()), $context["i"], [], "array", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"form-check-input\" type=\"radio\" name=\"question";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 37, $this->source); })()), $context["i"], [], "array", false, false, false, 37), "optionb", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 38, $this->source); })()), $context["i"], [], "array", false, false, false, 38), "optionb", [], "any", false, false, false, 38), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 41, $this->source); })()), $context["i"], [], "array", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"form-check-input\" type=\"radio\" name=\"question";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 41, $this->source); })()), $context["i"], [], "array", false, false, false, 41), "optionc", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 42, $this->source); })()), $context["i"], [], "array", false, false, false, 42), "optionc", [], "any", false, false, false, 42), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 45, $this->source); })()), $context["i"], [], "array", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" class=\"form-check-input\" type=\"radio\" name=\"question";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 45, $this->source); })()), $context["i"], [], "array", false, false, false, 45), "optiond", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 46, $this->source); })()), $context["i"], [], "array", false, false, false, 46), "optiond", [], "any", false, false, false, 46), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label hidden><input type=\"radio\" name=\"question";
            // line 49
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 49, $this->source); })()), $context["i"], [], "array", false, false, false, 49), "correctOption", [], "any", false, false, false, 49), "html", null, true);
            echo "\" id=\"correctOption\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 49, $this->source); })()), $context["i"], [], "array", false, false, false, 49), "correctOption", [], "any", false, false, false, 49), "html", null, true);
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
        // line 57
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
        // line 75
        echo twig_escape_filter($this->env, (isset($context["nb_questions"]) || array_key_exists("nb_questions", $context) ? $context["nb_questions"] : (function () { throw new RuntimeError('Variable "nb_questions" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "></p>
\t\t\t\t\t\t<p>Félicitations pour avoir terminé le test !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" onclick=\"redirect()\">Quitter</button>
\t\t\t\t\t\t<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultDownload");
        echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary \">Imprimer</button>
\t\t\t\t\t\t</a>
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
// nombre des questions
let nbQuestionsEl = document.getElementById('nb_questions');
let nbQuestions = parseInt(nbQuestionsEl.getAttribute('data-nb'));

// les réponses correctes
let correctOptions = document.querySelectorAll('input[id=\"correctOption\"]');

let limit = nbQuestions;
let finishBtn = document.getElementById(\"btn\");

console.log(nbQuestions);


function terminer_test() {
var modal = new bootstrap.Modal(document.getElementById(\"staticBackdrop\"));
// valeurs selectionnées
let selectedValues = document.querySelectorAll('input[type=\"radio\"]:checked');
let selectedValuesArray = Array.from(selectedValues)

let correctOptionsArray = Array.from(correctOptions)


if (selectedValues.length != nbQuestions) 

toggleErrorModal()





for (let i = 0; i < nbQuestions; i++) {
if (selectedValuesArray[i].value.toString() === correctOptionsArray[i].value.toString()) {
console.log(selectedValuesArray[i].value)
console.log(correctOptionsArray[i].value)
score++;
}


if (score > limit) 
score = limit;



}

\$
let responses = [];
for (let i = 0; i < selectedValuesArray.length; i++) {
console.log(selectedValuesArray[i].id)
responses[i] = {
id: selectedValuesArray[i].id,
value: selectedValuesArray[i].value
}
}

console.log(document.getElementById('testId').value)
console.log(responses)


if (selectedValues.length === nbQuestions) { /*
finishBtn.setAttribute('data-bs-toggle', 'modal');
finishBtn.setAttribute('data-bs-target', '#staticBackdrop'); */
\$.post('/check/' + document.getElementById('testId').value, responses).then(function (res) {
console.log(res)
var resultText = `Vous avez obtenu une note de \${
res.nbCorrectOption
}  sur \${nbQuestions}`;
document.getElementById('nb_questions').innerHTML = resultText;
modal.toggle();
}).fail(function (error) { // Error code here
console.log('Error: ' + error.responseText);
});


}

/*
console.log(selectedValues)


// affichage message résultat
var resultText = `Vous avez obtenu une note de \${score}  sur \${nbQuestions}`
document.getElementById('nb_questions').innerHTML = resultText;
*/

}

function redirect() {
let newPageUrl = '";
        // line 210
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
        return array (  351 => 210,  218 => 80,  210 => 75,  190 => 57,  172 => 49,  166 => 46,  158 => 45,  152 => 42,  144 => 41,  138 => 38,  130 => 37,  124 => 34,  116 => 33,  109 => 29,  103 => 25,  99 => 24,  93 => 21,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
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
\t\t\t\t\t\t\t<input hidden type=\"text\" id=\"testId\" value={{test.id}}>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for i in 0..q|length-1 %}
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush \">
\t\t\t\t\t\t\t\t\t\t<label class=\"fw-semibold fs-4\" for=\"question\">{{q[i].question}}</label>
\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"{{q[i].id}}\" class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value=\"{{q[i].optiona}}\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optiona}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"{{q[i].id}}\" class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value=\"{{q[i].optionb}}\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optionb}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"{{q[i].id}}\" class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value=\"{{q[i].optionc}}\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optionc}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"{{q[i].id}}\" class=\"form-check-input\" type=\"radio\" name=\"question{{i}}\" value=\"{{q[i].optiond}}\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">{{q[i].optiond}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label hidden><input type=\"radio\" name=\"question{{i}}\" value=\"{{q[i].correctOption}}\" id=\"correctOption\">{{q[i].correctOption}}</label>
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
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" onclick=\"redirect()\">Quitter</button>
\t\t\t\t\t\t<a href=\"{{path('resultDownload')}}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary \">Imprimer</button>
\t\t\t\t\t\t</a>
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
// nombre des questions
let nbQuestionsEl = document.getElementById('nb_questions');
let nbQuestions = parseInt(nbQuestionsEl.getAttribute('data-nb'));

// les réponses correctes
let correctOptions = document.querySelectorAll('input[id=\"correctOption\"]');

let limit = nbQuestions;
let finishBtn = document.getElementById(\"btn\");

console.log(nbQuestions);


function terminer_test() {
var modal = new bootstrap.Modal(document.getElementById(\"staticBackdrop\"));
// valeurs selectionnées
let selectedValues = document.querySelectorAll('input[type=\"radio\"]:checked');
let selectedValuesArray = Array.from(selectedValues)

let correctOptionsArray = Array.from(correctOptions)


if (selectedValues.length != nbQuestions) 

toggleErrorModal()





for (let i = 0; i < nbQuestions; i++) {
if (selectedValuesArray[i].value.toString() === correctOptionsArray[i].value.toString()) {
console.log(selectedValuesArray[i].value)
console.log(correctOptionsArray[i].value)
score++;
}


if (score > limit) 
score = limit;



}

\$
let responses = [];
for (let i = 0; i < selectedValuesArray.length; i++) {
console.log(selectedValuesArray[i].id)
responses[i] = {
id: selectedValuesArray[i].id,
value: selectedValuesArray[i].value
}
}

console.log(document.getElementById('testId').value)
console.log(responses)


if (selectedValues.length === nbQuestions) { /*
finishBtn.setAttribute('data-bs-toggle', 'modal');
finishBtn.setAttribute('data-bs-target', '#staticBackdrop'); */
\$.post('/check/' + document.getElementById('testId').value, responses).then(function (res) {
console.log(res)
var resultText = `Vous avez obtenu une note de \${
res.nbCorrectOption
}  sur \${nbQuestions}`;
document.getElementById('nb_questions').innerHTML = resultText;
modal.toggle();
}).fail(function (error) { // Error code here
console.log('Error: ' + error.responseText);
});


}

/*
console.log(selectedValues)


// affichage message résultat
var resultText = `Vous avez obtenu une note de \${score}  sur \${nbQuestions}`
document.getElementById('nb_questions').innerHTML = resultText;
*/

}

function redirect() {
let newPageUrl = '{{ path('getUserTests') }}';
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
