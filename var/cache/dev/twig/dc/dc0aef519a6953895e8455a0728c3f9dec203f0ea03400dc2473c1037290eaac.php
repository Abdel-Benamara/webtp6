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
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 26), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </td>
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
            <td>
                ";
        // line 45
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 45, $this->source); })()), "idespece", [], "any", false, false, false, 45), "evolution", [], "any", false, false, false, 45), "o")) {
            // line 46
            echo "                    Oui
                ";
        } else {
            // line 48
            echo "                    Non
                ";
        }
        // line 50
        echo "            </td>
        </tr>
        <tr>
            <th>Sexe</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 54, $this->source); })()), "sexe", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 58, $this->source); })()), "prix", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>A vendre</th>
            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 62, $this->source); })()), "isToSell", [], "any", false, false, false, 62)) {
            // line 63
            echo "                <td>Oui</td>
            ";
        } else {
            // line 65
            echo "                <td>Non</td>
            ";
        }
        // line 67
        echo "        </tr>
        <tr>
            <th>Heure de la dernière action</th>
            <td>";
        // line 70
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 70, $this->source); })()), "action", [], "any", false, false, false, 70), null)) {
            // line 71
            echo "                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 71, $this->source); })()), "action", [], "any", false, false, false, 71), "Y-m-d H:i:s", "Europe/Paris"), "html", null, true);
            echo "
                ";
        }
        // line 72
        echo "</td>
        </tr>
        </tbody>
    </table>

    <button class=\"btn btn-lg btn-primary\">
        <a
                ";
        // line 79
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 79, $this->source); })()), "isRecentAction", [], "any", false, false, false, 79)) {
            // line 80
            echo "                    href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_training", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\"
                ";
        } else {
            // line 82
            echo "                    style=\"color: grey\"
                ";
        }
        // line 84
        echo "        >Training</a>
    </button>

    <br />

    <a class=\"btn btn-primary\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_index");
        echo "\">back to list</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 93
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 93, $this->source); })()), "toSell", [], "any", false, false, false, 93), false)) {
            // line 94
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_sell", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\">Sell</a>
    ";
        }
        // line 96
        echo "    
    ";
        // line 97
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
        return array (  261 => 97,  258 => 96,  252 => 94,  250 => 93,  245 => 91,  240 => 89,  233 => 84,  229 => 82,  223 => 80,  221 => 79,  212 => 72,  206 => 71,  204 => 70,  199 => 67,  195 => 65,  191 => 63,  189 => 62,  182 => 58,  175 => 54,  169 => 50,  165 => 48,  161 => 46,  159 => 45,  151 => 40,  144 => 36,  137 => 32,  131 => 28,  122 => 26,  118 => 25,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <td>
                {% if pokemon.idespece.evolution == 'o' %}
                    Oui
                {% else %}
                    Non
                {% endif %}
            </td>
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
            {% if pokemon.isToSell %}
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
                {% if not pokemon.isRecentAction %}
                    href=\"{{ path('pokemon_training', {'id': pokemon.id}) }}\"
                {% else %}
                    style=\"color: grey\"
                {% endif %}
        >Training</a>
    </button>

    <br />

    <a class=\"btn btn-primary\" href=\"{{ path('pokemon_index') }}\">back to list</a>

    <a class=\"btn btn-primary\" href=\"{{ path('pokemon_edit', {'id': pokemon.id}) }}\">edit</a>

    {% if pokemon.toSell == false %}
        <a class=\"btn btn-primary\" href=\"{{ path('pokemon_sell', {'id': pokemon.id}) }}\">Sell</a>
    {% endif %}
    
    {{ include('pokemon/_delete_form.html.twig') }}

{% endblock %}
", "pokemon/show.html.twig", "/Users/abdelbenamara/Symfony-projects/webtp6/templates/pokemon/show.html.twig");
    }
}
