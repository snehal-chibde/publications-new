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

/* @molecules/card/card.twig */
class __TwigTemplate_e44ae75b1a9dff846ef411296f0e88014de00d3c5bf309d7ea7d4b05175ce0ba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card__img' => [$this, 'block_card__img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "<div>
  ";
        // line 48
        echo "  <div class=\"card\">
    ";
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        $context["card__heading"] = ($context["label"] ?? null);
        // line 52
        echo "    
    ";
        // line 53
        $context["card__link__url"] = "#";
        // line 54
        echo "    ";
        $context["card__link__base_class"] = "card_links__link";
        // line 55
        echo "
    ";
        // line 56
        $context["card__image__src"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_publication_image", [], "any", false, false, true, 56);
        // line 57
        echo "    ";
        $context["card__image__alt"] = "image alt";
        // line 58
        echo "
    
    ";
        // line 60
        $context["card__image__output_image_tag"] = false;
        // line 61
        echo "

    ";
        // line 63
        $context["card__body"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 63);
        // line 64
        echo "
    <div class=\"card__image\">
        ";
        // line 67
        echo "        ";
        $this->displayBlock('card__img', $context, $blocks);
        // line 78
        echo "    </div>
    <div class=\"card__content\">
      ";
        // line 80
        if (($context["card__heading"] ?? null)) {
            // line 81
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 81, $this->source), "html", null, true);
            echo "
      ";
            // line 82
            $this->loadTemplate("@atoms/text/headings/heading.twig", "@molecules/card/card.twig", 82)->display(twig_array_merge($context, ["heading_base_class" => ((            // line 83
array_key_exists("card__heading__base_class", $context)) ? (_twig_default_filter(($context["card__heading__base_class"] ?? null), "heading")) : ("heading")), "heading_modifiers" =>             // line 84
($context["card__heading__modifiers"] ?? null), "heading_blockname" =>             // line 85
($context["card__base_class"] ?? null), "heading_level" => 4, "heading" =>             // line 87
($context["card__heading"] ?? null), "heading_url" => ((            // line 88
array_key_exists("url", $context)) ? (_twig_default_filter(($context["url"] ?? null), ($context["card__link__url"] ?? null))) : (($context["card__link__url"] ?? null))), "heading_link_base_class" => ((            // line 89
array_key_exists("card__heading__link_base_class", $context)) ? (_twig_default_filter(($context["card__heading__link_base_class"] ?? null), "heading-link")) : ("heading-link")), "heading_link_blockname" =>             // line 90
($context["card__base_class"] ?? null)]));
            // line 92
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 92, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 94
        echo "      ";
        // line 105
        echo "      ";
        // line 106
        echo "      ";
        if (($context["card__body"] ?? null)) {
            // line 107
            echo "      ";
            $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/card/card.twig", 107)->display(twig_array_merge($context, ["paragraph_base_class" => ((            // line 108
array_key_exists("card__body__base_class", $context)) ? (_twig_default_filter(($context["card__body__base_class"] ?? null), "body")) : ("body")), "paragraph_modifiers" =>             // line 109
($context["card__body__modifiers"] ?? null), "paragraph_blockname" =>             // line 110
($context["card__base_class"] ?? null), "paragraph_content" => twig_get_attribute($this->env, $this->source,             // line 111
($context["content"] ?? null), "body", [], "any", false, false, true, 111)]));
            // line 113
            echo "      ";
        }
        // line 114
        echo "      ";
        // line 115
        echo "      <div class=\"card_links\">
          ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 116)) {
            // line 117
            echo "          ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@molecules/card/card.twig", 117)->display(twig_array_merge($context, ["link_base_class" => ((            // line 118
array_key_exists("card__link__base_class", $context)) ? (_twig_default_filter(($context["card__link__base_class"] ?? null), "link")) : ("link")), "link_blockname" =>             // line 119
($context["card__base_class"] ?? null), "link_attributes" =>             // line 120
($context["card__link__attributes"] ?? null), "link_content" => (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 121
($context["content"] ?? null), "field_title", [], "any", false, false, true, 121)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), "link_url" =>             // line 122
($context["card__link__url"] ?? null)]));
            // line 124
            echo "          ";
        }
        // line 125
        echo "        </div>
    </div>
    <div class=\"card__meta\">
      ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_published_date", [], "any", false, false, true, 128)) {
            // line 129
            echo "        ";
            // line 132
            echo "        ";
            $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/card/card.twig", 132)->display(twig_array_merge($context, ["paragraph_base_class" => ((            // line 133
array_key_exists("card__body__base_class", $context)) ? (_twig_default_filter(($context["card__body__base_class"] ?? null), "body")) : ("body")), "paragraph_modifiers" =>             // line 134
($context["card__body__modifiers"] ?? null), "paragraph_blockname" =>             // line 135
($context["card__base_class"] ?? null), "paragraph_content" => twig_get_attribute($this->env, $this->source,             // line 136
($context["content"] ?? null), "field_published_date", [], "any", false, false, true, 136)]));
            // line 138
            echo "      ";
        }
        // line 139
        echo "    </div>
    ";
        // line 141
        echo "    ";
        // line 151
        echo "  </div>
</div>
";
    }

    // line 67
    public function block_card__img($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        if (($context["card__image__src"] ?? null)) {
            // line 69
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["card__image__src"] ?? null), 69, $this->source), "html", null, true);
            echo "
            ";
            // line 76
            echo "            ";
        }
        // line 77
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@molecules/card/card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 77,  189 => 76,  184 => 69,  181 => 68,  177 => 67,  171 => 151,  169 => 141,  166 => 139,  163 => 138,  161 => 136,  160 => 135,  159 => 134,  158 => 133,  156 => 132,  154 => 129,  152 => 128,  147 => 125,  144 => 124,  142 => 122,  141 => 121,  140 => 120,  139 => 119,  138 => 118,  136 => 117,  134 => 116,  131 => 115,  129 => 114,  126 => 113,  124 => 111,  123 => 110,  122 => 109,  121 => 108,  119 => 107,  116 => 106,  114 => 105,  112 => 94,  106 => 92,  104 => 90,  103 => 89,  102 => 88,  101 => 87,  100 => 85,  99 => 84,  98 => 83,  97 => 82,  92 => 81,  90 => 80,  86 => 78,  83 => 67,  79 => 64,  77 => 63,  73 => 61,  71 => 60,  67 => 58,  64 => 57,  62 => 56,  59 => 55,  56 => 54,  54 => 53,  51 => 52,  48 => 51,  46 => 50,  43 => 48,  40 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # Available variables:
 # - card__base_class - base classname of the wrapper.
 # - card__modifiers - array of modifiers to add to the base classname of the wrapper.
 # - card__blockname - blockname prepended to the base classname of the wrapper(s) and each component.
 #
 # - card__image__src - the actual image file location.
 # - card__image__alt - (optional) the alt text for screen readers and when the image cannot load.
 # - card__image__output_image_tag - whether to print the picture element or not.
 #
 # - card__content__base_class - base classname of the copy wrapper - defaults to 'heading'.
 # - card__content__modifiers - array of modifiers to add to the base classname of the copy wrapper.
 # - card__content__blockname - blockname prepended to the base classname of the copy wrapper.
 #
 # - card__heading - the content of the title component.
 # - card__heading__link - (optional) the url the title should link to. Defaults to card__link__url.
 # - card__heading__base_class - base classname of the title component. Defaults to \"title\".
 # - card__heading__blockname - blockname to add to the base classname of the title - defaults to card__base_class.
 # - card__heading__modifiers - array of modifiers to add to the base classname of the title.
 # - card__heading__link_base_class - base class to add to the title link - defaults to 'title-link'.
 #
 # - card__subheading - the content of the subtitle component.
 # - card__subheading__link - (optional) the url the subtitle should link to.
 # - card__subheading__base_class - base classname of the subtitle component. Defaults to \"subtitle\".
 # - card__subheading__modifiers - array of modifiers to add to the base classname of the subtitle.
 #
 # - card__body - the content of the body component.
 # - card__body__base_class - base classname of the body component. Defaults to \"body\".
 # - card__body__modifiers - array of modifiers to add to the base classname of the body.
 #
 # - card__link__text - the content of the link component.
 # - card__link__url - the url the link should link to.
 # - card__link__base_class - base classname of the link component. Defaults to \"link\".
 # - card__link__blockname - override link blockname. Defaults to card__base_class.
 # - card__link__attributes - array of attribute,value pairs for the link attribute.
 # - card__link__modifiers - array of modifiers to add to the base classname of the link.
 #
 # - card__button__content - the content of the button component.
 # - card__button__url - the url the button should link to.
 # - card__button__base_class - base classname of the button component. Defaults to \"button\".
 # - card__button__attributes - array of attribute,value pairs for the button attribute.
 # - card__button__modifiers - array of modifiers to add to the base classname of the button.
 #}
{# {% set card__base_class = 'card' %} #}
{# {{ bem(card__base_class, card__modifiers, card__blockname, card__extra_classes) }} #}
<div>
  {# Content  {{ bem('content', card__content__modifiers, card__base_class) }}#}
  <div class=\"card\">
    {# Heading #}
    {# {% card__heading = content.%} #}
    {% set card__heading = label %}
    
    {% set card__link__url = \"#\" %}
    {% set card__link__base_class = \"card_links__link\" %}

    {% set card__image__src = content.field_publication_image %}
    {% set card__image__alt = \"image alt\" %}

    
    {% set card__image__output_image_tag = false %}


    {% set card__body = content.body %}

    <div class=\"card__image\">
        {# Image #}
        {% block card__img %}
            {% if card__image__src %}
                {{ card__image__src }}
            {# {% include \"@atoms/images/image/responsive-image.twig\" with {
                image_blockname: card__base_class,
                output_image_tag: card__image__output_image_tag,
                image_src: card__image__src,
                image_alt: card__image__alt,
            } %} #}
            {% endif %}
        {% endblock %}
    </div>
    <div class=\"card__content\">
      {% if card__heading %}
      {{ title_prefix }}
      {% include \"@atoms/text/headings/heading.twig\" with {
          heading_base_class: card__heading__base_class|default('heading'),
          heading_modifiers: card__heading__modifiers,
          heading_blockname: card__base_class,
          heading_level: 4,
          heading: card__heading,
          heading_url: url|default(card__link__url),
          heading_link_base_class: card__heading__link_base_class|default('heading-link'),
          heading_link_blockname: card__base_class,
      } %}
      {{ title_suffix }}
      {% endif %}
      {# Subheading
      {% if card__subheading %}
      {% include \"@atoms/text/headings/_heading.twig\" with {
          heading_base_class: card__subheading__base_class|default('subheading'),
          heading_modifiers: card__subheading__modifiers,
          heading_blockname: card__base_class,
          heading_level: 3,
          heading: card__subheading,
          heading_url: card__subheading__link,
      } %}
      {% endif %} #}
      {# Body #}
      {% if card__body %}
      {% include \"@atoms/text/text/01-paragraph.twig\" with {
          paragraph_base_class: card__body__base_class|default('body'),
          paragraph_modifiers: card__body__modifiers,
          paragraph_blockname: card__base_class,
          paragraph_content: content.body,
      } %}
      {% endif %}
      {# Link #}
      <div class=\"card_links\">
          {% if content.field_tags %}
          {% include \"@atoms/links/link/link.twig\" with {
              link_base_class: card__link__base_class|default('link'),
              link_blockname: card__base_class,
              link_attributes: card__link__attributes,
              link_content: content.field_title[0]['#title'],
              link_url: card__link__url,
          } %}
          {% endif %}
        </div>
    </div>
    <div class=\"card__meta\">
      {% if content.field_published_date %}
        {# {% include \"@atoms/images/icons/_icon.twig\" with {
          icon__name:\"fas fa-paper-plane\"
        } %} #}
        {% include \"@atoms/text/text/01-paragraph.twig\" with {
          paragraph_base_class: card__body__base_class|default('body'),
          paragraph_modifiers: card__body__modifiers,
          paragraph_blockname: card__base_class,
          paragraph_content: content.field_published_date,
        } %}
      {% endif %}
    </div>
    {# Button #}
    {# {% if card__button__url %}
      {% include \"@atoms/buttons/button.twig\" with {
        button_base_class: card__button__base_class|default('button'),
        button_modifiers: card__button__modifiers,
        button_blockname: card__base_class,
        button_attributes: card__button__attributes,
        button__content: card__button__content,
        button_url: card__button__url,
      } %}
    {% endif %} #}
  </div>
</div>
", "@molecules/card/card.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\publication_theme\\components\\02-molecules\\card\\card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 51, "block" => 67, "if" => 80, "include" => 82);
        static $filters = array("escape" => 81, "default" => 83);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['escape', 'default'],
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
