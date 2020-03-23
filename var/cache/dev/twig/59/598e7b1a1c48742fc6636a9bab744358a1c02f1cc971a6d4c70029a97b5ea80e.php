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

/* admin/security/login.html.twig */
class __TwigTemplate_c1e89f472b335c4283fd91ddaeacb0bfa63e82e37b164a495be6aa6d99324adc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<div class=\"login-container d-flex justify-content-center\">
\t<div class=\"login-card\">
\t\t<div class=\"login-card-header flex-column\">
\t\t\t<h3>Sign In</h3>
\t\t</div>
\t\t<div class=\"login-card-body\">
        \t<form method=\"post\">
\t\t\t\t<div class=\"login-input-group form-group\">
\t\t\t\t\t<div class=\"login-input-group-prepend\">
\t\t\t\t\t<span class=\"login-input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-input-group form-group\">
\t\t\t\t\t<div class=\"login-input-group-prepend\">
\t\t\t\t\t<span class=\"login-input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-form-group\">
\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn center login_btn\">
\t\t\t\t</div>
\t\t\t\t<div class=\"hidden-content\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"login-card-footer\">
\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("password_recovery");
        echo "\">Forgot your password?</a>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"login-container d-flex justify-content-center\">
\t<div class=\"login-card\">
\t\t<div class=\"login-card-header flex-column\">
\t\t\t<h3>Sign In</h3>
\t\t</div>
\t\t<div class=\"login-card-body\">
        \t<form method=\"post\">
\t\t\t\t<div class=\"login-input-group form-group\">
\t\t\t\t\t<div class=\"login-input-group-prepend\">
\t\t\t\t\t<span class=\"login-input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-input-group form-group\">
\t\t\t\t\t<div class=\"login-input-group-prepend\">
\t\t\t\t\t<span class=\"login-input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-form-group\">
\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn center login_btn\">
\t\t\t\t</div>
\t\t\t\t<div class=\"hidden-content\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"login-card-footer\">
\t\t<a href=\"{{ path('password_recovery') }}\">Forgot your password?</a>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "admin/security/login.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/admin/security/login.html.twig");
    }
}
