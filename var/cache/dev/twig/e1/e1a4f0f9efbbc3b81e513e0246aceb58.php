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

/* user/news/index.html.twig */
class __TwigTemplate_e972be34d8e3c2a3e287f87fd545b824 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/news/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/news/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/news/index.html.twig", 1);
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

        echo "Actualités
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/news.css"), "html", null, true);
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
        echo "\t<div class=\"img_top_logo\">
\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b2/Campingazlogo.jpg\" alt=\"l'image charge\">
\t</div>
\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/\" id=\"home\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/home-closed.png"), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/news\" id=\"news\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news-open.png"), "html", null, true);
        echo "\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/offers\" id=\"offers\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discount-closed.png"), "html", null, true);
        echo "\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
                <h1>LE CE DE CAMPINGAZ</h1>
                <p>Retrouvez toutes les acualités du ce de campingaz.</p>
            </section>
        </div>
\t\t<div id=\"bar\">

\t\t</div>
\t\t<div id=\"container\">
\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 39
            echo "\t\t\t<div class=\"offers_db\">
\t\t\t\t<div class=\"title_dates_offers_db\">
\t\t\t\t\t";
            // line 41
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 41))) {
                // line 42
                echo "\t\t\t\t\t\t<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 42), "html", null, true);
                echo "</h2>
\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t<div class=\"space_offers_db\"></div>
\t\t\t\t\t<p class=\"dates\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "dates", [], "any", false, false, false, 45), "short", "none", "", null, "gregorian", "fr"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t";
            // line 47
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 47))) {
                // line 48
                echo "\t\t\t\t<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 48), "html", null, true);
                echo "
\t\t\t\t";
                // line 49
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "links", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "\t\t\t\t\t<a id=\"link_offers_db\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "links", [], "any", false, false, false, 50), "html", null, true);
                    echo "\">accéder au partenaire</a>.</p>
\t\t\t\t";
                }
                // line 52
                echo "\t\t\t";
            }
            // line 53
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "images", [], "any", false, false, false, 53))) {
                // line 54
                echo "\t\t\t\t<div class=\"img_offers_db\">
\t\t\t\t\t<img src=";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "images", [], "any", false, false, false, 55), "html", null, true);
                echo ">
\t\t\t\t</div>
\t\t\t";
            }
            // line 58
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 60,  205 => 58,  199 => 55,  196 => 54,  193 => 53,  190 => 52,  184 => 50,  182 => 49,  177 => 48,  175 => 47,  170 => 45,  167 => 44,  161 => 42,  159 => 41,  155 => 39,  151 => 38,  131 => 21,  126 => 19,  121 => 17,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Actualités
{% endblock %}

{% block stylesheets %}
\t<link href=\"{{asset('css/news.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
\t<div class=\"img_top_logo\">
\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b2/Campingazlogo.jpg\" alt=\"l'image charge\">
\t</div>
\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/\" id=\"home\"><img src=\"{{asset('img/home-closed.png')}}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/news\" id=\"news\"><img src=\"{{asset('img/news-open.png')}}\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/offers\" id=\"offers\"><img src=\"{{asset('img/discount-closed.png')}}\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
                <h1>LE CE DE CAMPINGAZ</h1>
                <p>Retrouvez toutes les acualités du ce de campingaz.</p>
            </section>
        </div>
\t\t<div id=\"bar\">

\t\t</div>
\t\t<div id=\"container\">
\t\t{% for new in news %}
\t\t\t<div class=\"offers_db\">
\t\t\t\t<div class=\"title_dates_offers_db\">
\t\t\t\t\t{% if new.title is not empty %}
\t\t\t\t\t\t<h2>{{new.title}}</h2>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"space_offers_db\"></div>
\t\t\t\t\t<p class=\"dates\">{{ new.dates|format_datetime('short', 'none', locale='fr') }}</p>
\t\t\t\t</div>
\t\t\t{% if new.description is not empty %}
\t\t\t\t<p>{{new.description}}
\t\t\t\t{% if new.links is not empty %}
\t\t\t\t\t<a id=\"link_offers_db\" href=\"{{new.links}}\">accéder au partenaire</a>.</p>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t\t{% if new.images is not empty %}
\t\t\t\t<div class=\"img_offers_db\">
\t\t\t\t\t<img src={{new.images}}>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}
\t\t</div>
    </main>
{% endblock %}
", "user/news/index.html.twig", "/Applications/MAMP/htdocs/campingaz-ce/templates/user/news/index.html.twig");
    }
}