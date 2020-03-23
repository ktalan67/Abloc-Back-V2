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

/* admin/program_comment/show.html.twig */
class __TwigTemplate_baad3cb338a8d5f0c49035422976d735e69c539078cc4157924e2ef721d712d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/program_comment/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/program_comment/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/program_comment/show.html.twig", 1);
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

        echo "ProgramComment";
        
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
        echo "<div class=\"info-container\">
    <div class=\"info-body\">
    <p class=\"route d-flex justify-content-end\">Program comment</p>
    <table class=\"table table-striped table-bordered table-light text-center\">
        <thead class=\"info-thead\">
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>User</th>
                <th>Program</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program_comment"]) || array_key_exists("program_comment", $context) ? $context["program_comment"] : (function () { throw new RuntimeError('Variable "program_comment" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program_comment"]) || array_key_exists("program_comment", $context) ? $context["program_comment"] : (function () { throw new RuntimeError('Variable "program_comment" does not exist.', 22, $this->source); })()), "text", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["program_comment"]) || array_key_exists("program_comment", $context) ? $context["program_comment"] : (function () { throw new RuntimeError('Variable "program_comment" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["program_comment"]) || array_key_exists("program_comment", $context) ? $context["program_comment"] : (function () { throw new RuntimeError('Variable "program_comment" does not exist.', 24, $this->source); })()), "program", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                <td>
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_program_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["program_comment"]) || array_key_exists("program_comment", $context) ? $context["program_comment"] : (function () { throw new RuntimeError('Variable "program_comment" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" class=\"btn btn-warning fas fa-edit\"></a>
                    ";
        // line 27
        echo twig_include($this->env, $context, "admin/program_comment/_delete_small_form.html.twig");
        echo "
                </td>
            </tr>
        </tbody>
    </table>
        <div class=\"back-list-button\">
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_program_comment_index");
        echo "\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/program_comment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  126 => 27,  122 => 26,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProgramComment{% endblock %}

{% block body %}
<div class=\"info-container\">
    <div class=\"info-body\">
    <p class=\"route d-flex justify-content-end\">Program comment</p>
    <table class=\"table table-striped table-bordered table-light text-center\">
        <thead class=\"info-thead\">
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>User</th>
                <th>Program</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ program_comment.id }}</td>
                <td>{{ program_comment.text }}</td>
                <td>{{ program_comment.user.email }}</td>
                <td>{{ program_comment.program.title }}</td>
                <td>
                    <a href=\"{{ path('admin_program_comment_edit', {'id': program_comment.id}) }}\" class=\"btn btn-warning fas fa-edit\"></a>
                    {{ include('admin/program_comment/_delete_small_form.html.twig') }}
                </td>
            </tr>
        </tbody>
    </table>
        <div class=\"back-list-button\">
            <a href=\"{{ path('admin_program_comment_index') }}\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
        </div>
</div>
{% endblock %}
", "admin/program_comment/show.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/admin/program_comment/show.html.twig");
    }
}
