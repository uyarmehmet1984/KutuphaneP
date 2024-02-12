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

/* book/index.html.twig */
class __TwigTemplate_0a5a561607ada1d0ab5d1d48bb7d8541 extends Template
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
        // line 3
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "book/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kitap Listesi";
        
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
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- ... -->
        <section class=\"content\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Kitap Listesi</h3>
                </div>
                <!-- ... -->
                <div class=\"card-body\">
                    <!-- ... -->
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ad</th>
                                <th>Yazar</th>
                                <th>Sayfa Sayısı</th>
                                <th>ISBN</th>
                                <th>Kitap Sayısı</th>
                                <th>İşlemler</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 35
            echo "                                <tr>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "ad", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "yazar", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "sayfaSayisi", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "ISBN", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "sayi", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Düzenle</a>
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 44), "token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 44)))]), "html", null, true);
            echo "\"
                                           class=\"btn btn-danger\"
                                           onclick=\"return confirm('Kitabı silmek istediğinizden emin misiniz?')\">Sil</a>
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrowedbook_new", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Ödünç Ver</a>
                                    </td>
                                    
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>

                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_new");
        echo "\">Yeni Kitap Ekle</a>
                </div>
            </div>
        </section>
        <!-- ... -->
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
        return "book/index.html.twig";
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
        return array (  174 => 55,  169 => 52,  158 => 47,  152 => 44,  148 => 43,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  120 => 35,  116 => 34,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'adminbase.html.twig' %}

{% block title %}Kitap Listesi{% endblock %}

{% block content %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- ... -->
        <section class=\"content\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Kitap Listesi</h3>
                </div>
                <!-- ... -->
                <div class=\"card-body\">
                    <!-- ... -->
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ad</th>
                                <th>Yazar</th>
                                <th>Sayfa Sayısı</th>
                                <th>ISBN</th>
                                <th>Kitap Sayısı</th>
                                <th>İşlemler</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            {% for book in books %}
                                <tr>
                                    <td>{{ book.id }}</td>
                                    <td>{{ book.ad }}</td>
                                    <td>{{ book.yazar }}</td>
                                    <td>{{ book.sayfaSayisi }}</td>
                                    <td>{{ book.ISBN }}</td>
                                    <td>{{ book.sayi }}</td>
                                    <td>
                                        <a href=\"{{ path('book_edit', {'id': book.id}) }}\" class=\"btn btn-warning\">Düzenle</a>
                                        <a href=\"{{ path('book_delete', {'id': book.id, 'token': csrf_token('delete' ~ book.id) }) }}\"
                                           class=\"btn btn-danger\"
                                           onclick=\"return confirm('Kitabı silmek istediğinizden emin misiniz?')\">Sil</a>
                                        <a href=\"{{ path('app_borrowedbook_new', {'id': book.id}) }}\" class=\"btn btn-info\">Ödünç Ver</a>
                                    </td>
                                    
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>

                    <a href=\"{{ path('book_new') }}\">Yeni Kitap Ekle</a>
                </div>
            </div>
        </section>
        <!-- ... -->
    </div>
{% endblock %}
", "book/index.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\book\\index.html.twig");
    }
}
