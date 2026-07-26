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

/* defense/index.html.twig */
class __TwigTemplate_91ceee5f70c24571b863a3da8cf43f77 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "defense/index.html.twig"));

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

        yield "Programme des Soutenances";
        
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
        <h4 class=\"fw-bold mb-1\">Programme des Soutenances</h4>
        <p class=\"text-muted small mb-0\">Calendrier des soutenances avec jurys et salles assignés</p>
    </div>
    <a href=\"";
        // line 11
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_new");
        yield "\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bi bi-calendar-plus\"></i> Programmer une soutenance
    </a>
</div>

<div class=\"card border-0 shadow-sm rounded-4 p-3 mb-4\">
    <form method=\"get\" action=\"";
        // line 17
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_index");
        yield "\" class=\"row g-2 align-items-center\">
        <div class=\"col-md-4\">
            <label class=\"form-label small text-muted\">Filtrer par date</label>
            <input type=\"date\" name=\"date\" value=\"";
        // line 20
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateFilter"]) || array_key_exists("dateFilter", $context) ? $context["dateFilter"] : (function () { throw new RuntimeError('Variable "dateFilter" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\">
        </div>
        <div class=\"col-md-2 pt-3\">
            <button type=\"submit\" class=\"btn btn-secondary w-100 mt-3\">Filtrer</button>
        </div>
        ";
        // line 25
        if ((($tmp = (isset($context["dateFilter"]) || array_key_exists("dateFilter", $context) ? $context["dateFilter"] : (function () { throw new RuntimeError('Variable "dateFilter" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            <div class=\"col-md-2 pt-3\">
                <a href=\"";
            // line 27
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_index");
            yield "\" class=\"btn btn-outline-secondary w-100 mt-3\">Réinitialiser</a>
            </div>
        ";
        }
        // line 30
        yield "    </form>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Étudiant</th>
                    <th>Thème</th>
                    <th>Date & Heure</th>
                    <th>Salle</th>
                    <th>Jury</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["defenses"]) || array_key_exists("defenses", $context) ? $context["defenses"] : (function () { throw new RuntimeError('Variable "defenses" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["def"]) {
            // line 48
            yield "                    <tr>
                        <td>
                            <div class=\"fw-semibold\">";
            // line 50
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
            yield "</div>
                            <div class=\"text-muted small\">";
            // line 51
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 51), "filiere", [], "any", false, false, false, 51), "html", null, true);
            yield "</div>
                        </td>
                        <td style=\"max-width: 200px;\" class=\"text-muted small text-truncate\">";
            // line 53
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "student", [], "any", false, false, false, 53), "theme", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"fw-semibold\">";
            // line 55
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "dateDefense", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
            yield "</div>
                            <div class=\"badge bg-primary-subtle text-primary\">";
            // line 56
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["def"], "timeDefense", [], "any", false, false, false, 56), "H:i"), "html", null, true);
            yield "</div>
                        </td>
                        <td><span class=\"badge bg-secondary-subtle text-secondary fw-semibold\">";
            // line 58
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "room", [], "any", false, false, false, 58), "code", [], "any", false, false, false, 58), "html", null, true);
            yield "</span></td>
                        <td class=\"small text-muted\">
                            <div><span class=\"text-success fw-semibold\">Prés.</span> ";
            // line 60
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "president", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>
                            <div><span class=\"text-warning fw-semibold\">Rapp.</span> ";
            // line 61
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "rapporteur", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
                            <div><span class=\"text-danger fw-semibold\">Exam.</span> ";
            // line 62
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["def"], "examinateur", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"text-end\">
                            <a href=\"";
            // line 65
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["def"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 68
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["def"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm(\x27Annuler cette soutenance ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 69
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["def"], "id", [], "any", false, false, false, 69))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger\"><i class=\"bi bi-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center text-muted py-4\">Aucune soutenance programmée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['def'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 79
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
        return "defense/index.html.twig";
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
        return array (  231 => 79,  221 => 75,  219 => 74,  209 => 69,  205 => 68,  199 => 65,  193 => 62,  189 => 61,  185 => 60,  180 => 58,  175 => 56,  171 => 55,  166 => 53,  161 => 51,  155 => 50,  151 => 48,  146 => 47,  127 => 30,  121 => 27,  118 => 26,  116 => 25,  108 => 20,  102 => 17,  93 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Programme des Soutenances{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h4 class=\"fw-bold mb-1\">Programme des Soutenances</h4>
        <p class=\"text-muted small mb-0\">Calendrier des soutenances avec jurys et salles assignés</p>
    </div>
    <a href=\"{{ path(\x27admin_defense_new\x27) }}\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bi bi-calendar-plus\"></i> Programmer une soutenance
    </a>
</div>

<div class=\"card border-0 shadow-sm rounded-4 p-3 mb-4\">
    <form method=\"get\" action=\"{{ path(\x27admin_defense_index\x27) }}\" class=\"row g-2 align-items-center\">
        <div class=\"col-md-4\">
            <label class=\"form-label small text-muted\">Filtrer par date</label>
            <input type=\"date\" name=\"date\" value=\"{{ dateFilter }}\" class=\"form-control\">
        </div>
        <div class=\"col-md-2 pt-3\">
            <button type=\"submit\" class=\"btn btn-secondary w-100 mt-3\">Filtrer</button>
        </div>
        {% if dateFilter %}
            <div class=\"col-md-2 pt-3\">
                <a href=\"{{ path(\x27admin_defense_index\x27) }}\" class=\"btn btn-outline-secondary w-100 mt-3\">Réinitialiser</a>
            </div>
        {% endif %}
    </form>
</div>

<div class=\"card border-0 shadow-sm rounded-4 overflow-hidden\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Étudiant</th>
                    <th>Thème</th>
                    <th>Date & Heure</th>
                    <th>Salle</th>
                    <th>Jury</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for def in defenses %}
                    <tr>
                        <td>
                            <div class=\"fw-semibold\">{{ def.student.nom }} {{ def.student.prenom }}</div>
                            <div class=\"text-muted small\">{{ def.student.filiere }}</div>
                        </td>
                        <td style=\"max-width: 200px;\" class=\"text-muted small text-truncate\">{{ def.student.theme }}</td>
                        <td>
                            <div class=\"fw-semibold\">{{ def.dateDefense|date(\x27d/m/Y\x27) }}</div>
                            <div class=\"badge bg-primary-subtle text-primary\">{{ def.timeDefense|date(\x27H:i\x27) }}</div>
                        </td>
                        <td><span class=\"badge bg-secondary-subtle text-secondary fw-semibold\">{{ def.room.code }}</span></td>
                        <td class=\"small text-muted\">
                            <div><span class=\"text-success fw-semibold\">Prés.</span> {{ def.president.nom }}</div>
                            <div><span class=\"text-warning fw-semibold\">Rapp.</span> {{ def.rapporteur.nom }}</div>
                            <div><span class=\"text-danger fw-semibold\">Exam.</span> {{ def.examinateur.nom }}</div>
                        </td>
                        <td class=\"text-end\">
                            <a href=\"{{ path(\x27admin_defense_edit\x27, {\x27id\x27: def.id}) }}\" class=\"btn btn-sm btn-outline-secondary me-1\">
                                <i class=\"bi bi-pencil\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path(\x27admin_defense_delete\x27, {\x27id\x27: def.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm(\x27Annuler cette soutenance ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ def.id) }}\">
                                <button class=\"btn btn-sm btn-outline-danger\"><i class=\"bi bi-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center text-muted py-4\">Aucune soutenance programmée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "defense/index.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\defense\\index.html.twig");
    }
}
