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

/* user/user_leasing/owner_historic.html.twig */
class __TwigTemplate_fd135b299e6979e3e9695688bfb3093b94b2d07384ed3603971ae9b4b5a9c980 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/owner_historic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/owner_historic.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_leasing/owner_historic.html.twig", 1);
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
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_historic");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/bolt.png"), "html", null, true);
        echo "\" height=\"20\" alt=\"circle\" class=\"bolt\">En tant que proprietaire</a>
        </div>
        <div class=\"col text-center\">
           <a class=\"nav-link text-secondary\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rental");
        echo "\">En tant que locataire</a>     
        </div>
    </div>
       
 

<div class=\"table-responsive\">    
    <table class=\"table border container mt-5 text-center\">
        <thead>
          <tr>
            <th scope=\"col\" ></th>
            <th scope=\"col\" class=\"align-middle\">Actualisée le</th>
            <th scope=\"col\" class=\"align-middle\">Locataire</th>
            <th scope=\"col\" class=\"align-middle\">Véhicule</th>
            <th scope=\"col\" class=\"align-middle\">Statut</th>
            <th scope=\"col\" class=\"align-middle\">Dates location</th>
            <th scope=\"col\" class=\"align-middle\">Prix total</th>
          </tr>
        </thead>
        <tbody>
          
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ask"]) {
            // line 35
            echo "                <tr ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 35) == 2)) {
                // line 36
                echo "                class=\"bg-validate\"
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["ask"], "status", [], "any", false, false, false, 37) == 1)) {
                // line 38
                echo "                class=\"bg-send\"
                ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 39
$context["ask"], "status", [], "any", false, false, false, 39) == 3) || (twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 39) == 4))) {
                // line 40
                echo "                class=\"bg-denied\"
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["ask"], "status", [], "any", false, false, false, 41) == 5)) {
                // line 42
                echo "                class=\"bg-finish\"
                
                ";
            }
            // line 45
            echo "                >
                <th scope=\"row\"></th>
                <td class=\"align-middle\">
                    <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "updatedAt", [], "any", false, false, false, 48), "none", "none", "fr", null, "EEEE d MMMM à kk:mm"), "html", null, true);
            echo "</p>
                </td>
                <td class=\"align-middle\">
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("one_user_information", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "renter", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "renter", [], "any", false, false, false, 52), "avatar", [], "any", false, false, false, 52)), "html", null, true);
            echo "\" alt=\"avatar\" height=\"40\" class=\"card-avatar\">
                        <p class=\"text-small\"> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "renter", [], "any", false, false, false, 53), "firstname", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "renter", [], "any", false, false, false, 53), "lastname", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    </a>
                </td>
                <td class=\"align-middle\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "vehicle", [], "any", false, false, false, 57), "pictures", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 58
                echo "                    <img class=\"vehicle_picture\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "image", [], "any", false, false, false, 58))), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </td>
                <td class=\"align-middle\">
                    ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 62) == 1)) {
                // line 63
                echo "                    <p>Demande reçue</p>
                    <div class=\"d-flex justify-content-around align-items-center\">
                        <form action=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_accept_booking");
                echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("accept"), "html", null, true);
                echo "\"/>
                            <input type=\"hidden\" name=\"bookingId\" value=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\"/>
                            <input type=\"hidden\" name=\"datesId\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["ask"], "dateRenter", [], "any", false, false, false, 68), "-"), "html", null, true);
                echo "\"/>
                            <button class=\"btn btn-sm btn-outline-success my-2\" type=\"submit\">Accepter</button>
                        </form>
                        <form action=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_refuse_booking");
                echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("deny"), "html", null, true);
                echo "\"/>
                            <input type=\"hidden\" name=\"bookingId\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo "\"/>
    
                            <button class=\"btn btn-sm btn-outline-danger my-2\" type=\"submit\">Refuser</button>
                        </form>
                    </div>
                    ";
            }
            // line 79
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 79) == 2)) {
                // line 80
                echo "                    <p>Demande acceptée</p>
                    <div class=\"d-flex justify-content-around\">
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-phone\" title=\"télephone\" data-content=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "renter", [], "any", false, false, false, 82), "phoneNumber", [], "any", false, false, false, 82), "html", null, true);
                echo "\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></button>
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-email\" title=\"mail\" data-content=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "renter", [], "any", false, false, false, 83), "email", [], "any", false, false, false, 83), "html", null, true);
                echo "\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></button>
                    </div>
                    <div class=\"d-flex justify-content-around align-items-center\">
                        <form action=\"";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_reception");
                echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reception"), "html", null, true);
                echo "\"/>
                            <input type=\"hidden\" name=\"bookingId\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\"/>
                            <button class=\"btn btn-sm btn-success my-2\" type=\"submit\">J'ai récuperé mon véhicule</button>
                        </form>
                    </div>
                    ";
            }
            // line 93
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 93) == 4)) {
                // line 94
                echo "                    <p>Demande annulée</p>
                    ";
            }
            // line 96
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 96) == 3)) {
                // line 97
                echo "                    <p>Demande refusée</p>
                    ";
            }
            // line 99
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["ask"], "status", [], "any", false, false, false, 99) == 5)) {
                // line 100
                echo "                    <p>Location terminée</p>
                        ";
                // line 101
                if ((null === twig_get_attribute($this->env, $this->source, $context["ask"], "commentOwner", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                    <a class=\"link-blue\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_review", ["booking" => twig_get_attribute($this->env, $this->source, $context["ask"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                    echo "\"><u>Ajouter un avis</u></a>
                        ";
                }
                // line 104
                echo "                    ";
            }
            // line 105
            echo "                </td>
                <td class=\"align-middle\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ask"], "date", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 108
                echo "                    <p>";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $context["date"], "none", "none", "fr", null, "EEEE d MMMM"), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                </td>
                <td class=\"align-middle\">
                    <p>";
            // line 112
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ask"], "vehicle", [], "any", false, false, false, 112), "dayCost", [], "any", false, false, false, 112) * twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ask"], "dateRenter", [], "any", false, false, false, 112))), "html", null, true);
            echo "€</p>
                </td>
            
            </tr>         
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "            
        </tbody>
    </table>

        ";
        // line 122
        echo "    <div class=\"navigation\">
        ";
        // line 123
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 123, $this->source); })()));
        echo "
    </div>
</div>
</div>



      ";
        // line 130
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user_leasing/owner_historic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 130,  344 => 123,  341 => 122,  335 => 117,  324 => 112,  320 => 110,  311 => 108,  307 => 107,  303 => 105,  300 => 104,  294 => 102,  292 => 101,  289 => 100,  286 => 99,  282 => 97,  279 => 96,  275 => 94,  272 => 93,  264 => 88,  260 => 87,  256 => 86,  250 => 83,  246 => 82,  242 => 80,  239 => 79,  230 => 73,  226 => 72,  222 => 71,  216 => 68,  212 => 67,  208 => 66,  204 => 65,  200 => 63,  198 => 62,  194 => 60,  185 => 58,  181 => 57,  172 => 53,  168 => 52,  164 => 51,  158 => 48,  153 => 45,  148 => 42,  146 => 41,  143 => 40,  141 => 39,  138 => 38,  136 => 37,  133 => 36,  130 => 35,  126 => 34,  102 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes locations{% endblock %}

{% block body %}
<div class=\"container px-0\">

    <div class=\"row\">
        <div class=\"col text-center\">
            <a class=\"nav-link font-weight-bold position-relative\" href=\"{{ path('owner_historic') }}\"><img src=\"{{ asset('pictures/bolt.png') }}\" height=\"20\" alt=\"circle\" class=\"bolt\">En tant que proprietaire</a>
        </div>
        <div class=\"col text-center\">
           <a class=\"nav-link text-secondary\" href=\"{{ path('user_rental') }}\">En tant que locataire</a>     
        </div>
    </div>
       
 

<div class=\"table-responsive\">    
    <table class=\"table border container mt-5 text-center\">
        <thead>
          <tr>
            <th scope=\"col\" ></th>
            <th scope=\"col\" class=\"align-middle\">Actualisée le</th>
            <th scope=\"col\" class=\"align-middle\">Locataire</th>
            <th scope=\"col\" class=\"align-middle\">Véhicule</th>
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
                    <p>{{ ask.updatedAt |localizeddate('none', 'none', 'fr', null, 'EEEE d MMMM à kk:mm')  }}</p>
                </td>
                <td class=\"align-middle\">
                    <a href=\"{{ path('one_user_information', {'user' : ask.renter.id }) }}\">
                        <img src=\"{{ asset(ask.renter.avatar) }}\" alt=\"avatar\" height=\"40\" class=\"card-avatar\">
                        <p class=\"text-small\"> {{ ask.renter.firstname }} {{ ask.renter.lastname }}</p>
                    </a>
                </td>
                <td class=\"align-middle\">
                {% for picture in ask.vehicle.pictures %}
                    <img class=\"vehicle_picture\" src=\"{{ asset('pictures/' ~ picture.image) }}\">
                {% endfor %}
                </td>
                <td class=\"align-middle\">
                    {% if ask.status == 1 %}
                    <p>Demande reçue</p>
                    <div class=\"d-flex justify-content-around align-items-center\">
                        <form action=\"{{ path('user_accept_booking') }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('accept') }}\"/>
                            <input type=\"hidden\" name=\"bookingId\" value=\"{{ ask.id }}\"/>
                            <input type=\"hidden\" name=\"datesId\" value=\"{{ ask.dateRenter | join('-') }}\"/>
                            <button class=\"btn btn-sm btn-outline-success my-2\" type=\"submit\">Accepter</button>
                        </form>
                        <form action=\"{{ path('user_refuse_booking') }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('deny') }}\"/>
                            <input type=\"hidden\" name=\"bookingId\" value=\"{{ ask.id }}\"/>
    
                            <button class=\"btn btn-sm btn-outline-danger my-2\" type=\"submit\">Refuser</button>
                        </form>
                    </div>
                    {% endif %}
                    {% if ask.status == 2 %}
                    <p>Demande acceptée</p>
                    <div class=\"d-flex justify-content-around\">
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-phone\" title=\"télephone\" data-content=\"{{ ask.renter.phoneNumber }}\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></button>
                            <button class=\"btn btn-sm btn-success my-2 text-small\" type=\"button\" data-toggle=\"popover-email\" title=\"mail\" data-content=\"{{ ask.renter.email }}\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></button>
                    </div>
                    <div class=\"d-flex justify-content-around align-items-center\">
                        <form action=\"{{ path('vehicle_reception') }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('reception') }}\"/>
                            <input type=\"hidden\" name=\"bookingId\" value=\"{{ ask.id }}\"/>
                            <button class=\"btn btn-sm btn-success my-2\" type=\"submit\">J'ai récuperé mon véhicule</button>
                        </form>
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
                        {% if ask.commentOwner is null %}
                    <a class=\"link-blue\" href=\"{{path('add_review', {'booking' : ask.id})}}\"><u>Ajouter un avis</u></a>
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
", "user/user_leasing/owner_historic.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/user/user_leasing/owner_historic.html.twig");
    }
}
