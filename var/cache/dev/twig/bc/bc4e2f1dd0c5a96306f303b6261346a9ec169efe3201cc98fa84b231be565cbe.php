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

/* partials/card.html.twig */
class __TwigTemplate_e8f564e87fded68ff3b0c6b0f00fe9e40a9c88191e7aec8130aacb1a6a7d9cb9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/card.html.twig"));

        // line 1
        echo "    <div class=\"image-container\">
        ";
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 2, $this->source); })()), "pictures", [], "any", false, false, false, 2)) == 0)) {
            // line 3
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/no-image.png"), "html", null, true);
            echo "\" alt=\"no image\" class=\"image-locations rounded\">

        ";
        } else {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 6, $this->source); })()), "pictures", [], "any", false, false, false, 6));
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
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "image", [], "any", false, false, false, 8))), "html", null, true);
                    echo "\" alt=\"vehicule image\"  class=\"image-locations rounded\"> 
        ";
                }
                // line 10
                echo "                                        
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        // line 13
        echo "      <span class=\"price\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 13, $this->source); })()), "dayCost", [], "any", false, false, false, 13), "html", null, true);
        echo "€</span>
     
    </div>
    <p class=\"text-center\">
        <span class=\"city\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 17, $this->source); })()), "city", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 17, $this->source); })()), "zipcode", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
    </p>
    <div id=\"card-infos-content\">
        
        <p class=\"font-weight-bold h5 text-center mt-2\">";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21)), "html", null, true);
        echo "</p>
        <div class=\"d-flex justify-content-around mt-3\">
            <div>
                <i class=\"fa fa-bolt text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 24, $this->source); })()), "power", [], "any", false, false, false, 24), "html", null, true);
        echo "W</span>
            </div>
            <div>
                <i class=\"fa fa-battery-half text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 27, $this->source); })()), "autonomy", [], "any", false, false, false, 27), "html", null, true);
        echo " km</span>
            </div>
            <div>
                <i class=\"fa fa-tachometer text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 30, $this->source); })()), "maxSpeed", [], "any", false, false, false, 30), "html", null, true);
        echo " km/h</span>
            </div>
            <div>
                <i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 33, $this->source); })()), "seatNumber", [], "any", false, false, false, 33), "html", null, true);
        echo "</span>
            </div>                
            
        </div>
        <div class=\"d-flex justify-content-around align-items-center mt-3\">
            
            <div class=\"show-annonce d-flex justify-content-center mt-3\">
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_leasing", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" class=\"btn btn-outline-info\">Voir l'annonce</a>
            </div>
            
            <div class=\"d-flex flex-column justify-content-center align-items-center\">
                <a class=\"text-center\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("one_user_information", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "avatar", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" class=\"card-avatar\" alt=\"avatar\" width=\"50\">
                    <p class=\"text-small font-weight-bold\">";
        // line 46
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "firstname", [], "any", false, false, false, 46)), "html", null, true);
        echo "</p>
                </a>
            </div>

        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 46,  162 => 45,  158 => 44,  151 => 40,  141 => 33,  135 => 30,  129 => 27,  123 => 24,  117 => 21,  108 => 17,  100 => 13,  97 => 12,  82 => 10,  76 => 8,  73 => 7,  55 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"image-container\">
        {% if vehicle.pictures | length == 0  %}
        <img src=\"{{ asset('pictures/no-image.png') }}\" alt=\"no image\" class=\"image-locations rounded\">

        {% else %}
        {% for picture in vehicle.pictures %}
        {% if loop.first %}
        <img src=\"{{ asset('pictures/' ~ picture.image ) }}\" alt=\"vehicule image\"  class=\"image-locations rounded\"> 
        {% endif %}
                                        
        {% endfor %}
        {% endif %}
      <span class=\"price\">{{ vehicle.dayCost }}€</span>
     
    </div>
    <p class=\"text-center\">
        <span class=\"city\">{{ vehicle.city }} {{ vehicle.zipcode }}</span>
    </p>
    <div id=\"card-infos-content\">
        
        <p class=\"font-weight-bold h5 text-center mt-2\">{{ vehicle.type.name | capitalize }}</p>
        <div class=\"d-flex justify-content-around mt-3\">
            <div>
                <i class=\"fa fa-bolt text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> {{ vehicle.power }}W</span>
            </div>
            <div>
                <i class=\"fa fa-battery-half text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> {{ vehicle.autonomy }} km</span>
            </div>
            <div>
                <i class=\"fa fa-tachometer text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> {{ vehicle.maxSpeed }} km/h</span>
            </div>
            <div>
                <i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> {{ vehicle.seatNumber }}</span>
            </div>                
            
        </div>
        <div class=\"d-flex justify-content-around align-items-center mt-3\">
            
            <div class=\"show-annonce d-flex justify-content-center mt-3\">
                <a href=\"{{ path('show_leasing' , { 'id' : vehicle.id  }) }}\" class=\"btn btn-outline-info\">Voir l'annonce</a>
            </div>
            
            <div class=\"d-flex flex-column justify-content-center align-items-center\">
                <a class=\"text-center\" href=\"{{ path('one_user_information' ,{ 'user' : vehicle.user.id}) }}\">
                    <img src=\"{{ asset(vehicle.user.avatar) }}\" class=\"card-avatar\" alt=\"avatar\" width=\"50\">
                    <p class=\"text-small font-weight-bold\">{{ vehicle.user.firstname | capitalize }}</p>
                </a>
            </div>

        </div>
    </div>", "partials/card.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/partials/card.html.twig");
    }
}
