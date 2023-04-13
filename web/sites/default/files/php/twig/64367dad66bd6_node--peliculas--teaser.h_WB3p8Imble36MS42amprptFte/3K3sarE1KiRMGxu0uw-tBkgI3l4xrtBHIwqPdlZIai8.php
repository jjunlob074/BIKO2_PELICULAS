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

/* themes/custom/stable9_child/templates/node/peliculas/node--peliculas--teaser.html.twig */
class __TwigTemplate_56533a228e3efd07610ffc52221b73b3 extends Template
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
        // line 70
        echo "
    <div class=\"cb-movie-teaser\">
      <div class=\"container\">
        <div class=\"row\">
    <div class=\"cb-movie-teaser__aside col-xs-12 col-md-12 col-lg-6 col-xl-4 col-xxl-3\">
      <div class=\"c-image\">
";
        // line 86
        echo "           ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
";
        // line 88
        echo "      </div>
    </div>
    <div class=\"cb-movie-teaser__content col-xs-12 col-md-12 col-lg-6 col-xl-8 col-xxl-9\">
      <div class=\"c-title\">
        ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 92, $this->source), "html", null, true);
        echo "
        ";
        // line 93
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 94
            echo "          <h2 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "c-title__title"], "method", false, false, true, 94), 94, $this->source), "html", null, true);
            echo ">
            ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 95, $this->source), "html", null, true);
            echo "
          </h2>
        ";
        }
        // line 98
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 98, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"c-text\">
        <div class=\"c-text__sinopsis\">";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "</div>
      </div>
";
        // line 104
        echo "      <div class=\"c-categories\">
        <a class=\"c-categories__taxonomy\" href=\"https://drupal2.ddev.site/cartelera/";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_categorias_peliculas", [], "any", false, false, true, 105)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 105, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_categorias_peliculas", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "</a>
      </div>
      <div class=\"c-date\">
        <h4 class=\"c-date__date\"> Fecha Estreno: ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_publicacion_pelicula", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"c-button\">
        <a class=\"c-button__link\" href=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 111, $this->source), "html", null, true);
        echo "\">
          <button class=\"c-button__button\">
            VER MÁS 🎥
          </button>
        </a>
      </div>
    </div>
  </div>
      </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/stable9_child/templates/node/peliculas/node--peliculas--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 111,  98 => 108,  90 => 105,  87 => 104,  82 => 101,  75 => 98,  69 => 95,  64 => 94,  62 => 93,  58 => 92,  52 => 88,  47 => 86,  39 => 70,);
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

    <div class=\"cb-movie-teaser\">
      <div class=\"container\">
        <div class=\"row\">
    <div class=\"cb-movie-teaser__aside col-xs-12 col-md-12 col-lg-6 col-xl-4 col-xxl-3\">
      <div class=\"c-image\">
{#        {% set image_media = node.field_image.entity %}#}
{#        {{ devel_breakpoint() }}#}
{#        {% set imagen_url = image_media.uri.value %}#}
{#        {% set imagen_alt = image_media.alt %}#}
{#        <picture>#}
{#          <source media=\"(max-width: 480px)\" srcset=\"{{ imagen_url|image_style('16x9_small') }}\">#}
{#          <source media=\"(min-width: 481px and max-witdh:800px)\" srcset=\"{{ imagen_url|image_style('16x9_medium') }}\">#}
{#          <source media=\"(min-width: 801px)\" srcset=\"{{ imagen_url|image_style('16x9_large') }}\">#}
{#          <img src=\"{{ imagen_url|image_style('16x9_small') }}\" alt=\"{{ imagen_alt }}\">#}
{#        </picture>#}
           {{ content.field_image}}
{#        {{ devel_breakpoint() }}#}
      </div>
    </div>
    <div class=\"cb-movie-teaser__content col-xs-12 col-md-12 col-lg-6 col-xl-8 col-xxl-9\">
      <div class=\"c-title\">
        {{ title_prefix }}
        {% if label and not page %}
          <h2 {{ title_attributes.addClass('c-title__title') }}>
            {{ label }}
          </h2>
        {% endif %}
        {{ title_suffix }}
      </div>
      <div class=\"c-text\">
        <div class=\"c-text__sinopsis\">{{ content.body }}</div>
      </div>
{#      {{ devel_breakpoint() }}#}
      <div class=\"c-categories\">
        <a class=\"c-categories__taxonomy\" href=\"https://drupal2.ddev.site/cartelera/{{ content.field_categorias_peliculas[0] }}\">{{ content.field_categorias_peliculas }}</a>
      </div>
      <div class=\"c-date\">
        <h4 class=\"c-date__date\"> Fecha Estreno: {{ content.field_publicacion_pelicula }}</h4>
      </div>
      <div class=\"c-button\">
        <a class=\"c-button__link\" href=\"{{ url }}\">
          <button class=\"c-button__button\">
            VER MÁS 🎥
          </button>
        </a>
      </div>
    </div>
  </div>
      </div>
    </div>

", "themes/custom/stable9_child/templates/node/peliculas/node--peliculas--teaser.html.twig", "/var/www/html/web/themes/custom/stable9_child/templates/node/peliculas/node--peliculas--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 93);
        static $filters = array("escape" => 86);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
