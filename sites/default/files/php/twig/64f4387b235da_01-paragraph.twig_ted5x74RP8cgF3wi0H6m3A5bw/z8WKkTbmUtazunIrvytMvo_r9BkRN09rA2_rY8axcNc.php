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

/* @atoms/text/text/01-paragraph.twig */
class __TwigTemplate_fddc03d84f0368bb60df636bfa4b8a7986d9c4789cb3036cfba1e66f2fa4787c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph_content' => [$this, 'block_paragraph_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["paragraph_base_class"] = ((array_key_exists("paragraph_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["paragraph_base_class"] ?? null), 14, $this->source), "paragraph")) : ("paragraph"));
        // line 16
        echo "<p >
  ";
        // line 17
        $this->displayBlock('paragraph_content', $context, $blocks);
        // line 20
        echo "</p>
";
    }

    // line 17
    public function block_paragraph_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_content"] ?? null), 18, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/text/text/01-paragraph.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  52 => 17,  47 => 20,  45 => 17,  42 => 16,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * Available variables:
 * - paragraph_base_class - the base classname
 * - paragraph_modifiers - array of modifiers to add to the base classname
 * - paragraph_blockname - blockname prepended to the base classname
 * - paragraph_content - the content of the paragraph (typically text)
 *
 * Available blocks:
 * - paragraph_content - used to replace the content of the paragraph with something other than plain text
 *   for example: A formatted text field in Drupal
 */
#}
{% set paragraph_base_class = paragraph_base_class|default('paragraph') %}
{# {{ bem(paragraph_base_class, paragraph_modifiers, paragraph_blockname) }} #}
<p >
  {% block paragraph_content %}
    {{ paragraph_content }}
  {% endblock %}
</p>
", "@atoms/text/text/01-paragraph.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\publication_theme\\components\\01-atoms\\text\\text\\01-paragraph.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "block" => 17);
        static $filters = array("default" => 14, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['default', 'escape'],
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
