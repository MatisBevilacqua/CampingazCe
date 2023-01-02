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

/* user/offers_all/travel/index.html.twig */
class __TwigTemplate_eff2600187a1ca0988893aa7c5978b06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/offers_all/travel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/offers_all/travel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/offers_all/travel/index.html.twig", 1);
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

        echo "Voyages
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/offres.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news-closed.png"), "html", null, true);
        echo "\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/offers/desktop/\" id=\"offers\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discount-open.png"), "html", null, true);
        echo "\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
\t\t\t\t<h1>Offres</h1>
                <p>Retrouvez toutes les offres du ce de campingaz.</p>
            </section>
        </div>
\t\t
\t\t<div id=\"link\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/user/offers/desktop\">Le bureau</a>\t
\t\t\t\t<a href=\"/user/offers/hobbies\">Culture / Loisirs</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/user/offers/travel\">Voyages</a>
\t\t\t\t<a href=\"/user/offers/parteners\">Partenaires</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/user/offers/ticket\">Billeteries</a>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"bar\">
\t\t</div>

\t\t";
        // line 54
        if (twig_test_empty((isset($context["travels"]) || array_key_exists("travels", $context) ? $context["travels"] : (function () { throw new RuntimeError('Variable "travels" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "\t\t\t<img id=\"empty\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/empty.png"), "html", null, true);
            echo "\">
\t\t\t<h2 id=\"empty_content\">Aucune offres...</h2>
\t\t";
        }
        // line 58
        echo "
\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["travels"]) || array_key_exists("travels", $context) ? $context["travels"] : (function () { throw new RuntimeError('Variable "travels" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["travel"]) {
            // line 60
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["travel"], "dates", [], "any", false, false, false, 60))) {
                // line 61
                echo "\t\t\t\t<div class=\"offers_db_date\">
\t\t\t\t\t<p class=\"dates\">
\t\t\t\t\t\tdate limite :  <div class=\"space_offers_db\"></div>
\t\t\t\t\t";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["travel"], "dates", [], "any", false, false, false, 64), "short", "none", "", null, "gregorian", "fr"), "html", null, true);
                echo "</p>
\t\t\t\t</div>
\t\t\t";
            }
            // line 67
            echo "\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["travel"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</h2>
\t\t\t\t<p>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["travel"], "description", [], "any", false, false, false, 69), "html", null, true);
            echo "
\t\t\t\t";
            // line 70
            if ( !twig_test_empty($context["travel"])) {
                // line 71
                echo "\t\t\t\t\t<a id=\"link_offers_db\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["travel"], "link", [], "any", false, false, false, 71), "html", null, true);
                echo "\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t";
            }
            // line 73
            echo "\t\t\t</div>\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['travel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/offers_all/travel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 75,  216 => 73,  210 => 71,  208 => 70,  204 => 69,  200 => 68,  197 => 67,  191 => 64,  186 => 61,  183 => 60,  179 => 59,  176 => 58,  169 => 55,  167 => 54,  131 => 21,  126 => 19,  121 => 17,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Voyages
{% endblock %}

{% block stylesheets %}
\t<link href=\"{{asset('css/offres.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
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
\t\t\t\t<li><a href=\"/user/news\" id=\"news\"><img src=\"{{asset('img/news-closed.png')}}\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/user/offers/desktop/\" id=\"offers\"><img src=\"{{asset('img/discount-open.png')}}\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
\t\t\t\t<h1>Offres</h1>
                <p>Retrouvez toutes les offres du ce de campingaz.</p>
            </section>
        </div>
\t\t
\t\t<div id=\"link\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/user/offers/desktop\">Le bureau</a>\t
\t\t\t\t<a href=\"/user/offers/hobbies\">Culture / Loisirs</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/user/offers/travel\">Voyages</a>
\t\t\t\t<a href=\"/user/offers/parteners\">Partenaires</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/user/offers/ticket\">Billeteries</a>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"bar\">
\t\t</div>

\t\t{% if travels is empty %}
\t\t\t<img id=\"empty\" src=\"{{asset('img/empty.png')}}\">
\t\t\t<h2 id=\"empty_content\">Aucune offres...</h2>
\t\t{% endif %}

\t\t{% for travel in travels %}
\t\t\t{% if travel.dates is not empty %}
\t\t\t\t<div class=\"offers_db_date\">
\t\t\t\t\t<p class=\"dates\">
\t\t\t\t\t\tdate limite :  <div class=\"space_offers_db\"></div>
\t\t\t\t\t{{ travel.dates|format_datetime('short', 'none', locale='fr') }}</p>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>{{travel.title}}</h2>
\t\t\t\t<p>{{travel.description}}
\t\t\t\t{% if travel is not empty %}
\t\t\t\t\t<a id=\"link_offers_db\" href=\"{{travel.link}}\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t{% endif %}
\t\t\t</div>\t\t\t
\t\t{% endfor %}
    </main>
{% endblock %}
", "user/offers_all/travel/index.html.twig", "/Applications/MAMP/htdocs/campingaz-ce/templates/user/offers_all/travel/index.html.twig");
    }
}
