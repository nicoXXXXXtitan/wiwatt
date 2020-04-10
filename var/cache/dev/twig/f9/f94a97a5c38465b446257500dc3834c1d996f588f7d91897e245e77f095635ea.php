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

/* leasing/detail_reservation.html.twig */
class __TwigTemplate_bf54982e7ff6e5fd8ddc2806875ad176c5dc76a3ffc278b959d7bf74681c1102 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leasing/detail_reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leasing/detail_reservation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "leasing/detail_reservation.html.twig", 1);
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

        echo "Détails de la réservation";
        
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

<div class=\"container-fluid d-flex align-items-center flex-column\">   
    <h1>Détails de votre réservation</h1>
        <div class=\"my-2 pt-3 pb-3 carte col-xl-4 col-md-6 col-sm-10  border rounded-lg shadow\">  
                <div class=\"text-center\">
                    <p class=\"font-weight-bold h4 \">";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 12, $this->source); })()), "brand", [], "any", false, false, false, 12)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 12, $this->source); })()), "model", [], "any", false, false, false, 12)), "html", null, true);
        echo "</p>
                </div>
                <div class=\"d-flex  mt-3\">                  
                    <ul>
                        <li><i class=\"fa fa-bolt text-info\" aria-hidden=\"true\"></i>  Puissance : <span class=\"text-small\"> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 16, $this->source); })()), "power", [], "any", false, false, false, 16), "html", null, true);
        echo "W </span></li>
                        <li> <i class=\"fa fa-battery-half text-info\" aria-hidden=\"true\"></i>  Autonomie :<span class=\"text-small\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 17, $this->source); })()), "autonomy", [], "any", false, false, false, 17), "html", null, true);
        echo " kms </span></li>
                        <li><i class=\"fa fa-tachometer text-info\" aria-hidden=\"true\"></i>  Vitesse maxi :<span class=\"text-small\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 18, $this->source); })()), "maxSpeed", [], "any", false, false, false, 18), "html", null, true);
        echo " km/h </span></li>
                        <li><i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i> Nombre de place :<span class=\"text-small\"> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 19, $this->source); })()), "seatNumber", [], "any", false, false, false, 19), "html", null, true);
        echo "</span></li>
                        <li><i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i> Poids :<span class=\"text-small\"> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 20, $this->source); })()), "weight", [], "any", false, false, false, 20), "html", null, true);
        echo " kgs</span></li>                    
                    </ul>                        
                </div>
                <div class=\"d-flex flex-column \">
                    <p class=\"mt-1\">Description : \"";
        // line 24
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24)), "html", null, true);
        echo "\" </p>
                    <p class=\"mt-2\">Adresse : ";
        // line 25
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 25, $this->source); })()), "adress", [], "any", false, false, false, 25)), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 25, $this->source); })()), "zipCode", [], "any", false, false, false, 25), "html", null, true);
        echo " )</p>   
                    <p class=\"mt-2\">Propriétaire : ";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "firstname", [], "any", false, false, false, 26)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "lastname", [], "any", false, false, false, 26)), "html", null, true);
        echo "</p>             
                </div>
        
                <hr>
                <div >
                    <div class=\"mb-4 \">
                        <p>Les dates que vous avez choisies :</p>
                    </div>
                    <div class=\"d-flex flex-column\">
                        ";
        // line 35
        $context["numberDates"] = 0;
        // line 36
        echo "                        <ul >
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 38
            echo "                                ";
            $context["numberDates"] = ((isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 38, $this->source); })()) + 1);
            // line 39
            echo "                      
                            <li >";
            // line 40
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
            echo "</li> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "             
                        </ul>                         
                    </div>
                </div>
                    ";
        // line 45
        $context["dayCost"] = twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 45, $this->source); })()), "dayCost", [], "any", false, false, false, 45);
        // line 46
        echo "                    ";
        $context["totalPriceBooking"] = ((isset($context["dayCost"]) || array_key_exists("dayCost", $context) ? $context["dayCost"] : (function () { throw new RuntimeError('Variable "dayCost" does not exist.', 46, $this->source); })()) * (isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 46, $this->source); })()));
        // line 47
        echo "                <div>
                    <p>Tarif pour ces ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " jours : ";
        echo twig_escape_filter($this->env, (isset($context["totalPriceBooking"]) || array_key_exists("totalPriceBooking", $context) ? $context["totalPriceBooking"] : (function () { throw new RuntimeError('Variable "totalPriceBooking" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " euros.</p>
                </div>               
                <hr>                                              
                <div class=\"d-flex justify-content-around align-items-center mt-3\">
        
                    <div class=\"d-flex justify-content-center mt-3\">
                        <form action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_reservation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" method=\"POST\"> 
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("ask-booking"), "html", null, true);
        echo "\"/>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 57
            echo "                            <input type=\"hidden\" name=\"datesBooking[]\" value=\"";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "\"/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            <button type=\"submit\" class=\"btn btn-outline-info\">Valider cette réservation</button>
                        </form>
                        
                    </div>
        
                </div>    
        </div>    
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "leasing/detail_reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 59,  214 => 57,  210 => 56,  206 => 55,  202 => 54,  191 => 48,  188 => 47,  185 => 46,  183 => 45,  177 => 41,  169 => 40,  166 => 39,  163 => 38,  159 => 37,  156 => 36,  154 => 35,  140 => 26,  134 => 25,  130 => 24,  123 => 20,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la réservation{% endblock %}

{% block body %}


<div class=\"container-fluid d-flex align-items-center flex-column\">   
    <h1>Détails de votre réservation</h1>
        <div class=\"my-2 pt-3 pb-3 carte col-xl-4 col-md-6 col-sm-10  border rounded-lg shadow\">  
                <div class=\"text-center\">
                    <p class=\"font-weight-bold h4 \">{{ vehicle.type.name|capitalize }} {{ vehicle.brand|capitalize }} {{ vehicle.model|capitalize }}</p>
                </div>
                <div class=\"d-flex  mt-3\">                  
                    <ul>
                        <li><i class=\"fa fa-bolt text-info\" aria-hidden=\"true\"></i>  Puissance : <span class=\"text-small\"> {{ vehicle.power }}W </span></li>
                        <li> <i class=\"fa fa-battery-half text-info\" aria-hidden=\"true\"></i>  Autonomie :<span class=\"text-small\"> {{ vehicle.autonomy }} kms </span></li>
                        <li><i class=\"fa fa-tachometer text-info\" aria-hidden=\"true\"></i>  Vitesse maxi :<span class=\"text-small\"> {{ vehicle.maxSpeed }} km/h </span></li>
                        <li><i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i> Nombre de place :<span class=\"text-small\"> {{ vehicle.seatNumber }}</span></li>
                        <li><i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i> Poids :<span class=\"text-small\"> {{ vehicle.weight }} kgs</span></li>                    
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
                        <p>Les dates que vous avez choisies :</p>
                    </div>
                    <div class=\"d-flex flex-column\">
                        {% set numberDates = 0 %}
                        <ul >
                            {% for date in dates %}
                                {% set numberDates = numberDates + 1 %}
                      
                            <li >{{ date|localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM')  }}</li> 
                            {% endfor %}             
                        </ul>                         
                    </div>
                </div>
                    {% set dayCost = vehicle.dayCost %}
                    {%  set totalPriceBooking = dayCost * numberDates %}
                <div>
                    <p>Tarif pour ces {{numberDates}} jours : {{totalPriceBooking }} euros.</p>
                </div>               
                <hr>                                              
                <div class=\"d-flex justify-content-around align-items-center mt-3\">
        
                    <div class=\"d-flex justify-content-center mt-3\">
                        <form action=\"{{ path('valider_reservation',{'id' : vehicle.id} )}}\" method=\"POST\"> 
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('ask-booking') }}\"/>
                            {% for date in dates %}
                            <input type=\"hidden\" name=\"datesBooking[]\" value=\"{{ date }}\"/>
                            {%  endfor %}
                            <button type=\"submit\" class=\"btn btn-outline-info\">Valider cette réservation</button>
                        </form>
                        
                    </div>
        
                </div>    
        </div>    
</div>
    
{% endblock %}
", "leasing/detail_reservation.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/leasing/detail_reservation.html.twig");
    }
}
