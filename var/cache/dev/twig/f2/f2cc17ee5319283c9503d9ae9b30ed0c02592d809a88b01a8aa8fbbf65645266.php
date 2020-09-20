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

/* base.html.twig */
class __TwigTemplate_3dad6fc1f196704d16a4a98bacf40654ac3aa308ecb4a13a3e1093339da85888 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/favicon2.png"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/leaflet.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-4.3.1-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">    
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/datePicker.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Fork-Awesome-1.1.7/css/fork-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>

<body>
    <header class=\"container-fluid pt-3 pb-2\">
        <div class=\"row d-flex justify-content-between align-items-center px-3\">
            <div class=\"d-none d-md-block\">
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_leasing_form");
        echo "\" class=\"btn btn-sm btn-outline-info\">Louer mon véhicule</a>
            </div>

            <div class=\"d-none d-md-block\">            
                <a  href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo " \"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/wiwatt-logo1.png"), "html", null, true);
        echo "\" alt=\"wiwatt\" height=\"30\"></a>            
            </div>            
            <div class=\"d-block d-md-none\">            
                <a  href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_home");
        echo " \"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/wiwatt-logo1.png"), "html", null, true);
        echo "\" alt=\"wiwatt\" height=\"20\"></a>            

            </div>            
            <div>
                ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <div class=\"d-flex flex-column align-items-center\">                
                        <div class=\"dropdown align-center header-user-menu\">
                            <span  class=\"dropdown-toggle\" id=\"dropdownUser\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <img class=\"card-avatar\" height=\"36\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "avatar", [], "any", false, false, false, 37)), "html", null, true);
            echo "\" alt=\"avatar\">
                                <span class=\"text-small font-weight-bold align-bottom\">";
            // line 38
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "firstname", [], "any", false, false, false, 38)), "html", null, true);
            echo "</span>
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownUser\">
                                
                                <a class=\"dropdown-item text-small\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_information");
            echo "\">Mon compte</a>
                                <a class=\"dropdown-item text-small\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_historic");
            echo "\">Gérer mes locations</a>
                                <a class=\"dropdown-item text-small\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_vehicles");
            echo "\">Mes véhicules</a>
                                <a class=\"dropdown-item text-small\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_post");
            echo "\">Mes annonces</a>
                                <a class=\"dropdown-item text-danger text-small\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                            </div>
                        </div>           
                    </div>              
                ";
        } else {
            // line 51
            echo "                    <div>
                        <a id=\"inscription\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscribe");
            echo "\" class=\"btn btn-sm btn-outline-info\">Inscription</a>
                        <a id=\"connexion\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\" btn btn-sm btn-outline-info\">Connexion</a>
                   </div>
                ";
        }
        // line 56
        echo "            </div> 
        </div>     
    </header>
   
    <div class=\"container\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 62
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" >
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 64
                echo "                ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>

";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-4.3.1-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datePicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker.fr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modal-validation.js"), "html", null, true);
        echo "\"></script>
";
        // line 81
        $this->displayBlock('javascript', $context, $blocks);
        // line 82
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 81,  301 => 70,  283 => 15,  265 => 14,  254 => 82,  252 => 81,  248 => 80,  244 => 79,  240 => 78,  236 => 77,  232 => 76,  228 => 75,  223 => 73,  219 => 72,  216 => 71,  214 => 70,  210 => 68,  202 => 65,  193 => 64,  189 => 63,  184 => 62,  180 => 61,  173 => 56,  167 => 53,  163 => 52,  160 => 51,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  129 => 38,  125 => 37,  120 => 34,  118 => 33,  109 => 29,  101 => 26,  94 => 22,  86 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"icon\" href=\"{{ asset('pictures/favicon2.png') }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/leaflet.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap-4.3.1-dist/css/bootstrap.min.css') }}\">    
    <link rel=\"stylesheet\" href=\"{{ asset('css/datePicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Fork-Awesome-1.1.7/css/fork-awesome.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
</head>

<body>
    <header class=\"container-fluid pt-3 pb-2\">
        <div class=\"row d-flex justify-content-between align-items-center px-3\">
            <div class=\"d-none d-md-block\">
                <a href=\"{{ path('vehicle_leasing_form')}}\" class=\"btn btn-sm btn-outline-info\">Louer mon véhicule</a>
            </div>

            <div class=\"d-none d-md-block\">            
                <a  href=\"{{path('show_home')}} \"><img src=\"{{ asset('pictures/wiwatt-logo1.png') }}\" alt=\"wiwatt\" height=\"30\"></a>            
            </div>            
            <div class=\"d-block d-md-none\">            
                <a  href=\"{{path('show_home')}} \"><img src=\"{{ asset('pictures/wiwatt-logo1.png') }}\" alt=\"wiwatt\" height=\"20\"></a>            

            </div>            
            <div>
                {% if app.user %}
                    <div class=\"d-flex flex-column align-items-center\">                
                        <div class=\"dropdown align-center header-user-menu\">
                            <span  class=\"dropdown-toggle\" id=\"dropdownUser\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <img class=\"card-avatar\" height=\"36\" src=\"{{ asset(app.user.avatar) }}\" alt=\"avatar\">
                                <span class=\"text-small font-weight-bold align-bottom\">{{ app.user.firstname | capitalize }}</span>
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownUser\">
                                
                                <a class=\"dropdown-item text-small\" href=\"{{ path('user_information') }}\">Mon compte</a>
                                <a class=\"dropdown-item text-small\" href=\"{{ path('owner_historic') }}\">Gérer mes locations</a>
                                <a class=\"dropdown-item text-small\" href=\"{{ path('user_vehicles') }}\">Mes véhicules</a>
                                <a class=\"dropdown-item text-small\" href=\"{{ path('user_post') }}\">Mes annonces</a>
                                <a class=\"dropdown-item text-danger text-small\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                            </div>
                        </div>           
                    </div>              
                {% else %}
                    <div>
                        <a id=\"inscription\" href=\"{{ path('subscribe') }}\" class=\"btn btn-sm btn-outline-info\">Inscription</a>
                        <a id=\"connexion\" href=\"{{ path('app_login') }}\" class=\" btn btn-sm btn-outline-info\">Connexion</a>
                   </div>
                {% endif %}
            </div> 
        </div>     
    </header>
   
    <div class=\"container\">
        {% for type , messages in app.flashes %}
        <div class=\"alert alert-{{type}}\" >
            {% for message in messages %}
                {{ message }}
            {% endfor %}        
        </div>
        {% endfor %}
    </div>

{% block body %}{% endblock %}

<script src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('bootstrap-4.3.1-dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/leaflet.js') }}\"></script>
<script src=\"{{ asset('js/datePicker.js') }}\"></script>
<script src=\"{{ asset('js/datepicker.fr.js') }}\"></script>
<script src=\"{{ asset('js/app.js') }}\"></script>
<script src=\"{{ asset('js/modal-validation.js') }}\"></script>
{% block javascript %}{% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/perso/wiwatt/wiwatt/templates/base.html.twig");
    }
}
