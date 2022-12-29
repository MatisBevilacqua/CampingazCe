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

/* offres/offres.html.twig */
class __TwigTemplate_6fdd251a4b5688987c06acc059c5e1e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offres/offres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offres/offres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offres/offres.html.twig", 1);
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

        echo "Offres
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
\t\t\t\t<li><a href=\"/home\" id=\"home\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/home-closed.png"), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/news\" id=\"news\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news-closed.png"), "html", null, true);
        echo "\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href-\"/offers\" id=\"offers\"><img src=\"";
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
                <h1>LE CE DE CAMPINGAZ</h1>
                <p>Retrouvez toutes les offres du ce de campingaz.</p>
            </section>
        </div>

\t\t<div id=\"link\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/desktop\">Le bureau</a>
\t\t\t\t<a href=\"/hobbies\">Culture / Loisirs</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/travel\">Voyages</a>
\t\t\t\t<a href=\"/parteners\">Partenaires</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/ticket\">Billeteries</a>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"bar\">
\t\t\t
\t\t</div>

\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parteners"]) || array_key_exists("parteners", $context) ? $context["parteners"] : (function () { throw new RuntimeError('Variable "parteners" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partener"]) {
            // line 56
            echo "\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partener"], "title", [], "any", false, false, false, 57), "html", null, true);
            echo "</h2>
\t\t\t\t<p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partener"], "description", [], "any", false, false, false, 58), "html", null, true);
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["partener"], "link", [], "any", false, false, false, 58))) {
                // line 59
                echo "\t\t\t\t\t<a id=\"link_offers_db\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partener"], "link", [], "any", false, false, false, 59), "html", null, true);
                echo "\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t";
            }
            // line 61
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hobbie"]) {
            // line 65
            echo "\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobbie"], "title", [], "any", false, false, false, 66), "html", null, true);
            echo "</h2>
\t\t\t\t";
            // line 67
            if ( !twig_test_empty($context["hobbie"])) {
                // line 68
                echo "\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobbie"], "description", [], "any", false, false, false, 68), "html", null, true);
                echo "<a id=\"link_offers_db\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobbie"], "link", [], "any", false, false, false, 68), "html", null, true);
                echo "\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t";
            }
            // line 70
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobbie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo " 

\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 74
            echo "\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</h2>
\t\t\t\t<p>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 76), "html", null, true);
            echo "
\t\t\t\t";
            // line 77
            if ( !twig_test_empty($context["ticket"])) {
                // line 78
                echo "\t\t\t\t\t<a id=\"link_offers_db\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "link", [], "any", false, false, false, 78), "html", null, true);
                echo "\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t";
            }
            // line 80
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offres/offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 82,  253 => 80,  247 => 78,  245 => 77,  241 => 76,  237 => 75,  234 => 74,  230 => 73,  226 => 71,  219 => 70,  211 => 68,  209 => 67,  205 => 66,  202 => 65,  198 => 64,  195 => 63,  188 => 61,  182 => 59,  179 => 58,  175 => 57,  172 => 56,  168 => 55,  131 => 21,  126 => 19,  121 => 17,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offres
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
\t\t\t\t<li><a href=\"/home\" id=\"home\"><img src=\"{{asset('img/home-closed.png')}}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/news\" id=\"news\"><img src=\"{{asset('img/news-closed.png')}}\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href-\"/offers\" id=\"offers\"><img src=\"{{asset('img/discount-open.png')}}\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
                <h1>LE CE DE CAMPINGAZ</h1>
                <p>Retrouvez toutes les offres du ce de campingaz.</p>
            </section>
        </div>

\t\t<div id=\"link\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/desktop\">Le bureau</a>
\t\t\t\t<a href=\"/hobbies\">Culture / Loisirs</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/travel\">Voyages</a>
\t\t\t\t<a href=\"/parteners\">Partenaires</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/ticket\">Billeteries</a>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"bar\">
\t\t\t
\t\t</div>

\t\t{% for partener in parteners %}
\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>{{partener.title}}</h2>
\t\t\t\t<p>{{partener.description}}{% if partener.link is not empty %}
\t\t\t\t\t<a id=\"link_offers_db\" href=\"{{partener.link}}\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% for hobbie in hobbies %}
\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>{{hobbie.title}}</h2>
\t\t\t\t{% if hobbie is not empty %}
\t\t\t\t\t<p>{{hobbie.description}}<a id=\"link_offers_db\" href=\"{{hobbie.link}}\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %} 

\t\t{% for ticket in tickets %}
\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>{{ticket.title}}</h2>
\t\t\t\t<p>{{ticket.description}}
\t\t\t\t{% if ticket is not empty %}
\t\t\t\t\t<a id=\"link_offers_db\" href=\"{{ticket.link}}\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}
    </main>
{% endblock %}
", "offres/offres.html.twig", "/Applications/MAMP/htdocs/campingaz-ce/templates/offres/offres.html.twig");
    }
}
