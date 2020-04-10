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

/* emails/rent_end.html.twig */
class __TwigTemplate_fb234f2316b9841e034d544efdfffff5eb35e65c2f39deea776063f0e5083407 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/rent_end.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/rent_end.html.twig"));

        // line 1
        echo "<h3>Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 1, $this->source); })()), "renter", [], "any", false, false, false, 1), "firstname", [], "any", false, false, false, 1), "html", null, true);
        echo "</h3>
<div>
    <h4>Votre location est terminée. Voici le détail :</h4>
    <ul>
        <li>Type : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 5, $this->source); })()), "vehicle", [], "any", false, false, false, 5), "type", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " </li>
        <li>Véhicule : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "vehicle", [], "any", false, false, false, 6), "brand", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "vehicle", [], "any", false, false, false, 6), "model", [], "any", false, false, false, 6), "html", null, true);
        echo "</li>
        <li>Date de la location : ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
            echo " -
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</li></li>
        <li>Lieu de la location : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "vehicle", [], "any", false, false, false, 9), "city", [], "any", false, false, false, 9), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "vehicle", [], "any", false, false, false, 9), "zipCode", [], "any", false, false, false, 9), "html", null, true);
        echo " )</li>
    </ul>
</div>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/rent_end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  73 => 8,  61 => 7,  55 => 6,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Bonjour {{booking.renter.firstname}}</h3>
<div>
    <h4>Votre location est terminée. Voici le détail :</h4>
    <ul>
        <li>Type : {{booking.vehicle.type.name}} </li>
        <li>Véhicule : {{booking.vehicle.brand}} {{booking.vehicle.model}}</li>
        <li>Date de la location : {% for date in booking.date %} {{ date|localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM') }} -
                {% endfor %}</li></li>
        <li>Lieu de la location : {{booking.vehicle.city}} ( {{booking.vehicle.zipCode}} )</li>
    </ul>
</div>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>
", "emails/rent_end.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/emails/rent_end.html.twig");
    }
}
