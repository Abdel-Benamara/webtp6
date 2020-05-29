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

/* main/index.html.twig */
class __TwigTemplate_69d97f4c05ccbecfcb4f3a6b557233b07d17813ab2a4b9e8669c7807fc66d893 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Hello MainController!";
        
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
    <h5 class=\"card-title\">Bienvenue sur ton Pokedex <span class=\"badge badge-pill badge-primary\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dresseur"]) || array_key_exists("dresseur", $context) ? $context["dresseur"] : (function () { throw new RuntimeError('Variable "dresseur" does not exist.', 7, $this->source); })()), "pseudo", [], "any", false, false, false, 7), "html", null, true);
        echo "</span></h5>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dresseur"]) || array_key_exists("dresseur", $context) ? $context["dresseur"] : (function () { throw new RuntimeError('Variable "dresseur" does not exist.', 9, $this->source); })()), "money", [], "any", false, false, false, 9), "html", null, true);
        echo "</span> piece(s) dans ton porte monnaie !</h4>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</span> Pokemon dans ton Pokedex. Ajoutes-en vite de nouveaux !</h4>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">";
        // line 13
        echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 13, $this->source); })()) - (isset($context["nbEvo"]) || array_key_exists("nbEvo", $context) ? $context["nbEvo"] : (function () { throw new RuntimeError('Variable "nbEvo" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "</span> base(s)</h4>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["nbEvo"]) || array_key_exists("nbEvo", $context) ? $context["nbEvo"] : (function () { throw new RuntimeError('Variable "nbEvo" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</span> évolution(s)</h4>

    <h4 class=\"card-title\">Nb Pokemon par type </h4>

    <table class=\"table table-striped\">
        <thead>
        <th>Type</th>
        <th>Nb Pokemon</th>
        </thead>
        <tbody>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nb", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dresseur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dresseur"]) || array_key_exists("dresseur", $context) ? $context["dresseur"] : (function () { throw new RuntimeError('Variable "dresseur" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit profile</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 39,  154 => 36,  145 => 32,  137 => 29,  133 => 28,  130 => 27,  125 => 26,  111 => 15,  106 => 13,  101 => 11,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}

    <h5 class=\"card-title\">Bienvenue sur ton Pokedex <span class=\"badge badge-pill badge-primary\">{{ dresseur.pseudo }}</span></h5>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">{{ dresseur.money }}</span> piece(s) dans ton porte monnaie !</h4>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">{{ total }}</span> Pokemon dans ton Pokedex. Ajoutes-en vite de nouveaux !</h4>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">{{ (total-nbEvo) }}</span> base(s)</h4>

    <h4 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">{{ nbEvo }}</span> évolution(s)</h4>

    <h4 class=\"card-title\">Nb Pokemon par type </h4>

    <table class=\"table table-striped\">
        <thead>
        <th>Type</th>
        <th>Nb Pokemon</th>
        </thead>
        <tbody>
        <tbody>
        {% for row in stats %}
            <tr>
                <td>{{ row.type }}</td>
                <td>{{ row.nb }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('dresseur_edit', {'id': dresseur.id}) }}\">edit profile</a>

{% endblock %}
", "main/index.html.twig", "/Users/abdelbenamara/Symfony-projects/webtp6/templates/main/index.html.twig");
    }
}
