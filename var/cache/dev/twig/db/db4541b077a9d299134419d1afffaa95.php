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

/* adminbase.html.twig */
class __TwigTemplate_c30c2c688d0d9acbc038ca9a656593d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("partials/Admin/head.html.twig", "adminbase.html.twig", 2)->display($context);
        // line 3
        echo "<body class=\"hold-transition sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">
  <!-- Navbar -->
  ";
        // line 7
        $this->loadTemplate("partials/Admin/navbar.html.twig", "adminbase.html.twig", 7)->display($context);
        // line 8
        echo "  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  ";
        // line 11
        $this->loadTemplate("partials/Admin/mainsidebar.html.twig", "adminbase.html.twig", 11)->display($context);
        // line 12
        echo "
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1></h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class=\"container-fluid\">
      <div class= \"row\">
     
    ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "       
      </div>
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  ";
        // line 49
        $this->loadTemplate("partials/Admin/footer.html.twig", "adminbase.html.twig", 49)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "    

   
   Burası Content
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adminbase.html.twig";
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
        return array (  121 => 37,  111 => 36,  101 => 49,  92 => 42,  90 => 36,  64 => 12,  62 => 11,  57 => 8,  55 => 7,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'partials/Admin/head.html.twig' %}
<body class=\"hold-transition sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">
  <!-- Navbar -->
  {% include 'partials/Admin/navbar.html.twig' %}
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {% include 'partials/Admin/mainsidebar.html.twig' %}

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1></h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class=\"container-fluid\">
      <div class= \"row\">
     
    {% block content %}
    

   
   Burası Content
   {% endblock %}
       
      </div>
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  {% include 'partials/Admin/footer.html.twig' %}", "adminbase.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\adminbase.html.twig");
    }
}
