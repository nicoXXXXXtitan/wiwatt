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

/* emails/ask_booking.html.twig */
class __TwigTemplate_97088c75c6e5614c2cf698cf962600599b0c9ba62016eb39b958ce493aef6550 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ask_booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ask_booking.html.twig"));

        // line 1
        $context["numberDates"] = 0;
        // line 2
        echo "<h3>Bonjour ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userOwner"]) || array_key_exists("userOwner", $context) ? $context["userOwner"] : (function () { throw new RuntimeError('Variable "userOwner" does not exist.', 2, $this->source); })()), "firstname", [], "any", false, false, false, 2)), "html", null, true);
        echo "</h3>
<p>Vous avez une nouvelle demande de réservation de la part de ";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRenter"]) || array_key_exists("userRenter", $context) ? $context["userRenter"] : (function () { throw new RuntimeError('Variable "userRenter" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRenter"]) || array_key_exists("userRenter", $context) ? $context["userRenter"] : (function () { throw new RuntimeError('Variable "userRenter" does not exist.', 3, $this->source); })()), "lastname", [], "any", false, false, false, 3)), "html", null, true);
        echo ".</p>
<div>
    <h4>Cette demande concerne le véhicule suivant :</h4>
    <ul>
        <li>Type : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 7, $this->source); })()), "type", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo " </li>
        <li>Véhicule : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 8, $this->source); })()), "brand", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 8, $this->source); })()), "model", [], "any", false, false, false, 8), "html", null, true);
        echo "</li>
        <li>Date de la location : ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "date", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
            echo " -
                                    ";
            // line 10
            $context["numberDates"] = ((isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 10, $this->source); })()) + 1);
            // line 11
            echo "                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                                    ";
        // line 12
        $context["dayCost"] = twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 12, $this->source); })()), "dayCost", [], "any", false, false, false, 12);
        echo " 
                                    ";
        // line 13
        $context["totalPriceBooking"] = ((isset($context["dayCost"]) || array_key_exists("dayCost", $context) ? $context["dayCost"] : (function () { throw new RuntimeError('Variable "dayCost" does not exist.', 13, $this->source); })()) * (isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 13, $this->source); })()));
        echo "  
        </li>
    </ul>
</div>
<p>Cette location vous rapporterait : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["totalPriceBooking"]) || array_key_exists("totalPriceBooking", $context) ? $context["totalPriceBooking"] : (function () { throw new RuntimeError('Variable "totalPriceBooking" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " euros.</p>
<div>
    <h4>Voici les coordonnées de la personne qui fait cette demande :</h4>
    <ul>
        <li>Nom : ";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRenter"]) || array_key_exists("userRenter", $context) ? $context["userRenter"] : (function () { throw new RuntimeError('Variable "userRenter" does not exist.', 21, $this->source); })()), "firstname", [], "any", false, false, false, 21)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRenter"]) || array_key_exists("userRenter", $context) ? $context["userRenter"] : (function () { throw new RuntimeError('Variable "userRenter" does not exist.', 21, $this->source); })()), "lastname", [], "any", false, false, false, 21)), "html", null, true);
        echo "</li>
        <li>Email : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRenter"]) || array_key_exists("userRenter", $context) ? $context["userRenter"] : (function () { throw new RuntimeError('Variable "userRenter" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        echo " </li>
        <li>Téléphone : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRenter"]) || array_key_exists("userRenter", $context) ? $context["userRenter"] : (function () { throw new RuntimeError('Variable "userRenter" does not exist.', 23, $this->source); })()), "phoneNumber", [], "any", false, false, false, 23), "html", null, true);
        echo " </li>
    </ul>
</div>
<p>Connectez-vous à votre compte pour <a href=\"https://wiwatt.fr/\">confirmer la réservation.</a></p>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/ask_booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  110 => 22,  104 => 21,  97 => 17,  90 => 13,  86 => 12,  78 => 11,  76 => 10,  69 => 9,  63 => 8,  59 => 7,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set numberDates = 0 %}
<h3>Bonjour {{userOwner.firstname|capitalize}}</h3>
<p>Vous avez une nouvelle demande de réservation de la part de {{userRenter.firstname|capitalize}} {{userRenter.lastname|capitalize}}.</p>
<div>
    <h4>Cette demande concerne le véhicule suivant :</h4>
    <ul>
        <li>Type : {{vehicle.type.name}} </li>
        <li>Véhicule : {{vehicle.brand}} {{vehicle.model}}</li>
        <li>Date de la location : {% for date in booking.date %}{{date|localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM') }} -
                                    {% set numberDates = numberDates + 1 %}
                                 {% endfor %} 
                                    {% set dayCost = vehicle.dayCost %} 
                                    {%  set totalPriceBooking = dayCost * numberDates %}  
        </li>
    </ul>
</div>
<p>Cette location vous rapporterait : {{totalPriceBooking }} euros.</p>
<div>
    <h4>Voici les coordonnées de la personne qui fait cette demande :</h4>
    <ul>
        <li>Nom : {{userRenter.firstname|capitalize}} {{userRenter.lastname|capitalize}}</li>
        <li>Email : {{userRenter.email}} </li>
        <li>Téléphone : {{userRenter.phoneNumber}} </li>
    </ul>
</div>
<p>Connectez-vous à votre compte pour <a href=\"https://wiwatt.fr/\">confirmer la réservation.</a></p>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>", "emails/ask_booking.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/emails/ask_booking.html.twig");
    }
}
