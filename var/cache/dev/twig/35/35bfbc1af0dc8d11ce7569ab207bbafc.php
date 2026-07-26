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

/* student/index.html.twig */
class __TwigTemplate_b50b760af7fc29f86141bf6774ea075f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

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

        yield "Gestion des Étudiants";
        
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
        <h4 class=\"fw-bold mb-1\">Gestion des Étudiants</h4>
        <p class=\"text-muted small mb-0\">Enregistrez et consultez la liste des étudiants et thèmes de mémoire</p>
    </div>
    <a href=\"";
        // line 11
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_new");
        yield "\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bi bi-plus-lg\"></i> Ajouter un étudiant
    </a>
</div>

<div class=\"card border-0 shadow-sm rounded-4 p-3 mb-4\">
    <form method=\"get\" action=\"";
        // line 17
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_index");
        yield "\" class=\"row g-2\">
        <div class=\"col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-text bg-white border-end-0\"><i class=\"bi bi-search text-muted\"></i></span>
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control border-start-0 ps-0\" placeholder=\"Rechercher par nom ou prénom...\">
            </div>
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-secondary w-100\">Rechercher</button>
        </div>
        ";
        // line 27
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            <div class=\"col-md-2\">
                <a href=\"";
            // line 29
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_index");
            yield "\" class=\"btn btn-outline-secondary w-100\">Réinitialiser</a>
            </div>
        ";
        }
        // line 32
        yield "    </form>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Nom & Prénom</th>
                    <th>Email</th>
                    <th>Filière</th>
                    <th>Thème de mémoire</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 49
            yield "                    <tr>
                        <td class=\"fw-semibold\">";
            // line 50
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "nom", [], "any", false, false, false, 50), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "prenom", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                        <td class=\"text-muted\">";
            // line 51
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                        <td><span class=\"badge bg-light text-dark border\">";
            // line 52
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "filiere", [], "any", false, false, false, 52), "html", null, true);
            yield "</span></td>
                        <td style=\"max-width: 300px;\" class=\"text-truncate\">";
            // line 53
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "theme", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td class=\"text-end\">
                            <a href=\"";
            // line 55
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 58
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm(\x27Confirmer la suppression de cet étudiant ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 59
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 59))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger\"><i class=\"bi bi-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucun étudiant trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['student'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 69
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
        return "student/index.html.twig";
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
        return array (  206 => 69,  196 => 65,  194 => 64,  184 => 59,  180 => 58,  174 => 55,  169 => 53,  165 => 52,  161 => 51,  155 => 50,  152 => 49,  147 => 48,  129 => 32,  123 => 29,  120 => 28,  118 => 27,  109 => 21,  102 => 17,  93 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Gestion des Étudiants{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h4 class=\"fw-bold mb-1\">Gestion des Étudiants</h4>
        <p class=\"text-muted small mb-0\">Enregistrez et consultez la liste des étudiants et thèmes de mémoire</p>
    </div>
    <a href=\"{{ path(\x27admin_student_new\x27) }}\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bi bi-plus-lg\"></i> Ajouter un étudiant
    </a>
</div>

<div class=\"card border-0 shadow-sm rounded-4 p-3 mb-4\">
    <form method=\"get\" action=\"{{ path(\x27admin_student_index\x27) }}\" class=\"row g-2\">
        <div class=\"col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-text bg-white border-end-0\"><i class=\"bi bi-search text-muted\"></i></span>
                <input type=\"text\" name=\"q\" value=\"{{ search }}\" class=\"form-control border-start-0 ps-0\" placeholder=\"Rechercher par nom ou prénom...\">
            </div>
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-secondary w-100\">Rechercher</button>
        </div>
        {% if search %}
            <div class=\"col-md-2\">
                <a href=\"{{ path(\x27admin_student_index\x27) }}\" class=\"btn btn-outline-secondary w-100\">Réinitialiser</a>
            </div>
        {% endif %}
    </form>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Nom & Prénom</th>
                    <th>Email</th>
                    <th>Filière</th>
                    <th>Thème de mémoire</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for student in students %}
                    <tr>
                        <td class=\"fw-semibold\">{{ student.nom }} {{ student.prenom }}</td>
                        <td class=\"text-muted\">{{ student.email }}</td>
                        <td><span class=\"badge bg-light text-dark border\">{{ student.filiere }}</span></td>
                        <td style=\"max-width: 300px;\" class=\"text-truncate\">{{ student.theme }}</td>
                        <td class=\"text-end\">
                            <a href=\"{{ path(\x27admin_student_edit\x27, {\x27id\x27: student.id}) }}\" class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path(\x27admin_student_delete\x27, {\x27id\x27: student.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm(\x27Confirmer la suppression de cet étudiant ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ student.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger\"><i class=\"bi bi-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucun étudiant trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "student/index.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\student\\index.html.twig");
    }
}
