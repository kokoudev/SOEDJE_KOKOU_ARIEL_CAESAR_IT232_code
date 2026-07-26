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

/* teacher_space/jurys.html.twig */
class __TwigTemplate_8425a1027dfa6ad3910b8cd51a890fcb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher_space/jurys.html.twig"));

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

        yield "Mes Jurys";
        
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
    <h4 class=\"fw-bold mb-1\">Mes Compositions de Jury</h4>
    <p class=\"text-muted small\">Détail complet des jurys auxquels vous participez avec vos collègues.</p>
</div>

<div class=\"row g-3\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["defenses"]) || array_key_exists("defenses", $context) ? $context["defenses"] : (function () { throw new RuntimeError('Variable "defenses" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["def"]) {
            // line 13
            yield "        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm rounded-4 p-3\">
                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                    <div>
                        <div class=\"fw-bold text-dark\">";
            // line 17
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
            yield "</div>
                        <div class=\"text-muted small\">";
            // line 18
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 18), "filiere", [], "any", false, false, false, 18), "html", null, true);
            yield "</div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"badge bg-primary-subtle text-primary mb-1\">";
            // line 21
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "dateDefense", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            yield "</div>
                        <div class=\"badge bg-secondary-subtle text-secondary\">";
            // line 22
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "timeDefense", [], "any", false, false, false, 22), "H:i"), "html", null, true);
            yield " — ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "room", [], "any", false, false, false, 22), "code", [], "any", false, false, false, 22), "html", null, true);
            yield "</div>
                    </div>
                </div>
                <p class=\"small text-muted fst-italic border-start border-primary ps-2 mb-3\">";
            // line 25
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 25), "theme", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>

                <div class=\"border-top pt-2 mt-1\">
                    <div class=\"small fw-semibold text-muted mb-2\">Composition du Jury</div>
                    <div class=\"d-flex flex-column gap-1\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted small\">Président</span>
                            <span class=\"fw-semibold small ";
            // line 32
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)))) {
                yield "text-success";
            }
            yield "\">
                                ";
            // line 33
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 33), "prenom", [], "any", false, false, false, 33), "html", null, true);
            yield "
                                ";
            // line 34
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)))) {
                yield "<i class=\"bi bi-check-circle-fill text-success ms-1\"></i>";
            }
            // line 35
            yield "                            </span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted small\">Rapporteur</span>
                            <span class=\"fw-semibold small ";
            // line 39
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "rapporteur", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)))) {
                yield "text-warning";
            }
            yield "\">
                                ";
            // line 40
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "rapporteur", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "rapporteur", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
            yield "
                                ";
            // line 41
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "rapporteur", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)))) {
                yield "<i class=\"bi bi-check-circle-fill text-warning ms-1\"></i>";
            }
            // line 42
            yield "                            </span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted small\">Examinateur</span>
                            <span class=\"fw-semibold small ";
            // line 46
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "examinateur", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)))) {
                yield "text-danger";
            }
            yield "\">
                                ";
            // line 47
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "examinateur", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "examinateur", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
            yield "
                                ";
            // line 48
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "examinateur", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)))) {
                yield "<i class=\"bi bi-check-circle-fill text-danger ms-1\"></i>";
            }
            // line 49
            yield "                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 55
        if (!$context['_iterated']) {
            // line 56
            yield "        <div class=\"col-12 text-center text-muted py-5\">
            Aucun jury affecté pour le moment.
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['def'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "teacher_space/jurys.html.twig";
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
        return array (  221 => 60,  211 => 56,  209 => 55,  199 => 49,  195 => 48,  189 => 47,  183 => 46,  177 => 42,  173 => 41,  167 => 40,  161 => 39,  155 => 35,  151 => 34,  145 => 33,  139 => 32,  129 => 25,  121 => 22,  117 => 21,  111 => 18,  105 => 17,  99 => 13,  94 => 12,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Mes Jurys{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <h4 class=\"fw-bold mb-1\">Mes Compositions de Jury</h4>
    <p class=\"text-muted small\">Détail complet des jurys auxquels vous participez avec vos collègues.</p>
</div>

<div class=\"row g-3\">
    {% for def in defenses %}
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm rounded-4 p-3\">
                <div class=\"d-flex justify-content-between align-items-start mb-2\">
                    <div>
                        <div class=\"fw-bold text-dark\">{{ def.student.nom }} {{ def.student.prenom }}</div>
                        <div class=\"text-muted small\">{{ def.student.filiere }}</div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"badge bg-primary-subtle text-primary mb-1\">{{ def.dateDefense|date(\x27d/m/Y\x27) }}</div>
                        <div class=\"badge bg-secondary-subtle text-secondary\">{{ def.timeDefense|date(\x27H:i\x27) }} — {{ def.room.code }}</div>
                    </div>
                </div>
                <p class=\"small text-muted fst-italic border-start border-primary ps-2 mb-3\">{{ def.student.theme }}</p>

                <div class=\"border-top pt-2 mt-1\">
                    <div class=\"small fw-semibold text-muted mb-2\">Composition du Jury</div>
                    <div class=\"d-flex flex-column gap-1\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted small\">Président</span>
                            <span class=\"fw-semibold small {% if teacher and def.president.id == teacher.id %}text-success{% endif %}\">
                                {{ def.president.nom }} {{ def.president.prenom }}
                                {% if teacher and def.president.id == teacher.id %}<i class=\"bi bi-check-circle-fill text-success ms-1\"></i>{% endif %}
                            </span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted small\">Rapporteur</span>
                            <span class=\"fw-semibold small {% if teacher and def.rapporteur.id == teacher.id %}text-warning{% endif %}\">
                                {{ def.rapporteur.nom }} {{ def.rapporteur.prenom }}
                                {% if teacher and def.rapporteur.id == teacher.id %}<i class=\"bi bi-check-circle-fill text-warning ms-1\"></i>{% endif %}
                            </span>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted small\">Examinateur</span>
                            <span class=\"fw-semibold small {% if teacher and def.examinateur.id == teacher.id %}text-danger{% endif %}\">
                                {{ def.examinateur.nom }} {{ def.examinateur.prenom }}
                                {% if teacher and def.examinateur.id == teacher.id %}<i class=\"bi bi-check-circle-fill text-danger ms-1\"></i>{% endif %}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"col-12 text-center text-muted py-5\">
            Aucun jury affecté pour le moment.
        </div>
    {% endfor %}
</div>
{% endblock %}
", "teacher_space/jurys.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\teacher_space\\jurys.html.twig");
    }
}
