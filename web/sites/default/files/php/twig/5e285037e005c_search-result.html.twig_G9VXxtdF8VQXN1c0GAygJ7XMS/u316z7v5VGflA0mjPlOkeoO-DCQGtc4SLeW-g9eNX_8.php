<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/content/search-result.html.twig */
class __TwigTemplate_77f6341764acc7d663f14affb10b017569cd443eaf7016d26cf78ff994a2e692 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 64];
        $filters = ["escape" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/stable/templates/content/search-result.html.twig"));

        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
<h3";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
        echo ">
  <a href=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</a>
</h3>
";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
";
        // line 64
        if (($context["snippet"] ?? null)) {
            // line 65
            echo "  <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet"] ?? null)), "html", null, true);
            echo "</p>
";
        }
        // line 67
        if (($context["info"] ?? null)) {
            // line 68
            echo "  <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info"] ?? null)), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content/search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 68,  87 => 67,  79 => 65,  77 => 64,  73 => 63,  66 => 61,  62 => 60,  58 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for displaying a single search result.
 *
 * This template renders a single search result. The list of results is
 * rendered using '#theme' => 'item_list', with suggestions of:
 * - item_list__search_results__(plugin_id)
 * - item_list__search_results
 *
 * Available variables:
 * - url: URL of the result.
 * - title: Title of the result.
 * - snippet: A small preview of the result. Does not apply to user searches.
 * - info: String of all the meta information ready for print. Does not apply
 *   to user searches.
 * - plugin_id: The machine-readable name of the plugin being executed,such
 *   as \"node_search\" or \"user_search\".
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - info_split: Contains same data as info, but split into separate parts.
 *   - info_split.type: Node type (or item type string supplied by module).
 *   - info_split.user: Author of the node linked to users profile. Depends
 *     on permission.
 *   - info_split.date: Last update of the node. Short formatted.
 *   - info_split.comment: Number of comments output as \"% comments\", %
 *     being the count. (Depends on comment.module).
 * @todo The info variable needs to be made drillable and each of these sub
 *   items should instead be within info and renamed info.foo, info.bar, etc.
 *
 * Other variables:
 * - title_attributes: HTML attributes for the title.
 * - content_attributes: HTML attributes for the content.
 *
 * Since info_split is keyed, a direct print of the item is possible.
 * This array does not apply to user searches so it is recommended to check
 * for its existence before printing. The default keys of 'type', 'user' and
 * 'date' always exist for node searches. Modules may provide other data.
 * @code
 *   {% if (info_split.comment) %}
 *     <span class=\"info-comment\">
 *       {{ info_split.comment }}
 *     </span>
 *   {% endif %}
 * @endcode
 *
 * To check for all available data within info_split, use the code below.
 * @code
 *   <pre>
 *     {{ dump(info_split) }}
 *   </pre>
 * @endcode
 *
 * @see template_preprocess_search_result()
 */
#}
{{ title_prefix }}
<h3{{ title_attributes }}>
  <a href=\"{{ url }}\">{{ title }}</a>
</h3>
{{ title_suffix }}
{% if snippet %}
  <p{{ content_attributes }}>{{ snippet }}</p>
{% endif %}
{% if info %}
  <p>{{ info }}</p>
{% endif %}
", "core/themes/stable/templates/content/search-result.html.twig", "/var/www/html/test/2020/web/core/themes/stable/templates/content/search-result.html.twig");
    }
}
