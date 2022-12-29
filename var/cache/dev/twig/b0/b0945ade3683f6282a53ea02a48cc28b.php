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

/* admin/admin_news/index.html.twig */
class __TwigTemplate_9b0f457fc3eb4c35e52ff8aa2da61354 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_news/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_news/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_news/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "News
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/admin/\">Acualités</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une actualités</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Bureau</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Bureau</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Culture</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Culture</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Voyages</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Voyages</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Partenaires</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Partenaires</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Billeteries</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Billeteries</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<main>
\t\t<div class=\"container\">
\t\t\t<section id=\"add-news\">
\t\t\t\t<h1 id=\"add\">Ajouter une actualité</h1>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t";
        // line 40
        if ( !(null === (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "\t\t\t\t\t\t<input value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" type=\"text\" hidden>
\t\t\t\t\t";
        }
        // line 43
        echo "
\t\t\t\t\t<div class=\"form-flex\">
\t\t\t\t\t\t<input value=\"";
        // line 45
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "title", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "title", [], "any", false, false, false, 45), "")) : ("")), "html", null, true);
        echo "\" required name=\"title\" type=\"text\" placeholder=\"Titre de l'actu\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-flex\">
\t\t\t\t\t\t<textarea name=\"description\" type=\"text\" placeholder=\"Text de l'actu\" rows=\"5\" cols=\"33\">";
        // line 48
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "description", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "description", [], "any", false, false, false, 48), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t<input value=\"";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "links", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "links", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\" required name=\"links\" type=\"text\" placeholder=\"Titre de l'actu\">
\t\t\t\t\t\t<button type=\"submit\">Valider</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</section>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  162 => 48,  156 => 45,  152 => 43,  146 => 41,  144 => 40,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}News
{% endblock %}

{% block stylesheets %}
\t<link href=\"{{asset('css/admin/admin.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/admin/\">Acualités</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une actualités</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Bureau</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Bureau</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Culture</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Culture</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Voyages</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Voyages</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Partenaires</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Partenaires</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t<li><a href=\"/admin/\">Billeteries</a></li>
\t\t\t\t<li><a href=\"/admin/admin_news/\">Ajouter une offre Billeteries</a></li>
\t\t\t\t<div class=\"bar\"></div>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<main>
\t\t<div class=\"container\">
\t\t\t<section id=\"add-news\">
\t\t\t\t<h1 id=\"add\">Ajouter une actualité</h1>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t{% if news is not null %}
\t\t\t\t\t\t<input value=\"{{ news.id }}\" type=\"text\" hidden>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<div class=\"form-flex\">
\t\t\t\t\t\t<input value=\"{{ news.title|default('') }}\" required name=\"title\" type=\"text\" placeholder=\"Titre de l'actu\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-flex\">
\t\t\t\t\t\t<textarea name=\"description\" type=\"text\" placeholder=\"Text de l'actu\" rows=\"5\" cols=\"33\">{{ news.description|default('') }}</textarea>
\t\t\t\t\t\t<input value=\"{{ news.links|default('') }}\" required name=\"links\" type=\"text\" placeholder=\"Titre de l'actu\">
\t\t\t\t\t\t<button type=\"submit\">Valider</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</section>
\t\t</div>
\t</main>
{% endblock %}
", "admin/admin_news/index.html.twig", "/Applications/MAMP/htdocs/campingaz-ce/templates/admin/admin_news/index.html.twig");
    }
}
