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

/* base.html.twig */
class __TwigTemplate_90b160b9c6bc4aab5584196d0588a5aa extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            font-family: \x27Inter\x27, system-ui, -apple-system, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }
        .navbar-custom {
            background-color: #0f172a !important;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.15);
        }
        .stat-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
        }
        .user-badge {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 4px 12px;
        }
    </style>
    ";
        // line 37
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 38
        yield "</head>
<body class=\"d-flex flex-column h-100\">

";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "    <nav class=\"navbar navbar-expand-lg navbar-dark navbar-custom px-4 py-3 sticky-top\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand d-flex align-items-center gap-2 fw-bold text-white me-4\" href=\"";
            // line 44
            yield (string) (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_dashboard")));
            yield "\">
                <i class=\"bi bi-mortarboard-fill text-primary fs-4\"></i>
                <span>SoutenancePro</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 gap-1\">
                    ";
            // line 53
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 55
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55) == "admin_dashboard")) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                yield "\">
                                <i class=\"bi bi-speedometer2 me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 60
                if (CoreExtension::inFilter("student", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60))) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_student_index");
                yield "\">
                                <i class=\"bi bi-people me-1\"></i> Étudiants
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 65
                if (CoreExtension::inFilter("teacher", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65))) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teacher_index");
                yield "\">
                                <i class=\"bi bi-person-badge me-1\"></i> Enseignants
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 70
                if (CoreExtension::inFilter("room", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70))) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_room_index");
                yield "\">
                                <i class=\"bi bi-door-closed me-1\"></i> Salles
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 75
                if (CoreExtension::inFilter("defense", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "attributes", [], "any", false, false, false, 75), "get", ["_route"], "method", false, false, false, 75))) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_defense_index");
                yield "\">
                                <i class=\"bi bi-calendar-event me-1\"></i> Soutenances
                            </a>
                        </li>
                    ";
            } else {
                // line 80
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 81
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", ["_route"], "method", false, false, false, 81) == "teacher_dashboard")) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_dashboard");
                yield "\">
                                <i class=\"bi bi-speedometer2 me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 86
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "attributes", [], "any", false, false, false, 86), "get", ["_route"], "method", false, false, false, 86) == "teacher_defenses")) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_defenses");
                yield "\">
                                <i class=\"bi bi-journal-text me-1\"></i> Mes soutenances
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white ";
                // line 91
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "attributes", [], "any", false, false, false, 91), "get", ["_route"], "method", false, false, false, 91) == "teacher_jurys")) {
                    yield "active fw-bold text-primary";
                }
                yield "\" href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_jurys");
                yield "\">
                                <i class=\"bi bi-diagram-3 me-1\"></i> Mes jurys
                            </a>
                        </li>
                    ";
            }
            // line 96
            yield "                </ul>
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"user-badge text-end text-white\">
                        <div class=\"fw-semibold small\">";
            // line 99
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "prenom", [], "any", false, false, false, 99), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99), "html", null, true);
            yield "</div>
                        <div class=\"text-info fw-bold\" style=\"font-size: 0.75rem;\">
                            ";
            // line 101
            yield (string) (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Système ADMINISTRATEUR") : ("Profil ENSEIGNANT"));
            yield "
                        </div>
                    </div>
                    <a href=\"";
            // line 104
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-outline-light btn-sm px-3\">
                        <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </nav>
";
        }
        // line 112
        yield "
<main class=\"flex-shrink-0 py-4\">
    <div class=\"container\">
        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", ["success"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            yield "            <div class=\"alert alert-success alert-dismissible fade show rounded-3\" role=\"alert\">
                <i class=\"bi bi-check-circle-fill me-2\"></i> ";
            // line 117
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 121
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "flashes", ["error"], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 122
            yield "            <div class=\"alert alert-danger alert-dismissible fade show rounded-3\" role=\"alert\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i> ";
            // line 123
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 127
        yield "
        ";
        // line 128
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 129
        yield "    </div>
</main>

<footer class=\"footer mt-auto py-3 bg-white border-top text-center text-muted small\">
    <div class=\"container\">
        Projet SoutenancePro &copy; 2026 - Université | IT232
    </div>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
";
        // line 139
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 140
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "SoutenancePro";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  369 => 139,  353 => 128,  337 => 37,  320 => 6,  310 => 140,  308 => 139,  296 => 129,  294 => 128,  291 => 127,  280 => 123,  277 => 122,  272 => 121,  261 => 117,  258 => 116,  254 => 115,  249 => 112,  238 => 104,  232 => 101,  225 => 99,  220 => 96,  208 => 91,  196 => 86,  184 => 81,  181 => 80,  169 => 75,  157 => 70,  145 => 65,  133 => 60,  121 => 55,  118 => 54,  116 => 53,  104 => 44,  100 => 42,  98 => 41,  93 => 38,  91 => 37,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}SoutenancePro{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            font-family: \x27Inter\x27, system-ui, -apple-system, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }
        .navbar-custom {
            background-color: #0f172a !important;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.15);
        }
        .stat-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
        }
        .user-badge {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 4px 12px;
        }
    </style>
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"d-flex flex-column h-100\">

{% if app.user %}
    <nav class=\"navbar navbar-expand-lg navbar-dark navbar-custom px-4 py-3 sticky-top\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand d-flex align-items-center gap-2 fw-bold text-white me-4\" href=\"{{ is_granted(\x27ROLE_ADMIN\x27) ? path(\x27admin_dashboard\x27) : path(\x27teacher_dashboard\x27) }}\">
                <i class=\"bi bi-mortarboard-fill text-primary fs-4\"></i>
                <span>SoutenancePro</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 gap-1\">
                    {% if is_granted(\x27ROLE_ADMIN\x27) %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if app.request.attributes.get(\x27_route\x27) == \x27admin_dashboard\x27 %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27admin_dashboard\x27) }}\">
                                <i class=\"bi bi-speedometer2 me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if \x27student\x27 in app.request.attributes.get(\x27_route\x27) %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27admin_student_index\x27) }}\">
                                <i class=\"bi bi-people me-1\"></i> Étudiants
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if \x27teacher\x27 in app.request.attributes.get(\x27_route\x27) %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27admin_teacher_index\x27) }}\">
                                <i class=\"bi bi-person-badge me-1\"></i> Enseignants
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if \x27room\x27 in app.request.attributes.get(\x27_route\x27) %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27admin_room_index\x27) }}\">
                                <i class=\"bi bi-door-closed me-1\"></i> Salles
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if \x27defense\x27 in app.request.attributes.get(\x27_route\x27) %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27admin_defense_index\x27) }}\">
                                <i class=\"bi bi-calendar-event me-1\"></i> Soutenances
                            </a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if app.request.attributes.get(\x27_route\x27) == \x27teacher_dashboard\x27 %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27teacher_dashboard\x27) }}\">
                                <i class=\"bi bi-speedometer2 me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if app.request.attributes.get(\x27_route\x27) == \x27teacher_defenses\x27 %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27teacher_defenses\x27) }}\">
                                <i class=\"bi bi-journal-text me-1\"></i> Mes soutenances
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-3 text-white {% if app.request.attributes.get(\x27_route\x27) == \x27teacher_jurys\x27 %}active fw-bold text-primary{% endif %}\" href=\"{{ path(\x27teacher_jurys\x27) }}\">
                                <i class=\"bi bi-diagram-3 me-1\"></i> Mes jurys
                            </a>
                        </li>
                    {% endif %}
                </ul>
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"user-badge text-end text-white\">
                        <div class=\"fw-semibold small\">{{ app.user.prenom }} {{ app.user.nom }}</div>
                        <div class=\"text-info fw-bold\" style=\"font-size: 0.75rem;\">
                            {{ is_granted(\x27ROLE_ADMIN\x27) ? \x27Système ADMINISTRATEUR\x27 : \x27Profil ENSEIGNANT\x27 }}
                        </div>
                    </div>
                    <a href=\"{{ path(\x27app_logout\x27) }}\" class=\"btn btn-outline-light btn-sm px-3\">
                        <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </nav>
{% endif %}

<main class=\"flex-shrink-0 py-4\">
    <div class=\"container\">
        {% for message in app.flashes(\x27success\x27) %}
            <div class=\"alert alert-success alert-dismissible fade show rounded-3\" role=\"alert\">
                <i class=\"bi bi-check-circle-fill me-2\"></i> {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
        {% for message in app.flashes(\x27error\x27) %}
            <div class=\"alert alert-danger alert-dismissible fade show rounded-3\" role=\"alert\">
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i> {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}

        {% block body %}{% endblock %}
    </div>
</main>

<footer class=\"footer mt-auto py-3 bg-white border-top text-center text-muted small\">
    <div class=\"container\">
        Projet SoutenancePro &copy; 2026 - Université | IT232
    </div>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "F:\\projet_perso\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232\\SOEDJE_KOKOU_ARIEL_CAESAR_IT232_code\\templates\\base.html.twig");
    }
}
