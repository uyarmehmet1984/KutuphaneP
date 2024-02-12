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

/* partials/header.html.twig */
class __TwigTemplate_09a450f9af5014188963c879303f82a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<header id=\"header\" class=\"header-one\">
  <div class=\"bg-white\">
    <div class=\"container\">
      <div class=\"logo-area\">
          <div class=\"row align-items-center\">
            <div class=\"logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0\">
                <a class=\"d-block\" href=\"index.html\">
                  <img loading=\"lazy\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Constra\">
                </a>
            </div><!-- logo end -->
  
            <div class=\"col-lg-9 header-right\">
                <ul class=\"top-info-box\">
                  <li>
                    <div class=\"info-box\">
                      <div class=\"info-box-content\">
                          <p class=\"info-box-title\">Call Us</p>
                          <p class=\"info-box-subtitle\">(+9) 847-291-4353</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"info-box\">
                      <div class=\"info-box-content\">
                          <p class=\"info-box-title\">Email Us</p>
                          <p class=\"info-box-subtitle\">office@Constra.com</p>
                      </div>
                    </div>
                  </li>
                  <li class=\"last\">
                    <div class=\"info-box last\">
                      <div class=\"info-box-content\">
                          <p class=\"info-box-title\">Global Certificate</p>
                          <p class=\"info-box-subtitle\">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class=\"header-get-a-quote\">
                    <a class=\"btn btn-primary\" href=\"contact.html\">Get A Quote</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class=\"site-navigation\">
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
        </div>
        <!--/ Row end -->

        <div class=\"nav-search\">
          <span id=\"search\"><i class=\"fa fa-search\"></i></span>
        </div><!-- Search end -->

        <div class=\"search-block\" style=\"display: none;\">
          <label for=\"search-field\" class=\"w-100 mb-0\">
            <input type=\"text\" class=\"form-control\" id=\"search-field\" placeholder=\"Type what you want and enter\">
          </label>
          <span class=\"search-close\">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/header.html.twig";
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
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header-one\">
  <div class=\"bg-white\">
    <div class=\"container\">
      <div class=\"logo-area\">
          <div class=\"row align-items-center\">
            <div class=\"logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0\">
                <a class=\"d-block\" href=\"index.html\">
                  <img loading=\"lazy\" src=\"{{asset('images/logo.png')}}\" alt=\"Constra\">
                </a>
            </div><!-- logo end -->
  
            <div class=\"col-lg-9 header-right\">
                <ul class=\"top-info-box\">
                  <li>
                    <div class=\"info-box\">
                      <div class=\"info-box-content\">
                          <p class=\"info-box-title\">Call Us</p>
                          <p class=\"info-box-subtitle\">(+9) 847-291-4353</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"info-box\">
                      <div class=\"info-box-content\">
                          <p class=\"info-box-title\">Email Us</p>
                          <p class=\"info-box-subtitle\">office@Constra.com</p>
                      </div>
                    </div>
                  </li>
                  <li class=\"last\">
                    <div class=\"info-box last\">
                      <div class=\"info-box-content\">
                          <p class=\"info-box-title\">Global Certificate</p>
                          <p class=\"info-box-subtitle\">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class=\"header-get-a-quote\">
                    <a class=\"btn btn-primary\" href=\"contact.html\">Get A Quote</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class=\"site-navigation\">
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
        </div>
        <!--/ Row end -->

        <div class=\"nav-search\">
          <span id=\"search\"><i class=\"fa fa-search\"></i></span>
        </div><!-- Search end -->

        <div class=\"search-block\" style=\"display: none;\">
          <label for=\"search-field\" class=\"w-100 mb-0\">
            <input type=\"text\" class=\"form-control\" id=\"search-field\" placeholder=\"Type what you want and enter\">
          </label>
          <span class=\"search-close\">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>", "partials/header.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\partials\\header.html.twig");
    }
}
