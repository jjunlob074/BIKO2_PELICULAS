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

/* themes/custom/stable9_child/templates/content/node--peliculas--full.html.twig */
class __TwigTemplate_053ccdeba6cbb464bd7d268d2ba0d13f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "<div class=\"cb-movie-full\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
      <div class=\"c-title\">
        ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 76, $this->source), "html", null, true);
        echo "
          <h2 ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "c-title__title"], "method", false, false, true, 77), 77, $this->source), "html", null, true);
        echo ">
            ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 78, $this->source), "html", null, true);
        echo "
          </h2>
        ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 80, $this->source), "html", null, true);
        echo "
      </div>
        <h5 class=\"c-text sha1\">SHA1: ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sha1"] ?? null), 82, $this->source), "html", null, true);
        echo "</h5>
      <div class=\"c-image\">
        ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "
      </div>
          <div class=\"c-text\">
            <div class=\"c-text__sinopsis\">
              <br><br>
              SIPNOSIS:
              <br><br>
              ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"c-categories\">
              <br><br>
            <h3>";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("CATEGORIA"));
        echo "</h3>
              <br><br>
              ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_categorias_peliculas", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
            </a>
          </div>
          <div class=\"c-date\">
            <h4 class=\"c-date__date\">
              <br><br>
              FECHA ESTRENO:
              <br><br>
              ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_publicacion_pelicula", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "

            </h4>
          </div>

";
        // line 112
        echo "        <br><br>
        ";
        // line 113
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_trailer_youtube", [], "any", false, false, true, 113)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) {
            // line 115
            echo "        <h2> ¿QUIERES VER UN TEASER DE LA PELI?</h2>
            ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_trailer_youtube", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 118
        echo "        <div class=\"cb-relacionadas\">
            ";
        // line 119
        $context["categoria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_categorias_peliculas", [], "any", false, false, true, 119), "target_id", [], "any", false, false, true, 119);
        // line 120
        echo "            <br>
";
        // line 122
        echo "          <h2> PORQUE ESTÁS MIRANDO ESTA PELÍCULA... </h2>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
                ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("movie_list", "relacionadas", $this->sandbox->ensureToStringAllowed(($context["categoria"] ?? null), 126, $this->source)), "html", null, true);
        echo "
              </div>
            </div>
          </div>
          <br>
          ";
        // line 131
        if ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_relacionadas", [], "any", false, false, true, 131)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) {
            // line 132
            echo "          <h2> SELECCIÓN DE LOS EDITORES</h2>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
                ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_relacionadas", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          ";
        }
        // line 141
        echo "        </div>
        </div>
    </div>
  </div>
</div>




";
    }

    public function getTemplateName()
    {
        return "themes/custom/stable9_child/templates/content/node--peliculas--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 141,  154 => 136,  148 => 132,  146 => 131,  138 => 126,  132 => 122,  129 => 120,  127 => 119,  124 => 118,  119 => 116,  116 => 115,  114 => 113,  111 => 112,  103 => 106,  92 => 98,  87 => 96,  79 => 91,  69 => 84,  64 => 82,  59 => 80,  54 => 78,  50 => 77,  46 => 76,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}
{#{{ devel_breakpoint() }}#}
<div class=\"cb-movie-full\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
      <div class=\"c-title\">
        {{ title_prefix }}
          <h2 {{ title_attributes.addClass('c-title__title') }}>
            {{ label }}
          </h2>
        {{ title_suffix }}
      </div>
        <h5 class=\"c-text sha1\">SHA1: {{ sha1 }}</h5>
      <div class=\"c-image\">
        {{ content.field_image}}
      </div>
          <div class=\"c-text\">
            <div class=\"c-text__sinopsis\">
              <br><br>
              SIPNOSIS:
              <br><br>
              {{ content.body }}
            </div>
          </div>
          <div class=\"c-categories\">
              <br><br>
            <h3>{{ 'CATEGORIA'|t }}</h3>
              <br><br>
              {{ content.field_categorias_peliculas }}
            </a>
          </div>
          <div class=\"c-date\">
            <h4 class=\"c-date__date\">
              <br><br>
              FECHA ESTRENO:
              <br><br>
              {{ content.field_publicacion_pelicula }}

            </h4>
          </div>

{#        {{ devel_breakpoint() }}#}
        <br><br>
        {% if content.field_trailer_youtube[0] %}
{#          {{ devel_breakpoint() }}#}
        <h2> ¿QUIERES VER UN TEASER DE LA PELI?</h2>
            {{ content.field_trailer_youtube }}
        {% endif %}
        <div class=\"cb-relacionadas\">
            {% set categoria = node.field_categorias_peliculas.target_id %}
            <br>
{#            {{ devel_breakpoint() }}#}
          <h2> PORQUE ESTÁS MIRANDO ESTA PELÍCULA... </h2>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
                {{ drupal_view('movie_list', 'relacionadas', categoria) }}
              </div>
            </div>
          </div>
          <br>
          {% if content.field_relacionadas[0]  %}
          <h2> SELECCIÓN DE LOS EDITORES</h2>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
                {{ content.field_relacionadas }}
              </div>
            </div>
          </div>
          {% endif %}
        </div>
        </div>
    </div>
  </div>
</div>




", "themes/custom/stable9_child/templates/content/node--peliculas--full.html.twig", "/var/www/html/web/themes/custom/stable9_child/templates/content/node--peliculas--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 113, "set" => 119);
        static $filters = array("escape" => 76, "t" => 96);
        static $functions = array("drupal_view" => 126);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
                ['drupal_view']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
