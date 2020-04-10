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

/* emails/new_review_renter.html.twig */
class __TwigTemplate_d07b0eb632818ef11b69891b4670d99922731583d97b8b436825249e71a04342 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/new_review_renter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/new_review_renter.html.twig"));

        // line 1
        echo "<h3>Bonjour ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 1, $this->source); })()), "renter", [], "any", false, false, false, 1), "firstname", [], "any", false, false, false, 1)), "html", null, true);
        echo "</h3>
<p>";
        // line 2
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 2, $this->source); })()), "owner", [], "any", false, false, false, 2), "firstname", [], "any", false, false, false, 2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 2, $this->source); })()), "owner", [], "any", false, false, false, 2), "lastname", [], "any", false, false, false, 2)), "html", null, true);
        echo " vous a noté ";
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " / 5 avec le commentaire suivant :
<p>\"";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 3, $this->source); })())), "html", null, true);
        echo "\"</p>
<p>Vous pouvez également noter le propriétaire <a href=\"https://wiwatt.fr/user/renter/locations\">ici.</a></p>
<p>Noter un utilisateur est important: merci de vérifier votre commentaire avant tout envoi.</p>
<p>Vous vous engagez à donner un avis reflétant la réalité.</p>
<div>
    <h4>Rappel de la location :</h4>
    <ul>
        <li>Type : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 10, $this->source); })()), "vehicle", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</li>
        <li>Vehicule : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 11, $this->source); })()), "vehicle", [], "any", false, false, false, 11), "brand", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 11, $this->source); })()), "vehicle", [], "any", false, false, false, 11), "model", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
        <li>Date de la location : ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
            echo " -
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</li>
        <li>Lieu de la location : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 14, $this->source); })()), "vehicle", [], "any", false, false, false, 14), "city", [], "any", false, false, false, 14), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 14, $this->source); })()), "vehicle", [], "any", false, false, false, 14), "zipCode", [], "any", false, false, false, 14), "html", null, true);
        echo " )</li>
    </ul>
</div>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/new_review_renter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  88 => 13,  76 => 12,  70 => 11,  66 => 10,  56 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Bonjour {{booking.renter.firstname|capitalize}}</h3>
<p>{{booking.owner.firstname|capitalize}} {{booking.owner.lastname|capitalize}} vous a noté {{score}} / 5 avec le commentaire suivant :
<p>\"{{ comment|capitalize }}\"</p>
<p>Vous pouvez également noter le propriétaire <a href=\"https://wiwatt.fr/user/renter/locations\">ici.</a></p>
<p>Noter un utilisateur est important: merci de vérifier votre commentaire avant tout envoi.</p>
<p>Vous vous engagez à donner un avis reflétant la réalité.</p>
<div>
    <h4>Rappel de la location :</h4>
    <ul>
        <li>Type : {{booking.vehicle.type.name}}</li>
        <li>Vehicule : {{booking.vehicle.brand}} {{booking.vehicle.model}}</li>
        <li>Date de la location : {% for date in booking.date %} {{ date|localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM') }} -
                {% endfor %}</li>
        <li>Lieu de la location : {{booking.vehicle.city}} ( {{booking.vehicle.zipCode}} )</li>
    </ul>
</div>
Bonne journée de la part de l'équipe Wiwatt.
<br>
<a href=\"https://wiwatt.fr/\">Wiwatt</a>", "emails/new_review_renter.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/emails/new_review_renter.html.twig");
    }
}
