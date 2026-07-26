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

/* defense/edit.html.twig */
class __TwigTemplate_e9ea1b64ad9fbda601fcb5dae60b4834 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "defense/edit.html.twig"));

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

        yield "Modifier la Soutenance";
        
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
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-md-9\">
        <div class=\"card border-0 shadow-sm rounded-4 p-4\">
            <h4 class=\"fw-bold mb-1\">Modifier la Soutenance</h4>
            <p class=\"text-muted small mb-4\">Modification soumise au contrôle de conflits de salle et de jury.</p>

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
            // line 13
            yield "                <div class=\"alert alert-danger rounded-3 py-2 small\">
                    <i class=\"bi bi-exclamation-triangle-fill me-1\"></i> ";
            // line 14
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["err"], "message", [], "any", false, false, false, 14), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['err'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 17
        yield "
            ";
        // line 18
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        ";
        // line 21
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "student", [], "any", false, false, false, 21), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 24
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "president", [], "any", false, false, false, 24), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 27
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "rapporteur", [], "any", false, false, false, 27), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 30
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "examinateur", [], "any", false, false, false, 30), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 33
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "room", [], "any", false, false, false, 33), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 36
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateDefense", [], "any", false, false, false, 36), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 39
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "timeDefense", [], "any", false, false, false, 39), 'row');
        yield "
                    </div>
                </div>
                <div class=\"d-flex justify-content-end gap-2 mt-4\">
                    <a href=\"";
        // line 43
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_index");
        yield "\" class=\"btn btn-light\">Annuler</a>
                    <button type=\"submit\" class=\"btn btn-primary px-4\">Enregistrer les modifications</button>
                </div>
            ";
        // line 46
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
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
        return "defense/edit.html.twig";
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
        return array (  169 => 46,  163 => 43,  156 => 39,  150 => 36,  144 => 33,  138 => 30,  132 => 27,  126 => 24,  120 => 21,  114 => 18,  111 => 17,  101 => 14,  98 => 13,  94 => 12,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Modifier la Soutenance{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-md-9\">
        <div class=\"card border-0 shadow-sm rounded-4 p-4\">
            <h4 class=\"fw-bold mb-1\">Modifier la Soutenance</h4>
            <p class=\"text-muted small mb-4\">Modification soumise au contrôle de conflits de salle et de jury.</p>

            {% for err in form.vars.errors %}
                <div class=\"alert alert-danger rounded-3 py-2 small\">
                    <i class=\"bi bi-exclamation-triangle-fill me-1\"></i> {{ err.message }}
                </div>
            {% endfor %}

            {{ form_start(form, {\x27attr\x27: {\x27novalidate\x27: \x27novalidate\x27}}) }}
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        {{ form_row(form.student) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.president) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.rapporteur) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.examinateur) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.room) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.dateDefense) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.timeDefense) }}
                    </div>
                </div>
                <div class=\"d-flex justify-content-end gap-2 mt-4\">
                    <a href=\"{{ path(\x27admin_defense_index\x27) }}\" class=\"btn btn-light\">Annuler</a>
                    <button type=\"submit\" class=\"btn btn-primary px-4\">Enregistrer les modifications</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "defense/edit.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\defense\\edit.html.twig");
    }
}
