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

/* article/article.html.twig */
class __TwigTemplate_c9c37ce3978eb4c12c050de724e8a8b634cd17d29b71fcec5bbb1b121137d67f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ARTICLES";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<br>
    <br>
    <center><h1>Listes des articles</h1></center>
        <br>
            <br>
                <div class=\"container\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Reference</th>
                            <th scope=\"col\">Stock</th>
                            <th scope=\"col\">Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope=\"row\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Article"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Article"] ?? null), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Article"] ?? null), "reference", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Article"] ?? null), "prix", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Article"] ?? null), "quantite", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                            <td>
                                <a href=\"#\" class=\"btn btn-warning a-btn-slide-text\"><span><strong>Edit</strong></span></a>
                                <a href=\"#\" class=\"btn btn-warning a-btn-slide-text\"><span><strong>Delete</strong></span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
";
    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/article.html.twig", "C:\\wamp64\\www\\TP_STOCK\\templates\\article\\article.html.twig");
    }
}
