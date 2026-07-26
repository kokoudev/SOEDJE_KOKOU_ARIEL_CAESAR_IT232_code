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

/* teacher_space/defenses.html.twig */
class __TwigTemplate_ad331f456537d44c283f85a6328a9607 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher_space/defenses.html.twig"));

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

        yield "Mes Soutenances";
        
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
    <h4 class=\"fw-bold mb-1\">Mes Soutenances</h4>
    <p class=\"text-muted small\">Liste complète des soutenances auxquelles vous participez en tant que membre du jury.</p>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Étudiant</th>
                    <th>Thème du mémoire</th>
                    <th>Date & Heure</th>
                    <th>Salle</th>
                    <th>Rôle</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["defenses"]) || array_key_exists("defenses", $context) ? $context["defenses"] : (function () { throw new RuntimeError('Variable "defenses" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["def"]) {
            // line 25
            yield "                    <tr>
                        <td class=\"fw-semibold\">";
            // line 26
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td class=\"text-muted small\" style=\"max-width: 250px;\">";
            // line 27
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 27), "theme", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>
                            <strong>";
            // line 29
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "dateDefense", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            yield "</strong><br>
                            <span class=\"text-primary\">";
            // line 30
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "timeDefense", [], "any", false, false, false, 30), "H:i"), "html", null, true);
            yield "</span>
                        </td>
                        <td>";
            // line 32
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "room", [], "any", false, false, false, 32), "code", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 34
            if (((($tmp = (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)))) {
                // line 35
                yield "                                <span class=\"badge bg-success-subtle text-success\">Président</span>
                            ";
            } elseif (((($tmp =             // line 36
(isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "rapporteur", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)))) {
                // line 37
                yield "                                <span class=\"badge bg-warning-subtle text-warning\">Rapporteur</span>
                            ";
            } else {
                // line 39
                yield "                                <span class=\"badge bg-danger-subtle text-danger\">Examinateur</span>
                            ";
            }
            // line 41
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune soutenance pour le moment.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['def'], $context['_parent'], $context['_iterated']);
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
        return "teacher_space/defenses.html.twig";
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
        return array (  172 => 48,  162 => 44,  160 => 43,  154 => 41,  150 => 39,  146 => 37,  144 => 36,  141 => 35,  139 => 34,  134 => 32,  129 => 30,  125 => 29,  120 => 27,  114 => 26,  111 => 25,  106 => 24,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Mes Soutenances{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <h4 class=\"fw-bold mb-1\">Mes Soutenances</h4>
    <p class=\"text-muted small\">Liste complète des soutenances auxquelles vous participez en tant que membre du jury.</p>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Étudiant</th>
                    <th>Thème du mémoire</th>
                    <th>Date & Heure</th>
                    <th>Salle</th>
                    <th>Rôle</th>
                </tr>
            </thead>
            <tbody>
                {% for def in defenses %}
                    <tr>
                        <td class=\"fw-semibold\">{{ def.student.nom }} {{ def.student.prenom }}</td>
                        <td class=\"text-muted small\" style=\"max-width: 250px;\">{{ def.student.theme }}</td>
                        <td>
                            <strong>{{ def.dateDefense|date(\x27d/m/Y\x27) }}</strong><br>
                            <span class=\"text-primary\">{{ def.timeDefense|date(\x27H:i\x27) }}</span>
                        </td>
                        <td>{{ def.room.code }}</td>
                        <td>
                            {% if teacher and def.president.id == teacher.id %}
                                <span class=\"badge bg-success-subtle text-success\">Président</span>
                            {% elseif teacher and def.rapporteur.id == teacher.id %}
                                <span class=\"badge bg-warning-subtle text-warning\">Rapporteur</span>
                            {% else %}
                                <span class=\"badge bg-danger-subtle text-danger\">Examinateur</span>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune soutenance pour le moment.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "teacher_space/defenses.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\teacher_space\\defenses.html.twig");
    }
}
