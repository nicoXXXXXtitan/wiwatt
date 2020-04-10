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

/* partials/card-full.html.twig */
class __TwigTemplate_d7376d687683573c22e32344e797d386b9c75acb93b6a46b482dc1fac6b4177d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/card-full.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/card-full.html.twig"));

        // line 1
        echo "    <div class=\"image-container-full \">
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
        echo "      <span class=\"vehicle-price price\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 13, $this->source); })()), "dayCost", [], "any", false, false, false, 13), "html", null, true);
        echo "€</span>
      <span class=\"city\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 14, $this->source); })()), "city", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 14, $this->source); })()), "zipcode", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
    </div>
    
  
    <div>
        <p class=\"font-weight-bold h5 text-center mt-2\">";
        // line 19
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19)), "html", null, true);
        echo "</p>
        <div class=\"d-flex justify-content-around mt-3\">
            <div>
                <i class=\"fa fa-bolt text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 22, $this->source); })()), "power", [], "any", false, false, false, 22), "html", null, true);
        echo "W</span>
            </div>
            <div>
                <i class=\"fa fa-battery-half text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 25, $this->source); })()), "autonomy", [], "any", false, false, false, 25), "html", null, true);
        echo " km</span>
            </div>
            <div>
                <i class=\"fa fa-tachometer text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 28, $this->source); })()), "maxSpeed", [], "any", false, false, false, 28), "html", null, true);
        echo " km/h</span>
            </div>
            <div>
                <i class=\"fa fa-users text-info\" aria-hidden=\"true\"></i><span class=\"text-small\"> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 31, $this->source); })()), "seatNumber", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
            </div>                
        </div>
        <p class=\"font-weight-bold mt-3\">Description</p>
        <p class=\"mt-2\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>

        <hr>
        <p class=\"text-center \">Selectionnez les dates</p>
        
        <form action=\"\" method=\"POST\">
        
        <div class=\"mt-3 row\">  
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 44
            echo "            <div class=\"col-md-4 d-flex justify-content-center align-items-center date-selector\">
                <input id=\"input";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"  class=\"checkbox-reservation\"  type=\"checkbox\"  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" name=\"inputDate[]\">
                <label for=\"input";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "availableDate", [], "any", false, false, false, 46), "none", "none", "fr", null, "d MMMM"), "html", null, true);
            echo "</label>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
        <hr>
         
           
            
       
        
        <div class=\"d-flex justify-content-around align-items-center mt-3\">

            <div class=\"d-flex justify-content-center mt-3\">
                    
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("booking-ask"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"ask-booking btn btn-outline-info\" data-toggle=\"modal\" data-target=\"#exampleModal\">
                       Faire une demande
                      </button>
                </form>
    
            </div>
            
            <div class=\"d-flex flex-column justify-content-center align-items-center\">
                <a class=\"text-center\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("one_user_information", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "avatar", [], "any", false, false, false, 70)), "html", null, true);
        echo "\"  class=\"card-avatar\" alt=\"avatar\" width=\"50\">
                    <p class=\"text-small\">";
        // line 71
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "firstname", [], "any", false, false, false, 71)), "html", null, true);
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
        return "partials/card-full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 71,  210 => 70,  206 => 69,  194 => 60,  181 => 49,  170 => 46,  164 => 45,  161 => 44,  157 => 43,  146 => 35,  139 => 31,  133 => 28,  127 => 25,  121 => 22,  115 => 19,  105 => 14,  100 => 13,  97 => 12,  82 => 10,  76 => 8,  73 => 7,  55 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"image-container-full \">
        {% if vehicle.pictures | length == 0  %}
        <img src=\"{{ asset('pictures/no-image.png') }}\" alt=\"no image\" class=\"image-locations rounded\">

        {% else %}
        {% for picture in vehicle.pictures %}
        {% if loop.first %}
        <img src=\"{{ asset('pictures/' ~ picture.image ) }}\" alt=\"vehicule image\"  class=\"image-locations rounded\"> 
        {% endif %}
                                        
        {% endfor %}
        {% endif %}
      <span class=\"vehicle-price price\">{{ vehicle.dayCost }}€</span>
      <span class=\"city\">{{ vehicle.city }} {{ vehicle.zipcode }}</span>
    </div>
    
  
    <div>
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
        <p class=\"font-weight-bold mt-3\">Description</p>
        <p class=\"mt-2\">{{ vehicle.description }}</p>

        <hr>
        <p class=\"text-center \">Selectionnez les dates</p>
        
        <form action=\"\" method=\"POST\">
        
        <div class=\"mt-3 row\">  
            {% for date in dates %}
            <div class=\"col-md-4 d-flex justify-content-center align-items-center date-selector\">
                <input id=\"input{{ date.id }}\"  class=\"checkbox-reservation\"  type=\"checkbox\"  value=\"{{ date.id }}\" name=\"inputDate[]\">
                <label for=\"input{{ date.id }}\" >{{ date.availableDate |localizeddate('none', 'none', 'fr' , null, 'd MMMM')  }}</label>
            </div>
            {% endfor %}
        </div>
        <hr>
         
           
            
       
        
        <div class=\"d-flex justify-content-around align-items-center mt-3\">

            <div class=\"d-flex justify-content-center mt-3\">
                    
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('booking-ask') }}\"/>
                    <button type=\"button\" class=\"ask-booking btn btn-outline-info\" data-toggle=\"modal\" data-target=\"#exampleModal\">
                       Faire une demande
                      </button>
                </form>
    
            </div>
            
            <div class=\"d-flex flex-column justify-content-center align-items-center\">
                <a class=\"text-center\" href=\"{{ path('one_user_information' ,{ 'user' : vehicle.user.id}) }}\">
                    <img src=\"{{ asset(vehicle.user.avatar) }}\"  class=\"card-avatar\" alt=\"avatar\" width=\"50\">
                    <p class=\"text-small\">{{ vehicle.user.firstname|capitalize }}</p> 
                </a>
            </div>

        </div>
    </div>", "partials/card-full.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/partials/card-full.html.twig");
    }
}
