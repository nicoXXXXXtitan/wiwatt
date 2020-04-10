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

/* emails/accept_booking.html.twig */
class __TwigTemplate_de681c7f29029fd6412e32a9607c75bc066657531349b738b2d715e77d91f510 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/accept_booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/accept_booking.html.twig"));

        // line 1
        echo "<h3>Bonjour ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 1, $this->source); })()), "renter", [], "any", false, false, false, 1), "firstname", [], "any", false, false, false, 1)), "html", null, true);
        echo "</h3>
<div>
    <h4>";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "owner", [], "any", false, false, false, 3), "firstname", [], "any", false, false, false, 3)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "owner", [], "any", false, false, false, 3), "lastname", [], "any", false, false, false, 3)), "html", null, true);
        echo " a accepté votre demande de location pour :</h4>
    <ul>
        <li>Type : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 5, $this->source); })()), "vehicle", [], "any", false, false, false, 5), "type", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " </li>
        <li>Vehicule : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "vehicle", [], "any", false, false, false, 6), "brand", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "vehicle", [], "any", false, false, false, 6), "model", [], "any", false, false, false, 6), "html", null, true);
        echo "</li>
        <li>";
        // line 7
        $context["numberDates"] = 0;
        // line 8
        echo "                Date de la location : ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 8, $this->source); })()), "date", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
            echo " -
                                            ";
            // line 9
            $context["numberDates"] = ((isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 9, $this->source); })()) + 1);
            echo " 
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  
                
                                        ";
        // line 12
        $context["dayCost"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 12, $this->source); })()), "vehicle", [], "any", false, false, false, 12), "dayCost", [], "any", false, false, false, 12);
        echo " 
                                        ";
        // line 13
        $context["totalPriceBooking"] = ((isset($context["dayCost"]) || array_key_exists("dayCost", $context) ? $context["dayCost"] : (function () { throw new RuntimeError('Variable "dayCost" does not exist.', 13, $this->source); })()) * (isset($context["numberDates"]) || array_key_exists("numberDates", $context) ? $context["numberDates"] : (function () { throw new RuntimeError('Variable "numberDates" does not exist.', 13, $this->source); })()));
        echo "</li>
        <li>Lieu de la location : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 14, $this->source); })()), "vehicle", [], "any", false, false, false, 14), "city", [], "any", false, false, false, 14), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 14, $this->source); })()), "vehicle", [], "any", false, false, false, 14), "zipCode", [], "any", false, false, false, 14), "html", null, true);
        echo " )</li>
    </ul>
</div>
<p>Vous devrez régler à ";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 17, $this->source); })()), "owner", [], "any", false, false, false, 17), "firstname", [], "any", false, false, false, 17)), "html", null, true);
        echo " la somme de  :  ";
        echo twig_escape_filter($this->env, (isset($context["totalPriceBooking"]) || array_key_exists("totalPriceBooking", $context) ? $context["totalPriceBooking"] : (function () { throw new RuntimeError('Variable "totalPriceBooking" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " euros.</p>
<p>Pour valider la remise en main propre, contactez le propriétaire au ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 18, $this->source); })()), "owner", [], "any", false, false, false, 18), "phoneNumber", [], "any", false, false, false, 18), "html", null, true);
        echo " ou par email : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 18, $this->source); })()), "owner", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        echo ".
</p>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/accept_booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  105 => 17,  97 => 14,  93 => 13,  89 => 12,  85 => 10,  77 => 9,  68 => 8,  66 => 7,  60 => 6,  56 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Bonjour {{booking.renter.firstname|capitalize}}</h3>
<div>
    <h4>{{booking.owner.firstname|capitalize}} {{booking.owner.lastname|capitalize}} a accepté votre demande de location pour :</h4>
    <ul>
        <li>Type : {{booking.vehicle.type.name}} </li>
        <li>Vehicule : {{booking.vehicle.brand}} {{booking.vehicle.model}}</li>
        <li>{% set numberDates = 0 %}
                Date de la location : {% for date in booking.date %} {{ date|localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM') }} -
                                            {% set numberDates = numberDates + 1 %} 
                                        {% endfor %}  
                
                                        {% set dayCost = booking.vehicle.dayCost %} 
                                        {%  set totalPriceBooking = dayCost * numberDates %}</li>
        <li>Lieu de la location : {{booking.vehicle.city}} ( {{booking.vehicle.zipCode}} )</li>
    </ul>
</div>
<p>Vous devrez régler à {{booking.owner.firstname|capitalize}} la somme de  :  {{totalPriceBooking }} euros.</p>
<p>Pour valider la remise en main propre, contactez le propriétaire au {{booking.owner.phoneNumber}} ou par email : {{booking.owner.email}}.
</p>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>", "emails/accept_booking.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/emails/accept_booking.html.twig");
    }
}
