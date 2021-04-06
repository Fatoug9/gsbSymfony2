<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* consultation_compte_rendu/index.html.twig */
class __TwigTemplate_479b660c3f773d3f804c434fc4fe0cb1a49724a614a113fc1b9fe9c23ef6045a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation_compte_rendu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultation_compte_rendu/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Consultation des comptes rendus!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .dropdown {margin: 1em auto; max-width: 800px; width: 95%}
    .btn btn-light {margin-right: 300px;}
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/var/www/html/gsbSymfony2/src/Controller/ConsultationCompteRenduController.php", 0), "html", null, true);
        echo "\">src/Controller/ConsultationCompteRenduController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/var/www/html/gsbSymfony2/templates/consultation_compte_rendu/index.html.twig", 0), "html", null, true);
        echo "\">templates/consultation_compte_rendu/index.html.twig</a></code></li>
    </ul>
</div>
        
                Selectionner le mois :
        <div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
    Mois
  </button>
  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
    <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
  </ul>
</div>
  <br> 
  <button type=\"button\" class=\"btn btn-light\">Valider</button>
  <br><br><br>
  
  Liste des comptes rendus :
  
  <div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
    Compte rendu
  </button>
  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
    <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
  </ul>
</div>
  <button type=\"button\" class=\"btn btn-light\">Valider</button>
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "consultation_compte_rendu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  90 => 18,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consultation des comptes rendus!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .dropdown {margin: 1em auto; max-width: 800px; width: 95%}
    .btn btn-light {margin-right: 300px;}
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/var/www/html/gsbSymfony2/src/Controller/ConsultationCompteRenduController.php'|file_link(0) }}\">src/Controller/ConsultationCompteRenduController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/var/www/html/gsbSymfony2/templates/consultation_compte_rendu/index.html.twig'|file_link(0) }}\">templates/consultation_compte_rendu/index.html.twig</a></code></li>
    </ul>
</div>
        
                Selectionner le mois :
        <div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
    Mois
  </button>
  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
    <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
  </ul>
</div>
  <br> 
  <button type=\"button\" class=\"btn btn-light\">Valider</button>
  <br><br><br>
  
  Liste des comptes rendus :
  
  <div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
    Compte rendu
  </button>
  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
    <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
  </ul>
</div>
  <button type=\"button\" class=\"btn btn-light\">Valider</button>
  
{% endblock %}
", "consultation_compte_rendu/index.html.twig", "/var/www/html/gsbSymfony2/templates/consultation_compte_rendu/index.html.twig");
    }
}
