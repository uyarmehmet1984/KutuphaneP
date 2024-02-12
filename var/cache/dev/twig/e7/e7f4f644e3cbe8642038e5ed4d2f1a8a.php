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

/* borrowedbook/index.html.twig */
class __TwigTemplate_2bbeeafffc00ae98e10119f9ec1f20e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "borrowedbook/index.html.twig", 1);
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

        echo "Ödünç Alınan Kitaplar";
        
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
        <h1>Ödünç Alınan Kitaplar</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Alış Tarihi</th>
                    <th>İade Tarihi</th>
                    <th>Barkod No</th>
                    <th>Ödünç Alan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["borrowedbooks"]) || array_key_exists("borrowedbooks", $context) ? $context["borrowedbooks"] : (function () { throw new RuntimeError('Variable "borrowedbooks" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["borrowedbook"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "alisTarihi", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "alisTarihi", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "iadeTarihi", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "iadeTarihi", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "BarkodNo", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>
    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrower_books", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "User", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "User", [], "any", false, false, false, 28), "ad", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
</td>
                
                    <td>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_show", ["id" => twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Göster</a>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Düzenle</a>
                        
                    </td>
                    <td>";
            // line 36
            if ((null === twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "iadeTarihi", [], "any", false, false, false, 36))) {
                // line 37
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_return", ["id" => twig_get_attribute($this->env, $this->source, $context["borrowedbook"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\">İade Al</a>
                    ";
            }
            // line 38
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borrowedbook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_new");
        echo "\" class=\"btn btn-primary\">Yeni Ödünç Kitap Ver</a>
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
        return "borrowedbook/index.html.twig";
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
        return array (  178 => 48,  173 => 45,  164 => 41,  157 => 38,  151 => 37,  149 => 36,  143 => 33,  139 => 32,  130 => 28,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ödünç Alınan Kitaplar{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <h1>Ödünç Alınan Kitaplar</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Alış Tarihi</th>
                    <th>İade Tarihi</th>
                    <th>Barkod No</th>
                    <th>Ödünç Alan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for borrowedbook in borrowedbooks %}
                <tr>
                    <td>{{ borrowedbook.id }}</td>
                    <td>{{ borrowedbook.alisTarihi ? borrowedbook.alisTarihi|date('Y-m-d') : '' }}</td>
                    <td>{{ borrowedbook.iadeTarihi ? borrowedbook.iadeTarihi|date('Y-m-d') : '' }}</td>
                    <td>{{ borrowedbook.BarkodNo }}</td>
                    <td>
    <a href=\"{{ path('borrower_books', {'id': borrowedbook.User.id}) }}\">{{ borrowedbook.User.ad }}</a>
</td>
                
                    <td>
                        <a href=\"{{ path('app_borrowedbook_show', {'id': borrowedbook.id}) }}\" class=\"btn btn-info btn-sm\">Göster</a>
                        <a href=\"{{ path('app_borrowedbook_edit', {'id': borrowedbook.id}) }}\" class=\"btn btn-warning btn-sm\">Düzenle</a>
                        
                    </td>
                    <td>{% if borrowedbook.iadeTarihi is null %}
                        <a href=\"{{ path('app_borrowedbook_return', {'id': borrowedbook.id}) }}\" class=\"btn btn-success btn-sm\">İade Al</a>
                    {% endif %}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_borrowedbook_new') }}\" class=\"btn btn-primary\">Yeni Ödünç Kitap Ver</a>
    </div>
{% endblock %}
", "borrowedbook/index.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\borrowedbook\\index.html.twig");
    }
}
