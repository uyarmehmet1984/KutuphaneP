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

/* borrowedbook/_form.html.twig */
class __TwigTemplate_5d53d25b7ed72d54339e917d8e804350 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowedbook/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form", "novalidate" => "novalidate"]]);
        echo "
    <div class=\"mb-3\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "alisTarihi", [], "any", false, false, false, 3), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Borrowed Date"]]);
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "iadeTarihi", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Return Date"]]);
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "BarkodNo", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Barcode Number"]]);
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "book", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 18, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "borrowedbook/_form.html.twig";
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
        return array (  82 => 19,  78 => 18,  72 => 15,  66 => 12,  60 => 9,  54 => 6,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form', 'novalidate': 'novalidate'}}) }}
    <div class=\"mb-3\">
        {{ form_widget(form.alisTarihi, {'attr': {'class': 'form-control', 'placeholder': 'Borrowed Date'}}) }}
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.iadeTarihi, {'attr': {'class': 'form-control', 'placeholder': 'Return Date'}}) }}
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.BarkodNo, {'attr': {'class': 'form-control', 'placeholder': 'Barcode Number'}}) }}
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.book, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.user, {'attr': {'class': 'form-control'}}) }}
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}

", "borrowedbook/_form.html.twig", "C:\\Users\\Sinem\\Documents\\GitHub\\KutuphaneP\\templates\\borrowedbook\\_form.html.twig");
    }
}
