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

/* borrowedbook/borrower_books.html.twig */
class __TwigTemplate_43619c8e50e25ddb44fe5be9346fd539 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/borrower_books.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/borrower_books.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "borrowedbook/borrower_books.html.twig", 1);
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

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["borrower"]) || array_key_exists("borrower", $context) ? $context["borrower"] : (function () { throw new RuntimeError('Variable "borrower" does not exist.', 4, $this->source); })()), "ad", [], "any", false, false, false, 4), "html", null, true);
        echo " - Ödünç Alınan Kitaplar
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container mt-4\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["borrower"]) || array_key_exists("borrower", $context) ? $context["borrower"] : (function () { throw new RuntimeError('Variable "borrower" does not exist.', 9, $this->source); })()), "ad", [], "any", false, false, false, 9), "html", null, true);
        echo " - Ödünç Alınan Kitaplar</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Alış Tarihi</th>
                    <th>İade Tarihi</th>
                    <th>Barkod No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["borrowedBooks"]) || array_key_exists("borrowedBooks", $context) ? $context["borrowedBooks"] : (function () { throw new RuntimeError('Variable "borrowedBooks" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["borrowedbook"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "alisTarihi", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "alisTarihi", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "iadeTarihi", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "iadeTarihi", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "BarkodNo", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_show", ["id" => twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Göster</a>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Düzenle</a>
                        </td>
                        <td>
                            ";
            // line 33
            if ((null === twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "iadeTarihi", [], "any", false, false, false, 33))) {
                // line 34
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_return", ["id" => twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\">İade Al</a>
                            ";
            }
            // line 36
            echo "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                    <tr>
                        <td colspan=\"5\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borrowedbook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "borrowedbook/borrower_books.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  170 => 43,  161 => 39,  154 => 36,  148 => 34,  146 => 33,  140 => 30,  136 => 29,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  116 => 23,  111 => 22,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}
    {{ borrower.ad }} - Ödünç Alınan Kitaplar
{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <h1>{{ borrower.ad }} - Ödünç Alınan Kitaplar</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Alış Tarihi</th>
                    <th>İade Tarihi</th>
                    <th>Barkod No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for borrowedbook in borrowedBooks %}
                    <tr>
                        <td>{{ borrowedbook.id }}</td>
                        <td>{{ borrowedbook.alisTarihi ? borrowedbook.alisTarihi|date('Y-m-d') : '' }}</td>
                        <td>{{ borrowedbook.iadeTarihi ? borrowedbook.iadeTarihi|date('Y-m-d') : '' }}</td>
                        <td>{{ borrowedbook.BarkodNo }}</td>
                        <td>
                            <a href=\"{{ path('app_borrowedbook_show', {'id': borrowedbook.id}) }}\" class=\"btn btn-info btn-sm\">Göster</a>
                            <a href=\"{{ path('app_borrowedbook_edit', {'id': borrowedbook.id}) }}\" class=\"btn btn-warning btn-sm\">Düzenle</a>
                        </td>
                        <td>
                            {% if borrowedbook.iadeTarihi is null %}
                                <a href=\"{{ path('app_borrowedbook_return', {'id': borrowedbook.id}) }}\" class=\"btn btn-success btn-sm\">İade Al</a>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No records found</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "borrowedbook/borrower_books.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\borrowedbook\\borrower_books.html.twig");
    }
}
