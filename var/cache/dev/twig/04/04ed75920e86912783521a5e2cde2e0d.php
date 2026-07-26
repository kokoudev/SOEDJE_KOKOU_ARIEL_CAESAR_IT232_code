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

/* teacher_space/dashboard.html.twig */
class __TwigTemplate_8338b0e8e065de88647d818d5fec0b23 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher_space/dashboard.html.twig"));

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

        yield "Mon Espace Enseignant";
        
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
        yield "<div class=\"mb-4\">
    <h4 class=\"fw-bold mb-1\">Bonjour, ";
        // line 7
        yield (string) (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 7, $this->source); })()), "prenom", [], "any", false, false, false, 7) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "prenom", [], "any", false, false, false, 7) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "nom", [], "any", false, false, false, 7)), "html", null, true)));
        yield "</h4>
    <p class=\"text-muted small\">Voici un récapitulatif de vos prochaines participations aux jurys de soutenance.</p>
</div>

";
        // line 11
        if ( !(($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "    <div class=\"alert alert-warning rounded-3\">
        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
        Votre compte enseignant n\x27est pas encore lié à un profil d\x27enseignant. Contactez l\x27administrateur.
    </div>
";
        } else {
            // line 17
            yield "    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4\">
            <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
                <div>
                    <div class=\"text-muted small fw-medium\">Soutenances assignées</div>
                    <div class=\"fs-3 fw-bold\">";
            // line 22
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["defenses"]) || array_key_exists("defenses", $context) ? $context["defenses"] : (function () { throw new RuntimeError('Variable "defenses" does not exist.', 22, $this->source); })())), "html", null, true);
            yield "</div>
                </div>
                <div class=\"bg-primary-subtle text-primary p-3 rounded-circle\">
                    <i class=\"bi bi-calendar-event fs-4\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
                <div>
                    <div class=\"text-muted small fw-medium\">Spécialité</div>
                    <div class=\"fw-semibold text-dark\">";
            // line 33
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 33, $this->source); })()), "specialite", [], "any", false, false, false, 33), "html", null, true);
            yield "</div>
                </div>
                <div class=\"bg-success-subtle text-success p-3 rounded-circle\">
                    <i class=\"bi bi-award fs-4\"></i>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
        <div class=\"card-header bg-white border-bottom py-3\">
            <h6 class=\"fw-bold mb-0\">Mes prochaines Soutenances</h6>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Étudiant</th>
                        <th>Date & Heure</th>
                        <th>Salle</th>
                        <th>Mon Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["defenses"]) || array_key_exists("defenses", $context) ? $context["defenses"] : (function () { throw new RuntimeError('Variable "defenses" does not exist.', 57, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["def"]) {
                // line 58
                yield "                        <tr>
                            <td>
                                <div class=\"fw-semibold\">";
                // line 60
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
                yield " ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
                yield "</div>
                                <div class=\"text-muted small text-truncate\" style=\"max-width: 220px;\">";
                // line 61
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 61), "theme", [], "any", false, false, false, 61), "html", null, true);
                yield "</div>
                            </td>
                            <td>
                                <div class=\"fw-semibold\">";
                // line 64
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "dateDefense", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                yield "</div>
                                <span class=\"badge bg-primary-subtle text-primary\">";
                // line 65
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "timeDefense", [], "any", false, false, false, 65), "H:i"), "html", null, true);
                yield "</span>
                            </td>
                            <td class=\"fw-medium text-secondary\">";
                // line 67
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "room", [], "any", false, false, false, 67), "code", [], "any", false, false, false, 67), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 69
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69))) {
                    // line 70
                    yield "                                    <span class=\"badge bg-success-subtle text-success\">Président</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 71
$context["def"], "rapporteur", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71))) {
                    // line 72
                    yield "                                    <span class=\"badge bg-warning-subtle text-warning\">Rapporteur</span>
                                ";
                } else {
                    // line 74
                    yield "                                    <span class=\"badge bg-danger-subtle text-danger\">Examinateur</span>
                                ";
                }
                // line 76
                yield "                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            // line 78
            if (!$context['_iterated']) {
                // line 79
                yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted py-4\">Aucune soutenance affectée pour l\x27instant.</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['def'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 83
            yield "                </tbody>
            </table>
        </div>
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "teacher_space/dashboard.html.twig";
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
        return array (  221 => 83,  211 => 79,  209 => 78,  203 => 76,  199 => 74,  195 => 72,  193 => 71,  190 => 70,  188 => 69,  183 => 67,  178 => 65,  174 => 64,  168 => 61,  162 => 60,  158 => 58,  153 => 57,  126 => 33,  112 => 22,  105 => 17,  98 => 12,  96 => 11,  89 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Mon Espace Enseignant{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <h4 class=\"fw-bold mb-1\">Bonjour, {{ teacher ? teacher.prenom ~ \x27 \x27 ~ teacher.nom : app.user.prenom ~ \x27 \x27 ~ app.user.nom }}</h4>
    <p class=\"text-muted small\">Voici un récapitulatif de vos prochaines participations aux jurys de soutenance.</p>
</div>

{% if not teacher %}
    <div class=\"alert alert-warning rounded-3\">
        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
        Votre compte enseignant n\x27est pas encore lié à un profil d\x27enseignant. Contactez l\x27administrateur.
    </div>
{% else %}
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-4\">
            <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
                <div>
                    <div class=\"text-muted small fw-medium\">Soutenances assignées</div>
                    <div class=\"fs-3 fw-bold\">{{ defenses|length }}</div>
                </div>
                <div class=\"bg-primary-subtle text-primary p-3 rounded-circle\">
                    <i class=\"bi bi-calendar-event fs-4\"></i>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"stat-card p-3 d-flex align-items-center justify-content-between\">
                <div>
                    <div class=\"text-muted small fw-medium\">Spécialité</div>
                    <div class=\"fw-semibold text-dark\">{{ teacher.specialite }}</div>
                </div>
                <div class=\"bg-success-subtle text-success p-3 rounded-circle\">
                    <i class=\"bi bi-award fs-4\"></i>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
        <div class=\"card-header bg-white border-bottom py-3\">
            <h6 class=\"fw-bold mb-0\">Mes prochaines Soutenances</h6>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Étudiant</th>
                        <th>Date & Heure</th>
                        <th>Salle</th>
                        <th>Mon Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    {% for def in defenses %}
                        <tr>
                            <td>
                                <div class=\"fw-semibold\">{{ def.student.nom }} {{ def.student.prenom }}</div>
                                <div class=\"text-muted small text-truncate\" style=\"max-width: 220px;\">{{ def.student.theme }}</div>
                            </td>
                            <td>
                                <div class=\"fw-semibold\">{{ def.dateDefense|date(\x27d/m/Y\x27) }}</div>
                                <span class=\"badge bg-primary-subtle text-primary\">{{ def.timeDefense|date(\x27H:i\x27) }}</span>
                            </td>
                            <td class=\"fw-medium text-secondary\">{{ def.room.code }}</td>
                            <td>
                                {% if def.president.id == teacher.id %}
                                    <span class=\"badge bg-success-subtle text-success\">Président</span>
                                {% elseif def.rapporteur.id == teacher.id %}
                                    <span class=\"badge bg-warning-subtle text-warning\">Rapporteur</span>
                                {% else %}
                                    <span class=\"badge bg-danger-subtle text-danger\">Examinateur</span>
                                {% endif %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted py-4\">Aucune soutenance affectée pour l\x27instant.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endif %}
{% endblock %}
", "teacher_space/dashboard.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\teacher_space\\dashboard.html.twig");
    }
}
