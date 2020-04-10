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

/* partials/toast.html.twig */
class __TwigTemplate_eeb66689942cae7ce9ff03892c96df137ca3db7b37c330e1eec7374d444c2113 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/toast.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/toast.html.twig"));

        // line 1
        echo "<div class=\"toast\"  role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"toast-header bg-light\">
            <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
            <strong class=\"ml-2\">Wiwatt | Notifications</strong>
           <button type=\"button\" class=\"ml-auto mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\" id=\"close-toast\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"toast-body\">
         
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "ownerBookings", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 12
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["booking"], "noticeOwnerStatus", [], "any", false, false, false, 12) == 1)) {
                // line 13
                echo "                
                    ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 14) == 1)) {
                    // line 15
                    echo "                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"";
                    // line 16
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_historic");
                    echo "\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                            Nouvelle demande de ";
                    // line 18
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "renter", [], "any", false, false, false, 18), "firstname", [], "any", false, false, false, 18)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "renter", [], "any", false, false, false, 18), "lastname", [], "any", false, false, false, 18)), "html", null, true);
                    echo "
                        </a>
                        <form action=\"";
                    // line 20
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeNoticeOwner");
                    echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("close-notice"), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 22), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"role\" value=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "renter", [], "any", false, false, false, 23), "html", null, true);
                    echo "\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    ";
                }
                // line 30
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 30) == 5)) {
                    // line 31
                    echo "                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_review", ["booking" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                    echo "\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                           La location est terminée. <br> vous pouvez noter ";
                    // line 34
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "renter", [], "any", false, false, false, 34), "firstname", [], "any", false, false, false, 34)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "renter", [], "any", false, false, false, 34), "lastname", [], "any", false, false, false, 34)), "html", null, true);
                    echo ". 
                        </a>
                        <form action=\"";
                    // line 36
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeNoticeOwner");
                    echo "\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("close-notice"), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 38), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"role\" value=\"";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "renter", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">
                            <button type=\"submit\" class=\"btn\">
                                <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    ";
                }
                // line 46
                echo "
                ";
            }
            // line 48
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        ";
        // line 50
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "renterBookings", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 51
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["booking"], "noticeRenterStatus", [], "any", false, false, false, 51) == 1)) {
                // line 52
                echo "                
                    ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 53) == 2)) {
                    // line 54
                    echo "                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"";
                    // line 55
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rental");
                    echo "\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                            ";
                    // line 57
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 57), "firstname", [], "any", false, false, false, 57)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 57), "lastname", [], "any", false, false, false, 57)), "html", null, true);
                    echo " a accepté votre demande.
                        </a>
                        <form action=\"";
                    // line 59
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeNoticeRenter");
                    echo "\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("close-notice"), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 61), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"role\" value=\"";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 62), "html", null, true);
                    echo "\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    ";
                }
                // line 69
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 69) == 3)) {
                    // line 70
                    echo "                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"";
                    // line 71
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rental");
                    echo "\">
                            <i class=\"fa fa-bell-o mr-2 text-danger\" aria-hidden=\"true\"></i>
                            ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 73), "firstname", [], "any", false, false, false, 73)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 73), "lastname", [], "any", false, false, false, 73)), "html", null, true);
                    echo " a refusé votre demande.
                        </a>
                        <form action=\"";
                    // line 75
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeNoticeRenter");
                    echo "\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("close-notice"), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"role\" value=\"";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 78), "html", null, true);
                    echo "\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    ";
                }
                // line 85
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 85) == 4)) {
                    // line 86
                    echo "                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"";
                    // line 87
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_rental");
                    echo "\">
                            <i class=\"fa fa-bell-o mr-2 text-danger\" aria-hidden=\"true\"></i>
                            ";
                    // line 89
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 89), "firstname", [], "any", false, false, false, 89)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 89), "lastname", [], "any", false, false, false, 89)), "html", null, true);
                    echo " a annulé votre demande.
                        </a>
                        <form action=\"";
                    // line 91
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeNoticeRenter");
                    echo "\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("close-notice"), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"";
                    // line 93
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 93), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"role\" value=\"";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 94), "html", null, true);
                    echo "\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    ";
                }
                // line 101
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 101) == 5)) {
                    // line 102
                    echo "                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_review", ["booking" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                    echo "\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                            La location est terminée, vous pouvez noter ";
                    // line 105
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 105), "firstname", [], "any", false, false, false, 105)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 105), "lastname", [], "any", false, false, false, 105)), "html", null, true);
                    echo ". 
                        </a>
                        <form action=\"";
                    // line 107
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeNoticeRenter");
                    echo "\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("close-notice"), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 109), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" name=\"role\" value=\"";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "owner", [], "any", false, false, false, 110), "html", null, true);
                    echo "\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    ";
                }
                // line 117
                echo "                ";
            }
            // line 118
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
          
            

           

        </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/toast.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 119,  329 => 118,  326 => 117,  316 => 110,  312 => 109,  308 => 108,  304 => 107,  297 => 105,  292 => 103,  289 => 102,  286 => 101,  276 => 94,  272 => 93,  268 => 92,  264 => 91,  257 => 89,  252 => 87,  249 => 86,  246 => 85,  236 => 78,  232 => 77,  228 => 76,  224 => 75,  217 => 73,  212 => 71,  209 => 70,  206 => 69,  196 => 62,  192 => 61,  188 => 60,  184 => 59,  177 => 57,  172 => 55,  169 => 54,  167 => 53,  164 => 52,  161 => 51,  156 => 50,  154 => 49,  148 => 48,  144 => 46,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  115 => 34,  110 => 32,  107 => 31,  104 => 30,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  75 => 18,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"toast\"  role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"toast-header bg-light\">
            <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
            <strong class=\"ml-2\">Wiwatt | Notifications</strong>
           <button type=\"button\" class=\"ml-auto mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\" id=\"close-toast\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"toast-body\">
         
            {% for booking in app.user.ownerBookings %}
                {% if booking.noticeOwnerStatus == 1 %}
                
                    {% if booking.status == 1 %}
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"{{ path('owner_historic') }}\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                            Nouvelle demande de {{ booking.renter.firstname| capitalize   }} {{ booking.renter.lastname | capitalize  }}
                        </a>
                        <form action=\"{{ path('closeNoticeOwner') }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('close-notice') }}\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"{{ booking.id }}\">
                            <input type=\"hidden\" name=\"role\" value=\"{{ booking.renter }}\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    {% endif %}
                    {% if booking.status == 5 %}
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"{{ path('add_review', {'booking' : booking.id}) }}\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                           La location est terminée. <br> vous pouvez noter {{ booking.renter.firstname| capitalize   }} {{ booking.renter.lastname | capitalize  }}. 
                        </a>
                        <form action=\"{{ path('closeNoticeOwner') }}\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('close-notice') }}\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"{{ booking.id }}\">
                            <input type=\"hidden\" name=\"role\" value=\"{{ booking.renter }}\">
                            <button type=\"submit\" class=\"btn\">
                                <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    {% endif %}

                {% endif %}
           {% endfor %}
        {# on est renter#}
           {% for booking in app.user.renterBookings %}
                {% if booking.noticeRenterStatus == 1 %}
                
                    {% if booking.status == 2 %}
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"{{ path('user_rental') }}\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                            {{ booking.owner.firstname | capitalize  }} {{ booking.owner.lastname | capitalize  }} a accepté votre demande.
                        </a>
                        <form action=\"{{ path('closeNoticeRenter') }}\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('close-notice') }}\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"{{ booking.id }}\">
                            <input type=\"hidden\" name=\"role\" value=\"{{ booking.owner }}\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    {% endif %}
                    {% if booking.status == 3 %}
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"{{ path('user_rental') }}\">
                            <i class=\"fa fa-bell-o mr-2 text-danger\" aria-hidden=\"true\"></i>
                            {{ booking.owner.firstname | capitalize  }} {{ booking.owner.lastname | capitalize  }} a refusé votre demande.
                        </a>
                        <form action=\"{{ path('closeNoticeRenter') }}\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('close-notice') }}\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"{{ booking.id }}\">
                            <input type=\"hidden\" name=\"role\" value=\"{{ booking.owner }}\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    {% endif %}
                    {% if booking.status == 4 %}
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"{{ path('user_rental') }}\">
                            <i class=\"fa fa-bell-o mr-2 text-danger\" aria-hidden=\"true\"></i>
                            {{ booking.owner.firstname| capitalize   }} {{ booking.owner.lastname | capitalize  }} a annulé votre demande.
                        </a>
                        <form action=\"{{ path('closeNoticeRenter') }}\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('close-notice') }}\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"{{ booking.id }}\">
                            <input type=\"hidden\" name=\"role\" value=\"{{ booking.owner }}\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    {% endif %}
                    {% if booking.status == 5 %}
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a class=\"d-block text-secondary\" href=\"{{ path('add_review', {'booking' : booking.id}) }}\">
                            <i class=\"fa fa-bell-o mr-2 green-bell\" aria-hidden=\"true\"></i>
                            La location est terminée, vous pouvez noter {{ booking.owner.firstname| capitalize   }} {{ booking.owner.lastname | capitalize  }}. 
                        </a>
                        <form action=\"{{ path('closeNoticeRenter') }}\" method=\"Post\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('close-notice') }}\">
                            <input type=\"hidden\" name=\"BookingId\" value=\"{{ booking.id }}\">
                            <input type=\"hidden\" name=\"role\" value=\"{{ booking.owner }}\">
                            <button type=\"submit\" class=\"btn\">
                                    <i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  
                            </button>
                        </form>
                    </div>
                    {% endif %}
                {% endif %}
            {% endfor %}

          
            

           

        </div>
</div>", "partials/toast.html.twig", "/var/www/html/PROJET/projet-PartageVehicules/wiwatt/templates/partials/toast.html.twig");
    }
}
