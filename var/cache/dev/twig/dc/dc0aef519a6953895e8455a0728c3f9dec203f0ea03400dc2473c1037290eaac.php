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
            <th>Pokedex Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 12, $this->source); })()), "idespece", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Espece</th>
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

    ";
        // line 77
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 77, $this->source); })()), "iddresseur", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77))) {
            // line 78
            echo "        <button class=\"btn btn-lg btn-primary\">
            <a
                    ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 80, $this->source); })()), "isRecentAction", [], "any", false, false, false, 80) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 80, $this->source); })()), "niveau", [], "any", false, false, false, 80), 100))) {
                // line 81
                echo "                        style=\"color: grey\"
                    ";
            } else {
                // line 83
                echo "                        href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_training", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\"
                    ";
            }
            // line 85
            echo "            >
                ";
            // line 86
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 86, $this->source); })()), "niveau", [], "any", false, false, false, 86), 100)) {
                // line 87
                echo "                    Max Level
                ";
            } else {
                // line 89
                echo "                    Training
                ";
            }
            // line 91
            echo "            </a>
        </button>

        <br />

        <a class=\"btn btn-primary\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_index");
            echo "\">back to list</a>

        <a class=\"btn btn-primary\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">edit</a>

        ";
            // line 100
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 100, $this->source); })()), "toSell", [], "any", false, false, false, 100), false)) {
                // line 101
                echo "            <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_sell", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\">Sell</a>
        ";
            }
            // line 103
            echo "    ";
        } else {
            // line 104
            echo "        <a class=\"btn btn-lg btn-primary\"
                ";
            // line 105
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "money", [], "any", false, false, false, 105), twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 105, $this->source); })()), "prix", [], "any", false, false, false, 105))) {
                // line 106
                echo "                    style=\"color: grey\"
                ";
            } else {
                // line 108
                echo "                    href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_buy", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\"
                    onclick=\"return confirm('Are you sure you want to buy this Pokemon ?');\"
                ";
            }
            // line 111
            echo "        >Buy</a>

        <br />

        <a class=\"btn btn-primary\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_shop");
            echo "\">back to shop</a>
    ";
        }
        // line 117
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
        return array (  305 => 117,  300 => 115,  294 => 111,  287 => 108,  283 => 106,  281 => 105,  278 => 104,  275 => 103,  269 => 101,  267 => 100,  262 => 98,  257 => 96,  250 => 91,  246 => 89,  242 => 87,  240 => 86,  237 => 85,  231 => 83,  227 => 81,  225 => 80,  221 => 78,  219 => 77,  212 => 72,  206 => 71,  204 => 70,  199 => 67,  195 => 65,  191 => 63,  189 => 62,  182 => 58,  175 => 54,  169 => 50,  165 => 48,  161 => 46,  159 => 45,  151 => 40,  144 => 36,  137 => 32,  131 => 28,  122 => 26,  118 => 25,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <th>Pokedex Id</th>
            <td>{{ pokemon.idespece.id }}</td>
        </tr>
        <tr>
            <th>Espece</th>
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

    {% if app.user.id == pokemon.iddresseur.id %}
        <button class=\"btn btn-lg btn-primary\">
            <a
                    {% if pokemon.isRecentAction or pokemon.niveau == 100 %}
                        style=\"color: grey\"
                    {% else %}
                        href=\"{{ path('pokemon_training', {'id': pokemon.id}) }}\"
                    {% endif %}
            >
                {% if pokemon.niveau == 100 %}
                    Max Level
                {% else %}
                    Training
                {% endif %}
            </a>
        </button>

        <br />

        <a class=\"btn btn-primary\" href=\"{{ path('pokemon_index') }}\">back to list</a>

        <a class=\"btn btn-primary\" href=\"{{ path('pokemon_edit', {'id': pokemon.id}) }}\">edit</a>

        {% if pokemon.toSell == false %}
            <a class=\"btn btn-primary\" href=\"{{ path('pokemon_sell', {'id': pokemon.id}) }}\">Sell</a>
        {% endif %}
    {% else %}
        <a class=\"btn btn-lg btn-primary\"
                {% if app.user.money < pokemon.prix %}
                    style=\"color: grey\"
                {% else %}
                    href=\"{{ path('pokemon_buy', {'id': pokemon.id}) }}\"
                    onclick=\"return confirm('Are you sure you want to buy this Pokemon ?');\"
                {% endif %}
        >Buy</a>

        <br />

        <a class=\"btn btn-primary\" href=\"{{ path('pokemon_shop') }}\">back to shop</a>
    {% endif %}

{% endblock %}
", "pokemon/show.html.twig", "/Users/abdelbenamara/Symfony-projects/webtp6/templates/pokemon/show.html.twig");
    }
}
