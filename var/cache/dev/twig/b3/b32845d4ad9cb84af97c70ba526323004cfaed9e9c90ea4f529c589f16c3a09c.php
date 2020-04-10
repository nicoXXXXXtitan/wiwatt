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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_dc0a89a33d3267bf871c878243d0d7b62b9639b505fb6e434cb4598f8c073291 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-fluid\" >
    <div class=\"page_error row d-flex mt-5 mb-4\">     
            <div class=\"col col-xs-6  ml-5\">
                <h1 class=\"page_error_oups\">OUPS !</h1>
                <h2 class=\"page_error_number_error ml-5\">Erreur - ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " </h2>
            </div>
            <div class=\"col col-xs-6 page_error_right_part d-flex flex-column justify-content-center text-center mt-4 mr-5\">              
                <h2 class=\"page_error_h2\"> Un problème est survenue.</h2>
                <h3 class=\"page_error_h3 pb-3\">Nous sommes désolés.</h3>
                <div >
                    <a class=\"page_error_button btn btn-sm btn-outline-info \" href=\"https://wiwatt.fr/\">Retourner à l'acceuil </a>
                </div>
                 
            </div>       
    </div>
</div>

";
        // line 21
        $this->loadTemplate("partials/footer.html.twig", "@Twig/Exception/error.html.twig", 21)->display($context);
        // line 22
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  90 => 21,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\" >
    <div class=\"page_error row d-flex mt-5 mb-4\">     
            <div class=\"col col-xs-6  ml-5\">
                <h1 class=\"page_error_oups\">OUPS !</h1>
                <h2 class=\"page_error_number_error ml-5\">Erreur - {{ status_code }} </h2>
            </div>
            <div class=\"col col-xs-6 page_error_right_part d-flex flex-column justify-content-center text-center mt-4 mr-5\">              
                <h2 class=\"page_error_h2\"> Un problème est survenue.</h2>
                <h3 class=\"page_error_h3 pb-3\">Nous sommes désolés.</h3>
                <div >
                    <a class=\"page_error_button btn btn-sm btn-outline-info \" href=\"https://wiwatt.fr/\">Retourner à l'acceuil </a>
                </div>
                 
            </div>       
    </div>
</div>

{% include \"partials/footer.html.twig\" %}

{% endblock %}", "@Twig/Exception/error.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/bundles/TwigBundle/Exception/error.html.twig");
    }
}
