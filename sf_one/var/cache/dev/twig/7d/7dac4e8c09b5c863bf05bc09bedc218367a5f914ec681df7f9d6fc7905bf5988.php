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

/* blog/create.html.twig */
class __TwigTemplate_43eb2261232dc711cc5f157e658a18ff7264dce3a04082b3c88946519cc15a27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h1>Création d'un article</h1>

\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

\t
\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Titre de l'article"]]);
        echo "
\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13), 'row');
        echo "
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'row', ["attr" => ["placeholder" => "Contenu de l'article"]]);
        echo "
\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "URL de l'image"]]);
        echo "

\t<button type=\"submit\" class=\"btn btn-success\">
\t\t";
        // line 18
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "\t\t\tEnregistrer les modifications
\t\t";
        } else {
            // line 21
            echo "\t \t\tAjouter l'article
\t \t";
        }
        // line 23
        echo "\t</button>


\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticles"]) || array_key_exists("formArticles", $context) ? $context["formArticles"] : (function () { throw new RuntimeError('Variable "formArticles" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  110 => 23,  106 => 21,  102 => 19,  100 => 18,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  76 => 9,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formArticles 'bootstrap_4_layout.html.twig' %}

{% block body %}

\t<h1>Création d'un article</h1>

\t{{ form_start(formArticles) }}

\t
\t{{ form_row(formArticles.title, {'attr': {'placeholder': \"Titre de l'article\"}}) }}
\t{{ form_row(formArticles.category )}}
\t{{ form_row(formArticles.content, {'attr': {'placeholder': \"Contenu de l'article\"}}) }}
\t{{ form_row(formArticles.image, {'attr': {'placeholder': \"URL de l'image\"}}) }}

\t<button type=\"submit\" class=\"btn btn-success\">
\t\t{% if editMode %}
\t\t\tEnregistrer les modifications
\t\t{% else %}
\t \t\tAjouter l'article
\t \t{% endif %}
\t</button>


\t{{ form_end(formArticles) }}

{% endblock %}", "blog/create.html.twig", "/var/www/html/sf_one/templates/blog/create.html.twig");
    }
}
