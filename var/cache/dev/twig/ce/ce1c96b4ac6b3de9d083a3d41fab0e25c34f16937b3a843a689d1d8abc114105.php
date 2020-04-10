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

/* user/user_leasing/vehicle_rent.html.twig */
class __TwigTemplate_9e0e6a7841e28d6e92ef30886b4bafea77a816edd6d93c129e6ca66ca48917e3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/vehicle_rent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/vehicle_rent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_leasing/vehicle_rent.html.twig", 1);
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

        echo "Mes locations";
        
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
        echo "<div class=\"container px-0\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <a class=\"nav-link font-weight-bold position-relative\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_historic");
        echo "\"> En tant que proprietaire</a>
            </div>
            <div class=\"col text-center\">
                <a class=\"nav-link font-weight-bold position-relative\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rental");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/bolt.png"), "html", null, true);
        echo "\" height=\"20\" alt=\"circle\" class=\"bolt\">En tant que locataire</a>     
            </div>
        </div>

<div class=\"table-responsive\">
    <table class=\"table border container mt-5 text-center\">
            <thead>
            <tr>
                <th scope=\"col\" ></th>
                <th scope=\"col\" class=\"align-middle\">Actualisée le</th>
                <th scope=\"col\" class=\"align-middle\">Proprietaire</th>
                <th scope=\"col\" class=\"align-middle\">Véhicule</th>
                <th scope=\"col\" class=\"align-middle\">Lieu</th>
                <th scope=\"col\" class=\"align-middle\">Statut</th>
                <th scope=\"col\" class=\"align-middle\">Dates location</th>
                <th scope=\"col\" class=\"align-middle\">Prix total</th>
            </tr>
            </thead>
            <tbody>
            
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ask"]) {
            // line 33
            echo "                    <tr ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 33) == 2)) {
                // line 34
                echo "                    class=\"bg-validate\"

                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["ask"], "status", [], "any", false, false, false, 36) == 1)) {
                // line 37
                echo "                    class=\"bg-send\"
                    ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 38
$context["ask"], "status", [], "any", false, false, false, 38) == 3) || (twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 38) == 4))) {
                // line 39
                echo "                    class=\"bg-denied\"
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
$context["ask"], "status", [], "any", false, false, false, 40) == 5)) {
                // line 41
                echo "                    class=\"bg-finish\"
                    
                    ";
            }
            // line 44
            echo "                    >
                    <th scope=\"row\"></th>
                    <td class=\"align-middle\">
                        <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "updatedAt", [], "any", false, false, false, 47), "none", "none", "fr", null, "d/MM/YY à KK:mm"), "html", null, true);
            echo "</p>
                    </td>
                    <td class=\"align-middle\">                        
                       <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("one_user_information", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "owner", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "owner", [], "any", false, false, false, 51), "avatar", [], "any", false, false, false, 51)), "html", null, true);
            echo "\" alt=\"avatar\" height=\"40\" class=\"card-avatar\" >
                        <p class=\"text-small\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "owner", [], "any", false, false, false, 52), "firstname", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "owner", [], "any", false, false, false, 52), "lastname", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                       </a> 
                    </td>
                    <td class=\"align-middle\">
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "vehicle", [], "any", false, false, false, 56), "pictures", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 57
                echo "                        <img class=\"vehicle_picture\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "image", [], "any", false, false, false, 57))), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    </td>
                    
                    <td class=\"align-middle\" width=\"160\">
                        <p>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "vehicle", [], "any", false, false, false, 62), "adress", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
                    </td>
                    <td class=\"align-middle\">
                        ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 65) == 1)) {
                // line 66
                echo "                        <p>Demande envoyée</p>
                        ";
            }
            // line 68
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 68) == 2)) {
                // line 69
                echo "                        <p>Demande acceptée</p>
                        <div class=\"d-flex justify-content-around\">
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-phone\" title=\"télephone\" data-content=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "owner", [], "any", false, false, false, 71), "phoneNumber", [], "any", false, false, false, 71), "html", null, true);
                echo "\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></button>
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-email\" title=\"mail\" data-content=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "owner", [], "any", false, false, false, 72), "email", [], "any", false, false, false, 72), "html", null, true);
                echo "\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></button>
                        </div>
                        ";
            }
            // line 75
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 75) == 4)) {
                // line 76
                echo "                        <p>Demande annulée</p>
                        ";
            }
            // line 78
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 78) == 3)) {
                // line 79
                echo "                        <p>Demande refusée</p>
                        ";
            }
            // line 81
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 81) == 5)) {
                // line 82
                echo "                        <p>Location terminée</p>
                            ";
                // line 83
                if ((null === twig_get_attribute($this->env, $this->source, $context["ask"], "commentRenter", [], "any", false, false, false, 83))) {
                    // line 84
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_review", ["booking" => twig_get_attribute($this->env, $this->source, $context["ask"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\"><u>Ajouter un avis</u></a>
                        
                            ";
                }
                // line 87
                echo "                        
                        ";
            }
            // line 89
            echo "                    </td>
                    <td class=\"align-middle\">
                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ask"], "date", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 92
                echo "                            <p>";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
                echo "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    </td>
                    <td class=\"align-middle\">
                        <p>";
            // line 96
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "vehicle", [], "any", false, false, false, 96), "dayCost", [], "any", false, false, false, 96) * twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "dateRenter", [], "any", false, false, false, 96))), "html", null, true);
            echo "€</p>
                    </td>
                
                </tr>         
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                
            </tbody>
    </table>

    ";
        // line 106
        echo "    <div class=\"navigation\">
        ";
        // line 107
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 107, $this->source); })()));
        echo "
    </div>
    
</div>
</div>


      ";
        // line 114
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user_leasing/vehicle_rent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 114,  301 => 107,  298 => 106,  292 => 101,  281 => 96,  277 => 94,  268 => 92,  264 => 91,  260 => 89,  256 => 87,  249 => 84,  247 => 83,  244 => 82,  241 => 81,  237 => 79,  234 => 78,  230 => 76,  227 => 75,  221 => 72,  217 => 71,  213 => 69,  210 => 68,  206 => 66,  204 => 65,  198 => 62,  193 => 59,  184 => 57,  180 => 56,  171 => 52,  167 => 51,  163 => 50,  157 => 47,  152 => 44,  147 => 41,  145 => 40,  142 => 39,  140 => 38,  137 => 37,  135 => 36,  131 => 34,  128 => 33,  124 => 32,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes locations{% endblock %}

{% block body %}
<div class=\"container px-0\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <a class=\"nav-link font-weight-bold position-relative\" href=\"{{ path('owner_historic') }}\"> En tant que proprietaire</a>
            </div>
            <div class=\"col text-center\">
                <a class=\"nav-link font-weight-bold position-relative\" href=\"{{ path('user_rental') }}\"><img src=\"{{ asset('pictures/bolt.png') }}\" height=\"20\" alt=\"circle\" class=\"bolt\">En tant que locataire</a>     
            </div>
        </div>

<div class=\"table-responsive\">
    <table class=\"table border container mt-5 text-center\">
            <thead>
            <tr>
                <th scope=\"col\" ></th>
                <th scope=\"col\" class=\"align-middle\">Actualisée le</th>
                <th scope=\"col\" class=\"align-middle\">Proprietaire</th>
                <th scope=\"col\" class=\"align-middle\">Véhicule</th>
                <th scope=\"col\" class=\"align-middle\">Lieu</th>
                <th scope=\"col\" class=\"align-middle\">Statut</th>
                <th scope=\"col\" class=\"align-middle\">Dates location</th>
                <th scope=\"col\" class=\"align-middle\">Prix total</th>
            </tr>
            </thead>
            <tbody>
            
                {% for ask in bookings %}
                    <tr {% if ask.status == 2 %}
                    class=\"bg-validate\"

                    {% elseif ask.status == 1%}
                    class=\"bg-send\"
                    {% elseif ask.status == 3 or ask.status == 4%}
                    class=\"bg-denied\"
                    {% elseif ask.status == 5 %}
                    class=\"bg-finish\"
                    
                    {% endif %}
                    >
                    <th scope=\"row\"></th>
                    <td class=\"align-middle\">
                        <p>{{ ask.updatedAt | localizeddate('none', 'none', 'fr', null, 'd/MM/YY à KK:mm') }}</p>
                    </td>
                    <td class=\"align-middle\">                        
                       <a href=\"{{ path('one_user_information', {'user' : ask.owner.id }) }}\">
                        <img src=\"{{ asset(ask.owner.avatar) }}\" alt=\"avatar\" height=\"40\" class=\"card-avatar\" >
                        <p class=\"text-small\">{{ ask.owner.firstname }} {{ ask.owner.lastname }}</p>
                       </a> 
                    </td>
                    <td class=\"align-middle\">
                    {% for picture in ask.vehicle.pictures %}
                        <img class=\"vehicle_picture\" src=\"{{ asset('pictures/' ~ picture.image) }}\">
                    {% endfor %}
                    </td>
                    
                    <td class=\"align-middle\" width=\"160\">
                        <p>{{ ask.vehicle.adress }}</p>
                    </td>
                    <td class=\"align-middle\">
                        {% if ask.status == 1 %}
                        <p>Demande envoyée</p>
                        {% endif %}
                        {% if ask.status == 2 %}
                        <p>Demande acceptée</p>
                        <div class=\"d-flex justify-content-around\">
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-phone\" title=\"télephone\" data-content=\"{{ ask.owner.phoneNumber }}\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></button>
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-email\" title=\"mail\" data-content=\"{{ ask.owner.email }}\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></button>
                        </div>
                        {% endif %}
                        {% if ask.status == 4 %}
                        <p>Demande annulée</p>
                        {% endif %}
                        {% if ask.status == 3 %}
                        <p>Demande refusée</p>
                        {% endif %}
                        {% if ask.status == 5 %}
                        <p>Location terminée</p>
                            {% if ask.commentRenter is null %}
                        <a href=\"{{ path('add_review', {'booking' : ask.id}) }}\"><u>Ajouter un avis</u></a>
                        
                            {% endif %}
                        
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% for date in ask.date %}
                            <p>{{ date |localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM') }}</p>
                        {% endfor %}
                    </td>
                    <td class=\"align-middle\">
                        <p>{{ ask.vehicle.dayCost * ask.dateRenter | length }}€</p>
                    </td>
                
                </tr>         
                {% endfor %}
                
            </tbody>
    </table>

    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(bookings) }}
    </div>
    
</div>
</div>


      {{ include('partials/footer.html.twig') }}

{% endblock %}
", "user/user_leasing/vehicle_rent.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/user/user_leasing/vehicle_rent.html.twig");
    }
}
