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

/* partials/sidebar.html.twig */
class __TwigTemplate_a1de3dea9d12239c2dde9fadf9c8d655 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 2
        echo "<aside class=\"bg-light p-4\">
    <h2 class=\"mb-4\">Hoş Geldiniz</h2>
    <p class=\"lead\">Proje kenar çubuğu.</p>

    <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item list-group-item-action\">Menü Öğe 1</a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">Menü Öğe 2</a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">Menü Öğe 3</a>
    </div>

    <div class=\"mt-4\">
        <h5>İlgili Bağlantılar</h5>
        <ul class=\"list-unstyled\">
            <li><a href=\"#\">Bağlantı 1</a></li>
            <li><a href=\"#\">Bağlantı 2</a></li>
            <li><a href=\"#\">Bağlantı 3</a></li>
        </ul>
    </div>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/partials/sidebar.html.twig #}
<aside class=\"bg-light p-4\">
    <h2 class=\"mb-4\">Hoş Geldiniz</h2>
    <p class=\"lead\">Proje kenar çubuğu.</p>

    <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item list-group-item-action\">Menü Öğe 1</a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">Menü Öğe 2</a>
        <a href=\"#\" class=\"list-group-item list-group-item-action\">Menü Öğe 3</a>
    </div>

    <div class=\"mt-4\">
        <h5>İlgili Bağlantılar</h5>
        <ul class=\"list-unstyled\">
            <li><a href=\"#\">Bağlantı 1</a></li>
            <li><a href=\"#\">Bağlantı 2</a></li>
            <li><a href=\"#\">Bağlantı 3</a></li>
        </ul>
    </div>
</aside>
", "partials/sidebar.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\partials\\sidebar.html.twig");
    }
}
