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

/* pokemon/show.html.twig */
class __TwigTemplate_e7304f21010b4440501d97d9fff76c81a5350eb916b14d8a7e83e940a8ae810b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/show.html.twig", 1);
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

        echo "Pokemon";
        
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
        echo "    <h1>Pokemon</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Espece Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 12, $this->source); })()), "idespece", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 16, $this->source); })()), "idespece", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surnom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 20, $this->source); })()), "surnom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 25, $this->source); })()), "idespece", [], "any", false, false, false, 25), "idType", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </td>
            </tr>
            <tr>
                <th>Courbe XP</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 32, $this->source); })()), "idespece", [], "any", false, false, false, 32), "courbeXP", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>XP</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 36, $this->source); })()), "xp", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 40, $this->source); })()), "niveau", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Evolution</th>
                ";
        // line 44
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 44, $this->source); })()), "idespece", [], "any", false, false, false, 44), "evolution", [], "any", false, false, false, 44), "o")) {
            // line 45
            echo "                    <td>Oui</td>
                ";
        } else {
            // line 47
            echo "                    <td>Non</td>
                ";
        }
        // line 49
        echo "            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 52, $this->source); })()), "sexe", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 56, $this->source); })()), "prix", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>A vendre</th>
                ";
        // line 60
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 60, $this->source); })()), "toSell", [], "any", false, false, false, 60), true)) {
            // line 61
            echo "                    <td>Oui</td>
                ";
        } else {
            // line 63
            echo "                    <td>Non</td>
                ";
        }
        // line 65
        echo "            </tr>
            <tr>
                <th>Heure de la dernière action</th>
                <td>";
        // line 68
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 68, $this->source); })()), "action", [], "any", false, false, false, 68), null)) {
            // line 69
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 69, $this->source); })()), "action", [], "any", false, false, false, 69), "Y-m-d H:i:s", "Europe/Paris"), "html", null, true);
            echo "
                    ";
        }
        // line 70
        echo "</td>
            </tr>
        </tbody>
    </table>

    <button class=\"btn btn-lg btn-primary\">
        <a
                ";
        // line 77
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 77, $this->source); })()), "isRecentAction", [], "any", false, false, false, 77), false)) {
            // line 78
            echo "                    href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_training", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"
                ";
        } else {
            // line 80
            echo "                    style=\"color: grey\"
                ";
        }
        // line 82
        echo "        >Training</a>
    </button>

    <br />

    <a class=\"btn btn-primary\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_index");
        echo "\">back to list</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
        echo "\">edit</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_sell", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">Sell</a>

    ";
        // line 93
        echo twig_include($this->env, $context, "pokemon/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 93,  248 => 91,  243 => 89,  238 => 87,  231 => 82,  227 => 80,  221 => 78,  219 => 77,  210 => 70,  204 => 69,  202 => 68,  197 => 65,  193 => 63,  189 => 61,  187 => 60,  180 => 56,  173 => 52,  168 => 49,  164 => 47,  160 => 45,  158 => 44,  151 => 40,  144 => 36,  137 => 32,  131 => 28,  122 => 26,  118 => 25,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pokemon{% endblock %}

{% block body %}
    <h1>Pokemon</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Espece Id</th>
                <td>{{ pokemon.idespece.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ pokemon.idespece.nom }}</td>
            </tr>
            <tr>
                <th>Surnom</th>
                <td>{{ pokemon.surnom }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>
                    {% for row in pokemon.idespece.idType %}
                        {{ row.type }}
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <th>Courbe XP</th>
                <td>{{ pokemon.idespece.courbeXP }}</td>
            </tr>
            <tr>
                <th>XP</th>
                <td>{{ pokemon.xp }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ pokemon.niveau }}</td>
            </tr>
            <tr>
                <th>Evolution</th>
                {% if pokemon.idespece.evolution == 'o' %}
                    <td>Oui</td>
                {% else %}
                    <td>Non</td>
                {% endif %}
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ pokemon.sexe }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ pokemon.prix }}</td>
            </tr>
            <tr>
                <th>A vendre</th>
                {% if pokemon.toSell == true %}
                    <td>Oui</td>
                {% else %}
                    <td>Non</td>
                {% endif %}
            </tr>
            <tr>
                <th>Heure de la dernière action</th>
                <td>{% if pokemon.action != null %}
                        {{ pokemon.action|date('Y-m-d H:i:s', 'Europe/Paris') }}
                    {% endif %}</td>
            </tr>
        </tbody>
    </table>

    <button class=\"btn btn-lg btn-primary\">
        <a
                {% if pokemon.isRecentAction == false %}
                    href=\"{{ path('pokemon_training', {'id': pokemon.id}) }}\"
                {% else %}
                    style=\"color: grey\"
                {% endif %}
        >Training</a>
    </button>

    <br />

    <a class=\"btn btn-primary\" href=\"{{ path('pokemon_index') }}\">back to list</a>

    <a class=\"btn btn-primary\" href=\"{{ path('pokemon_edit', {'id': pokemon.id}) }}\">edit</a>

    <a class=\"btn btn-primary\" href=\"{{ path('pokemon_sell', {'id': pokemon.id}) }}\">Sell</a>

    {{ include('pokemon/_delete_form.html.twig') }}
{% endblock %}
", "pokemon/show.html.twig", "/Users/abdelbenamara/Symfony-projects/webtp6/templates/pokemon/show.html.twig");
    }
}
