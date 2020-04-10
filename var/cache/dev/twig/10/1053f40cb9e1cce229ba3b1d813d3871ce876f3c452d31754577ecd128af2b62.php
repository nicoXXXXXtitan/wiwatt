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

/* partials/card-one-user.html.twig */
class __TwigTemplate_f4236abd44540279985dc6a016dad6b372f33a05a4fb10a8e498cab832516e6e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/card-one-user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/card-one-user.html.twig"));

        // line 1
        echo "<div class=\"col-xl-4 col-md-6 col-sm-10 border rounded-lg py-5 px-3 one_user shadow-lg\">
        <p class=\"font-weight-bold h5\">A propos</p>
        <div class=\"d-flex justify-content-around align-items-center font-weight-bold\">
              <div class=\"d-flex align-items-center\">
                  <div class=\"d-flex flex-column align-items-center\">
                        <img height=\"80\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "avatar", [], "any", false, false, false, 6)), "html", null, true);
        echo "\" alt=\"avatar\" class=\"card-avatar\">
                        <p class=\"text-small\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo "</p> 
                         
                  </div>
                
                  <div class=\"ml-3 d-flex flex-column align-items-center\">
                        <p class=\"text-small\">";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "comments", [], "any", false, false, false, 12)), "html", null, true);
        echo " évaluation";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "comments", [], "any", false, false, false, 12)) > 1)) {
            echo "s";
        }
        echo "</p>
                        
                        ";
        // line 14
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "comments", [], "any", false, false, false, 14)) > 0)) {
            // line 15
            echo "                        <div class=\"d-flex justify-content-center\">
                              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_round(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "averageScore", [], "any", false, false, false, 16)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 17
                echo "                             <i class=\"fa fa-star text-warning\" aria-hidden=\"true\"></i>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                        </div>    
                        
                        ";
        }
        // line 22
        echo "                        
                  </div>
              </div>
              <div class=\"d-flex flex-column align-items-start\" >
                   <p class=\"text-small\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getCountLeasingOk", [], "method", false, false, false, 26), "html", null, true);
        echo " Location";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getCountLeasingOk", [], "method", false, false, false, 26) > 1)) {
            echo "s";
        }
        echo " effectuée";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getCountLeasingOk", [], "method", false, false, false, 26) > 1)) {
            echo "s";
        }
        echo "</p>
                   <p class=\"text-small\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "getCountPost", [], "method", false, false, false, 27), "html", null, true);
        echo " Véhicule";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "getCountPost", [], "method", false, false, false, 27) > 1)) {
            echo "s";
        }
        // line 28
        echo "                    en location</p>                  
              </div>
        </div>
        <hr>
         
        <p class=\"font-weight-bold mt-3\">Tous les avis sur ";
        // line 33
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "firstname", [], "any", false, false, false, 33)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "lastname", [], "any", false, false, false, 33)), "html", null, true);
        echo "</p>
  
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "comments", [], "any", false, false, false, 35)));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 36
            echo "        <div class=\"mt-3 border rounded-lg pl-3 pt-3 pr-1\">
              <div class=\" d-flex align-items-center row\">
                    <div class=\"d-flex flex-column align-items-center col-4 ml-2\">
                        <a class=\"text-center\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("one_user_information", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                          <img height=\"60\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 40), "avatar", [], "any", false, false, false, 40)), "html", null, true);
            echo "\" alt=\"avatar\" class=\"card-avatar\">
                          <p class=\"text-small\"> ";
            // line 41
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41)), "html", null, true);
            echo "</p>
                        </a>
                    </div>
                    <div  class=\"d-flex flex-column align-items-center col\">
                          <p class=\"font-weight-bold text-small\">\" ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 45), "html", null, true);
            echo " \"</p>
                          <div class=\"d-flex justify-content-center\">
                              ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, $context["comment"], "score", [], "any", false, false, false, 47) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                echo "                             <i class=\"fa fa-star text-warning\" aria-hidden=\"true\"></i>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                          </div>    
                          
                    </div>
              </div>
              <p class=\"text-small font-italic text-right text-secondary\">le ";
            // line 54
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 54), "none", "none", "fr", null, "d MMMM à kk:mm"), "html", null, true);
            echo " </p>    
        </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "        <p class=\"mt-3 text-center\">Aucun avis</p>
              
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/card-one-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  186 => 58,  177 => 54,  171 => 50,  164 => 48,  160 => 47,  155 => 45,  148 => 41,  144 => 40,  140 => 39,  135 => 36,  130 => 35,  123 => 33,  116 => 28,  110 => 27,  98 => 26,  92 => 22,  87 => 19,  80 => 17,  76 => 16,  73 => 15,  71 => 14,  62 => 12,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xl-4 col-md-6 col-sm-10 border rounded-lg py-5 px-3 one_user shadow-lg\">
        <p class=\"font-weight-bold h5\">A propos</p>
        <div class=\"d-flex justify-content-around align-items-center font-weight-bold\">
              <div class=\"d-flex align-items-center\">
                  <div class=\"d-flex flex-column align-items-center\">
                        <img height=\"80\" src=\"{{asset(user.avatar)}}\" alt=\"avatar\" class=\"card-avatar\">
                        <p class=\"text-small\">{{ user.firstname }}</p> 
                         
                  </div>
                
                  <div class=\"ml-3 d-flex flex-column align-items-center\">
                        <p class=\"text-small\">{{ user.comments | length }} évaluation{% if user.comments | length > 1 %}s{% endif %}</p>
                        
                        {% if user.comments | length > 0 %}
                        <div class=\"d-flex justify-content-center\">
                              {% for i in 0..( user.averageScore | round ) -1 %}
                             <i class=\"fa fa-star text-warning\" aria-hidden=\"true\"></i>
                              {% endfor %}
                        </div>    
                        
                        {% endif %}
                        
                  </div>
              </div>
              <div class=\"d-flex flex-column align-items-start\" >
                   <p class=\"text-small\">{{ user.getCountLeasingOk() }} Location{% if user.getCountLeasingOk() > 1 %}s{% endif %} effectuée{% if user.getCountLeasingOk() > 1 %}s{% endif %}</p>
                   <p class=\"text-small\">{{ user.getCountPost() }} Véhicule{% if user.getCountPost() > 1 %}s{% endif %}
                    en location</p>                  
              </div>
        </div>
        <hr>
         
        <p class=\"font-weight-bold mt-3\">Tous les avis sur {{ user.firstname | capitalize  }} {{ user.lastname  | capitalize }}</p>
  
        {% for comment in user.comments | reverse %}
        <div class=\"mt-3 border rounded-lg pl-3 pt-3 pr-1\">
              <div class=\" d-flex align-items-center row\">
                    <div class=\"d-flex flex-column align-items-center col-4 ml-2\">
                        <a class=\"text-center\" href=\"{{ path('one_user_information' ,{ 'user' : comment.author.id }) }}\">
                          <img height=\"60\" src=\"{{asset(comment.author.avatar)}}\" alt=\"avatar\" class=\"card-avatar\">
                          <p class=\"text-small\"> {{ comment.author.firstname | capitalize }}</p>
                        </a>
                    </div>
                    <div  class=\"d-flex flex-column align-items-center col\">
                          <p class=\"font-weight-bold text-small\">\" {{ comment.content }} \"</p>
                          <div class=\"d-flex justify-content-center\">
                              {% for i in 0..(comment.score) -1 %}
                             <i class=\"fa fa-star text-warning\" aria-hidden=\"true\"></i>
                              {% endfor %}
                          </div>    
                          
                    </div>
              </div>
              <p class=\"text-small font-italic text-right text-secondary\">le {{ comment.createdAt|localizeddate('none', 'none', 'fr', null, 'd MMMM à kk:mm')  }} </p>    
        </div>

        {% else %}
        <p class=\"mt-3 text-center\">Aucun avis</p>
              
        {% endfor %}
  </div>", "partials/card-one-user.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/partials/card-one-user.html.twig");
    }
}
