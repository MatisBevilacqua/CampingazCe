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

/* user/home/home.html.twig */
class __TwigTemplate_fa93d8fc2a7b8cb0128366253dc032d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/home/home.html.twig", 1);
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

        echo "Accueil
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
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
\t\t\t\t<li><a href=\"/home\" id=\"home\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/home-open.png"), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/\" id=\"news\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news-closed.png"), "html", null, true);
        echo "\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/offers/desktop/\" id=\"offers\"><img src=\"";
        // line 18
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
            </section>
        </div>

\t\t<div id=\"bar\">
\t\t</div>

\t\t<div id=\"container\">
\t\t\t";
        // line 35
        if (twig_test_empty((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "\t\t\t\t<img id=\"empty\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/empty.png"), "html", null, true);
            echo "\">
\t\t\t\t<h2 id=\"empty_content\">Aucune actualités...</h2>
\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 40
            echo "
\t\t\t\t";
            // line 41
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "images_big", [], "any", false, false, false, 41))) {
                // line 42
                echo "\t\t\t\t\t<div class=\"if_empty\">
\t\t\t\t\t\t<img src=";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "images_big", [], "any", false, false, false, 43), "html", null, true);
                echo ">
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 46
            echo "
\t\t\t\t";
            // line 47
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "images_big", [], "any", false, false, false, 47))) {
                // line 48
                echo "\t\t\t\t<div class=\"offers_db\">
\t\t\t\t\t<div class=\"title_dates_offers_db\">
\t\t\t\t\t\t";
                // line 50
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "\t\t\t\t\t\t\t<h2>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 51), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t<div class=\"space_offers_db\"></div>
\t\t\t\t\t\t<p class=\"dates\">";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "dates", [], "any", false, false, false, 54), "short", "none", "", null, "gregorian", "fr"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 56
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "\t\t\t\t\t\t<p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 57), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 58
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "links", [], "any", false, false, false, 58))) {
                        // line 59
                        echo "\t\t\t\t\t\t\t<a id=\"link_offers_db\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "links", [], "any", false, false, false, 59), "html", null, true);
                        echo "\">accéder au partenaire</a>.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["new"], "images", [], "any", false, false, false, 63))) {
                    // line 64
                    echo "\t\t\t\t\t\t<div class=\"img_offers_db\">
\t\t\t\t\t\t\t<img src=";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "images", [], "any", false, false, false, 65), "html", null, true);
                    echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 70
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t</div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 71,  236 => 70,  232 => 68,  226 => 65,  223 => 64,  220 => 63,  217 => 62,  210 => 59,  208 => 58,  203 => 57,  201 => 56,  196 => 54,  193 => 53,  187 => 51,  185 => 50,  181 => 48,  179 => 47,  176 => 46,  170 => 43,  167 => 42,  165 => 41,  162 => 40,  157 => 39,  150 => 36,  148 => 35,  128 => 18,  123 => 16,  118 => 14,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block stylesheets %}
\t<link href=\"{{asset('css/home.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/home\" id=\"home\"><img src=\"{{asset('img/home-open.png')}}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/\" id=\"news\"><img src=\"{{asset('img/news-closed.png')}}\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/offers/desktop/\" id=\"offers\"><img src=\"{{asset('img/discount-closed.png')}}\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
                <h1>LE CE DE CAMPINGAZ</h1>
            </section>
        </div>

\t\t<div id=\"bar\">
\t\t</div>

\t\t<div id=\"container\">
\t\t\t{% if news is empty %}
\t\t\t\t<img id=\"empty\" src=\"{{asset('img/empty.png')}}\">
\t\t\t\t<h2 id=\"empty_content\">Aucune actualités...</h2>
\t\t\t{% endif %}
\t\t\t{% for new in news %}

\t\t\t\t{% if new.images_big is not empty %}
\t\t\t\t\t<div class=\"if_empty\">
\t\t\t\t\t\t<img src={{ new.images_big }}>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if new.images_big is empty %}
\t\t\t\t<div class=\"offers_db\">
\t\t\t\t\t<div class=\"title_dates_offers_db\">
\t\t\t\t\t\t{% if new.title is not empty %}
\t\t\t\t\t\t\t<h2>{{new.title}}</h2>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"space_offers_db\"></div>
\t\t\t\t\t\t<p class=\"dates\">{{ new.dates|format_datetime('short', 'none', locale='fr') }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t{% if new.description is not empty %}
\t\t\t\t\t\t<p>{{new.description}}
\t\t\t\t\t\t{% if new.links is not empty %}
\t\t\t\t\t\t\t<a id=\"link_offers_db\" href=\"{{new.links}}\">accéder au partenaire</a>.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if new.images is not empty %}
\t\t\t\t\t\t<div class=\"img_offers_db\">
\t\t\t\t\t\t\t<img src={{new.images}}>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</div>
    </main>
{% endblock %}
", "user/home/home.html.twig", "/Applications/MAMP/htdocs/campingaz-ce/templates/user/home/home.html.twig");
    }
}
