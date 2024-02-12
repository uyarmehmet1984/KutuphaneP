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

/* borrowedbook/show.html.twig */
class __TwigTemplate_1884ce5c4a50c141f8c635d31f7db969 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "borrowedbook/show.html.twig", 1);
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

        echo "Ödünç Kitap Detayı";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Ödünç Kitap Detayı</h1>

        <table class=\"table table-bordered\">
            <tbody>
                <tr>
                    <th scope=\"row\">ID</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">Ödünç Aldığı Tarih</th>
                    <td>";
        // line 17
        ((twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 17, $this->source); })()), "alisTarihi", [], "any", false, false, false, 17)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 17, $this->source); })()), "alisTarihi", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true))) : (print ("Not Available")));
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">İade Tarihi</th>
                    <td>";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 21, $this->source); })()), "iadeTarihi", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 21, $this->source); })()), "iadeTarihi", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("Henüz İade Edilmedi")));
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">Barkod Numaraı</th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 25, $this->source); })()), "BarkodNo", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>

        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_index");
        echo "\" class=\"btn btn-secondary\">Ödünç Alınan Kitaplar</a>

        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["borrowedbook"]) || array_key_exists("borrowedbook", $context) ? $context["borrowedbook"] : (function () { throw new RuntimeError('Variable "borrowedbook" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Düzenle</a>

        ";
        // line 34
        echo twig_include($this->env, $context, "borrowedbook/_delete_form.html.twig");
        echo "
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
        return "borrowedbook/show.html.twig";
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
        return array (  136 => 34,  131 => 32,  126 => 30,  118 => 25,  111 => 21,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ödünç Kitap Detayı{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Ödünç Kitap Detayı</h1>

        <table class=\"table table-bordered\">
            <tbody>
                <tr>
                    <th scope=\"row\">ID</th>
                    <td>{{ borrowedbook.id }}</td>
                </tr>
                <tr>
                    <th scope=\"row\">Ödünç Aldığı Tarih</th>
                    <td>{{ borrowedbook.alisTarihi ? borrowedbook.alisTarihi|date('Y-m-d') : 'Not Available' }}</td>
                </tr>
                <tr>
                    <th scope=\"row\">İade Tarihi</th>
                    <td>{{ borrowedbook.iadeTarihi ? borrowedbook.iadeTarihi|date('Y-m-d') : 'Henüz İade Edilmedi' }}</td>
                </tr>
                <tr>
                    <th scope=\"row\">Barkod Numaraı</th>
                    <td>{{ borrowedbook.BarkodNo }}</td>
                </tr>
            </tbody>
        </table>

        <a href=\"{{ path('app_borrowedbook_index') }}\" class=\"btn btn-secondary\">Ödünç Alınan Kitaplar</a>

        <a href=\"{{ path('app_borrowedbook_edit', {'id': borrowedbook.id}) }}\" class=\"btn btn-primary\">Düzenle</a>

        {{ include('borrowedbook/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "borrowedbook/show.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\borrowedbook\\show.html.twig");
    }
}
