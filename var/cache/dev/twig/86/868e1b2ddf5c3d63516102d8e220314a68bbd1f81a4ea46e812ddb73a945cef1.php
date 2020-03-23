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

/* admin/exercise/show.html.twig */
class __TwigTemplate_cbd958f0163e1c1f72ac0cc47115dbdb9487ba6372f165308eabfa6fd57e05b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exercise/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exercise/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/exercise/show.html.twig", 1);
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

        echo "Exercise";
        
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
        <p class=\"route d-flex justify-content-end\">Exercise details</p>
        <p class=\"d-flex justify-content-end\">Created At : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "m/d/Y"), "html", null, true);
        echo "</p>

        <div class=\"info\">
            <table class=\"table table-striped table-bordered table-light text-center\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"objects-list\" role=\"tablist\">
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link active\" href=\"#hints\" role=\"tab\" aria-controls=\"hints\" aria-selected=\"true\">Hints</a>
                            </li>
                            <li class=\"nav-item-tab\">
                            <a class=\"nav-link\" href=\"#prerequisites\" role=\"tab\" aria-controls=\"prerequisites\" aria-selected=\"false\">Prerequisites</a>
                            </li>
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link\" href=\"#programs\" role=\"tab\" aria-controls=\"programs\"aria-selected=\"false\">Programs</a>
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
                <th>Score</th>
                <th>Image</th>
                <th>Mastery Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 43, $this->source); })()), "time", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 44, $this->source); })()), "score", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                <td><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/exercise_img/" . twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 45, $this->source); })()), "imgPath", [], "any", false, false, false, 45))), "html", null, true);
        echo "\" alt=\"Exercise Image Abloc\"></td>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 46, $this->source); })()), "masteryLevel", [], "any", false, false, false, 46), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                <td>
                    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_exercise_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\"
                        class=\"btn btn-warning fas fa-edit\"></a>
                    ";
        // line 50
        echo twig_include($this->env, $context, "admin/exercise/_delete_small_form.html.twig");
        echo "
                </td>
            </tr>
        </tbody>
            </table>
            <div class=\"info-description\">
                <table class=\"table table-light text-center\">
                    <thead class=\"info-thead\">
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tbody>
            </table>
            </div>
            <div class=\"info-tabs-content\">
                <div class=\"info-tabs-content\">
                    <table class=\"table table-bordered table-light text-center\">
                        <thead class=\"info-thead\">
                            <th>Tabs</th>
                        </thead>
                        <tbody>
                        <td>
                            <div class=\"info-card\" style=\"width: auto;\">
                                <div class=\"info-card-body\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"hints\" role=\"tabpanel\">
                                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 77, $this->source); })()), "hints", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
            // line 78
            echo "                                            <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hint"], "text", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                        </div>
                                        <div class=\"tab-pane\" id=\"prerequisites\" role=\"tabpanel\" aria-labelledby=\"prerequisites-tab\">
                                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 82, $this->source); })()), "prerequisites", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["prerequisite"]) {
            // line 83
            echo "                                            <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prerequisite"], "description", [], "any", false, false, false, 83), "html", null, true);
            echo "</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prerequisite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                        </div>
                                        <div class=\"tab-pane\" id=\"programs\" role=\"tabpanel\" aria-labelledby=\"programs-tab\">
                                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 87, $this->source); })()), "programs", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 88
            echo "                                            <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["program"], "title", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                        </div>
                                        <div class=\"tab-pane\" id=\"comments\" role=\"tabpanel\" aria-labelledby=\"comments-tab\">
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
                                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 102, $this->source); })()), "comments", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 103
            echo "                                                <tr>
                                                    <td class=\"comment-user-image\"><img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/user_img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 104), "imgPath", [], "any", false, false, false, 104))), "html", null, true);
            echo "\" </th>
                                                    <td class=\"comment-user\">@";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 105), "accountName", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                                    <td class=\"comment-content\">\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 106), "html", null, true);
            echo "\"</td>
                                                    <td class=\"comment-date\">";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 107), "m/d/Y"), "html", null, true);
            echo "</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </table>
                        <div class=\"back-list-button\">
                            <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_exercise_index");
        echo "\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
                        </div>          
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
        return "admin/exercise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 117,  280 => 110,  271 => 107,  267 => 106,  263 => 105,  259 => 104,  256 => 103,  252 => 102,  238 => 90,  229 => 88,  225 => 87,  221 => 85,  212 => 83,  208 => 82,  204 => 80,  195 => 78,  191 => 77,  172 => 61,  158 => 50,  153 => 48,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exercise{% endblock %}

{% block body %}
<div class=\"info-container\">
    <div class=\"info-body\">
        <p class=\"route d-flex justify-content-end\">Exercise details</p>
        <p class=\"d-flex justify-content-end\">Created At : {{ exercise.createdAt|date(\"m/d/Y\") }}</p>

        <div class=\"info\">
            <table class=\"table table-striped table-bordered table-light text-center\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"objects-list\" role=\"tablist\">
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link active\" href=\"#hints\" role=\"tab\" aria-controls=\"hints\" aria-selected=\"true\">Hints</a>
                            </li>
                            <li class=\"nav-item-tab\">
                            <a class=\"nav-link\" href=\"#prerequisites\" role=\"tab\" aria-controls=\"prerequisites\" aria-selected=\"false\">Prerequisites</a>
                            </li>
                            <li class=\"nav-item-tab\">
                                <a class=\"nav-link\" href=\"#programs\" role=\"tab\" aria-controls=\"programs\"aria-selected=\"false\">Programs</a>
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
                <th>Score</th>
                <th>Image</th>
                <th>Mastery Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ exercise.id }}</td>
                <td>{{ exercise.title }}</td>
                <td>{{ exercise.time }}</td>
                <td>{{ exercise.score }}</td>
                <td><img src=\"{{ asset('uploads/exercise_img/'~ exercise.imgPath) }}\" alt=\"Exercise Image Abloc\"></td>
                <td>{{ exercise.masteryLevel.title }}</td>
                <td>
                    <a href=\"{{ path('admin_exercise_edit', {'id': exercise.id}) }}\"
                        class=\"btn btn-warning fas fa-edit\"></a>
                    {{ include('admin/exercise/_delete_small_form.html.twig') }}
                </td>
            </tr>
        </tbody>
            </table>
            <div class=\"info-description\">
                <table class=\"table table-light text-center\">
                    <thead class=\"info-thead\">
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <td>{{ exercise.description }}</td>
                    </tbody>
            </table>
            </div>
            <div class=\"info-tabs-content\">
                <div class=\"info-tabs-content\">
                    <table class=\"table table-bordered table-light text-center\">
                        <thead class=\"info-thead\">
                            <th>Tabs</th>
                        </thead>
                        <tbody>
                        <td>
                            <div class=\"info-card\" style=\"width: auto;\">
                                <div class=\"info-card-body\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"hints\" role=\"tabpanel\">
                                            {% for hint in exercise.hints %}
                                            <p class=\"card-text\">{{ hint.text }}</p>
                                            {% endfor %}
                                        </div>
                                        <div class=\"tab-pane\" id=\"prerequisites\" role=\"tabpanel\" aria-labelledby=\"prerequisites-tab\">
                                            {% for prerequisite in exercise.prerequisites %}
                                            <p class=\"card-text\">{{ prerequisite.description }}</p>
                                            {% endfor %}
                                        </div>
                                        <div class=\"tab-pane\" id=\"programs\" role=\"tabpanel\" aria-labelledby=\"programs-tab\">
                                            {% for program in exercise.programs %}
                                            <p class=\"card-text\">{{ program.title }}</p>
                                            {% endfor %}
                                        </div>
                                        <div class=\"tab-pane\" id=\"comments\" role=\"tabpanel\" aria-labelledby=\"comments-tab\">
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
                                                {% for comment in exercise.comments %}
                                                <tr>
                                                    <td class=\"comment-user-image\"><img src=\"{{ asset('uploads/user_img/'~ comment.user.imgPath) }}\" </th>
                                                    <td class=\"comment-user\">@{{ comment.user.accountName }}</td>
                                                    <td class=\"comment-content\">\"{{ comment.text }}\"</td>
                                                    <td class=\"comment-date\">{{ comment.createdAt|date(\"m/d/Y\") }}</td>
                                                </tr>
                                                {% endfor %}
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </table>
                        <div class=\"back-list-button\">
                            <a href=\"{{ path('admin_exercise_index') }}\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
                        </div>          
                </div>
            </div>
    </div>
</div>  
{% endblock %}
", "admin/exercise/show.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/admin/exercise/show.html.twig");
    }
}
