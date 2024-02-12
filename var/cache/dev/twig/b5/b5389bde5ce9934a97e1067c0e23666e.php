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

/* partials/head.html.twig */
class __TwigTemplate_31b9ce329511a32ea25c9775a27c638d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html.twig"));

        // line 1
        echo "</html>
<!--
    // WEBSITE: https://themefisher.com
    // TWITTER: https://twitter.com/themefisher
    // FACEBOOK: https://www.facebook.com/themefisher
    // GITHUB: https://github.com/themefisher/
   -->
   
   <!-- 
   THEME: Constra - Construction Html5 Template
   VERSION: 1.0.0
   AUTHOR: Themefisher
   
   HOMEPAGE: https://themefisher.com/products/constra-construction-template/
   DEMO: https://demo.themefisher.com/constra/
   GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template
   
   WEBSITE: https://themefisher.com
   TWITTER: https://twitter.com/themefisher
   FACEBOOK: https://www.facebook.com/themefisher
   -->
   
   <!DOCTYPE html>
   <html lang=\"en\">
   <head>
   
     <!-- Basic Page Needs
   ================================================== -->
     <meta charset=\"utf-8\">
     <title>Constra - Construction Html5 Template</title>
   
     <!-- Mobile Specific Metas
   ================================================== -->
     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     <meta name=\"description\" content=\"Construction Html5 Template\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
     <meta name=author content=\"Themefisher\">
     <meta name=generator content=\"Themefisher Constra HTML Template v1.0\">
   
     <!-- Favicon
   ================================================== -->
     <link rel=\"icon\" type=\"image/png\" href=\"images/favicon.png\">
   
     <!-- CSS
   ================================================== -->
     <!-- Bootstrap -->
     <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
     <!-- FontAwesome -->
     <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome/css/all.min.css"), "html", null, true);
        echo "\">
     <!-- Animation -->
     <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/animate-css/animate.css"), "html", null, true);
        echo "\">
     <!-- slick Carousel -->
     <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick/slick.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
     <!-- Colorbox -->
     <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/colorbox/colorbox.css"), "html", null, true);
        echo "\">
     <!-- Template styles-->
     <link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
   
   </head>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/head.html.twig";
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
        return array (  120 => 58,  115 => 56,  110 => 54,  106 => 53,  101 => 51,  96 => 49,  91 => 47,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</html>
<!--
    // WEBSITE: https://themefisher.com
    // TWITTER: https://twitter.com/themefisher
    // FACEBOOK: https://www.facebook.com/themefisher
    // GITHUB: https://github.com/themefisher/
   -->
   
   <!-- 
   THEME: Constra - Construction Html5 Template
   VERSION: 1.0.0
   AUTHOR: Themefisher
   
   HOMEPAGE: https://themefisher.com/products/constra-construction-template/
   DEMO: https://demo.themefisher.com/constra/
   GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template
   
   WEBSITE: https://themefisher.com
   TWITTER: https://twitter.com/themefisher
   FACEBOOK: https://www.facebook.com/themefisher
   -->
   
   <!DOCTYPE html>
   <html lang=\"en\">
   <head>
   
     <!-- Basic Page Needs
   ================================================== -->
     <meta charset=\"utf-8\">
     <title>Constra - Construction Html5 Template</title>
   
     <!-- Mobile Specific Metas
   ================================================== -->
     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     <meta name=\"description\" content=\"Construction Html5 Template\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
     <meta name=author content=\"Themefisher\">
     <meta name=generator content=\"Themefisher Constra HTML Template v1.0\">
   
     <!-- Favicon
   ================================================== -->
     <link rel=\"icon\" type=\"image/png\" href=\"images/favicon.png\">
   
     <!-- CSS
   ================================================== -->
     <!-- Bootstrap -->
     <link rel=\"stylesheet\" href=\"{{asset('plugins/bootstrap/bootstrap.min.css')}}\">
     <!-- FontAwesome -->
     <link rel=\"stylesheet\" href=\"{{asset('plugins/fontawesome/css/all.min.css')}}\">
     <!-- Animation -->
     <link rel=\"stylesheet\" href=\"{{asset('plugins/animate-css/animate.css')}}\">
     <!-- slick Carousel -->
     <link rel=\"stylesheet\" href=\"{{asset('plugins/slick/slick.css')}}\">
     <link rel=\"stylesheet\" href=\"{{asset('plugins/slick/slick-theme.css')}}\">
     <!-- Colorbox -->
     <link rel=\"stylesheet\" href=\"{{asset('plugins/colorbox/colorbox.css')}}\">
     <!-- Template styles-->
     <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
   
   </head>", "partials/head.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\partials\\head.html.twig");
    }
}
