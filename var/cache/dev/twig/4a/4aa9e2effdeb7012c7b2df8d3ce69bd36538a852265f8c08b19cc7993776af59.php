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

/* leasing/show_leasing.html.twig */
class __TwigTemplate_a1a6ab28d14a84244f845d3c0720a3fbe38949f94157cbc6f9f0bb81c0386e8f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leasing/show_leasing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leasing/show_leasing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "leasing/show_leasing.html.twig", 1);
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

        echo "Annonce";
        
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
<form action=\"\" method=\"POST\"> 
        <div class=\"container-fluid d-flex align-items-center flex-column\">   
            
            <div class=\"my-2 pt-3 pb-3 carte col-xl-4 col-md-6 col-sm-10  border rounded-lg shadow\">  
                ";
        // line 11
        echo twig_include($this->env, $context, "partials/card-full.html.twig");
        echo "
                
            </div>

            ";
        // line 15
        echo twig_include($this->env, $context, "partials/card-one-user.html.twig", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)]);
        echo "

            <!-- Button trigger modal
            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
                    Launch demo modale
            </button> -->
            
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Détails de votre réservation</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"container-fluid d-flex align-items-center flex-column\">   

                                <div class=\"my-2 pt-3 pb-3 carte col-xl-10 col-md-10 col-sm-10  border rounded-lg shadow\">

                                    <div class=\"text-center\">
                                        <p class=\"font-weight-bold h4 \">";
        // line 38
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 38, $this->source); })()), "brand", [], "any", false, false, false, 38)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 38, $this->source); })()), "model", [], "any", false, false, false, 38)), "html", null, true);
        echo "</p>
                                    </div>

                                    <div class=\"d-flex  mt-3\">                  
                                        <ul>
                                            <li>Puissance : <span class=\"text-small\"> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 43, $this->source); })()), "power", [], "any", false, false, false, 43), "html", null, true);
        echo "W </span></li>
                                            <li>Autonomie :<span class=\"text-small\"> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 44, $this->source); })()), "autonomy", [], "any", false, false, false, 44), "html", null, true);
        echo " kms </span></li>
                                            <li>Vitesse maxi :<span class=\"text-small\"> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 45, $this->source); })()), "maxSpeed", [], "any", false, false, false, 45), "html", null, true);
        echo " km/h </span></li>
                                            <li>Nombre de place :<span class=\"text-small\"> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 46, $this->source); })()), "seatNumber", [], "any", false, false, false, 46), "html", null, true);
        echo "</span></li>
                                            <li>Poids :<span class=\"text-small\"> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 47, $this->source); })()), "weight", [], "any", false, false, false, 47), "html", null, true);
        echo " kgs</span></li>                    
                                        </ul>                        
                                    </div>

                                    <div class=\"d-flex flex-column \">
                                        <p class=\"mt-1\">Description : \"";
        // line 52
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52)), "html", null, true);
        echo "\" </p>
                                        <p class=\"mt-2\">Adresse : ";
        // line 53
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 53, $this->source); })()), "adress", [], "any", false, false, false, 53)), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 53, $this->source); })()), "zipCode", [], "any", false, false, false, 53), "html", null, true);
        echo " )</p>   
                                        <p class=\"mt-2\">Propriétaire : ";
        // line 54
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "firstname", [], "any", false, false, false, 54)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "lastname", [], "any", false, false, false, 54)), "html", null, true);
        echo "</p>             
                                    </div>
                            
                                    <hr>
                                    <div >
                                        <div class=\"mb-4 \">
                                            <p class=\"text-sm\">Les dates que vous avez choisies :</p>
                                        </div>
                                        <div class=\"d-flex flex-column\">
                                            <ul class=\"chosen-dates\">
                                            </ul>                         
                                        </div>
                                    </div>
                                        ";
        // line 67
        $context["dayCost"] = twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 67, $this->source); })()), "dayCost", [], "any", false, false, false, 67);
        // line 68
        echo "                                        ";
        $context["totalPriceBooking"] = (isset($context["dayCost"]) || array_key_exists("dayCost", $context) ? $context["dayCost"] : (function () { throw new RuntimeError('Variable "dayCost" does not exist.', 68, $this->source); })());
        // line 69
        echo "                                    <div>
                                        <p>Tarif : <span class=\"total-price\"></span> euros.</p>
                                    </div>                                                                                               
                                </div>    
                            </div>
                        </div>
                        <div class=\"modal-footer\">     
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("booking-ask"), "html", null, true);
        echo "\"/>
                            <button type=\"submit\" class=\"btn btn-outline-info\">Valider cette réservation</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal -->
            
        </div>
</form>
                    
                        
                    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "leasing/show_leasing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 76,  197 => 69,  194 => 68,  192 => 67,  174 => 54,  168 => 53,  164 => 52,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  128 => 38,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Annonce{% endblock %}

{% block body %}

<form action=\"\" method=\"POST\"> 
        <div class=\"container-fluid d-flex align-items-center flex-column\">   
            
            <div class=\"my-2 pt-3 pb-3 carte col-xl-4 col-md-6 col-sm-10  border rounded-lg shadow\">  
                {{ include('partials/card-full.html.twig') }}
                
            </div>

            {{ include('partials/card-one-user.html.twig' , {'user' : vehicle.user}) }}

            <!-- Button trigger modal
            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
                    Launch demo modale
            </button> -->
            
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Détails de votre réservation</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"container-fluid d-flex align-items-center flex-column\">   

                                <div class=\"my-2 pt-3 pb-3 carte col-xl-10 col-md-10 col-sm-10  border rounded-lg shadow\">

                                    <div class=\"text-center\">
                                        <p class=\"font-weight-bold h4 \">{{ vehicle.type.name|capitalize }} {{ vehicle.brand|capitalize }} {{ vehicle.model|capitalize }}</p>
                                    </div>

                                    <div class=\"d-flex  mt-3\">                  
                                        <ul>
                                            <li>Puissance : <span class=\"text-small\"> {{ vehicle.power }}W </span></li>
                                            <li>Autonomie :<span class=\"text-small\"> {{ vehicle.autonomy }} kms </span></li>
                                            <li>Vitesse maxi :<span class=\"text-small\"> {{ vehicle.maxSpeed }} km/h </span></li>
                                            <li>Nombre de place :<span class=\"text-small\"> {{ vehicle.seatNumber }}</span></li>
                                            <li>Poids :<span class=\"text-small\"> {{ vehicle.weight }} kgs</span></li>                    
                                        </ul>                        
                                    </div>

                                    <div class=\"d-flex flex-column \">
                                        <p class=\"mt-1\">Description : \"{{ vehicle.description|capitalize }}\" </p>
                                        <p class=\"mt-2\">Adresse : {{ vehicle.adress|capitalize }} ( {{ vehicle.zipCode }} )</p>   
                                        <p class=\"mt-2\">Propriétaire : {{ vehicle.user.firstname|capitalize }} {{ vehicle.user.lastname|capitalize }}</p>             
                                    </div>
                            
                                    <hr>
                                    <div >
                                        <div class=\"mb-4 \">
                                            <p class=\"text-sm\">Les dates que vous avez choisies :</p>
                                        </div>
                                        <div class=\"d-flex flex-column\">
                                            <ul class=\"chosen-dates\">
                                            </ul>                         
                                        </div>
                                    </div>
                                        {% set dayCost = vehicle.dayCost %}
                                        {%  set totalPriceBooking = dayCost %}
                                    <div>
                                        <p>Tarif : <span class=\"total-price\"></span> euros.</p>
                                    </div>                                                                                               
                                </div>    
                            </div>
                        </div>
                        <div class=\"modal-footer\">     
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('booking-ask') }}\"/>
                            <button type=\"submit\" class=\"btn btn-outline-info\">Valider cette réservation</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal -->
            
        </div>
</form>
                    
                        
                    

{% endblock %}
", "leasing/show_leasing.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/leasing/show_leasing.html.twig");
    }
}
