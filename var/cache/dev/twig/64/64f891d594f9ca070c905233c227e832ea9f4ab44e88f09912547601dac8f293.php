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

/* emails/recovery.html.twig */
class __TwigTemplate_3dc25c34e7acbe41c07ada6ba618c0ff1c3ea9b76ca2fa51ea4b8c8da20e8909 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/recovery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/recovery.html.twig"));

        // line 1
        echo "<div class=\"wrapper\">
<p>Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["accountName"]) || array_key_exists("accountName", $context) ? $context["accountName"] : (function () { throw new RuntimeError('Variable "accountName" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " ! Votre nouveau mot de passe est : <strong>";
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</strong></p>

<p>Connectez-vous à <a href=\"http://3.84.28.117/connexion\">votre compte</a> et changez le mot de passe dans votre profil.</p>

<p>À bientôt !</p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/recovery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
<p>Bonjour {{ accountName }} ! Votre nouveau mot de passe est : <strong>{{ password }}</strong></p>

<p>Connectez-vous à <a href=\"http://3.84.28.117/connexion\">votre compte</a> et changez le mot de passe dans votre profil.</p>

<p>À bientôt !</p>
</div>", "emails/recovery.html.twig", "/Users/richard/Documents/WEB/APOTHEOSE/ablock V2./templates/emails/recovery.html.twig");
    }
}
