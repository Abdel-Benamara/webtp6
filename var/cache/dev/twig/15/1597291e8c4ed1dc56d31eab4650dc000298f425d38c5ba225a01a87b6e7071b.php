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

/* pokemon/index.html.twig */
class __TwigTemplate_458c03c932c09925c876df367dd3d0e72e0497e10ff1843da6639e27ef58be9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/index.html.twig", 1);
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

        echo "Pokemon index";
        
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
        echo "    <h1>Pokemon index</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Pokedex Id</th>
            <th>Espece</th>
            <th>Surnom</th>
            <th>Niveau</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "idEspece", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "idEspece", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "surnom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "niveau", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Show</a>
                    -
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Edit</a>
                    ";
            // line 29
            if ( !twig_get_attribute($this->env, $this->source, $context["pokemon"], "isToSell", [], "any", false, false, false, 29)) {
                // line 30
                echo "                        -
                        <a
                                ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, $context["pokemon"], "isRecentAction", [], "any", false, false, false, 32) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pokemon"], "niveau", [], "any", false, false, false, 32), 100))) {
                    // line 33
                    echo "                                    style=\"color: grey\"
                                ";
                } else {
                    // line 35
                    echo "                                    href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_training", ["id" => twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\"
                                ";
                }
                // line 37
                echo "                        >
                            ";
                // line 38
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pokemon"], "niveau", [], "any", false, false, false, 38), 100)) {
                    // line 39
                    echo "                                Max Level
                            ";
                } else {
                    // line 41
                    echo "                                Training
                            ";
                }
                // line 43
                echo "                        </a>
                        -
                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_sell", ["id" => twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Sell</a>
                    ";
            } else {
                // line 47
                echo "                        -
                        <a style=\"color: grey\">For sale</a>
                    ";
            }
            // line 50
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"8\">Aucun pokemon dans ce Pokedex</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  189 => 53,  182 => 50,  177 => 47,  172 => 45,  168 => 43,  164 => 41,  160 => 39,  158 => 38,  155 => 37,  149 => 35,  145 => 33,  143 => 32,  139 => 30,  137 => 29,  133 => 28,  128 => 26,  123 => 24,  119 => 23,  115 => 22,  111 => 21,  108 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pokemon index{% endblock %}

{% block body %}
    <h1>Pokemon index</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Pokedex Id</th>
            <th>Espece</th>
            <th>Surnom</th>
            <th>Niveau</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for pokemon in pokemons %}
            <tr>
                <td>{{ pokemon.idEspece.id }}</td>
                <td>{{ pokemon.idEspece.nom }}</td>
                <td>{{ pokemon.surnom }}</td>
                <td>{{ pokemon.niveau }}</td>
                <td>
                    <a href=\"{{ path('pokemon_show', {'id': pokemon.id}) }}\">Show</a>
                    -
                    <a href=\"{{ path('pokemon_edit', {'id': pokemon.id}) }}\">Edit</a>
                    {% if not pokemon.isToSell %}
                        -
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
                        -
                        <a href=\"{{ path('pokemon_sell', {'id': pokemon.id}) }}\">Sell</a>
                    {% else %}
                        -
                        <a style=\"color: grey\">For sale</a>
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">Aucun pokemon dans ce Pokedex</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "pokemon/index.html.twig", "/Users/abdelbenamara/Symfony-projects/webtp6/templates/pokemon/index.html.twig");
    }
}
