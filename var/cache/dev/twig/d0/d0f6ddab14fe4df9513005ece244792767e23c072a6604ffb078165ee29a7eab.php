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

/* exercise/show.html.twig */
class __TwigTemplate_0c5dbf71b9ba6953f77f1d629176928cebb0ff61d3e2d801f0cf1dad403099e7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercise/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercise/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Exercise";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Exercise</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 20, $this->source); })()), "time", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Img_path</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 24, $this->source); })()), "imgPath", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 32, $this->source); })()), "score", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 40, $this->source); })()), "updatedAt", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 40, $this->source); })()), "updatedAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercise_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercise_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "exercise/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "exercise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  143 => 47,  138 => 45,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exercise{% endblock %}

{% block body %}
    <h1>Exercise</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ exercise.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ exercise.title }}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{ exercise.time }}</td>
            </tr>
            <tr>
                <th>Img_path</th>
                <td>{{ exercise.imgPath }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ exercise.description }}</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>{{ exercise.score }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ exercise.createdAt ? exercise.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>{{ exercise.updatedAt ? exercise.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('exercise_index') }}\">back to list</a>

    <a href=\"{{ path('exercise_edit', {'id': exercise.id}) }}\">edit</a>

    {{ include('exercise/_delete_form.html.twig') }}
{% endblock %}
", "exercise/show.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/exercise/show.html.twig");
    }
}
