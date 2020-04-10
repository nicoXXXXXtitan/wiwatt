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

/* user/user_leasing/leasing_vehicle.html.twig */
class __TwigTemplate_8a6b6e82ec8c646bffadf767cc1b7c4b151f12b889bd43610aa6c85582771a78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/leasing_vehicle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/leasing_vehicle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_leasing/leasing_vehicle.html.twig", 1);
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

        echo " ";
        
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
<h1 class=\"text-center h3 mt-5\">Sélectionnez un véhicule</h1>
<hr>
<div class=\"row d-flex justify-content-center align-items-center overflow-auto pb-3 pt-3\">
   
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 12
            echo "            
                ";
            // line 13
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "dates", [], "any", false, false, false, 13)) > 0)) {
                // line 14
                echo "                <div class=\"my-2 pt-3 pb-3 carte col-xl-2 border rounded-lg mx-3 shadow opacity-05 minified\">
                <div class=\"text-small mb-2 text-danger text-center\"><i class=\"fa fa-lock text-danger\" aria-hidden=\"true\"></i>Une annonce existe déjà.</div>

                ";
            } else {
                // line 18
                echo "
                <div data-vehicle-id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"vehicle-choice my-2 pt-3 pb-3 carte col-xl-2 rounded-lg mx-3 shadow minified\">

                ";
            }
            // line 22
            echo "                
                    
                    ";
            // line 24
            echo twig_include($this->env, $context, "partials/vehicle-card.html.twig");
            echo "
                
                </div>

                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 29
            echo "
                    

                    <div class=\"tuto border rounded-lg shadow px-3 py-3\">
                        <p class=\"font-weight-bold h5\">Créez votre première annonce</p>
                        <hr>
                        <p class=\"h6 my-3\"><span class=\"bg-tuto text-white rounded-lg p-1\">1. Créer un véhicule.</span></p>
                        <p class=\"h6 my-3\"><span class=\"bg-tuto text-white rounded-lg p-1\">2. Sélectionnez-le.</span></p>
                        <p class=\"h6 my-3\"><span class=\"bg-tuto text-white rounded-lg p-1\">3. Puis, ajoutez-y les dates disponibles.</span></p>
                        <p class=\"h6 my-4\"><span class=\"bg-tuto-success text-white rounded-lg p-1\">4. Votre annonce sera alors créée.</span></p>                        
                    </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "       
</div>
<hr>
<div class=\"container-fluid\">
    <div class=\"row d-flex justify-content-center\">
        <button id=\"btn-form-ajout\" class=\"btn text-info my-2\">Ajouter un véhicule</button>
    </div>
</div>

<div class=\"container pb-5\">
   <div class=\"d-flex flex-column justify-content-center align-items-center\">             
        
        <div id=\"form-ajout\" class=\"mt-5 col-md-8 mx-auto\">
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 56, $this->source); })()), 'form_start');
        echo "

            <div class=\"text-center\">
             <img class=\"add_picture\" width=\"120\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/add_pic.png"), "html", null, true);
        echo "\" alt=\"ajouter une photo\">
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-4\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 63, $this->source); })()), "picture", [], "any", false, false, false, 63), 'row');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68), 'row', ["attr" => ["placeholder" => "Type"]]);
        echo "
                </div>
                <div class=\"col-md-4\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 71, $this->source); })()), "brand", [], "any", false, false, false, 71), 'row', ["attr" => ["placeholder" => "Marque"]]);
        echo "
                </div>
                <div class=\"col-md-4\">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 74, $this->source); })()), "model", [], "any", false, false, false, 74), 'row', ["attr" => ["placeholder" => "Modèle"]]);
        echo " 
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4\">
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 80, $this->source); })()), "seatNumber", [], "any", false, false, false, 80), 'row', ["attr" => ["placeholder" => "Nombre de place"]]);
        echo "
                </div>
                <div class=\"col-md-4\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 83, $this->source); })()), "maxSpeed", [], "any", false, false, false, 83), 'row', ["attr" => ["placeholder" => "Vitesse max (km/h)"]]);
        echo "
                </div>
                <div class=\"col-md-4\">
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 86, $this->source); })()), "weight", [], "any", false, false, false, 86), 'row', ["attr" => ["placeholder" => "Poids (kg)"]]);
        echo " 
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 91, $this->source); })()), "power", [], "any", false, false, false, 91), 'row', ["attr" => ["placeholder" => "Puissance (watt)"]]);
        echo " 
                </div>
                <div class=\"col-md-4\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 94, $this->source); })()), "autonomy", [], "any", false, false, false, 94), 'row', ["attr" => ["placeholder" => "Autonomie (km)"]]);
        echo " 
                </div>
                <div class=\"col-md-4\">
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 97, $this->source); })()), "dayCost", [], "any", false, false, false, 97), 'row', ["attr" => ["placeholder" => "Prix (€/jour)"]]);
        echo "
                </div>
            </div>
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-8\">

                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 103, $this->source); })()), "description", [], "any", false, false, false, 103), 'row', ["attr" => ["placeholder" => "Description du véhicule, autonomie, équipements, lieu de rdv..."]]);
        echo " 

                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 105, $this->source); })()), "adress", [], "any", false, false, false, 105), 'row', ["attr" => ["placeholder" => "Adresse où se fera la location", "autocomplete" => "off"]]);
        echo "
                    
                    <div id=\"autocomplete\"></div>

                </div>
            </div>           
            
            <div class=\"row d-flex justify-content-center\">
                <button type=\"submit\" class=\"btn btn-outline-info mt-1\">Ajouter véhicule</button> 
                <input id=\"zipcode\" type=\"hidden\" name=\"zipcode\">
                <input id=\"city\" type=\"hidden\" name=\"city\">
                <input id=\"longitude\" type=\"hidden\" name=\"longitude\">
                <input id=\"latitude\" type=\"hidden\" name=\"latitude\">
            </div> 
            ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicleForm"]) || array_key_exists("vehicleForm", $context) ? $context["vehicleForm"] : (function () { throw new RuntimeError('Variable "vehicleForm" does not exist.', 119, $this->source); })()), 'form_end');
        echo "
            </div>

            <form action=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_leasing_form");
        echo "\" method=\"post\" class=\"col-md-4 mt-5 mx-auto\"  autocomplete=\"off\">

            <input type=\"hidden\" name=\"vehicle\" id=\"select-vehicle-id\">
            <div class=\"form-group\">
                <input name=\"date\" placeholder=\"Dates disponibles\" id=\"availableDate\" type=\"text\"
                class=\"datepicker-here form-control\"
                data-language='fr'
                data-multiple-dates=\"30\"
                data-multiple-dates-separator=\"-\"
                data-position='top left' readonly  /> 
            </div>
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("date-form"), "html", null, true);
        echo "\"/>
            
              <button type=\"submit\" id=\"btn-createPost\" class=\"col mx-auto btn btn-outline-info mt-3\">Valider</button>  
            
            
                
            
            
        </form>
    </div> 
    
    
    
    
       
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user_leasing/leasing_vehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 133,  300 => 122,  294 => 119,  277 => 105,  272 => 103,  263 => 97,  257 => 94,  251 => 91,  243 => 86,  237 => 83,  231 => 80,  222 => 74,  216 => 71,  210 => 68,  202 => 63,  195 => 59,  189 => 56,  174 => 43,  155 => 29,  137 => 24,  133 => 22,  127 => 19,  124 => 18,  118 => 14,  116 => 13,  113 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {% endblock %}

{% block body %}

<h1 class=\"text-center h3 mt-5\">Sélectionnez un véhicule</h1>
<hr>
<div class=\"row d-flex justify-content-center align-items-center overflow-auto pb-3 pt-3\">
   
        {% for vehicle in vehicles %}
            
                {% if vehicle.dates | length > 0 %}
                <div class=\"my-2 pt-3 pb-3 carte col-xl-2 border rounded-lg mx-3 shadow opacity-05 minified\">
                <div class=\"text-small mb-2 text-danger text-center\"><i class=\"fa fa-lock text-danger\" aria-hidden=\"true\"></i>Une annonce existe déjà.</div>

                {% else %}

                <div data-vehicle-id=\"{{ vehicle.id }}\" class=\"vehicle-choice my-2 pt-3 pb-3 carte col-xl-2 rounded-lg mx-3 shadow minified\">

                {% endif %}
                
                    
                    {{ include('partials/vehicle-card.html.twig') }}
                
                </div>

                {% else %}

                    

                    <div class=\"tuto border rounded-lg shadow px-3 py-3\">
                        <p class=\"font-weight-bold h5\">Créez votre première annonce</p>
                        <hr>
                        <p class=\"h6 my-3\"><span class=\"bg-tuto text-white rounded-lg p-1\">1. Créer un véhicule.</span></p>
                        <p class=\"h6 my-3\"><span class=\"bg-tuto text-white rounded-lg p-1\">2. Sélectionnez-le.</span></p>
                        <p class=\"h6 my-3\"><span class=\"bg-tuto text-white rounded-lg p-1\">3. Puis, ajoutez-y les dates disponibles.</span></p>
                        <p class=\"h6 my-4\"><span class=\"bg-tuto-success text-white rounded-lg p-1\">4. Votre annonce sera alors créée.</span></p>                        
                    </div>


        {% endfor %}
       
</div>
<hr>
<div class=\"container-fluid\">
    <div class=\"row d-flex justify-content-center\">
        <button id=\"btn-form-ajout\" class=\"btn text-info my-2\">Ajouter un véhicule</button>
    </div>
</div>

<div class=\"container pb-5\">
   <div class=\"d-flex flex-column justify-content-center align-items-center\">             
        
        <div id=\"form-ajout\" class=\"mt-5 col-md-8 mx-auto\">
            {{ form_start(vehicleForm) }}

            <div class=\"text-center\">
             <img class=\"add_picture\" width=\"120\" src=\"{{ asset('pictures/add_pic.png') }}\" alt=\"ajouter une photo\">
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-4\">
                    {{ form_row(vehicleForm.picture) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.type, {'attr' : { 'placeholder' :'Type' }}) }}
                </div>
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.brand, {'attr' : { 'placeholder' :'Marque' }}) }}
                </div>
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.model, {'attr' : { 'placeholder' :'Modèle' }}) }} 
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.seatNumber, {'attr' : { 'placeholder' :'Nombre de place' }}) }}
                </div>
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.maxSpeed , {'attr' : { 'placeholder' :'Vitesse max (km/h)' }}) }}
                </div>
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.weight , {'attr' : { 'placeholder' :'Poids (kg)' }}) }} 
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.power, {'attr' : { 'placeholder' :'Puissance (watt)' }}) }} 
                </div>
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.autonomy, {'attr' : { 'placeholder' :'Autonomie (km)' }}) }} 
                </div>
                <div class=\"col-md-4\">
                {{ form_row(vehicleForm.dayCost, {'attr' : { 'placeholder' :'Prix (€/jour)' }}) }}
                </div>
            </div>
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-8\">

                    {{ form_row(vehicleForm.description, {'attr' : { 'placeholder' :'Description du véhicule, autonomie, équipements, lieu de rdv...' }}) }} 

                    {{ form_row(vehicleForm.adress, {'attr' : { 'placeholder' : 'Adresse où se fera la location' , 'autocomplete' : 'off' } }) }}
                    
                    <div id=\"autocomplete\"></div>

                </div>
            </div>           
            
            <div class=\"row d-flex justify-content-center\">
                <button type=\"submit\" class=\"btn btn-outline-info mt-1\">Ajouter véhicule</button> 
                <input id=\"zipcode\" type=\"hidden\" name=\"zipcode\">
                <input id=\"city\" type=\"hidden\" name=\"city\">
                <input id=\"longitude\" type=\"hidden\" name=\"longitude\">
                <input id=\"latitude\" type=\"hidden\" name=\"latitude\">
            </div> 
            {{ form_end(vehicleForm) }}
            </div>

            <form action=\"{{ path('vehicle_leasing_form') }}\" method=\"post\" class=\"col-md-4 mt-5 mx-auto\"  autocomplete=\"off\">

            <input type=\"hidden\" name=\"vehicle\" id=\"select-vehicle-id\">
            <div class=\"form-group\">
                <input name=\"date\" placeholder=\"Dates disponibles\" id=\"availableDate\" type=\"text\"
                class=\"datepicker-here form-control\"
                data-language='fr'
                data-multiple-dates=\"30\"
                data-multiple-dates-separator=\"-\"
                data-position='top left' readonly  /> 
            </div>
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('date-form') }}\"/>
            
              <button type=\"submit\" id=\"btn-createPost\" class=\"col mx-auto btn btn-outline-info mt-3\">Valider</button>  
            
            
                
            
            
        </form>
    </div> 
    
    
    
    
       
</div>

{% endblock %}
", "user/user_leasing/leasing_vehicle.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/user/user_leasing/leasing_vehicle.html.twig");
    }
}
