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

/* partials/footer.html.twig */
class __TwigTemplate_c3706c1b78318893620f8769c6c0ed14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"footer bg-overlay\">
    <div class=\"footer-main\">
      <div class=\"container\">
        <div class=\"row justify-content-between\">
          <div class=\"col-lg-4 col-md-6 footer-widget footer-about\">
            <h3 class=\"widget-title\">About Us</h3>
            <img loading=\"lazy\" width=\"200px\" class=\"footer-logo\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"Constra\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class=\"footer-social\">
              <ul>
                <li><a href=\"https://facebook.com/themefisher\" aria-label=\"Facebook\"><i
                      class=\"fab fa-facebook-f\"></i></a></li>
                <li><a href=\"https://twitter.com/themefisher\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                </li>
                <li><a href=\"https://instagram.com/themefisher\" aria-label=\"Instagram\"><i
                      class=\"fab fa-instagram\"></i></a></li>
                <li><a href=\"https://github.com/themefisher\" aria-label=\"Github\"><i class=\"fab fa-github\"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class=\"col-lg-4 col-md-6 footer-widget mt-5 mt-md-0\">
            <h3 class=\"widget-title\">Working Hours</h3>
            <div class=\"working-hours\">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class=\"text-right\">10:00 - 16:00 </span>
              <br> Saturday: <span class=\"text-right\">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class=\"text-right\">09:00 - 12:00</span>
            </div>
          </div><!-- Col end -->

          <div class=\"col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget\">
            <h3 class=\"widget-title\">Services</h3>
            <ul class=\"list-arrow\">
              <li><a href=\"service-single.html\">Pre-Construction</a></li>
              <li><a href=\"service-single.html\">General Contracting</a></li>
              <li><a href=\"service-single.html\">Construction Management</a></li>
              <li><a href=\"service-single.html\">Design and Build</a></li>
              <li><a href=\"service-single.html\">Self-Perform Construction</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-md-6\">
            <div class=\"copyright-info\">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href=\"https://themefisher.com\">Themefisher</a></span>
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"footer-menu text-center text-md-right\">
              <ul class=\"list-unstyled\">
                <li><a href=\"about.html\">About</a></li>
                <li><a href=\"team.html\">Our people</a></li>
                <li><a href=\"faq.html\">Faq</a></li>
                <li><a href=\"news-left-sidebar.html\">Blog</a></li>
                <li><a href=\"pricing.html\">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id=\"back-to-top\" data-spy=\"affix\" data-offset-top=\"10\" class=\"back-to-top position-fixed\">
          <button class=\"btn btn-primary\" title=\"Back to Top\">
            <i class=\"fa fa-angle-double-up\"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Bootstrap jQuery -->
  <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" defer></script>
  <!-- Slick Carousel -->
  <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick/slick-animation.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Color box -->
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/colorbox/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
  <!-- shuffle -->
  <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/shuffle/shuffle.min.js"), "html", null, true);
        echo "\" defer></script>


  <!-- Google Map API Key-->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\" defer></script>
  <!-- Google Map Plugin-->
  <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/google-map/map.js"), "html", null, true);
        echo "\" defer></script>

  <!-- Template custom -->
  <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

  </div><!-- Body inner end -->
  </body>

  </html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/footer.html.twig";
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
        return array (  173 => 105,  167 => 102,  158 => 96,  153 => 94,  148 => 92,  144 => 91,  139 => 89,  134 => 87,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\" class=\"footer bg-overlay\">
    <div class=\"footer-main\">
      <div class=\"container\">
        <div class=\"row justify-content-between\">
          <div class=\"col-lg-4 col-md-6 footer-widget footer-about\">
            <h3 class=\"widget-title\">About Us</h3>
            <img loading=\"lazy\" width=\"200px\" class=\"footer-logo\" src=\"{{asset('images/footer-logo.png')}}\" alt=\"Constra\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class=\"footer-social\">
              <ul>
                <li><a href=\"https://facebook.com/themefisher\" aria-label=\"Facebook\"><i
                      class=\"fab fa-facebook-f\"></i></a></li>
                <li><a href=\"https://twitter.com/themefisher\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                </li>
                <li><a href=\"https://instagram.com/themefisher\" aria-label=\"Instagram\"><i
                      class=\"fab fa-instagram\"></i></a></li>
                <li><a href=\"https://github.com/themefisher\" aria-label=\"Github\"><i class=\"fab fa-github\"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class=\"col-lg-4 col-md-6 footer-widget mt-5 mt-md-0\">
            <h3 class=\"widget-title\">Working Hours</h3>
            <div class=\"working-hours\">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class=\"text-right\">10:00 - 16:00 </span>
              <br> Saturday: <span class=\"text-right\">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class=\"text-right\">09:00 - 12:00</span>
            </div>
          </div><!-- Col end -->

          <div class=\"col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget\">
            <h3 class=\"widget-title\">Services</h3>
            <ul class=\"list-arrow\">
              <li><a href=\"service-single.html\">Pre-Construction</a></li>
              <li><a href=\"service-single.html\">General Contracting</a></li>
              <li><a href=\"service-single.html\">Construction Management</a></li>
              <li><a href=\"service-single.html\">Design and Build</a></li>
              <li><a href=\"service-single.html\">Self-Perform Construction</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-md-6\">
            <div class=\"copyright-info\">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href=\"https://themefisher.com\">Themefisher</a></span>
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"footer-menu text-center text-md-right\">
              <ul class=\"list-unstyled\">
                <li><a href=\"about.html\">About</a></li>
                <li><a href=\"team.html\">Our people</a></li>
                <li><a href=\"faq.html\">Faq</a></li>
                <li><a href=\"news-left-sidebar.html\">Blog</a></li>
                <li><a href=\"pricing.html\">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id=\"back-to-top\" data-spy=\"affix\" data-offset-top=\"10\" class=\"back-to-top position-fixed\">
          <button class=\"btn btn-primary\" title=\"Back to Top\">
            <i class=\"fa fa-angle-double-up\"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src=\"{{asset('plugins/jQuery/jquery.min.js')}}\"></script>
  <!-- Bootstrap jQuery -->
  <script src=\"{{asset('plugins/bootstrap/bootstrap.min.js')}}\" defer></script>
  <!-- Slick Carousel -->
  <script src=\"{{asset('plugins/slick/slick.min.js')}}\"></script>
  <script src=\"{{asset('plugins/slick/slick-animation.min.js')}}\"></script>
  <!-- Color box -->
  <script src=\"{{asset('plugins/colorbox/jquery.colorbox.js')}}\"></script>
  <!-- shuffle -->
  <script src=\"{{asset('plugins/shuffle/shuffle.min.js')}}\" defer></script>


  <!-- Google Map API Key-->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\" defer></script>
  <!-- Google Map Plugin-->
  <script src=\"{{asset('plugins/google-map/map.js')}}\" defer></script>

  <!-- Template custom -->
  <script src=\"{{asset('js/script.js')}}\"></script>

  </div><!-- Body inner end -->
  </body>

  </html>", "partials/footer.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\partials\\footer.html.twig");
    }
}
