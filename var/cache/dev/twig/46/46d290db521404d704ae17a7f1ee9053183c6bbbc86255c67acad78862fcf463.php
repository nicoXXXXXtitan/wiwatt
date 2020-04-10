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

/* partials/footer.html.twig */
class __TwigTemplate_f595b4c34c2874d5393428d0fa39b34ec8f3f498cc58d072deaa108871968be8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "

      <footer class=\"pt-3 pb-5\">
        <div class=\"d-flex flex-column justify-content-center align-items-center text-center\">
          <ul class=\"d-flex  flex-column justify-content-center  align-items-center\">
            <li>
              <a  href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentionslegales_show");
        echo "\">Mentions légales</a>
            </li>
            <li>
              <a  href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("us_page");
        echo "\">Qui sommes-nous?</a>              
            </li>
            <li>
              <a  href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>              
            </li>
            <li>
              <a  href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq_show");
        echo "\">FAQ</a>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center mt-2\" >
            <a class=\"footer-link mx-5 icone\" href=\"http://facebook.com\">
              <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/facebook.svg"), "html", null, true);
        echo "\" alt=\"\" height=\"30\">
          </a>
          
          <a class=\"tw-ic footer-link mx-5 icone\" href=\"http://instagram.com\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/instagram.svg"), "html", null, true);
        echo "\" alt=\"\" height=\"30\">
          </a>
          
          <a class=\"ins-ic footer-link mx-5 icone\" href=\"http://twitter.com\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/twitter.svg"), "html", null, true);
        echo "\" alt=\"\" height=\"30\">
          </a>

          </div>
        </div>
      </footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 25,  77 => 21,  69 => 16,  63 => 13,  57 => 10,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

      <footer class=\"pt-3 pb-5\">
        <div class=\"d-flex flex-column justify-content-center align-items-center text-center\">
          <ul class=\"d-flex  flex-column justify-content-center  align-items-center\">
            <li>
              <a  href=\"{{ path('mentionslegales_show') }}\">Mentions légales</a>
            </li>
            <li>
              <a  href=\"{{ path('us_page') }}\">Qui sommes-nous?</a>              
            </li>
            <li>
              <a  href=\"{{ path('contact') }}\">Nous contacter</a>              
            </li>
            <li>
              <a  href=\"{{ path('faq_show') }}\">FAQ</a>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center mt-2\" >
            <a class=\"footer-link mx-5 icone\" href=\"http://facebook.com\">
              <img src=\"{{ asset('pictures/facebook.svg') }}\" alt=\"\" height=\"30\">
          </a>
          
          <a class=\"tw-ic footer-link mx-5 icone\" href=\"http://instagram.com\">
            <img src=\"{{ asset('pictures/instagram.svg') }}\" alt=\"\" height=\"30\">
          </a>
          
          <a class=\"ins-ic footer-link mx-5 icone\" href=\"http://twitter.com\">
            <img src=\"{{ asset('pictures/twitter.svg') }}\" alt=\"\" height=\"30\">
          </a>

          </div>
        </div>
      </footer>", "partials/footer.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/partials/footer.html.twig");
    }
}
