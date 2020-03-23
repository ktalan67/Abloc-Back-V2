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

/* admin/program/show.html.twig */
class __TwigTemplate_b78c656e17e51c2e839d913514f46ff88ccb2ee5e425c9d7caa80117559d14b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/program/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/program/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/program/show.html.twig", 1);
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

        echo "Program";
        
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
        <p class=\"route d-flex justify-content-end\">Program details</p>
        <p class=\"d-flex justify-content-end\">Created At : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 10, $this->source); })()), "createdAt", [], "any", false, false, false, 10), "m/d/Y"), "html", null, true);
        echo "</p>

        <div class=\"info\">
            <table class=\"table table-striped table-bordered table-light text-center\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"objects-list\" role=\"tablist\">
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link active\" href=\"#exercises\" role=\"tab\" aria-controls=\"exercises\" aria-selected=\"true\">Exercises</a>
                            </li>
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link\" href=\"#active-users\" role=\"tab\" aria-controls=\"active-users\" aria-selected=\"false\">Active Users</a>
                            </li>
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link\" href=\"#comments\" role=\"tab\" aria-controls=\"comments\"aria-selected=\"false\">Comments</a>
                            </li>
                        </ul>
        </div>
        <thead class=\"info-thead\">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Time</th>
                <th>Image</th>
                <th>Mastery Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 40, $this->source); })()), "time", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                <td><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/program_img/" . twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 41, $this->source); })()), "imgPath", [], "any", false, false, false, 41))), "html", null, true);
        echo "\" alt=\"Program Image Abloc\"></td>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 42, $this->source); })()), "masteryLevel", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                <td>
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_program_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"btn btn-warning fas fa-edit\"></a>
                    ";
        // line 45
        echo twig_include($this->env, $context, "admin/program/_delete_small_form.html.twig");
        echo "
                </td>
            </tr>
        </tbody>
            </table>
            <div class=\"info-description\">
                <table class=\"table table-bordered table-light text-center\">
                    <thead class=\"info-thead\">
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                    </tbody>
                </table>
            </div>
            <div class=\"info-tabs-content\">
                <table class=\"table text-center\">
                    <thead class=\"info-thead\">
                        <th>Tabs</th>
                    </thead>
                    <tbody>
                        <td>
                            <div class=\"info-card\" style=\"width: auto;\">
                                <div class=\"info-card-body\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"exercises\" role=\"tabpanel\">
                                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 71, $this->source); })()), "exercises", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["exercise"]) {
            // line 72
            echo "                                            <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercise"], "title", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                        </div>
                                        <div class=\"tab-pane\" id=\"active-users\" role=\"tabpanel\" aria-labelledby=\"active-users-tab\">
                                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 76, $this->source); })()), "users", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 77
            echo "                                            <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                        </div>
                                        <div class=\"tab-pane\" id=\"comments\" role=\"tabpanel\" aria-labelledby=\"comments-tab\">
                                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 81, $this->source); })()), "comments", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 82
            echo "                                        <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>User</th>
                                                    <th>Comment</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope=\"row\"><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/user_img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 93), "imgPath", [], "any", false, false, false, 93))), "html", null, true);
            echo "\"></th>
                                                    <td class=\"comment-user\">@";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 94), "accountName", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                                    <td class=\"comment-content\">\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 95), "html", null, true);
            echo "\"</td>
                                                    <td class=\"comment-date\">";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 96), "m/d/Y"), "html", null, true);
            echo "</td>
                                                </tr>
                                        </table>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tbody>
                </table>
                    <div class=\"back-list-button\">
                        <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_program_index");
        echo "\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
                    </div>
            </div>
    </div>
</div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/program/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 108,  255 => 100,  245 => 96,  241 => 95,  237 => 94,  233 => 93,  220 => 82,  216 => 81,  212 => 79,  203 => 77,  199 => 76,  195 => 74,  186 => 72,  182 => 71,  164 => 56,  150 => 45,  146 => 44,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Program{% endblock %}

{% block body %}
<div class=\"info-container\">

    <div class=\"info-body\">
        <p class=\"route d-flex justify-content-end\">Program details</p>
        <p class=\"d-flex justify-content-end\">Created At : {{ program.createdAt|date(\"m/d/Y\") }}</p>

        <div class=\"info\">
            <table class=\"table table-striped table-bordered table-light text-center\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"objects-list\" role=\"tablist\">
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link active\" href=\"#exercises\" role=\"tab\" aria-controls=\"exercises\" aria-selected=\"true\">Exercises</a>
                            </li>
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link\" href=\"#active-users\" role=\"tab\" aria-controls=\"active-users\" aria-selected=\"false\">Active Users</a>
                            </li>
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link\" href=\"#comments\" role=\"tab\" aria-controls=\"comments\"aria-selected=\"false\">Comments</a>
                            </li>
                        </ul>
        </div>
        <thead class=\"info-thead\">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Time</th>
                <th>Image</th>
                <th>Mastery Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ program.id }}</td>
                <td>{{ program.title }}</td>
                <td>{{ program.time }}</td>
                <td><img src=\"{{ asset('uploads/program_img/'~ program.imgPath) }}\" alt=\"Program Image Abloc\"></td>
                <td>{{ program.masteryLevel.title }}</td>
                <td>
                    <a href=\"{{ path('admin_program_edit', {'id': program.id}) }}\" class=\"btn btn-warning fas fa-edit\"></a>
                    {{ include('admin/program/_delete_small_form.html.twig') }}
                </td>
            </tr>
        </tbody>
            </table>
            <div class=\"info-description\">
                <table class=\"table table-bordered table-light text-center\">
                    <thead class=\"info-thead\">
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <td>{{ program.description }}</td>
                    </tbody>
                </table>
            </div>
            <div class=\"info-tabs-content\">
                <table class=\"table text-center\">
                    <thead class=\"info-thead\">
                        <th>Tabs</th>
                    </thead>
                    <tbody>
                        <td>
                            <div class=\"info-card\" style=\"width: auto;\">
                                <div class=\"info-card-body\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"exercises\" role=\"tabpanel\">
                                            {% for exercise in program.exercises %}
                                            <p class=\"card-text\">{{ exercise.title }}</p>
                                            {% endfor %}
                                        </div>
                                        <div class=\"tab-pane\" id=\"active-users\" role=\"tabpanel\" aria-labelledby=\"active-users-tab\">
                                            {% for user in program.users %}
                                            <p class=\"card-text\">{{ user.email }}</p>
                                            {% endfor %}
                                        </div>
                                        <div class=\"tab-pane\" id=\"comments\" role=\"tabpanel\" aria-labelledby=\"comments-tab\">
                                        {% for comment in program.comments %}
                                        <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>User</th>
                                                    <th>Comment</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope=\"row\"><img src=\"{{ asset('uploads/user_img/'~ comment.user.imgPath) }}\"></th>
                                                    <td class=\"comment-user\">@{{ comment.user.accountName }}</td>
                                                    <td class=\"comment-content\">\"{{ comment.text }}\"</td>
                                                    <td class=\"comment-date\">{{ comment.createdAt|date(\"m/d/Y\") }}</td>
                                                </tr>
                                        </table>
                                        {% endfor %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tbody>
                </table>
                    <div class=\"back-list-button\">
                        <a href=\"{{ path('admin_program_index') }}\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
                    </div>
            </div>
    </div>
</div>    
{% endblock %}", "admin/program/show.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/admin/program/show.html.twig");
    }
}
