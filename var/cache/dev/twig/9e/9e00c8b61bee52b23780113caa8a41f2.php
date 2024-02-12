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

/* ogrencibase.html.twig */
class __TwigTemplate_423b813687c3952e1111e6b148f28942 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ogrencibase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ogrencibase.html.twig"));

        // line 1
        echo "<!doctype html>

<html lang=\"tr\">
  <head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <title></title>
    <!-- CSS files -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/css/tabler.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/css/tabler-flags.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/css/tabler-payments.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/css/tabler-vendors.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/css/demo.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    
  </head>
  <body >
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/js/demo-theme.min.js"), "html", null, true);
        echo "\"></script>
    <div class=\"page\">
      <!-- Navbar -->
      <header class=\"navbar navbar-expand-md d-print-none\" >
        <div class=\"container-xl\">
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <h1 class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
            <a href=\".\">
              <img src=\"https://torbali.meb.gov.tr/www/assets/images/header-meb-yeni-logo.png\" width=\"110\" height=\"32\" alt=\"Tabler\" class=\"navbar-brand-image\">
              Milli Eğitim Bakanlığı
            </a>
          </h1>
          <div class=\"navbar-nav flex-row order-md-last\">
            <div class=\"nav-item d-none d-md-flex me-3\">
            
            </div>
            <div class=\"d-none d-md-flex\">
              <a href=\"?theme=dark\" class=\"nav-link px-0 hide-theme-dark\" title=\"Enable dark mode\" data-bs-toggle=\"tooltip\"
\t\t   data-bs-placement=\"bottom\">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z\" /></svg>
              </a>
              <a href=\"?theme=light\" class=\"nav-link px-0 hide-theme-light\" title=\"Enable light mode\" data-bs-toggle=\"tooltip\"
\t\t   data-bs-placement=\"bottom\">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\" /><path d=\"M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7\" /></svg>
              </a>
              <div class=\"nav-item dropdown d-none d-md-flex me-3\">
                <a href=\"#\" class=\"nav-link px-0\" data-bs-toggle=\"dropdown\" tabindex=\"-1\" aria-label=\"Show notifications\">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6\" /><path d=\"M9 17v1a3 3 0 0 0 6 0v-1\" /></svg>
                  <span class=\"badge bg-red\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card\">
                  <div class=\"card\">
                    <div class=\"card-header\">
                      <h3 class=\"card-title\">Last updates</h3>
                    </div>
                    <div class=\"list-group list-group-flush list-group-hoverable\">
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot status-dot-animated bg-red d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 1</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              Change deprecated html tags to text decoration classes (#29604)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-muted\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 2</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              justify-content:between ⇒ justify-content:space-between (#29734)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions show\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-yellow\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 3</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              Update change-version.js (#29736)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-muted\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot status-dot-animated bg-green d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 4</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              Regenerate package-lock.json (#29730)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-muted\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"nav-item dropdown\">
              <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
                <span class=\"avatar avatar-sm\" style=\"background-image: url(../static/avatars/000m.jpg)\"></span>
                <div class=\"d-none d-xl-block ps-2\">
                  <div>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "ad", [], "any", false, false, false, 136), "html", null, true);
        echo "</div>
                  <div class=\"mt-1 small text-muted\">Öğrenci-15265847</div>
                </div>
              </a>
              <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <a href=\"#\" class=\"dropdown-item\">Status</a>
                <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\" class=\"dropdown-item\">Profile</a>
                <a href=\"#\" class=\"dropdown-item\">Feedback</a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"./settings.html\" class=\"dropdown-item\">Settings</a>
                <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class=\"navbar-expand-md\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
          <div class=\"navbar\">
            <div class=\"container-xl\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"ogrenci.html\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Ana Sayfa
                    </span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"kitaplarim.html\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Kitaplarım
                    </span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"./\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Profilim
                    </span>
                  </a>
                </li>
               
              </ul>
              <div class=\"my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last\">
                <form action=\"./\" method=\"get\" autocomplete=\"off\" novalidate>
                  <div class=\"input-icon\">
                    <span class=\"input-icon-addon\">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0\" /><path d=\"M21 21l-6 -6\" /></svg>
                    </span>
                    <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search in website\">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class=\"page-wrapper\">
        <!-- Page header -->
        <div class=\"page-header d-print-none\">
          <div class=\"container-xl\">
            <div class=\"row g-2 align-items-center\">
              <div class=\"col\">
                <!-- Page pre-title -->
             
                <div class=\"page-wrapper\">
                  <!-- Page header -->
                  ";
        // line 214
        $this->displayBlock('body', $context, $blocks);
        // line 217
        echo "                  
          <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">
              İptal
            </a>
            <a href=\"#\" class=\"btn btn-primary ms-auto\" data-bs-dismiss=\"modal\">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
             Gönder
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->

    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/libs/apexcharts/dist/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/libs/jsvectormap/dist/js/jsvectormap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/libs/jsvectormap/dist/maps/world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/libs/jsvectormap/dist/maps/world-merc.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/js/tabler.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("KutuphaneTemplate/dist/js/demo.min.js"), "html", null, true);
        echo "\"></script>
    
    
    
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 214
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 215
        echo "                  
                  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ogrencibase.html.twig";
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
        return array (  353 => 215,  343 => 214,  327 => 239,  323 => 238,  318 => 236,  314 => 235,  310 => 234,  306 => 233,  288 => 217,  286 => 214,  215 => 146,  208 => 142,  199 => 136,  78 => 18,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>

<html lang=\"tr\">
  <head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <title></title>
    <!-- CSS files -->
    <link href=\"{{asset('KutuphaneTemplate/dist/css/tabler.min.css')}}\" rel=\"stylesheet\"/>
    <link href=\"{{asset('KutuphaneTemplate/dist/css/tabler-flags.min.css')}}\" rel=\"stylesheet\"/>
    <link href=\"{{asset('KutuphaneTemplate/dist/css/tabler-payments.min.css')}}\" rel=\"stylesheet\"/>
    <link href=\"{{asset('KutuphaneTemplate/dist/css/tabler-vendors.min.css')}}\"rel=\"stylesheet\"/>
    <link href=\"{{asset('KutuphaneTemplate/dist/css/demo.min.css')}}\" rel=\"stylesheet\"/>
    
  </head>
  <body >
    <script src=\"{{asset('KutuphaneTemplate/dist/js/demo-theme.min.js')}}\"></script>
    <div class=\"page\">
      <!-- Navbar -->
      <header class=\"navbar navbar-expand-md d-print-none\" >
        <div class=\"container-xl\">
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <h1 class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
            <a href=\".\">
              <img src=\"https://torbali.meb.gov.tr/www/assets/images/header-meb-yeni-logo.png\" width=\"110\" height=\"32\" alt=\"Tabler\" class=\"navbar-brand-image\">
              Milli Eğitim Bakanlığı
            </a>
          </h1>
          <div class=\"navbar-nav flex-row order-md-last\">
            <div class=\"nav-item d-none d-md-flex me-3\">
            
            </div>
            <div class=\"d-none d-md-flex\">
              <a href=\"?theme=dark\" class=\"nav-link px-0 hide-theme-dark\" title=\"Enable dark mode\" data-bs-toggle=\"tooltip\"
\t\t   data-bs-placement=\"bottom\">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z\" /></svg>
              </a>
              <a href=\"?theme=light\" class=\"nav-link px-0 hide-theme-light\" title=\"Enable light mode\" data-bs-toggle=\"tooltip\"
\t\t   data-bs-placement=\"bottom\">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\" /><path d=\"M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7\" /></svg>
              </a>
              <div class=\"nav-item dropdown d-none d-md-flex me-3\">
                <a href=\"#\" class=\"nav-link px-0\" data-bs-toggle=\"dropdown\" tabindex=\"-1\" aria-label=\"Show notifications\">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6\" /><path d=\"M9 17v1a3 3 0 0 0 6 0v-1\" /></svg>
                  <span class=\"badge bg-red\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card\">
                  <div class=\"card\">
                    <div class=\"card-header\">
                      <h3 class=\"card-title\">Last updates</h3>
                    </div>
                    <div class=\"list-group list-group-flush list-group-hoverable\">
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot status-dot-animated bg-red d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 1</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              Change deprecated html tags to text decoration classes (#29604)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-muted\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 2</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              justify-content:between ⇒ justify-content:space-between (#29734)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions show\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-yellow\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 3</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              Update change-version.js (#29736)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-muted\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class=\"list-group-item\">
                        <div class=\"row align-items-center\">
                          <div class=\"col-auto\"><span class=\"status-dot status-dot-animated bg-green d-block\"></span></div>
                          <div class=\"col text-truncate\">
                            <a href=\"#\" class=\"text-body d-block\">Example 4</a>
                            <div class=\"d-block text-muted text-truncate mt-n1\">
                              Regenerate package-lock.json (#29730)
                            </div>
                          </div>
                          <div class=\"col-auto\">
                            <a href=\"#\" class=\"list-group-item-actions\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-muted\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"nav-item dropdown\">
              <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
                <span class=\"avatar avatar-sm\" style=\"background-image: url(../static/avatars/000m.jpg)\"></span>
                <div class=\"d-none d-xl-block ps-2\">
                  <div>{{app.user.ad}}</div>
                  <div class=\"mt-1 small text-muted\">Öğrenci-15265847</div>
                </div>
              </a>
              <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <a href=\"#\" class=\"dropdown-item\">Status</a>
                <a href=\"{{path('user_profile')}}\" class=\"dropdown-item\">Profile</a>
                <a href=\"#\" class=\"dropdown-item\">Feedback</a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"./settings.html\" class=\"dropdown-item\">Settings</a>
                <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class=\"navbar-expand-md\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
          <div class=\"navbar\">
            <div class=\"container-xl\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"ogrenci.html\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Ana Sayfa
                    </span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"kitaplarim.html\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Kitaplarım
                    </span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"./\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Profilim
                    </span>
                  </a>
                </li>
               
              </ul>
              <div class=\"my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last\">
                <form action=\"./\" method=\"get\" autocomplete=\"off\" novalidate>
                  <div class=\"input-icon\">
                    <span class=\"input-icon-addon\">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0\" /><path d=\"M21 21l-6 -6\" /></svg>
                    </span>
                    <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search in website\">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class=\"page-wrapper\">
        <!-- Page header -->
        <div class=\"page-header d-print-none\">
          <div class=\"container-xl\">
            <div class=\"row g-2 align-items-center\">
              <div class=\"col\">
                <!-- Page pre-title -->
             
                <div class=\"page-wrapper\">
                  <!-- Page header -->
                  {% block body %}
                  
                  {% endblock  %}
                  
          <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">
              İptal
            </a>
            <a href=\"#\" class=\"btn btn-primary ms-auto\" data-bs-dismiss=\"modal\">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
             Gönder
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->

    <script src=\"{{asset('KutuphaneTemplate/dist/libs/apexcharts/dist/apexcharts.min.js')}}\"></script>
    <script src=\"{{asset('KutuphaneTemplate/dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}\"></script>
    <script src=\"{{asset('KutuphaneTemplate/dist/libs/jsvectormap/dist/maps/world.js')}}\"></script>
    <script src=\"{{asset('KutuphaneTemplate/dist/libs/jsvectormap/dist/maps/world-merc.js')}}\"></script>
   
    <script src=\"{{asset('KutuphaneTemplate/dist/js/tabler.min.js')}}\"></script>
    <script src=\"{{asset('KutuphaneTemplate/dist/js/demo.min.js')}}\"></script>
    
    
    
  </body>
</html>", "ogrencibase.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\ogrencibase.html.twig");
    }
}