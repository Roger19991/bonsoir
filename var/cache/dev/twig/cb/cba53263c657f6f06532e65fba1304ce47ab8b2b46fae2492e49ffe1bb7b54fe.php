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

/* article/index.html.twig */
class __TwigTemplate_2d18f95d85c2433ac3055b0b612ed69040158bce750b0e872a891bf44a2ba363 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    <script src= \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/javascript/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <style>
        .searchbar{
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #343a40;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input{
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color:transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input{
            padding: 0 10px;
            width: 450px;
            caret-color:red;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_icon{
            background: white;
            color: #e74c3c;
        }

        .search_icon{
            height: 40px;
            width: 35px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color:white;
            text-decoration:none;

        }
        .range {
            display: table;
            position: relative;
            height: 25px;
            margin-top: 20px;
            background-color: rgb(245, 245, 245);
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .range input[type=\"range\"] {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            display: table-cell;
            width: 100%;
            background-color: transparent;
            height: 32px;
            cursor: pointer;
        }
        .range input[type=\"range\"]::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            width: 11px;
            height: 25px;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0px;
            background-color: rgb(153, 153, 153);
        }

        .range input[type=\"range\"]::-moz-slider-thumb {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            width: 11px;
            height: 25px;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0px;
            background-color: rgb(153, 153, 153);
        }

        .range output {
            display: table-cell;
            padding: 3px 5px 2px;
            min-width: 50px;
            color: rgb(255, 255, 255);
            background-color: rgb(153, 153, 153);
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            width: 1%;
            white-space: nowrap;
            vertical-align: middle;

            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;

            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: -moz-none;
            -o-user-select: none;
            user-select: none;
        }
        .range input[type=\"range\"] {
            outline: none;
        }

        .range.range-danger input[type=\"range\"]::-webkit-slider-thumb {
            background-color: rgb(217, 83, 79);
        }
        .range.range-danger input[type=\"range\"]::-moz-slider-thumb {
            background-color: rgb(217, 83, 79);
        }
        .range.range-danger output {
            background-color: rgb(217, 83, 79);
        }
        .range.range-danger input[type=\"range\"] {
            outline-color: rgb(217, 83, 79);
        }



    </style>
    <br>
        <br>

<div class=\"container h-100\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"searchbar\">
                    <input id=\"myInput\" class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Entrez une reference, un article...\">
                        <p class=\"search_icon\"><i class=\"fas fa-search\"></i></p>
                </div>
            </div>

            <br>

            <center><h1>Liste des articles en stock</h1></center>

            <br>

       <div class=\"col-xs-6\">
            <div class=\"range range-danger\">
                <input id=\"range\" type=\"range\" value=\"100\" max=\"100\" min=\"0\" step=\"1\"onchange=\"rangeDanger.value=value\">
                    <output id=\"rangeDanger\">100</output>&ensp;
            </div>
       </div>

            <br>

               <div class=\"container\">
                    <table id=\"myTable\" class=\"table\">
                        <thead class=\"thead-dark\" >
                            <tr>
                                <th data-field=\"state\" data-checkbox=\"true\">Id</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Reference</th>
                                <th>Stock</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                            <tbody>
                            ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 200, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 201
            echo "                                <tr>
                                    <td>";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 202), "html", null, true);
            echo "</td>
                                    <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 203), "html", null, true);
            echo "</td>
                                    <td class=\"priceSearch\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 204), "html", null, true);
            echo " €</td>
                                    <td>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 205), "html", null, true);
            echo "</td>
                                    <td>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "quantite", [], "any", false, false, false, 206), "html", null, true);
            echo " pc</td>
                                    <td><a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 207)]), "html", null, true);
            echo "\">
                                            <svg width=\"1.5em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-eye-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z\"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 216
            echo "                                <tr>
                                    <td colspan=\"5\">Aucun article</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                            </tbody>
                    </table>

                    <br>

                    <a href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\">
                        <svg width=\"2em\"
                             height=\"2.2em\"
                             viewBox=\"0 0 16 16\"
                             class=\"bi bi-plus-circle-fill\"
                             fill=\"#e62d2d\"
                             xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z\"/>
                        </svg>
                    </a>
               </div>

            <br>

            <br>

</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 225,  334 => 220,  325 => 216,  311 => 207,  307 => 206,  303 => 205,  299 => 204,  295 => 203,  291 => 202,  288 => 201,  283 => 200,  91 => 10,  84 => 9,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascripts %}
    <script src= \"{{ asset('asset/javascript/main.js') }}\"></script>
{% endblock %}

{% block title %}Liste des articles{% endblock %}

{% block body %}
    <style>
        .searchbar{
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #343a40;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input{
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color:transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input{
            padding: 0 10px;
            width: 450px;
            caret-color:red;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_icon{
            background: white;
            color: #e74c3c;
        }

        .search_icon{
            height: 40px;
            width: 35px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color:white;
            text-decoration:none;

        }
        .range {
            display: table;
            position: relative;
            height: 25px;
            margin-top: 20px;
            background-color: rgb(245, 245, 245);
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .range input[type=\"range\"] {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            display: table-cell;
            width: 100%;
            background-color: transparent;
            height: 32px;
            cursor: pointer;
        }
        .range input[type=\"range\"]::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            width: 11px;
            height: 25px;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0px;
            background-color: rgb(153, 153, 153);
        }

        .range input[type=\"range\"]::-moz-slider-thumb {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            width: 11px;
            height: 25px;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0px;
            background-color: rgb(153, 153, 153);
        }

        .range output {
            display: table-cell;
            padding: 3px 5px 2px;
            min-width: 50px;
            color: rgb(255, 255, 255);
            background-color: rgb(153, 153, 153);
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            width: 1%;
            white-space: nowrap;
            vertical-align: middle;

            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;

            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: -moz-none;
            -o-user-select: none;
            user-select: none;
        }
        .range input[type=\"range\"] {
            outline: none;
        }

        .range.range-danger input[type=\"range\"]::-webkit-slider-thumb {
            background-color: rgb(217, 83, 79);
        }
        .range.range-danger input[type=\"range\"]::-moz-slider-thumb {
            background-color: rgb(217, 83, 79);
        }
        .range.range-danger output {
            background-color: rgb(217, 83, 79);
        }
        .range.range-danger input[type=\"range\"] {
            outline-color: rgb(217, 83, 79);
        }



    </style>
    <br>
        <br>

<div class=\"container h-100\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"searchbar\">
                    <input id=\"myInput\" class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Entrez une reference, un article...\">
                        <p class=\"search_icon\"><i class=\"fas fa-search\"></i></p>
                </div>
            </div>

            <br>

            <center><h1>Liste des articles en stock</h1></center>

            <br>

       <div class=\"col-xs-6\">
            <div class=\"range range-danger\">
                <input id=\"range\" type=\"range\" value=\"100\" max=\"100\" min=\"0\" step=\"1\"onchange=\"rangeDanger.value=value\">
                    <output id=\"rangeDanger\">100</output>&ensp;
            </div>
       </div>

            <br>

               <div class=\"container\">
                    <table id=\"myTable\" class=\"table\">
                        <thead class=\"thead-dark\" >
                            <tr>
                                <th data-field=\"state\" data-checkbox=\"true\">Id</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Reference</th>
                                <th>Stock</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                            <tbody>
                            {% for article in articles %}
                                <tr>
                                    <td>{{ article.id }}</td>
                                    <td>{{ article.nom }}</td>
                                    <td class=\"priceSearch\">{{ article.prix }} €</td>
                                    <td>{{ article.reference }}</td>
                                    <td>{{ article.quantite }} pc</td>
                                    <td><a href=\"{{ path('article_show', {'id': article.id}) }}\">
                                            <svg width=\"1.5em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-eye-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z\"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\">Aucun article</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                    </table>

                    <br>

                    <a href=\"{{ path('article_new') }}\">
                        <svg width=\"2em\"
                             height=\"2.2em\"
                             viewBox=\"0 0 16 16\"
                             class=\"bi bi-plus-circle-fill\"
                             fill=\"#e62d2d\"
                             xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z\"/>
                        </svg>
                    </a>
               </div>

            <br>

            <br>

</div>



{% endblock %}



", "article/index.html.twig", "C:\\wamp64\\www\\TP_STOCK\\templates\\article\\index.html.twig");
    }
}
