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

/* partials/menu.html.twig */
class __TwigTemplate_e36fd75fd2b45f14775f8994318eb630 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu.html.twig"));

        // line 1
        echo "<div class=\"site-navigation\">
    <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
              <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                <div id=\"navbar-collapse\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav mr-auto\">
                      <li class=\"nav-item dropdown active\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Home <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li class=\"active\"><a href=\"index.html\">Home One</a></li>
                            <li><a href=\"index-2.html\">Home Two</a></li>
                          </ul>
                      </li>

                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Company <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"about.html\">About Us</a></li>
                            <li><a href=\"team.html\">Our People</a></li>
                            <li><a href=\"testimonials.html\">Testimonials</a></li>
                            <li><a href=\"faq.html\">Faq</a></li>
                            <li><a href=\"pricing.html\">Pricing</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Projects <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"projects.html\">Projects All</a></li>
                            <li><a href=\"projects-single.html\">Projects Single</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Services <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"services.html\">Services All</a></li>
                            <li><a href=\"service-single.html\">Services Single</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Features <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"typography.html\">Typography</a></li>
                            <li><a href=\"404.html\">404</a></li>
                            <li class=\"dropdown-submenu\">
                                <a href=\"#!\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Parent Menu</a>
                                <ul class=\"dropdown-menu\">
                                  <li><a href=\"#!\">Child Menu 1</a></li>
                                  <li><a href=\"#!\">Child Menu 2</a></li>
                                  <li><a href=\"#!\">Child Menu 3</a></li>
                                </ul>
                            </li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">News <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"news-left-sidebar.html\">News Left Sidebar</a></li>
                            <li><a href=\"news-right-sidebar.html\">News Right Sidebar</a></li>
                            <li><a href=\"news-single.html\">News Single</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/menu.html.twig";
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
        return new Source("<div class=\"site-navigation\">
    <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
              <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                <div id=\"navbar-collapse\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav mr-auto\">
                      <li class=\"nav-item dropdown active\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Home <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li class=\"active\"><a href=\"index.html\">Home One</a></li>
                            <li><a href=\"index-2.html\">Home Two</a></li>
                          </ul>
                      </li>

                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Company <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"about.html\">About Us</a></li>
                            <li><a href=\"team.html\">Our People</a></li>
                            <li><a href=\"testimonials.html\">Testimonials</a></li>
                            <li><a href=\"faq.html\">Faq</a></li>
                            <li><a href=\"pricing.html\">Pricing</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Projects <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"projects.html\">Projects All</a></li>
                            <li><a href=\"projects-single.html\">Projects Single</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Services <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"services.html\">Services All</a></li>
                            <li><a href=\"service-single.html\">Services Single</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Features <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"typography.html\">Typography</a></li>
                            <li><a href=\"404.html\">404</a></li>
                            <li class=\"dropdown-submenu\">
                                <a href=\"#!\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Parent Menu</a>
                                <ul class=\"dropdown-menu\">
                                  <li><a href=\"#!\">Child Menu 1</a></li>
                                  <li><a href=\"#!\">Child Menu 2</a></li>
                                  <li><a href=\"#!\">Child Menu 3</a></li>
                                </ul>
                            </li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item dropdown\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">News <i class=\"fa fa-angle-down\"></i></a>
                          <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"news-left-sidebar.html\">News Left Sidebar</a></li>
                            <li><a href=\"news-right-sidebar.html\">News Right Sidebar</a></li>
                            <li><a href=\"news-single.html\">News Single</a></li>
                          </ul>
                      </li>
              
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>", "partials/menu.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\partials\\menu.html.twig");
    }
}
