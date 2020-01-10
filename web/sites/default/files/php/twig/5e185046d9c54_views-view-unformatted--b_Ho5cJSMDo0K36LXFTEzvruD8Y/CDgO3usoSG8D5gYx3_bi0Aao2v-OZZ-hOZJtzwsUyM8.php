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

/* themes/custom/global/templates/views/views-view-unformatted--blog.html.twig */
class __TwigTemplate_d8972bf38c965a76d4b4a51aab238ba93e779fb18b5c07269016931ff7919a1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 29, "for" => 32, "set" => 34];
        $filters = ["escape" => 30];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
        // line 18
        echo "
<section class=\"ftco-section\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mb-5 pb-2\">
\t\t\t<div class=\"col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated\">
\t\t\t    <span class=\"subheading\">Blog Posts</span>
\t\t\t    <h2 class=\"mb-4\">Recent Blog</h2>
\t\t\t    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
\t\t\t</div>
\t\t\t</div>
<div class=\"row\">
";
        // line 29
        if (($context["title"] ?? null)) {
            // line 30
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "  ";
            // line 34
            $context["row_classes"] = [0 => ((            // line 35
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div> </div>
 </section>

";
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/views/views-view-unformatted--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 60,  91 => 40,  85 => 38,  83 => 35,  82 => 34,  80 => 33,  76 => 32,  70 => 30,  68 => 29,  55 => 18,);
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
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

<section class=\"ftco-section\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mb-5 pb-2\">
\t\t\t<div class=\"col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated\">
\t\t\t    <span class=\"subheading\">Blog Posts</span>
\t\t\t    <h2 class=\"mb-4\">Recent Blog</h2>
\t\t\t    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
\t\t\t</div>
\t\t\t</div>
<div class=\"row\">
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}
    {{- row.content -}}
{% endfor %}
</div> </div>
 </section>

{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

", "themes/custom/global/templates/views/views-view-unformatted--blog.html.twig", "/var/www/html/2020/web/themes/custom/global/templates/views/views-view-unformatted--blog.html.twig");
    }
}
