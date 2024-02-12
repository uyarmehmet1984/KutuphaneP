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

/* rapor/index.html.twig */
class __TwigTemplate_211ab85c3d0fb335e137494dbfacd213 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rapor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rapor/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "rapor/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "   Raporlar
";
        
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
        echo "<div class=\"card\">
<div class=\"card-header\">
<h3 class=\"card-title\">Raporlar</h3>
</div>

<div class=\"row\">
                <div class=\"col-12 col-sm-4\">
                  <div class=\"info-box bg-light\">
                    <div class=\"info-box-content\">
                      <span class=\"info-box-text text-center text-muted\">Toplam Kitap Sayısı</span>
                      <span class=\"info-box-number text-center text-muted mb-0\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["totalBookCount"]) || array_key_exists("totalBookCount", $context) ? $context["totalBookCount"] : (function () { throw new RuntimeError('Variable "totalBookCount" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 col-sm-4\">
                  <div class=\"info-box bg-light\">
                    <div class=\"info-box-content\">
                      <span class=\"info-box-text text-center text-muted\">Ödünç Alınan Kitap Sayısı</span>
                      <span class=\"info-box-number text-center text-muted mb-0\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["borrowedBookCount"]) || array_key_exists("borrowedBookCount", $context) ? $context["borrowedBookCount"] : (function () { throw new RuntimeError('Variable "borrowedBookCount" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 col-sm-4\">
                  <div class=\"info-box bg-light\">
                    <div class=\"info-box-content\">
                      <span class=\"info-box-text text-center text-muted\">Geciken Ödünç Sayısı</span>
                      <span class=\"info-box-number text-center text-muted mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["lateReturnsCount"]) || array_key_exists("lateReturnsCount", $context) ? $context["lateReturnsCount"] : (function () { throw new RuntimeError('Variable "lateReturnsCount" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div>
              <span><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("most_readers");
        echo "\">Kitap okuma İstatistiği</a></span>
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
        return "rapor/index.html.twig";
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
        return array (  134 => 39,  124 => 32,  113 => 24,  102 => 16,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}
{% block title %}
   Raporlar
{% endblock %}
{% block content %}
<div class=\"card\">
<div class=\"card-header\">
<h3 class=\"card-title\">Raporlar</h3>
</div>

<div class=\"row\">
                <div class=\"col-12 col-sm-4\">
                  <div class=\"info-box bg-light\">
                    <div class=\"info-box-content\">
                      <span class=\"info-box-text text-center text-muted\">Toplam Kitap Sayısı</span>
                      <span class=\"info-box-number text-center text-muted mb-0\">{{ totalBookCount }}</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 col-sm-4\">
                  <div class=\"info-box bg-light\">
                    <div class=\"info-box-content\">
                      <span class=\"info-box-text text-center text-muted\">Ödünç Alınan Kitap Sayısı</span>
                      <span class=\"info-box-number text-center text-muted mb-0\">{{ borrowedBookCount }}</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 col-sm-4\">
                  <div class=\"info-box bg-light\">
                    <div class=\"info-box-content\">
                      <span class=\"info-box-text text-center text-muted\">Geciken Ödünç Sayısı</span>
                      <span class=\"info-box-number text-center text-muted mb-0\">{{ lateReturnsCount }}</span>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div>
              <span><a href=\"{{path('most_readers')}}\">Kitap okuma İstatistiği</a></span>
              </div>
              
{% endblock %}
", "rapor/index.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\rapor\\index.html.twig");
    }
}
