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

/* ogrenci/index.html.twig */
class __TwigTemplate_cca9c6cf1bd5b052a79f105e205ac4cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "ogrencibase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ogrenci/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ogrenci/index.html.twig"));

        $this->parent = $this->loadTemplate("ogrencibase.html.twig", "ogrenci/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Öğrenci Sayfası";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["borrowedBooks"]) || array_key_exists("borrowedBooks", $context) ? $context["borrowedBooks"] : (function () { throw new RuntimeError('Variable "borrowedBooks" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["borrowedBook"]) {
            // line 8
            echo "    <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["borrowedBook"], "book", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 10
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "ad", [], "any", false, false, false, 10), "html", null, true);
                echo " - Alış Tarihi: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedBook"], "alisTarihi", [], "any", false, false, false, 10), "d/m/Y"), "html", null, true);
                echo " - Yazarı: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "yazar", [], "any", false, false, false, 10), "html", null, true);
                echo " - ";
                if ((null === twig_get_attribute($this->env, $this->source, $context["borrowedBook"], "iadeTarihi", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "                    <span style=\"color: red;\">Henüz iade edilmedi</span>
                ";
                } else {
                    // line 13
                    echo "                    - İade Tarihi: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrowedBook"], "iadeTarihi", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
                    echo "
                ";
                }
                // line 14
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borrowedBook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "Örenci Bilgileri:
Öğrenci Adı: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "ad", [], "any", false, false, false, 19), "html", null, true);
        echo "

   <div class=\"page-header d-print-none\">
                    <div class=\"container-xl\">
                      <div class=\"row g-2 align-items-center\">
                        <div class=\"col\">
                          <!-- Page pre-title -->
                          <div class=\"page-pretitle\">
                            Milli Eğitim Bakanlığı
                          </div>
                          <h2 class=\"page-title\">
                            Türkan Yamantürk İlkokulu - 952689
                          </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class=\"col-auto ms-auto d-print-none\">
                          <div class=\"btn-list\">
                            
                            <a href=\"#\" class=\"btn btn-primary d-none d-sm-inline-block\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-report\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
                              Kitap Öner
                            </a>
                            <a href=\"#\" class=\"btn btn-primary d-sm-none btn-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-report\" aria-label=\"Create new report\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              
          
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class=\"page-body\">
          <div class=\"container-xl\">
            <div class=\"row row-cards\">
                      
             
             
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h3 class=\"card-title\">Kitaplarım</h3>
                  </div>
                  <div class=\"card-body border-bottom py-3\">
                    <div class=\"d-flex\">
                      <div class=\"text-muted\">
                        Show
                        <div class=\"mx-2 d-inline-block\">
                          <input type=\"text\" class=\"form-control form-control-sm\" value=\"8\" size=\"3\" aria-label=\"Invoices count\">
                        </div>
                        entries
                      </div>
                      <div class=\"ms-auto text-muted\">
                        Search:
                        <div class=\"ms-2 d-inline-block\">
                          <input type=\"text\" class=\"form-control form-control-sm\" aria-label=\"Search invoice\">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"table-responsive\">
               
                    <table class=\"table card-table table-vcenter text-nowrap datatable\">
                      <thead>
                        <tr>                         
                          <th>Sıra No</th>
                          <th>Kitap Adı</th>
                          <th>Yazarı</th>
                          <th>ISBN</th>
                          <th>Ödünç Tarihi</th>                          
                          <th>İade Tarihi</th>   
                          <th>Kalan Süre</th>   
                                                 
                          <th>Durum</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class=\"text text-danger\">                          
                          <td>1</td>
                          <td>Öğretmenimize binlerce teşekkür</td>
                          <td> Ali Şahin</td>
                          <td> 87956621 </td>
                          <td>15 Dec 2017</td>
                          <td>20 Dec 2017</td>
                          <td>-5 Gün</td>
                          <td><span class=\"badge bg-danger me-1\"></span>Süresi Geçti</td>
                          
                        </tr>
                        <tr >                          
                          <td>1</td>
                          <td>Öğretmenimize binlerce teşekkür</td>
                          <td> Ali Şahin</td>
                          <td> 87956621 </td>
                          <td>15 Dec 2017</td>
                          <td>20 Dec 2017</td>
                          <td>5 Gün</td>
                          <td><span class=\"badge bg-danger me-1\"></span> İade edildi</td>
                          
                        </tr>
                        <tr>                          
                          <td>1</td>
                          <td>Öğretmenimize binlerce teşekkür</td>
                          <td> Ali Şahin</td>
                          <td> 87956621 </td>
                          <td>15 Dec 2017</td>
                          <td>20 Dec 2017</td>
                          <td>5 Gün</td>
                          <td><span class=\"badge bg-success me-1\"></span> Kitap Öğrencide</td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class=\"card-footer d-flex align-items-center\">
                    <p class=\"m-0 text-muted\">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class=\"pagination m-0 ms-auto\">
                      <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M15 6l-6 6l6 6\"></path></svg>
                          prev
                        </a>
                      </li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                      <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                      <li class=\"page-item\">
                        <a class=\"page-link\" href=\"#\">
                          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 6l6 6l-6 6\"></path></svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class=\"footer footer-transparent d-print-none\">
          <div class=\"container-xl\">
            <div class=\"row text-center align-items-center flex-row-reverse\">
              
              
            </div>
          </div>
        </footer>
      </div>
    </div>
    <div class=\"modal modal-blur fade\" id=\"modal-report\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">Yeni Kitap</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">Kitap Adı</label>
              <input type=\"text\" class=\"form-control\" name=\"example-text-input\" placeholder=\"Kitap Adı Giriniz\">
            </div>
           
          </div>
          <div class=\"modal-body\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                  <label class=\"form-label\"></label>
                  <input type=\"text\" class=\"form-control\">
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                  <label class=\"form-label\">Tarih</label>
                  <input type=\"date\" class=\"form-control\">
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div>
                  <label class=\"form-label\">Additional information</label>
                  <textarea class=\"form-control\" rows=\"3\"></textarea>
                </div>
              </div>
            </div>
          </div>
          <ul>
  

</ul>
";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["borrowedBooks"]) || array_key_exists("borrowedBooks", $context) ? $context["borrowedBooks"] : (function () { throw new RuntimeError('Variable "borrowedBooks" does not exist.', 218, $this->source); })()));
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
        return "ogrenci/index.html.twig";
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
        return array (  340 => 218,  138 => 19,  135 => 18,  128 => 16,  121 => 14,  115 => 13,  111 => 11,  102 => 10,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'ogrencibase.html.twig' %}

{% block title %}Öğrenci Sayfası{% endblock %}

{% block body %}

 {% for borrowedBook in borrowedBooks %}
    <ul>
        {% for book in borrowedBook.book %}
            <li>{{ book.ad }} - Alış Tarihi: {{ borrowedBook.alisTarihi|date('d/m/Y') }} - Yazarı: {{book.yazar}} - {% if borrowedBook.iadeTarihi is null %}
                    <span style=\"color: red;\">Henüz iade edilmedi</span>
                {% else %}
                    - İade Tarihi: {{ borrowedBook.iadeTarihi|date('d/m/Y') }}
                {% endif %}</li>
        {% endfor %}
    </ul>
{% endfor %}
Örenci Bilgileri:
Öğrenci Adı: {{app.user.ad}}

   <div class=\"page-header d-print-none\">
                    <div class=\"container-xl\">
                      <div class=\"row g-2 align-items-center\">
                        <div class=\"col\">
                          <!-- Page pre-title -->
                          <div class=\"page-pretitle\">
                            Milli Eğitim Bakanlığı
                          </div>
                          <h2 class=\"page-title\">
                            Türkan Yamantürk İlkokulu - 952689
                          </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class=\"col-auto ms-auto d-print-none\">
                          <div class=\"btn-list\">
                            
                            <a href=\"#\" class=\"btn btn-primary d-none d-sm-inline-block\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-report\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
                              Kitap Öner
                            </a>
                            <a href=\"#\" class=\"btn btn-primary d-sm-none btn-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-report\" aria-label=\"Create new report\">
                              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              
          
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class=\"page-body\">
          <div class=\"container-xl\">
            <div class=\"row row-cards\">
                      
             
             
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-header\">
                    <h3 class=\"card-title\">Kitaplarım</h3>
                  </div>
                  <div class=\"card-body border-bottom py-3\">
                    <div class=\"d-flex\">
                      <div class=\"text-muted\">
                        Show
                        <div class=\"mx-2 d-inline-block\">
                          <input type=\"text\" class=\"form-control form-control-sm\" value=\"8\" size=\"3\" aria-label=\"Invoices count\">
                        </div>
                        entries
                      </div>
                      <div class=\"ms-auto text-muted\">
                        Search:
                        <div class=\"ms-2 d-inline-block\">
                          <input type=\"text\" class=\"form-control form-control-sm\" aria-label=\"Search invoice\">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"table-responsive\">
               
                    <table class=\"table card-table table-vcenter text-nowrap datatable\">
                      <thead>
                        <tr>                         
                          <th>Sıra No</th>
                          <th>Kitap Adı</th>
                          <th>Yazarı</th>
                          <th>ISBN</th>
                          <th>Ödünç Tarihi</th>                          
                          <th>İade Tarihi</th>   
                          <th>Kalan Süre</th>   
                                                 
                          <th>Durum</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class=\"text text-danger\">                          
                          <td>1</td>
                          <td>Öğretmenimize binlerce teşekkür</td>
                          <td> Ali Şahin</td>
                          <td> 87956621 </td>
                          <td>15 Dec 2017</td>
                          <td>20 Dec 2017</td>
                          <td>-5 Gün</td>
                          <td><span class=\"badge bg-danger me-1\"></span>Süresi Geçti</td>
                          
                        </tr>
                        <tr >                          
                          <td>1</td>
                          <td>Öğretmenimize binlerce teşekkür</td>
                          <td> Ali Şahin</td>
                          <td> 87956621 </td>
                          <td>15 Dec 2017</td>
                          <td>20 Dec 2017</td>
                          <td>5 Gün</td>
                          <td><span class=\"badge bg-danger me-1\"></span> İade edildi</td>
                          
                        </tr>
                        <tr>                          
                          <td>1</td>
                          <td>Öğretmenimize binlerce teşekkür</td>
                          <td> Ali Şahin</td>
                          <td> 87956621 </td>
                          <td>15 Dec 2017</td>
                          <td>20 Dec 2017</td>
                          <td>5 Gün</td>
                          <td><span class=\"badge bg-success me-1\"></span> Kitap Öğrencide</td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class=\"card-footer d-flex align-items-center\">
                    <p class=\"m-0 text-muted\">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class=\"pagination m-0 ms-auto\">
                      <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M15 6l-6 6l6 6\"></path></svg>
                          prev
                        </a>
                      </li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                      <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                      <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                      <li class=\"page-item\">
                        <a class=\"page-link\" href=\"#\">
                          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 6l6 6l-6 6\"></path></svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class=\"footer footer-transparent d-print-none\">
          <div class=\"container-xl\">
            <div class=\"row text-center align-items-center flex-row-reverse\">
              
              
            </div>
          </div>
        </footer>
      </div>
    </div>
    <div class=\"modal modal-blur fade\" id=\"modal-report\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">Yeni Kitap</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">Kitap Adı</label>
              <input type=\"text\" class=\"form-control\" name=\"example-text-input\" placeholder=\"Kitap Adı Giriniz\">
            </div>
           
          </div>
          <div class=\"modal-body\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                  <label class=\"form-label\"></label>
                  <input type=\"text\" class=\"form-control\">
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                  <label class=\"form-label\">Tarih</label>
                  <input type=\"date\" class=\"form-control\">
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div>
                  <label class=\"form-label\">Additional information</label>
                  <textarea class=\"form-control\" rows=\"3\"></textarea>
                </div>
              </div>
            </div>
          </div>
          <ul>
  

</ul>
{{ dump(borrowedBooks) }}
{% endblock %}
", "ogrenci/index.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\ogrenci\\index.html.twig");
    }
}
