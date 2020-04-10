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

/* user/user_leasing/own_vehicle.html.twig */
class __TwigTemplate_3aa0142191fb1f6f443c0154a22c21281e34cf859fb1de7240ccce5d09e8c6f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/own_vehicle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_leasing/own_vehicle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_leasing/own_vehicle.html.twig", 1);
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

        echo "Mes annonces-Wiwatt";
        
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
        echo "<h1 class=\"mt-5 text-center h3\">Mes annonces</h1>
<hr>
<div class=\"container-fluid\">
    <div class=\"text-center\">
      <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_leasing_form");
        echo "\" class=\"btn btn-outline-info my-3\"> <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i> Nouvelle annonce</a>
    </div>
    <div class=\"row d-flex justify-content-center overflow-auto pb-3 pt-3\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "vehicles", [], "any", false, false, false, 13));
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
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 14
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "dates", [], "any", false, false, false, 14)) > 0)) {
                // line 15
                echo "                <div class=\"my-2 pt-3 pb-3 carte col-sm-2 border rounded-lg shadow mx-3\">
                ";
                // line 16
                $this->loadTemplate("partials/vehicle-card.html.twig", "user/user_leasing/own_vehicle.html.twig", 16)->display($context);
                // line 17
                echo "                <hr>
                <p class=\"text-center mt-3 text-small font-weight-bold\">Dates disponibles</p>
                    <div class=\"text-center\">
                        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vehicle"], "dates", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 21
                    echo "                            <p class=\"badge badge-info \">";
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "availableDate", [], "any", false, false, false, 21), "none", "none", "fr", null, "d MMMM"), "html", null, true);
                    echo "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </div>
                    <hr>
                    <form action=\"";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_delete");
                echo "\" method=\"post\" class=\"row mt-3\">
                        <input type=\"hidden\" name=\"vehicle_id\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
                echo "\"/>
                        <button class=\"btn col-md-3 mx-auto\" type=\"submit\"><i class=\"fa fa-trash text-danger fa-2x\" aria-hidden=\"true\"></i></button>                    
                    </form>
                </div>
            ";
            }
            // line 32
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    
      
</div>

";
        // line 38
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user_leasing/own_vehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 38,  177 => 33,  163 => 32,  155 => 27,  151 => 26,  147 => 25,  143 => 23,  134 => 21,  130 => 20,  125 => 17,  123 => 16,  120 => 15,  117 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes annonces-Wiwatt{% endblock %}

{% block body %}
<h1 class=\"mt-5 text-center h3\">Mes annonces</h1>
<hr>
<div class=\"container-fluid\">
    <div class=\"text-center\">
      <a href=\"{{ path('vehicle_leasing_form')}}\" class=\"btn btn-outline-info my-3\"> <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i> Nouvelle annonce</a>
    </div>
    <div class=\"row d-flex justify-content-center overflow-auto pb-3 pt-3\">
        {% for vehicle in app.user.vehicles %}
            {% if vehicle.dates | length > 0 %}
                <div class=\"my-2 pt-3 pb-3 carte col-sm-2 border rounded-lg shadow mx-3\">
                {% include 'partials/vehicle-card.html.twig' %}
                <hr>
                <p class=\"text-center mt-3 text-small font-weight-bold\">Dates disponibles</p>
                    <div class=\"text-center\">
                        {% for date in vehicle.dates %}
                            <p class=\"badge badge-info \">{{ date.availableDate | localizeddate('none', 'none','fr', null, 'd MMMM')  }}</p>
                        {% endfor %}
                    </div>
                    <hr>
                    <form action=\"{{ path('annonce_delete') }}\" method=\"post\" class=\"row mt-3\">
                        <input type=\"hidden\" name=\"vehicle_id\" value=\"{{ vehicle.id }}\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
                        <button class=\"btn col-md-3 mx-auto\" type=\"submit\"><i class=\"fa fa-trash text-danger fa-2x\" aria-hidden=\"true\"></i></button>                    
                    </form>
                </div>
            {% endif %}
        {% endfor %}
    </div>
    
      
</div>

{{ include('partials/footer.html.twig') }}

{% endblock %}", "user/user_leasing/own_vehicle.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/user/user_leasing/own_vehicle.html.twig");
    }
}
