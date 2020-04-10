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

/* user/user_leasing/add_review.html.twig */
class __TwigTemplate_4b3724daac0393317f7e1412688f2449d4f8938e51e39b8b11c5eabc966914ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/add_review.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/add_review.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_leasing/add_review.html.twig", 1);
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

        echo "Ajouter un commentaire";
        
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

<div class=\"container d-flex justify-content-center mt-5\">
    <div class=\"col-lg-5 col-md-8\">
        <h3 class=\"h4 mb-3 text-center\">Comment s'est passé la location ?</h3> 
            
            <div class=\"rating rating2\"  data-toggle=\"popover\" title=\"Oups\" data-content=\"Veuillez donner une note svp.\"><!--
                --><a data-rate=\"5\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"4\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"3\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"2\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"1\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a>
            </div>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "score", [], "any", false, false, false, 20), 'row', ["attr" => ["value" => 0]]);
        echo " 
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Commentaire"]]);
        echo " 

            <div class=\"d-flex justify-content-center\"> 
                <button type=\"submit\" id=\"btn-add-review\" class=\"col-md-12 btn btn-outline-success mt-3\">Envoyer!</button>
            </div>
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "  
    </div>
</div>

    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user_leasing/add_review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  111 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un commentaire{% endblock %}

{% block body %}


<div class=\"container d-flex justify-content-center mt-5\">
    <div class=\"col-lg-5 col-md-8\">
        <h3 class=\"h4 mb-3 text-center\">Comment s'est passé la location ?</h3> 
            
            <div class=\"rating rating2\"  data-toggle=\"popover\" title=\"Oups\" data-content=\"Veuillez donner une note svp.\"><!--
                --><a data-rate=\"5\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"4\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"3\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"2\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a><!--
                --><a data-rate=\"1\" class=\"stars\" href=\"#\" title=\"Donner 5 étoiles\">★</a>
            </div>
            {{ form_start(form) }}
            {{ form_row(form.score, {'attr' : { 'value' : 0 }}) }} 
            {{ form_row(form.content, {'attr' : { 'placeholder' :'Commentaire' }}) }} 

            <div class=\"d-flex justify-content-center\"> 
                <button type=\"submit\" id=\"btn-add-review\" class=\"col-md-12 btn btn-outline-success mt-3\">Envoyer!</button>
            </div>
            {{ form_end(form) }}  
    </div>
</div>

    

{% endblock %}", "user/user_leasing/add_review.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/user/user_leasing/add_review.html.twig");
    }
}
