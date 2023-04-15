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

/* sessions/session.html.twig */
class __TwigTemplate_1d0e2e2c9c63c8abfd02c384d6ff7804 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sessions/session.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sessions/session.html.twig"));

        // line 1
        echo "<div class=\"content-page\">
\t<div
\t\tclass=\"content\">

\t\t<!-- Start Content-->
\t\t<div class=\"container-fluid\">

\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-3\">

\t\t\t\t\t<!-- Simple card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/1.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Button</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->

\t\t\t\t<div class=\"col-md-6 col-xl-3\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/2.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t<li class=\"list-group-item\">Cras justo odio</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">Dapibus ac facilisis in</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->

\t\t\t\t<div class=\"col-md-6 col-xl-3\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/3.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->


\t\t\t\t<div class=\"col-md-6 col-xl-3\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"../assets/images/gallery/4.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-body text-center\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-body text-end\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h5 class=\"card-header\">Featured</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Special title treatment</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            additional content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\tQuote
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\tFeatured
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Special title treatment</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            additional content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/5.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            longer.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            longer.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img class=\"card-img-bottom img-fluid\" src=\"../assets/images/gallery/7.jpg\" alt=\"Card image cap\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-inverse text-white\">
\t\t\t\t\t\t<img class=\"card-img img-fluid\" src=\"../assets/images/gallery/6.jpg\" alt=\"Card image\">
\t\t\t\t\t\t<div class=\"card-img-overlay\">
\t\t\t\t\t\t\t<h4 class=\"card-title text-white\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            longer.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-inverse text-white\" style=\"background-color: #333; border-color: #333;\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title text-white\">Special title treatment</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            additional content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Button</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-primary\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-success\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-info\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-warning\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-danger\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-purple\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-pink\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card border border-primary\">
\t\t\t\t\t\t<div class=\"card-body text-primary\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-primary\">Primary card title</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card border border-secondary\">
\t\t\t\t\t\t<div class=\"card-body text-secondary\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-secondary\">Secondary card title</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card border border-success\">
\t\t\t\t\t\t<div class=\"card-body text-success\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-success\">Success card title</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h4 class=\"mt-2 mb-3\">Card Group</h4>
\t\t\t\t\t<div class=\"card-group\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/8.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                longer.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/9.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This card has supporting text below as a natural
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                lead-in to additional content.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/10.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                natural lead-in to additional content. This card has even longer content
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                than the first to show that equal height action.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h4 class=\"mt-2 mb-4\">Navigation</h4>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs card-header-tabs\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\">Active</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Link</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Disabled</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-1\">Special title treatment</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-3\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills card-header-pills\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\">Active</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Link</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Disabled</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-1\">Special title treatment</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-3\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h4 class=\"mt-0 mb-3\">Columns</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/2.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title that wraps to a new line</h4>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a longer card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    longer.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    erat a ante.</p>
\t\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tSomeone famous in
\t\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/3.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This card has supporting text below as a natural
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body text-center\">
\t\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    erat.</p>
\t\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tSomeone famous in
\t\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This card has supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                additional content.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img img-fluid\" src=\"../assets/images/gallery/4.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body text-end\">
\t\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    erat a ante.</p>
\t\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tSomeone famous in
\t\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>

\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                natural lead-in to additional content. This card has even longer content
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                than the first to show that equal height action.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->
\t\t</div>
\t\t<!-- container -->

\t</div>


</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sessions/session.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-page\">
\t<div
\t\tclass=\"content\">

\t\t<!-- Start Content-->
\t\t<div class=\"container-fluid\">

\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-6 col-xl-3\">

\t\t\t\t\t<!-- Simple card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/1.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Button</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->

\t\t\t\t<div class=\"col-md-6 col-xl-3\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/2.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t<li class=\"list-group-item\">Cras justo odio</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\">Dapibus ac facilisis in</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->

\t\t\t\t<div class=\"col-md-6 col-xl-3\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/3.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->


\t\t\t\t<div class=\"col-md-6 col-xl-3\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"../assets/images/gallery/4.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            up the bulk of the card's content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-body text-center\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-body text-end\">
\t\t\t\t\t\t<h4 class=\"card-title\">Special title treatment</h4>
\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        content.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h5 class=\"card-header\">Featured</h5>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Special title treatment</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            additional content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\tQuote
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\tFeatured
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Special title treatment</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            additional content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/5.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            longer.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            longer.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img class=\"card-img-bottom img-fluid\" src=\"../assets/images/gallery/7.jpg\" alt=\"Card image cap\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-inverse text-white\">
\t\t\t\t\t\t<img class=\"card-img img-fluid\" src=\"../assets/images/gallery/6.jpg\" alt=\"Card image\">
\t\t\t\t\t\t<div class=\"card-img-overlay\">
\t\t\t\t\t\t\t<h4 class=\"card-title text-white\">Card title</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            longer.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-inverse text-white\" style=\"background-color: #333; border-color: #333;\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title text-white\">Special title treatment</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            additional content.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Button</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-primary\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-success\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-info\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-warning\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-danger\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-purple\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card text-white bg-pink\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-white-50\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                erat a ante.</p>
\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">Someone famous in
\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card border border-primary\">
\t\t\t\t\t\t<div class=\"card-body text-primary\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-primary\">Primary card title</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card border border-secondary\">
\t\t\t\t\t\t<div class=\"card-body text-secondary\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-secondary\">Secondary card title</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card border border-success\">
\t\t\t\t\t\t<div class=\"card-body text-success\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-success\">Success card title</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h4 class=\"mt-2 mb-3\">Card Group</h4>
\t\t\t\t\t<div class=\"card-group\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/8.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                longer.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/9.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This card has supporting text below as a natural
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                lead-in to additional content.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/10.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                natural lead-in to additional content. This card has even longer content
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                than the first to show that equal height action.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h4 class=\"mt-2 mb-4\">Navigation</h4>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs card-header-tabs\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\">Active</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Link</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Disabled</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-1\">Special title treatment</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-3\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills card-header-pills\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\">Active</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Link</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Disabled</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-1\">Special title treatment</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-3\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h4 class=\"mt-0 mb-3\">Columns</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/2.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title that wraps to a new line</h4>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a longer card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    natural lead-in to additional content. This content is a little bit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    longer.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    erat a ante.</p>
\t\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tSomeone famous in
\t\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top img-fluid\" src=\"../assets/images/gallery/3.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">This card has supporting text below as a natural
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body text-center\">
\t\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    erat.</p>
\t\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tSomeone famous in
\t\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">This card has supporting text below as a natural lead-in to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                additional content.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img img-fluid\" src=\"../assets/images/gallery/4.jpg\" alt=\"Card image cap\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body text-end\">
\t\t\t\t\t\t\t\t<blockquote class=\"card-bodyquote mb-0\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    erat a ante.</p>
\t\t\t\t\t\t\t\t\t<footer class=\"blockquote-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tSomeone famous in
\t\t\t\t\t\t\t\t\t\t<cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Card title</h4>

\t\t\t\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                natural lead-in to additional content. This card has even longer content
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                than the first to show that equal height action.</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Last updated 3 mins ago</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->
\t\t</div>
\t\t<!-- container -->

\t</div>


</div>
", "sessions/session.html.twig", "C:\\Users\\MSI\\Desktop\\me\\pidev_web\\templates\\sessions\\session.html.twig");
    }
}
