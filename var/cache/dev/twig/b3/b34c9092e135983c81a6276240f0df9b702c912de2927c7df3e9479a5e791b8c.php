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

/* leasing/index.html.twig */
class __TwigTemplate_1b54167e1d4f3fd5cd6eb898b21b0098f203c00495ac7b386ef46ec260756cab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leasing/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leasing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "leasing/index.html.twig", 1);
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

        echo "Résultats";
        
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
        echo "<div id=\"leasing-index\" class=\"container-fluid d-flex justify-content-between px-1 mt-3\">
    <section class=\"locations-container col-lg-5 overflow-auto px-3\">

        ";
        // line 10
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            <p class=\"font-weight-bold\" id=\"btn-more-search\"><u>Plus de critères ?</u></p>
            <div class=\"row mt-3\">
                <div class=\"form-group col-md-4\">
                    <input type=\"text\" name=\"city\" id=\"search-city\" class=\"form-control text-center\" placeholder=\"Recherche par ville\" autocomplete=\"off\" required=\"true\">
                    <input type=\"hidden\" name=\"longitude\" id=\"home-longitude\">
                    <input type=\"hidden\" name=\"latitude\" id=\"home-latitude\">
                </div>
                 <div class=\"form-group col-md-5\">
                        <input
                        autocomplete=\"off\"
                        name=\"date\" 
                        placeholder=\"Dates de disponiblités\" 
                        id=\"availableDate\" 
                        type=\"text\"
                        autocomplete=\"off\"
                        data-language='fr'
                        data-multiple-dates=\"30\"
                        data-multiple-dates-separator=\"-\"
                        data-position='bottom left' class=\"form-control text-center\"/> 
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("date-form"), "html", null, true);
        echo "\"/>
                 </div>

                    <div class=\"form-group col-md-3 d-none d-sm-block\">
                        <button type=\"submit\" class=\"btn col-md-12 btn-outline-info\">Valider</button>
                    </div>
                
            </div>
                <div class=\"\" id=\"more-search\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dayCost", [], "any", false, false, false, 42), 'row', ["attr" => ["placeholder" => "Prix maximum"]]);
        echo "
                            </div>
                            <div class=\"col-md-4\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "brand", [], "any", false, false, false, 45), 'row', ["attr" => ["placeholder" => "Marque"]]);
        echo "
                            </div>
                            <div class=\"col-md-4\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "model", [], "any", false, false, false, 48), 'row', ["attr" => ["placeholder" => "Modèle"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "seatNumber", [], "any", false, false, false, 54), 'row', ["attr" => ["placeholder" => "Nombre de place minimum"]]);
        echo "
                            </div>
                            <div class=\"col-md-4\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "maxSpeed", [], "any", false, false, false, 57), 'row', ["attr" => ["placeholder" => "Vitesse minimum (km/h)"]]);
        echo "
                            </div>
                            <div class=\"col-md-4\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "weight", [], "any", false, false, false, 60), 'row', ["attr" => ["placeholder" => "Poids maximum (kg)"]]);
        echo " 
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "power", [], "any", false, false, false, 65), 'row', ["attr" => ["placeholder" => "Puissance minimum (watt)"]]);
        echo " 
                            </div>
                            <div class=\"col-md-4\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "autonomy", [], "any", false, false, false, 68), 'row', ["attr" => ["placeholder" => "Autonomie minimum (km)"]]);
        echo " 
                            </div>
                            <div class=\"col-md-4\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), 'row', ["attr" => ["placeholder" => "Type"]]);
        echo "
                            </div>
                        </div>
                </div>
                <div class=\"form-group d-sm-none\">
                        <button type=\"submit\" class=\"btn col-md-12 btn-outline-info\">Valider</button>
                </div>


        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
        <p class=\"font-weight-bold mt-5\">Location <span class=\"text-color-wiwatt\">100%</span> électrique avec <span class=\"text-color-wiwatt\">WiWatt</span></p>
        <p class=\"font-italic\"><span class=\"font-weight-bold\">";
        // line 82
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 82, $this->source); })())), "html", null, true);
        echo "</span> résultat";
        if ((twig_length_filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 82, $this->source); })())) > 1)) {
            echo "s";
        }
        echo " trouvé";
        if ((twig_length_filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 82, $this->source); })())) > 1)) {
            echo "s";
        }
        echo " dans un rayon de 20km.</p>
        <div class=\"card-container row mt-5 d-flex\">

                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 85, $this->source); })()));
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
            // line 86
            echo "                        <div data-longitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "longitude", [], "any", false, false, false, 86), "html", null, true);
            echo "\" data-latitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "latitude", [], "any", false, false, false, 86), "html", null, true);
            echo "\"  class=\"my-2 pb-3 pt-3 mx-auto carte col-lg-5 col-md-5 col-sm-5 border rounded-lg\">
                            ";
            // line 87
            echo twig_include($this->env, $context, "partials/card.html.twig");
            echo "   
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "       
                
            
            
        </div>
    </section>
    <section id=\"map-resultats\" class=\"col d-none d-lg-block\"></section>
</div>

<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cancel-padding.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "leasing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 98,  257 => 89,  240 => 87,  233 => 86,  216 => 85,  202 => 82,  197 => 80,  185 => 71,  179 => 68,  173 => 65,  165 => 60,  159 => 57,  153 => 54,  144 => 48,  138 => 45,  132 => 42,  117 => 30,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultats{% endblock %}

{% block body %}
<div id=\"leasing-index\" class=\"container-fluid d-flex justify-content-between px-1 mt-3\">
    <section class=\"locations-container col-lg-5 overflow-auto px-3\">

        {# formulaire de recherche #}
        {{ form_start(form) }}
            <p class=\"font-weight-bold\" id=\"btn-more-search\"><u>Plus de critères ?</u></p>
            <div class=\"row mt-3\">
                <div class=\"form-group col-md-4\">
                    <input type=\"text\" name=\"city\" id=\"search-city\" class=\"form-control text-center\" placeholder=\"Recherche par ville\" autocomplete=\"off\" required=\"true\">
                    <input type=\"hidden\" name=\"longitude\" id=\"home-longitude\">
                    <input type=\"hidden\" name=\"latitude\" id=\"home-latitude\">
                </div>
                 <div class=\"form-group col-md-5\">
                        <input
                        autocomplete=\"off\"
                        name=\"date\" 
                        placeholder=\"Dates de disponiblités\" 
                        id=\"availableDate\" 
                        type=\"text\"
                        autocomplete=\"off\"
                        data-language='fr'
                        data-multiple-dates=\"30\"
                        data-multiple-dates-separator=\"-\"
                        data-position='bottom left' class=\"form-control text-center\"/> 
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('date-form') }}\"/>
                 </div>

                    <div class=\"form-group col-md-3 d-none d-sm-block\">
                        <button type=\"submit\" class=\"btn col-md-12 btn-outline-info\">Valider</button>
                    </div>
                
            </div>
                <div class=\"\" id=\"more-search\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                            {{ form_row(form.dayCost, {'attr' : { 'placeholder' :'Prix maximum' }}) }}
                            </div>
                            <div class=\"col-md-4\">
                            {{ form_row(form.brand, {'attr' : { 'placeholder' :'Marque' }}) }}
                            </div>
                            <div class=\"col-md-4\">
                            {{ form_row(form.model, {'attr' : { 'placeholder' :'Modèle' }}) }} 
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                            {{ form_row(form.seatNumber, {'attr' : { 'placeholder' :'Nombre de place minimum' }}) }}
                            </div>
                            <div class=\"col-md-4\">
                            {{ form_row(form.maxSpeed , {'attr' : { 'placeholder' :'Vitesse minimum (km/h)' }}) }}
                            </div>
                            <div class=\"col-md-4\">
                            {{ form_row(form.weight , {'attr' : { 'placeholder' :'Poids maximum (kg)' }}) }} 
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                            {{ form_row(form.power, {'attr' : { 'placeholder' :'Puissance minimum (watt)' }}) }} 
                            </div>
                            <div class=\"col-md-4\">
                            {{ form_row(form.autonomy, {'attr' : { 'placeholder' :'Autonomie minimum (km)' }}) }} 
                            </div>
                            <div class=\"col-md-4\">
                            {{ form_row(form.type, {'attr' : { 'placeholder' :'Type' }}) }}
                            </div>
                        </div>
                </div>
                <div class=\"form-group d-sm-none\">
                        <button type=\"submit\" class=\"btn col-md-12 btn-outline-info\">Valider</button>
                </div>


        {{ form_end(form) }}
        <p class=\"font-weight-bold mt-5\">Location <span class=\"text-color-wiwatt\">100%</span> électrique avec <span class=\"text-color-wiwatt\">WiWatt</span></p>
        <p class=\"font-italic\"><span class=\"font-weight-bold\">{{ vehicles | length }}</span> résultat{% if vehicles | length  > 1 %}s{% endif %} trouvé{% if vehicles | length  > 1 %}s{% endif %} dans un rayon de 20km.</p>
        <div class=\"card-container row mt-5 d-flex\">

                        {% for vehicle in vehicles %}
                        <div data-longitude=\"{{ vehicle.longitude }}\" data-latitude=\"{{ vehicle.latitude }}\"  class=\"my-2 pb-3 pt-3 mx-auto carte col-lg-5 col-md-5 col-sm-5 border rounded-lg\">
                            {{ include('partials/card.html.twig') }}   
                        </div>
                        {% endfor %}       
                
            
            
        </div>
    </section>
    <section id=\"map-resultats\" class=\"col d-none d-lg-block\"></section>
</div>

<script src=\"{{ asset('js/cancel-padding.js') }}\"></script>
{% endblock %}


", "leasing/index.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/leasing/index.html.twig");
    }
}
