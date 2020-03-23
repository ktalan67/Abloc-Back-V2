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

/* admin/user/show.html.twig */
class __TwigTemplate_c1636fc794c8e26872583f32a05e6c17dad9d7eb9730577e445ca975e60c27a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/show.html.twig", 1);
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

        echo "User";
        
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
        <p class=\"route d-flex justify-content-end\">User details</p>
        <p class=\"d-flex justify-content-end\">Created At : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "createdAt", [], "any", false, false, false, 10), "m/d/Y"), "html", null, true);
        echo "</p>

        <div class=\"info\">
            <table class=\"table table-striped table-bordered table-light text-center\">
                    <ul class=\"nav nav-tabs card-header-tabs\" id=\"objects-list\" role=\"tablist\">
                        <li class=\"nav-item-tab\">
                            <a class=\"nav-link active\"  href=\"#exercise-comments\" role=\"tab\" aria-controls=\"exercise-comments\" aria-selected=\"true\">Exercise Comments</a>
                        </li>
                        <li class=\"nav-item-tab\">
                            <a class=\"nav-link\"  href=\"#program-comments\" role=\"tab\" aria-controls=\"program-comments\" aria-selected=\"false\">Program Comments</a>
                        </li>
                    </ul>
        </div>
        <thead class=\"info-thead\">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Account Name</th>                
                <th>Available Time</th>
                <th>Image</th>
                <th>Mastery Level</th>
                <th>Score</th>
                <th>Actions</th>
                <th>Edit Password</th>
            </tr>
        </thead>    
        <tbody>
            <tr>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "accountName", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "availableTime", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                <td><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/user_img/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "imgPath", [], "any", false, false, false, 42))), "html", null, true);
        echo "\" alt=\"User Image Abloc\"></td>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "masteryLevel", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "score", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                <td>
                    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-warning fas fa-edit\"></a>
                    ";
        // line 47
        echo twig_include($this->env, $context, "admin/user/_delete_small_form.html.twig");
        echo "
                </td>
                <td>
                    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit_password", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" class=\"btn btn-warning fas fa-key\"></a>
                </td>
            </tr>
        </tbody>
            </table>
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
                                            <div class=\"tab-pane active\" id=\"exercise-comments\" role=\"tabpanel\">
                                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "exerciseComments", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 67
            echo "                                                <table class=\"table\">
                                                    <thead>
                                                        <tr>
                                                            <th>Exercise</th>
                                                            <th>Comment</th>
                                                            <th>Created At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"comment-exercise\">@";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "exercise", [], "any", false, false, false, 77), "title", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                                            <td class=\"comment-content\">\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 78), "html", null, true);
            echo "\"</td>
                                                            <td class=\"comment-date\">";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 79), "m/d/Y"), "html", null, true);
            echo "</td>
                                                        </tr>
                                                </table>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                            </div>
                                            <div class=\"tab-pane\" id=\"program-comments\" role=\"tabpanel\" aria-labelledby=\"program-comments-tab\">
                                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "programComments", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 86
            echo "                                                <table class=\"comment-table\">
                                                    <thead>
                                                        <tr>
                                                            <th>Program</th>
                                                            <th>Comment</th>
                                                            <th>Created At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"comment-program\">@";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "program", [], "any", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                                                            <td class=\"comment-content\">\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 97), "html", null, true);
            echo "\"</td>
                                                            <td class=\"comment-date\">";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 98), "m/d/Y"), "html", null, true);
            echo "</td>
                                                        </tr>
                                                </table>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    </table>
                    <div class=\"back-list-button\">
                    <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
                    </div>
                </div>
        </div>
    </div>
</div>
    <!-- @TODO include fichier js pr supprimer ici -->
<script>\$('#objects-list a').on('click', function (e) {
  e.preventDefault()
  \$(this).tab('show')
})
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 110,  255 => 102,  245 => 98,  241 => 97,  237 => 96,  225 => 86,  221 => 85,  217 => 83,  207 => 79,  203 => 78,  199 => 77,  187 => 67,  183 => 66,  164 => 50,  158 => 47,  154 => 46,  149 => 44,  145 => 43,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
<div class=\"info-container\">

    <div class=\"info-body\">
        <p class=\"route d-flex justify-content-end\">User details</p>
        <p class=\"d-flex justify-content-end\">Created At : {{ user.createdAt|date(\"m/d/Y\") }}</p>

        <div class=\"info\">
            <table class=\"table table-striped table-bordered table-light text-center\">
                    <ul class=\"nav nav-tabs card-header-tabs\" id=\"objects-list\" role=\"tablist\">
                        <li class=\"nav-item-tab\">
                            <a class=\"nav-link active\"  href=\"#exercise-comments\" role=\"tab\" aria-controls=\"exercise-comments\" aria-selected=\"true\">Exercise Comments</a>
                        </li>
                        <li class=\"nav-item-tab\">
                            <a class=\"nav-link\"  href=\"#program-comments\" role=\"tab\" aria-controls=\"program-comments\" aria-selected=\"false\">Program Comments</a>
                        </li>
                    </ul>
        </div>
        <thead class=\"info-thead\">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Account Name</th>                
                <th>Available Time</th>
                <th>Image</th>
                <th>Mastery Level</th>
                <th>Score</th>
                <th>Actions</th>
                <th>Edit Password</th>
            </tr>
        </thead>    
        <tbody>
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.accountName }}</td>
                <td>{{ user.availableTime }}</td>
                <td><img src=\"{{ asset('uploads/user_img/'~ user.imgPath) }}\" alt=\"User Image Abloc\"></td>
                <td>{{ user.masteryLevel.title }}</td>
                <td>{{ user.score }}</td>
                <td>
                    <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning fas fa-edit\"></a>
                    {{ include('admin/user/_delete_small_form.html.twig') }}
                </td>
                <td>
                    <a href=\"{{ path('admin_user_edit_password', {'id': user.id}) }}\" class=\"btn btn-warning fas fa-key\"></a>
                </td>
            </tr>
        </tbody>
            </table>
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
                                            <div class=\"tab-pane active\" id=\"exercise-comments\" role=\"tabpanel\">
                                                {% for comment in user.exerciseComments %}
                                                <table class=\"table\">
                                                    <thead>
                                                        <tr>
                                                            <th>Exercise</th>
                                                            <th>Comment</th>
                                                            <th>Created At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"comment-exercise\">@{{ comment.exercise.title }}</td>
                                                            <td class=\"comment-content\">\"{{ comment.text }}\"</td>
                                                            <td class=\"comment-date\">{{ comment.createdAt|date(\"m/d/Y\") }}</td>
                                                        </tr>
                                                </table>
                                                {% endfor %}
                                            </div>
                                            <div class=\"tab-pane\" id=\"program-comments\" role=\"tabpanel\" aria-labelledby=\"program-comments-tab\">
                                                {% for comment in user.programComments %}
                                                <table class=\"comment-table\">
                                                    <thead>
                                                        <tr>
                                                            <th>Program</th>
                                                            <th>Comment</th>
                                                            <th>Created At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"comment-program\">@{{ comment.program.title }}</td>
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
                    <a href=\"{{ path('admin_user_index') }}\" button type=\"button\" class=\"btn btn-primary btn-block\">Back to list</a>
                    </div>
                </div>
        </div>
    </div>
</div>
    <!-- @TODO include fichier js pr supprimer ici -->
<script>\$('#objects-list a').on('click', function (e) {
  e.preventDefault()
  \$(this).tab('show')
})
</script>
{% endblock %}
", "admin/user/show.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/admin/user/show.html.twig");
    }
}
