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

/* @atoms/links/link/link.twig */
class __TwigTemplate_f37587363d3201362fc5a249804bcf57dc845a9fb2563367905662b55509db91 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["link_base_class"] = ((array_key_exists("link_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["link_base_class"] ?? null), 16, $this->source), "link")) : ("link"));
        // line 17
        echo "
  ";
        // line 19
        echo "<a class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_base_class"] ?? null), 19, $this->source), "html", null, true);
        echo "\"
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["link_attributes"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 21
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"], 21, $this->source), "html", null, true);
            echo "=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 21, $this->source), "html", null, true);
            echo "\"
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 23, $this->source), "html", null, true);
        echo "\"
>
  ";
        // line 25
        $this->displayBlock('link_content', $context, $blocks);
        // line 28
        echo "</a>
";
    }

    // line 25
    public function block_link_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_content"] ?? null), 26, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/links/link/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  73 => 28,  71 => 25,  65 => 23,  54 => 21,  50 => 20,  45 => 19,  42 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * Available variables:
 * - link_content - the content of the link (typically text)
 * - link_url - the url this link should poing to
 * - link_attributes - array of attribute,value pairs
 * - link_base_class - the base class name
 * - link_modifiers - array of modifiers to add to the base classname
 * - link_blockname - blockname prepended to the base classname
 *
 * Available blocks:
 * - link_content - used to replace the content of the link
 *     Example: to insert the image component
 */
#}
{% set link_base_class = link_base_class|default('link') %}

  {# {{ bem(link_base_class, link_modifiers, link_blockname) }} #}
<a class=\"{{ link_base_class }}\"
  {% for attribute, value in link_attributes %}
    {{ attribute }}=\"{{ value }}\"
  {% endfor %}
  href=\"{{ link_url }}\"
>
  {% block link_content %}
    {{ link_content }}
  {% endblock %}
</a>
", "@atoms/links/link/link.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\publication_theme\\components\\01-atoms\\links\\link\\link.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "for" => 20, "block" => 25);
        static $filters = array("default" => 16, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'block'],
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
