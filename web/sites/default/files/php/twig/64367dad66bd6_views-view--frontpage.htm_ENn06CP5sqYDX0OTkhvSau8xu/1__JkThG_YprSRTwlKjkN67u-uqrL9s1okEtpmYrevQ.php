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

/* themes/custom/stable9_child/templates/views/views-view--frontpage.html.twig */
class __TwigTemplate_2215b35ff31666d449eea32ae0a5642c extends Template
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
        // line 34
        $context["classes"] = [0 => ((        // line 35
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 35, $this->source))) : (""))];
        // line 38
        echo "<div class=\"frontpage\">
  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 39, $this->source), "html", null, true);
        echo "
  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 40, $this->source), "html", null, true);
        echo "
  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        echo "

  ";
        // line 43
        if (($context["header"] ?? null)) {
            // line 44
            echo "    <header>
      ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 45, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 48
        echo "
  <h1>BIENVENIDO A FILM4IU</h1>

  ";
        // line 51
        if (($context["footer"] ?? null)) {
            // line 52
            echo "    <footer>
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 56
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stable9_child/templates/views/views-view--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 56,  79 => 53,  76 => 52,  74 => 51,  69 => 48,  63 => 45,  60 => 44,  58 => 43,  53 => 41,  49 => 40,  45 => 39,  42 => 38,  40 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div class=\"frontpage\">
  {{ title_prefix }}
  {{ title }}
  {{ title_suffix }}

  {% if header %}
    <header>
      {{ header }}
    </header>
  {% endif %}

  <h1>BIENVENIDO A FILM4IU</h1>

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}


</div>
", "themes/custom/stable9_child/templates/views/views-view--frontpage.html.twig", "/var/www/html/web/themes/custom/stable9_child/templates/views/views-view--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 43);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
