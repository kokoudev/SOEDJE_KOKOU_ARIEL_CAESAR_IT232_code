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

/* room/index.html.twig */
class __TwigTemplate_bd560753e3fa5bb86cd74b4d07551cac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

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

        yield "Gestion des Salles";
        
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
        yield "<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h4 class=\"fw-bold mb-1\">Gestion des Salles</h4>
        <p class=\"text-muted small mb-0\">Configuration des espaces et capacités d\x27accueil pour soutenances</p>
    </div>
    <a href=\"";
        // line 11
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_room_new");
        yield "\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bi bi-plus-lg\"></i> Ajouter une salle
    </a>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Code Salle</th>
                    <th>Capacité</th>
                    <th>Localisation</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 29
            yield "                    <tr>
                        <td class=\"fw-bold text-primary\">";
            // line 30
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "code", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td><span class=\"badge bg-secondary-subtle text-secondary\">";
            // line 31
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "capacite", [], "any", false, false, false, 31), "html", null, true);
            yield " places</span></td>
                        <td class=\"text-muted\">";
            // line 32
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "localisation", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td class=\"text-end\">
                            <a href=\"";
            // line 34
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_room_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 37
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_room_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm(\x27Supprimer cette salle ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 38
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 38))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger\"><i class=\"bi bi-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center text-muted py-4\">Aucune salle disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 48
        yield "            </tbody>
        </table>
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
        return "room/index.html.twig";
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
        return array (  166 => 48,  156 => 44,  154 => 43,  144 => 38,  140 => 37,  134 => 34,  129 => 32,  125 => 31,  121 => 30,  118 => 29,  113 => 28,  93 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Gestion des Salles{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h4 class=\"fw-bold mb-1\">Gestion des Salles</h4>
        <p class=\"text-muted small mb-0\">Configuration des espaces et capacités d\x27accueil pour soutenances</p>
    </div>
    <a href=\"{{ path(\x27admin_room_new\x27) }}\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bi bi-plus-lg\"></i> Ajouter une salle
    </a>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Code Salle</th>
                    <th>Capacité</th>
                    <th>Localisation</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for room in rooms %}
                    <tr>
                        <td class=\"fw-bold text-primary\">{{ room.code }}</td>
                        <td><span class=\"badge bg-secondary-subtle text-secondary\">{{ room.capacite }} places</span></td>
                        <td class=\"text-muted\">{{ room.localisation }}</td>
                        <td class=\"text-end\">
                            <a href=\"{{ path(\x27admin_room_edit\x27, {\x27id\x27: room.id}) }}\" class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path(\x27admin_room_delete\x27, {\x27id\x27: room.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm(\x27Supprimer cette salle ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ room.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger\"><i class=\"bi bi-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center text-muted py-4\">Aucune salle disponible.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "room/index.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\room\\index.html.twig");
    }
}
