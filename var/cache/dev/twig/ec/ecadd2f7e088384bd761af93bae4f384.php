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

/* components/sessionForm.html.twig */
class __TwigTemplate_8b8b7306d8d3c5f7fa474a436c2b7f72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sessionForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sessionForm.html.twig"));

        // line 1
        echo "<div id=\"session-form-modal\" class=\"modal fade overflow-hidden\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-header\">
\t\t\t\t<div class=\"w-100 d-flex align-items-start justify-content-between\">
\t\t\t\t\t<h4 class=\"modal-title display-5\" id=\"standard-modalLabel\">Créer Séance</h4>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">


\t\t\t\t<div class=\"session-form container\">

\t\t\t\t\t<div class=\"row mb-4\">

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"course-select\" class=\"form-label\">Cours</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<select id=\"course-select\" name=\"course\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"503\">test</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\tChoisissez le cours de votre séance.
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"price-input\" class=\"form-label\">Prix</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"price\" min=\"0\" step=\"5\" value=\"5\" id=\"price-input\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">DT</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"max-places-input\" class=\"form-label\">Nombre de places</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"maxPlaces\" min=\"1\" max=\"20\" value=\"5\" id=\"max-places-input\" class=\"form-control\" required/>
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-graduate\"></i>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row mb-4\">

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"dates-input\" class=\"form-label\">Dates</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dates\" id=\"dates-input\" class=\"form-control flatpickr-input\" placeholder=\"Dates des seances\" readonly required>

\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"help-block date-helpers\">
\t\t\t\t\t\t\t\t<small class=\"help-text\">
\t\t\t\t\t\t\t\t\tVous pouvez choisir multiples dates.
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t<small class=\"error-text text-danger\">
\t\t\t\t\t\t\t\t\tVous devez choisir au moins une date.
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t<label for=\"time-input\" class=\"form-label\">Horaire
\t\t\t\t\t\t\t\t<small class=\"text-muted\">( 30 min minimum )</small>
\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t<input type=\"text\" name=\"time\" class=\"bg-primary\" id=\"time-input\">
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row mb-4\">

\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<label for=\"topics-input\" class=\"form-label\">Déscription</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"topics\" id=\"topics-input\" rows=\"4\" maxlength=\"500\" style=\"resize: none;\"></textarea>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-6 d-none\">
\t\t\t\t\t\t\t<label for=\"dates-input\" class=\"form-label\">Image de Couverture</label>
\t\t\t\t\t\t\t<form action=\"/\" method=\"post\" class=\"dropzone\" id=\"myAwesomeDropzone\" data-plugin=\"dropzone\" data-previews-container=\"#file-previews\" data-upload-preview-template=\"#uploadPreviewTemplate\">
\t\t\t\t\t\t\t\t<div class=\"fallback\">
\t\t\t\t\t\t\t\t\t<input name=\"file\" type=\"file\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dz-message needsclick\">
\t\t\t\t\t\t\t\t\t<i class=\"h1 text-muted dripicons-cloud-upload\"></i>
\t\t\t\t\t\t\t\t\t<h3>Drop files here or click to upload.</h3>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-13\">(This is just a demo dropzone. Selected files are
\t\t\t\t\t\t\t\t\t\t<strong>not</strong>
\t\t\t\t\t\t\t\t\t\tactually uploaded.)</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<!-- Preview -->
\t\t\t\t\t\t\t<div class=\"dropzone-previews mt-3\" id=\"file-previews\"></div>

\t\t\t\t\t\t\t<div class=\"d-none\" id=\"uploadPreviewTemplate\">
\t\t\t\t\t\t\t\t<div class=\"card mt-1 mb-0 shadow-none border\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<img data-dz-thumbnail src=\"#\" class=\"avatar-sm rounded bg-light\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col ps-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"text-muted fw-bold\" data-dz-name></a>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\" data-dz-size></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-link btn-lg text-muted\" data-dz-remove>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"dripicons-cross\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t<button type=\"button\" type=\"submit\" class=\"confirm-session-form btn btn-success\">Confirmer</button>
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
        return "components/sessionForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"session-form-modal\" class=\"modal fade overflow-hidden\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-header\">
\t\t\t\t<div class=\"w-100 d-flex align-items-start justify-content-between\">
\t\t\t\t\t<h4 class=\"modal-title display-5\" id=\"standard-modalLabel\">Créer Séance</h4>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">


\t\t\t\t<div class=\"session-form container\">

\t\t\t\t\t<div class=\"row mb-4\">

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"course-select\" class=\"form-label\">Cours</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<select id=\"course-select\" name=\"course\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"503\">test</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\tChoisissez le cours de votre séance.
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"price-input\" class=\"form-label\">Prix</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"price\" min=\"0\" step=\"5\" value=\"5\" id=\"price-input\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">DT</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"max-places-input\" class=\"form-label\">Nombre de places</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"maxPlaces\" min=\"1\" max=\"20\" value=\"5\" id=\"max-places-input\" class=\"form-control\" required/>
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-graduate\"></i>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row mb-4\">

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label for=\"dates-input\" class=\"form-label\">Dates</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dates\" id=\"dates-input\" class=\"form-control flatpickr-input\" placeholder=\"Dates des seances\" readonly required>

\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"help-block date-helpers\">
\t\t\t\t\t\t\t\t<small class=\"help-text\">
\t\t\t\t\t\t\t\t\tVous pouvez choisir multiples dates.
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t<small class=\"error-text text-danger\">
\t\t\t\t\t\t\t\t\tVous devez choisir au moins une date.
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t<label for=\"time-input\" class=\"form-label\">Horaire
\t\t\t\t\t\t\t\t<small class=\"text-muted\">( 30 min minimum )</small>
\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t<input type=\"text\" name=\"time\" class=\"bg-primary\" id=\"time-input\">
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row mb-4\">

\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<label for=\"topics-input\" class=\"form-label\">Déscription</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"topics\" id=\"topics-input\" rows=\"4\" maxlength=\"500\" style=\"resize: none;\"></textarea>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-6 d-none\">
\t\t\t\t\t\t\t<label for=\"dates-input\" class=\"form-label\">Image de Couverture</label>
\t\t\t\t\t\t\t<form action=\"/\" method=\"post\" class=\"dropzone\" id=\"myAwesomeDropzone\" data-plugin=\"dropzone\" data-previews-container=\"#file-previews\" data-upload-preview-template=\"#uploadPreviewTemplate\">
\t\t\t\t\t\t\t\t<div class=\"fallback\">
\t\t\t\t\t\t\t\t\t<input name=\"file\" type=\"file\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dz-message needsclick\">
\t\t\t\t\t\t\t\t\t<i class=\"h1 text-muted dripicons-cloud-upload\"></i>
\t\t\t\t\t\t\t\t\t<h3>Drop files here or click to upload.</h3>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-13\">(This is just a demo dropzone. Selected files are
\t\t\t\t\t\t\t\t\t\t<strong>not</strong>
\t\t\t\t\t\t\t\t\t\tactually uploaded.)</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<!-- Preview -->
\t\t\t\t\t\t\t<div class=\"dropzone-previews mt-3\" id=\"file-previews\"></div>

\t\t\t\t\t\t\t<div class=\"d-none\" id=\"uploadPreviewTemplate\">
\t\t\t\t\t\t\t\t<div class=\"card mt-1 mb-0 shadow-none border\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<img data-dz-thumbnail src=\"#\" class=\"avatar-sm rounded bg-light\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col ps-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"text-muted fw-bold\" data-dz-name></a>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\" data-dz-size></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-link btn-lg text-muted\" data-dz-remove>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"dripicons-cross\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t<button type=\"button\" type=\"submit\" class=\"confirm-session-form btn btn-success\">Confirmer</button>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
", "components/sessionForm.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\components\\sessionForm.html.twig");
    }
}
