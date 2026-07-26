<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* security/login.html.twig */
class __TwigTemplate_94282344a1f176f7b0cb95e2b1926447 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion - SoutenancePro";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"row justify-content-center align-items-center min-vh-75 mt-5\">
    <div class=\"col-md-5 col-lg-4\">
        <div class=\"card border-0 shadow-lg p-4 rounded-4\">
            <div class=\"card-body\">
                <div class=\"text-center mb-4\">
                    <div class=\"bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3\" style=\"width: 56px; height: 56px;\">
                        <i class=\"bi bi-mortarboard-fill fs-3\"></i>
                    </div>
                    <h4 class=\"fw-bold text-dark mb-1\">SoutenancePro</h4>
                    <p class=\"text-muted small\">Portail de Gestion des Soutenances</p>
                </div>

                ";
        // line 18
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    <div class=\"alert alert-danger small py-2 rounded-3 mb-3\">
                        ";
            // line 20
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageData", [], "any", false, false, false, 20), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 23
        yield "
                <form method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"inputEmail\" class=\"form-label text-muted small fw-medium\">Adresse Email Utilisateur</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\"><i class=\"bi bi-envelope\"></i></span>
                            <input type=\"email\" value=\"";
        // line 29
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control border-start-0\" placeholder=\"nom@univ.edu\" autocomplete=\"email\" required autofocus>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"inputPassword\" class=\"form-label text-muted small fw-medium\">Mot de passe</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\"><i class=\"bi bi-lock\"></i></span>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control border-start-0\" placeholder=\"••••••••\" autocomplete=\"current-password\" required>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2 mb-3 fw-semibold\">
                        Se connecter
                    </button>
                </form>

                <hr class=\"my-3 text-muted\">

                <div class=\"bg-light p-3 rounded-3 small\">
                    <div class=\"fw-semibold mb-1\">Comptes de démonstration :</div>
                    <div class=\"text-muted\"><strong>Admin :</strong> admin@univ.edu / admin123</div>
                    <div class=\"text-muted\"><strong>Enseignant :</strong> k.adjayi@univ.edu / teacher123</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  134 => 41,  119 => 29,  111 => 23,  105 => 20,  102 => 19,  100 => 18,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Connexion - SoutenancePro{% endblock %}

{% block body %}
<div class=\"row justify-content-center align-items-center min-vh-75 mt-5\">
    <div class=\"col-md-5 col-lg-4\">
        <div class=\"card border-0 shadow-lg p-4 rounded-4\">
            <div class=\"card-body\">
                <div class=\"text-center mb-4\">
                    <div class=\"bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3\" style=\"width: 56px; height: 56px;\">
                        <i class=\"bi bi-mortarboard-fill fs-3\"></i>
                    </div>
                    <h4 class=\"fw-bold text-dark mb-1\">SoutenancePro</h4>
                    <p class=\"text-muted small\">Portail de Gestion des Soutenances</p>
                </div>

                {% if error %}
                    <div class=\"alert alert-danger small py-2 rounded-3 mb-3\">
                        {{ error.messageKey|trans(error.messageData, \x27security\x27) }}
                    </div>
                {% endif %}

                <form method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"inputEmail\" class=\"form-label text-muted small fw-medium\">Adresse Email Utilisateur</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\"><i class=\"bi bi-envelope\"></i></span>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control border-start-0\" placeholder=\"nom@univ.edu\" autocomplete=\"email\" required autofocus>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"inputPassword\" class=\"form-label text-muted small fw-medium\">Mot de passe</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\"><i class=\"bi bi-lock\"></i></span>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control border-start-0\" placeholder=\"••••••••\" autocomplete=\"current-password\" required>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(\x27authenticate\x27) }}\">

                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2 mb-3 fw-semibold\">
                        Se connecter
                    </button>
                </form>

                <hr class=\"my-3 text-muted\">

                <div class=\"bg-light p-3 rounded-3 small\">
                    <div class=\"fw-semibold mb-1\">Comptes de démonstration :</div>
                    <div class=\"text-muted\"><strong>Admin :</strong> admin@univ.edu / admin123</div>
                    <div class=\"text-muted\"><strong>Enseignant :</strong> k.adjayi@univ.edu / teacher123</div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\security\\login.html.twig");
    }
}
