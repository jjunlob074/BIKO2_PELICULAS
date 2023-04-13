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

/* themes/custom/stable9_child/templates/views/views-view-fields--categorias--block-1.html.twig */
class __TwigTemplate_813045fdeff63bc32411fb1fd67bcbe3 extends Template
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
        // line 32
        echo "<div class=\"c-link\">
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "name", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stable9_child/templates/views/views-view-fields--categorias--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}
<div class=\"c-link\">
  {{ fields.name.content }}
</div>
", "themes/custom/stable9_child/templates/views/views-view-fields--categorias--block-1.html.twig", "/var/www/html/web/themes/custom/stable9_child/templates/views/views-view-fields--categorias--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
