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

/* partials/topbar.html.twig */
class __TwigTemplate_1bd3844764cef8c2ed795ffc6560b177 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/topbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/topbar.html.twig"));

        // line 1
        echo "<div id=\"top-bar\" class=\"top-bar\">
    <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-lg-8 col-md-8\">
            <ul class=\"top-info text-center text-md-left\">
                <li><i class=\"fas fa-map-marker-alt\"></i> <p class=\"info-text\">9051 Constra Incorporate, USA</p>
                </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class=\"col-lg-4 col-md-4 top-social text-center text-md-right\">
            <ul class=\"list-unstyled\">
                <li>
                  <a title=\"Facebook\" href=\"https://facebbok.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-facebook-f\"></i></span>
                  </a>
                  <a title=\"Twitter\" href=\"https://twitter.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-twitter\"></i></span>
                  </a>
                  <a title=\"Instagram\" href=\"https://instagram.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-instagram\"></i></span>
                  </a>
                  <a title=\"Linkdin\" href=\"https://github.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-github\"></i></span>
                  </a>
                </li>
            </ul>
          </div>
          <!--/ Top social end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/topbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top-bar\" class=\"top-bar\">
    <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-lg-8 col-md-8\">
            <ul class=\"top-info text-center text-md-left\">
                <li><i class=\"fas fa-map-marker-alt\"></i> <p class=\"info-text\">9051 Constra Incorporate, USA</p>
                </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class=\"col-lg-4 col-md-4 top-social text-center text-md-right\">
            <ul class=\"list-unstyled\">
                <li>
                  <a title=\"Facebook\" href=\"https://facebbok.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-facebook-f\"></i></span>
                  </a>
                  <a title=\"Twitter\" href=\"https://twitter.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-twitter\"></i></span>
                  </a>
                  <a title=\"Instagram\" href=\"https://instagram.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-instagram\"></i></span>
                  </a>
                  <a title=\"Linkdin\" href=\"https://github.com/themefisher.com\">
                      <span class=\"social-icon\"><i class=\"fab fa-github\"></i></span>
                  </a>
                </li>
            </ul>
          </div>
          <!--/ Top social end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>", "partials/topbar.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\partials\\topbar.html.twig");
    }
}
