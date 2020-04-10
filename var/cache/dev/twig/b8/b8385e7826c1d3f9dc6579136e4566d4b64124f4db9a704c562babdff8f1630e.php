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

/* security/subscribe.html.twig */
class __TwigTemplate_246f87120cd030c5681b7102b2b0e0e76595de56dbf732d9f33d1f9e09370fe3 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/subscribe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Formulaire-Inscription-Wiwatt";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
  <div class=\"row d-flex justify-content-center\">
    <div class=\"col-md-6\">
      <h1 class=\"text-center h3 mt-5 mb-3\">Formulaire d 'inscription a Wiwatt</h1>
      <hr>
      ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Nom"]]);
        echo " 
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), 'row', ["attr" => ["placeholder" => "Prénom"]]);
        echo " 
      ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Email"]]);
        echo "
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 16, $this->source); })()), "phoneNumber", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "Télephone"]]);
        echo "
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 17, $this->source); })()), "password", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Mot de passe"]]);
        echo "
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 18, $this->source); })()), "password", [], "any", false, false, false, 18), "second", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Confirmer mot de passe"]]);
        echo "
      <hr> 
        <div class=\"mt-3 d-flex justify-content-center\">
          <button type=\"submit\" class=\"btn col-sm-7 btn-outline-success\">Créer mon compte !</button>
        </div>
      ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo " 
      </div>
    </div>
  </div>
";
        // line 27
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 27,  128 => 23,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formulaire-Inscription-Wiwatt{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"row d-flex justify-content-center\">
    <div class=\"col-md-6\">
      <h1 class=\"text-center h3 mt-5 mb-3\">Formulaire d 'inscription a Wiwatt</h1>
      <hr>
      {{ form_start(registerForm) }}
      {{ form_row(registerForm.lastname, {'attr' : { 'placeholder' :'Nom' }}) }} 
      {{ form_row(registerForm.firstname, {'attr' : { 'placeholder' :'Prénom' }}) }} 
      {{ form_row(registerForm.email, {'attr' : { 'placeholder' :'Email' }}) }}
      {{ form_row(registerForm.phoneNumber, {'attr' : { 'placeholder' :'Télephone' }}) }}
      {{ form_row(registerForm.password.first , {'attr' : { 'placeholder' :'Mot de passe' }}) }}
      {{ form_row(registerForm.password.second , {'attr' : { 'placeholder' :'Confirmer mot de passe' }}) }}
      <hr> 
        <div class=\"mt-3 d-flex justify-content-center\">
          <button type=\"submit\" class=\"btn col-sm-7 btn-outline-success\">Créer mon compte !</button>
        </div>
      {{ form_end(registerForm) }} 
      </div>
    </div>
  </div>
{{ include('partials/footer.html.twig') }}
{% endblock %}", "security/subscribe.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/security/subscribe.html.twig");
    }
}
