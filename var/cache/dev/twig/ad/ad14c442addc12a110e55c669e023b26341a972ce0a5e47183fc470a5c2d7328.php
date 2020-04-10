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

/* home/us.html.twig */
class __TwigTemplate_75555d80456c6af4f3b56fb9fc015d5e39c292aa0f4a3183591f8a583f8b39c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/us.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/us.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/us.html.twig", 1);
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

        echo "Qui sommes-nous.";
        
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
        echo "
<p class=\"text-center my-5\">Equipe de 4 développeurs web Juniors, tous spécialisés Symfony.</p>

<div class=\"container mx-auto d-flex row \">

   

    <div class=\"col-lg-6 col-md-6\">
            <p class=\"font-weight-bold h5 text-center mt-5\">Coralie BLANCO</p>
            <p class=\"font-weight-bold h5 text-center\">Toulouse</p>
            <div class=\"d-flex justify-content-center mt-2\">
                    <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\"> Symfony & React|</span>
                    <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Disponible Janvier 2020 |</span>
                    <a class=\"d-flex\" href=\"https://www.linkedin.com/in/coralieblanco/\"><i class=\"fa fa-linkedin-square text-info\" aria-hidden=\"true\"></i></a>            
                </div>
            <div class=\"d-flex justify-content-center mt-2\">
                <p>coralieblanco@yahoo.fr</p>
            </div>
    </div>

    <div class=\"col-lg-6 col-md-6\">
        <p class=\"font-weight-bold h5 text-center mt-5\">Zine-Eddine YAKHOUI</p>
        <p class=\"font-weight-bold h5 text-center\">Montbéliard</p>
        <div class=\"d-flex justify-content-center mt-2\">
            <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Symfony & JS |</span>
            <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">2022</span>           
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <p>yakhoui.z@gmail.com</p>
        </div>
    </div>

    <div class=\"col-lg-6 col-md-6\">
        <p class=\"font-weight-bold h5 text-center mt-5\">Nicolas CHAUVIERE</p>
        <p class=\"font-weight-bold h5 text-center\">Nantes</p>
        <div class=\"d-flex justify-content-center mt-2\">
            <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Symfony & React |</span>
            <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Disponible Février 2020</span>
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <p>nicoc2010@gmail.com</p>
        </div>
    </div>

    <div class=\"col-lg-6 col-md-6\">
        <p class=\"font-weight-bold h5 text-center mt-5\">Damien MAQUIGNON</p>
        <p class=\"font-weight-bold h5 text-center\">Caen</p>
        <div class=\"d-flex justify-content-center mt-2\">
            <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Symfony & JS |</span>
            <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Disponible ???</span>
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <p>damienmaquignon@live.fr</p>
        </div>
    </div>


</div>

";
        // line 65
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 65,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Qui sommes-nous.{% endblock %}

{% block body %}

<p class=\"text-center my-5\">Equipe de 4 développeurs web Juniors, tous spécialisés Symfony.</p>

<div class=\"container mx-auto d-flex row \">

   

    <div class=\"col-lg-6 col-md-6\">
            <p class=\"font-weight-bold h5 text-center mt-5\">Coralie BLANCO</p>
            <p class=\"font-weight-bold h5 text-center\">Toulouse</p>
            <div class=\"d-flex justify-content-center mt-2\">
                    <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\"> Symfony & React|</span>
                    <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Disponible Janvier 2020 |</span>
                    <a class=\"d-flex\" href=\"https://www.linkedin.com/in/coralieblanco/\"><i class=\"fa fa-linkedin-square text-info\" aria-hidden=\"true\"></i></a>            
                </div>
            <div class=\"d-flex justify-content-center mt-2\">
                <p>coralieblanco@yahoo.fr</p>
            </div>
    </div>

    <div class=\"col-lg-6 col-md-6\">
        <p class=\"font-weight-bold h5 text-center mt-5\">Zine-Eddine YAKHOUI</p>
        <p class=\"font-weight-bold h5 text-center\">Montbéliard</p>
        <div class=\"d-flex justify-content-center mt-2\">
            <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Symfony & JS |</span>
            <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">2022</span>           
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <p>yakhoui.z@gmail.com</p>
        </div>
    </div>

    <div class=\"col-lg-6 col-md-6\">
        <p class=\"font-weight-bold h5 text-center mt-5\">Nicolas CHAUVIERE</p>
        <p class=\"font-weight-bold h5 text-center\">Nantes</p>
        <div class=\"d-flex justify-content-center mt-2\">
            <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Symfony & React |</span>
            <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Disponible Février 2020</span>
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <p>nicoc2010@gmail.com</p>
        </div>
    </div>

    <div class=\"col-lg-6 col-md-6\">
        <p class=\"font-weight-bold h5 text-center mt-5\">Damien MAQUIGNON</p>
        <p class=\"font-weight-bold h5 text-center\">Caen</p>
        <div class=\"d-flex justify-content-center mt-2\">
            <i class=\"fa fa-book text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Symfony & JS |</span>
            <i class=\"fa fa-calendar-check-o text-info\" aria-hidden=\"true\"></i><span class=\"text-small ml-1\">Disponible ???</span>
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <p>damienmaquignon@live.fr</p>
        </div>
    </div>


</div>

{{ include('partials/footer.html.twig') }}
{% endblock %}", "home/us.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/home/us.html.twig");
    }
}
