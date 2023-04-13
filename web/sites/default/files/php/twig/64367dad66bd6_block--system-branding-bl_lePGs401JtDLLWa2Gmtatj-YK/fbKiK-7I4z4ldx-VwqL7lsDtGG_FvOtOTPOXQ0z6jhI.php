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

/* themes/custom/stable9_child/templates/blocks/block--system-branding-block.html.twig */
class __TwigTemplate_c9eaf55cd9da6d135768005a3d869355 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/stable9_child/templates/blocks/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<div class=\"welcome\">
  <div class=\"row\">
    <div class=\"col-xs-12 col-md-4\">
  ";
        // line 21
        if (($context["site_logo"] ?? null)) {
            // line 22
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 23, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
    </a>
  ";
        }
        // line 26
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "    <a class=\"page-title\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 27, $this->source), "html", null, true);
            echo "</a>
    </div>
    <div class=\"col-xs-12 col-md-8\">
    <div class=\"gif\">
      <img src=\"/themes/custom/stable9_child/src/media/DCCl.gif\" alt=\"hola :)\">
    </div>
  ";
        }
        // line 34
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 34, $this->source), "html", null, true);
        echo "
    </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stable9_child/templates/blocks/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  75 => 27,  72 => 26,  64 => 23,  59 => 22,  57 => 21,  52 => 18,  48 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}

{% block content %}
<div class=\"welcome\">
  <div class=\"row\">
    <div class=\"col-xs-12 col-md-4\">
  {% if site_logo %}
    <a href=\"{{ path('<front>') }}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}
  {% if site_name %}
    <a class=\"page-title\" href=\"{{ path('<front>') }}\" rel=\"home\">{{ site_name }}</a>
    </div>
    <div class=\"col-xs-12 col-md-8\">
    <div class=\"gif\">
      <img src=\"/themes/custom/stable9_child/src/media/DCCl.gif\" alt=\"hola :)\">
    </div>
  {% endif %}
  {{ site_slogan }}
    </div>
    </div>
</div>
{% endblock %}

", "themes/custom/stable9_child/templates/blocks/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/stable9_child/templates/blocks/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array("escape" => 23, "t" => 23);
        static $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
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
