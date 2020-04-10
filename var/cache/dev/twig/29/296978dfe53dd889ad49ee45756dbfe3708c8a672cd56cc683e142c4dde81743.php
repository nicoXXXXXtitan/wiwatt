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

/* user/account/index.html.twig */
class __TwigTemplate_c0d80c2bf04a7fd89bc8dee930eac86084f12c02b5a41897116b5b7028eca28f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/account/index.html.twig", 1);
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

        echo " vos informations personnelles ";
        
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
  ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
  
      <div class=\"container-fluid d-flex justify-content-around mt-5 row mx-auto\">

            <div class=\"col-xl-4 col-md-6 col-sm-10 mb-5\">
                  <div class=\"d-flex flex-column align-items-center\">
                        <div class=\"d-flex justify-content-center align-items-center position-relative\">
                        
                        
                              <div class=\"avatar mt-2\">
                                    <img class=\"avatar_picture_page_my-information\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "avatar", [], "any", false, false, false, 17))), "html", null, true);
        echo "\">
                                    
                                    
                              </div>
                              <div id=\"avatar-click\" class=\"align-self-end\">                 
                                    <i class=\"fa fa-camera fa-2x\" aria-hidden=\"true\"></i>                                                                                        
                              </div>
                              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 24, $this->source); })()), "avatar", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Nom"]]);
        echo "               
                        </div>

                        <div class=\"col-md-10 mt-3\">
                              <div class=\"mt-2\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 29, $this->source); })()), "lastname", [], "any", false, false, false, 29), 'label', ["label" => "Nom"]);
        echo "
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 30, $this->source); })()), "lastname", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Nom"]]);
        echo " 
                        
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 32, $this->source); })()), "firstname", [], "any", false, false, false, 32), 'label', ["label" => "Prénom"]);
        echo "
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 33, $this->source); })()), "firstname", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "Prénom"]]);
        echo " 
                        
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'label', ["label" => "Email"]);
        echo "
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Email"]]);
        echo "
                                    
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 38, $this->source); })()), "phoneNumber", [], "any", false, false, false, 38), 'label', ["label" => "Numéro de téléphone"]);
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 39, $this->source); })()), "phoneNumber", [], "any", false, false, false, 39), 'row', ["attr" => ["placeholder" => "Numéro de téléphone"]]);
        echo "
                                    
                              
                              
                                    <button class=\"btn btn-outline-info col mt-3\" type=\"submit\">Mettre à jour</button>
                              </div>                            
                        </div>
                        
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
                  </div> 
                  <div class=\"mt-5 row d-flex justify-content-center\">                
                        <div class=\"d-flex flex-column justify-content-center\">
                              <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/profile/change-password"), "html", null, true);
        echo "\" class=\"btn btn-outline-danger\">Modifier mon mot de passe</a>

                        
                              <form action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unsubscribe_ask");
        echo "\" method=\"post\" >
                                          <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
                                          <input type=\"hidden\" name=\"token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-user"), "html", null, true);
        echo "\"/>
                                          <button type=\"submit\" class=\"col btn btn-outline-danger mt-3\">Se désinscrire*</button>
                                          <small class=\"form-text text-danger\"><i class=\"fa fa-exclamation-triangle text-danger ml-1\" aria-hidden=\"true\"></i> Suppression du compte.*</small>             
                              </form>
                              
                        </div>                   
                  </div>
            </div>

            
            ";
        // line 66
        $this->loadTemplate("partials/card-one-user.html.twig", "user/account/index.html.twig", 66)->display($context);
        // line 67
        echo "            

      </div>
           
";
        // line 71
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 71,  200 => 67,  198 => 66,  185 => 56,  181 => 55,  177 => 54,  171 => 51,  164 => 47,  153 => 39,  149 => 38,  144 => 36,  140 => 35,  135 => 33,  131 => 32,  126 => 30,  122 => 29,  114 => 24,  104 => 17,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} vos informations personnelles {% endblock %}

{% block body %}

  {{ form_start(registerForm) }}
  
      <div class=\"container-fluid d-flex justify-content-around mt-5 row mx-auto\">

            <div class=\"col-xl-4 col-md-6 col-sm-10 mb-5\">
                  <div class=\"d-flex flex-column align-items-center\">
                        <div class=\"d-flex justify-content-center align-items-center position-relative\">
                        
                        
                              <div class=\"avatar mt-2\">
                                    <img class=\"avatar_picture_page_my-information\" src=\"{{ asset('/' ~ user.avatar) }}\">
                                    
                                    
                              </div>
                              <div id=\"avatar-click\" class=\"align-self-end\">                 
                                    <i class=\"fa fa-camera fa-2x\" aria-hidden=\"true\"></i>                                                                                        
                              </div>
                              {{ form_row(registerForm.avatar, {'attr' : { 'placeholder' :'Nom' } }) }}               
                        </div>

                        <div class=\"col-md-10 mt-3\">
                              <div class=\"mt-2\">
                                    {{ form_label(registerForm.lastname, 'Nom' )}}
                                    {{ form_row(registerForm.lastname, {'attr' : { 'placeholder' :'Nom' } }) }} 
                        
                                    {{ form_label(registerForm.firstname, 'Prénom' )}}
                                    {{ form_row(registerForm.firstname, {'attr' : { 'placeholder' :'Prénom' }}) }} 
                        
                                    {{ form_label(registerForm.email, 'Email' )}}
                                    {{ form_row(registerForm.email, {'attr' : { 'placeholder' :'Email' }}) }}
                                    
                                    {{ form_label(registerForm.phoneNumber, 'Numéro de téléphone' )}}
                                    {{ form_row(registerForm.phoneNumber, {'attr' : { 'placeholder' :'Numéro de téléphone' }})  }}
                                    
                              
                              
                                    <button class=\"btn btn-outline-info col mt-3\" type=\"submit\">Mettre à jour</button>
                              </div>                            
                        </div>
                        
                        {{ form_end(registerForm) }}
                  </div> 
                  <div class=\"mt-5 row d-flex justify-content-center\">                
                        <div class=\"d-flex flex-column justify-content-center\">
                              <a href=\"{{ asset('/profile/change-password') }}\" class=\"btn btn-outline-danger\">Modifier mon mot de passe</a>

                        
                              <form action=\"{{ path('unsubscribe_ask') }}\" method=\"post\" >
                                          <input type=\"hidden\" name=\"user_id\" value=\"{{ app.user }}\">
                                          <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-user') }}\"/>
                                          <button type=\"submit\" class=\"col btn btn-outline-danger mt-3\">Se désinscrire*</button>
                                          <small class=\"form-text text-danger\"><i class=\"fa fa-exclamation-triangle text-danger ml-1\" aria-hidden=\"true\"></i> Suppression du compte.*</small>             
                              </form>
                              
                        </div>                   
                  </div>
            </div>

            
            {% include 'partials/card-one-user.html.twig' %}
            

      </div>
           
{{ include('partials/footer.html.twig') }}
{% endblock %}", "user/account/index.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/user/account/index.html.twig");
    }
}
