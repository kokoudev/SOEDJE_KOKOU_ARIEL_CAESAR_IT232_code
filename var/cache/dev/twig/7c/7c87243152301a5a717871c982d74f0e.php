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

/* admin/dashboard.html.twig */
class __TwigTemplate_41f4ec92aae8e29f343cfd28b25e3985 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Tableau de bord - Administrateur";
        
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
        <h4 class=\"fw-bold mb-1\">Tableau de Bord Administrateur</h4>
        <p class=\"text-muted small mb-0\">Aperçu global du système et statistiques des soutenances</p>
    </div>
</div>

<div class=\"row g-3 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Étudiants</div>
                <div class=\"fs-3 fw-bold text-dark\">";
        // line 18
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalStudents"]) || array_key_exists("totalStudents", $context) ? $context["totalStudents"] : (function () { throw new RuntimeError('Variable "totalStudents" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</div>
            </div>
            <div class=\"bg-primary-subtle text-primary p-3 rounded-circle\">
                <i class=\"bi bi-people fs-4\"></i>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Enseignants</div>
                <div class=\"fs-3 fw-bold text-dark\">";
        // line 29
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalTeachers"]) || array_key_exists("totalTeachers", $context) ? $context["totalTeachers"] : (function () { throw new RuntimeError('Variable "totalTeachers" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</div>
            </div>
            <div class=\"bg-success-subtle text-success p-3 rounded-circle\">
                <i class=\"bi bi-person-badge fs-4\"></i>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Salles</div>
                <div class=\"fs-3 fw-bold text-dark\">";
        // line 40
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRooms"]) || array_key_exists("totalRooms", $context) ? $context["totalRooms"] : (function () { throw new RuntimeError('Variable "totalRooms" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</div>
            </div>
            <div class=\"bg-warning-subtle text-warning p-3 rounded-circle\">
                <i class=\"bi bi-door-closed fs-4\"></i>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Soutenances</div>
                <div class=\"fs-3 fw-bold text-dark\">";
        // line 51
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDefenses"]) || array_key_exists("totalDefenses", $context) ? $context["totalDefenses"] : (function () { throw new RuntimeError('Variable "totalDefenses" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</div>
            </div>
            <div class=\"bg-info-subtle text-info p-3 rounded-circle\">
                <i class=\"bi bi-calendar-event fs-4\"></i>
            </div>
        </div>
    </div>
</div>

<div class=\"row g-4\">
    <div class=\"col-md-8\">
        <div class=\"card border-0 shadow-sm rounded-4 p-3\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h6 class=\"fw-bold mb-0\">Dernières Soutenances Programmées</h6>
                <a href=\"";
        // line 65
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_index");
        yield "\" class=\"btn btn-sm btn-link text-decoration-none\">Voir tout</a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle small mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Étudiant</th>
                            <th>Date & Heure</th>
                            <th>Salle</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestDefenses"]) || array_key_exists("latestDefenses", $context) ? $context["latestDefenses"] : (function () { throw new RuntimeError('Variable "latestDefenses" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["def"]) {
            // line 78
            yield "                            <tr>
                                <td class=\"fw-medium\">";
            // line 79
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 79), "nom", [], "any", false, false, false, 79), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 79), "prenom", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                <td>";
            // line 80
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "dateDefense", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
            yield " à ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "timeDefense", [], "any", false, false, false, 80), "H:i"), "html", null, true);
            yield "</td>
                                <td><span class=\"badge bg-secondary-subtle text-secondary\">";
            // line 81
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "room", [], "any", false, false, false, 81), "code", [], "any", false, false, false, 81), "html", null, true);
            yield "</span></td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "                            <tr>
                                <td colspan=\"3\" class=\"text-center text-muted py-3\">Aucune soutenance programmée pour le moment.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['def'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 88
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"card border-0 shadow-sm rounded-4 p-3\">
            <h6 class=\"fw-bold mb-3\">Raccourcis Administrateur</h6>
            <div class=\"d-grid gap-2\">
                <a href=\"";
        // line 98
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_new");
        yield "\" class=\"btn btn-outline-primary text-start p-2 d-flex align-items-center gap-2\">
                    <i className=\"bi bi-calendar-plus fs-5\"></i>
                    <div>
                        <div class=\"fw-semibold\">Programmer une soutenance</div>
                        <div class=\"text-muted small\">Affecter jury et salle sans conflit</div>
                    </div>
                </a>
                <a href=\"";
        // line 105
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_new");
        yield "\" class=\"btn btn-outline-secondary text-start p-2 d-flex align-items-center gap-2\">
                    <i className=\"bi bi-person-plus fs-5\"></i>
                    <div>
                        <div class=\"fw-semibold\">Inscrire un étudiant</div>
                        <div class=\"text-muted small\">Ajouter mémoire et thème</div>
                    </div>
                </a>
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
        return "admin/dashboard.html.twig";
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
        return array (  235 => 105,  225 => 98,  213 => 88,  203 => 84,  201 => 83,  194 => 81,  188 => 80,  182 => 79,  179 => 78,  174 => 77,  159 => 65,  142 => 51,  128 => 40,  114 => 29,  100 => 18,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Tableau de bord - Administrateur{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h4 class=\"fw-bold mb-1\">Tableau de Bord Administrateur</h4>
        <p class=\"text-muted small mb-0\">Aperçu global du système et statistiques des soutenances</p>
    </div>
</div>

<div class=\"row g-3 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Étudiants</div>
                <div class=\"fs-3 fw-bold text-dark\">{{ totalStudents }}</div>
            </div>
            <div class=\"bg-primary-subtle text-primary p-3 rounded-circle\">
                <i class=\"bi bi-people fs-4\"></i>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Enseignants</div>
                <div class=\"fs-3 fw-bold text-dark\">{{ totalTeachers }}</div>
            </div>
            <div class=\"bg-success-subtle text-success p-3 rounded-circle\">
                <i class=\"bi bi-person-badge fs-4\"></i>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Salles</div>
                <div class=\"fs-3 fw-bold text-dark\">{{ totalRooms }}</div>
            </div>
            <div class=\"bg-warning-subtle text-warning p-3 rounded-circle\">
                <i class=\"bi bi-door-closed fs-4\"></i>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
            <div>
                <div class=\"text-muted small fw-medium\">Soutenances</div>
                <div class=\"fs-3 fw-bold text-dark\">{{ totalDefenses }}</div>
            </div>
            <div class=\"bg-info-subtle text-info p-3 rounded-circle\">
                <i class=\"bi bi-calendar-event fs-4\"></i>
            </div>
        </div>
    </div>
</div>

<div class=\"row g-4\">
    <div class=\"col-md-8\">
        <div class=\"card border-0 shadow-sm rounded-4 p-3\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h6 class=\"fw-bold mb-0\">Dernières Soutenances Programmées</h6>
                <a href=\"{{ path(\x27admin_defense_index\x27) }}\" class=\"btn btn-sm btn-link text-decoration-none\">Voir tout</a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle small mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Étudiant</th>
                            <th>Date & Heure</th>
                            <th>Salle</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for def in latestDefenses %}
                            <tr>
                                <td class=\"fw-medium\">{{ def.student.nom }} {{ def.student.prenom }}</td>
                                <td>{{ def.dateDefense|date(\x27d/m/Y\x27) }} à {{ def.timeDefense|date(\x27H:i\x27) }}</td>
                                <td><span class=\"badge bg-secondary-subtle text-secondary\">{{ def.room.code }}</span></td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"3\" class=\"text-center text-muted py-3\">Aucune soutenance programmée pour le moment.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"card border-0 shadow-sm rounded-4 p-3\">
            <h6 class=\"fw-bold mb-3\">Raccourcis Administrateur</h6>
            <div class=\"d-grid gap-2\">
                <a href=\"{{ path(\x27admin_defense_new\x27) }}\" class=\"btn btn-outline-primary text-start p-2 d-flex align-items-center gap-2\">
                    <i className=\"bi bi-calendar-plus fs-5\"></i>
                    <div>
                        <div class=\"fw-semibold\">Programmer une soutenance</div>
                        <div class=\"text-muted small\">Affecter jury et salle sans conflit</div>
                    </div>
                </a>
                <a href=\"{{ path(\x27admin_student_new\x27) }}\" class=\"btn btn-outline-secondary text-start p-2 d-flex align-items-center gap-2\">
                    <i className=\"bi bi-person-plus fs-5\"></i>
                    <div>
                        <div class=\"fw-semibold\">Inscrire un étudiant</div>
                        <div class=\"text-muted small\">Ajouter mémoire et thème</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\admin\\dashboard.html.twig");
    }
}
