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

/* home/index.html.twig */
class __TwigTemplate_27749e3ec3cfbd2899b7499e7ef99f668d0488327157b8c9c5fff30ec8c99626 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "WiWatt - 1er site de partage de véhicules 100% électrique";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "    ";
            $this->loadTemplate("partials/toast.html.twig", "home/index.html.twig", 8)->display($context);
            echo "  
";
        }
        // line 10
        echo "

  

";
        // line 15
        echo "<div class=\"text-center my-5\">
  <a class=\"btn btn-outline-info d-inline d-md-none\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_leasing_form");
        echo "\">Louer mon véhicule</a>
</div>
<section id=\"home-search\" class=\"container-fluid mt-5 d-flex align-items-center justify-content-center\"> 
  <form autocomplete=\"off\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("leasing_index");
        echo "\">
    <h1 class=\"text-shadow text-white font-weight-bold\">Louez du 100% électrique !</h2>
    <h3 class=\"text-shadow text-white h6  mb-5\">En ville, pour la plage, pour s 'amuser: facilitez vos déplacements !</h3>


    <div class=\"d-flex justify-content-between row\">
      <div class=\"col-md-4 form-group\">
         <input type=\"text\" name=\"city\" id=\"search-city\" class=\"form-control btn-lg text-center\" placeholder=\"Saisissez une ville\">         
         <input type=\"hidden\" name=\"longitude\" id=\"home-longitude\">
         <input type=\"hidden\" name=\"latitude\" id=\"home-latitude\">
      </div>
      <div class=\"col-md-5 form-group\">
        <input
        name=\"date\" 
        placeholder=\"Dates (optionnelles)\" 
        id=\"availableDate-home\" 
        class=\"form-control btn-lg text-center\"
        type=\"text\"
        data-language='fr'
        data-multiple-dates=\"30\"
        data-multiple-dates-separator=\"-\"
        data-position='bottom left'/>
      </div> 
      <div class=\"col-md-3 form-group\"> 
         <input type=\"hidden\" name=\"token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("date-form"), "html", null, true);
        echo "\"/>
        <button id=\"btn-search\" type=\"submit\" class=\"btn col-md-12 btn-search py-2 font-weight-bold\">Rechercher</button>
      </div>
    </div>
  </form>
</section>

  
  <h2 class=\"h2 font-weight-bold my-5 text-center text-green mb-3\">Louez un véhicule léger 100% électrique, entre particuliers simplement & rapidement.</h2>

  <div class=\"d-none d-sm-block\">
    <section class=\"row d-flex justify-content-center bg-last container-fluid\">
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastVehicles"]) || array_key_exists("lastVehicles", $context) ? $context["lastVehicles"] : (function () { throw new RuntimeError('Variable "lastVehicles" does not exist.', 55, $this->source); })()));
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
            // line 56
            echo "        <div class=\"my-2 mx-4 pb-1 pt-3 carte col-xl-2 col-md-4 col-sm-5 border rounded-lg shadow\">
          ";
            // line 57
            $this->loadTemplate("partials/card.html.twig", "home/index.html.twig", 57)->display($context);
            // line 58
            echo "        </div>
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
        // line 60
        echo "      </section>
    <h4 class=\"h3 font-weight-bold mt-5 text-center text-green\">Des Wiwatteurs proches de chez vous !</h4>
  </div>
    
  <div class=\"mt-3\">
    <section id=\"map\"></section>
  </div>

";
        // line 68
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 68,  194 => 60,  179 => 58,  177 => 57,  174 => 56,  157 => 55,  142 => 43,  115 => 19,  109 => 16,  106 => 15,  100 => 10,  94 => 8,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}WiWatt - 1er site de partage de véhicules 100% électrique{% endblock %}

{% block body %}


{% if app.user %}
    {% include 'partials/toast.html.twig' %}  
{% endif %}


  

{# formulaire de recherche #}
<div class=\"text-center my-5\">
  <a class=\"btn btn-outline-info d-inline d-md-none\" href=\"{{ path('vehicle_leasing_form') }}\">Louer mon véhicule</a>
</div>
<section id=\"home-search\" class=\"container-fluid mt-5 d-flex align-items-center justify-content-center\"> 
  <form autocomplete=\"off\" action=\"{{ path('leasing_index') }}\">
    <h1 class=\"text-shadow text-white font-weight-bold\">Louez du 100% électrique !</h2>
    <h3 class=\"text-shadow text-white h6  mb-5\">En ville, pour la plage, pour s 'amuser: facilitez vos déplacements !</h3>


    <div class=\"d-flex justify-content-between row\">
      <div class=\"col-md-4 form-group\">
         <input type=\"text\" name=\"city\" id=\"search-city\" class=\"form-control btn-lg text-center\" placeholder=\"Saisissez une ville\">         
         <input type=\"hidden\" name=\"longitude\" id=\"home-longitude\">
         <input type=\"hidden\" name=\"latitude\" id=\"home-latitude\">
      </div>
      <div class=\"col-md-5 form-group\">
        <input
        name=\"date\" 
        placeholder=\"Dates (optionnelles)\" 
        id=\"availableDate-home\" 
        class=\"form-control btn-lg text-center\"
        type=\"text\"
        data-language='fr'
        data-multiple-dates=\"30\"
        data-multiple-dates-separator=\"-\"
        data-position='bottom left'/>
      </div> 
      <div class=\"col-md-3 form-group\"> 
         <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('date-form') }}\"/>
        <button id=\"btn-search\" type=\"submit\" class=\"btn col-md-12 btn-search py-2 font-weight-bold\">Rechercher</button>
      </div>
    </div>
  </form>
</section>

  
  <h2 class=\"h2 font-weight-bold my-5 text-center text-green mb-3\">Louez un véhicule léger 100% électrique, entre particuliers simplement & rapidement.</h2>

  <div class=\"d-none d-sm-block\">
    <section class=\"row d-flex justify-content-center bg-last container-fluid\">
      {% for vehicle in lastVehicles %}
        <div class=\"my-2 mx-4 pb-1 pt-3 carte col-xl-2 col-md-4 col-sm-5 border rounded-lg shadow\">
          {% include 'partials/card.html.twig' %}
        </div>
      {% endfor %}
      </section>
    <h4 class=\"h3 font-weight-bold mt-5 text-center text-green\">Des Wiwatteurs proches de chez vous !</h4>
  </div>
    
  <div class=\"mt-3\">
    <section id=\"map\"></section>
  </div>

{{ include('partials/footer.html.twig') }}
{% endblock %}

", "home/index.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/home/index.html.twig");
    }
}
