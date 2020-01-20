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

/* themes/custom/global/templates/views/views-view-unformatted--services.html.twig */
class __TwigTemplate_a7623c0357da668ac98a61ecbf9672c9e173bce3592c706e2a96d64936055e1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 48, "if" => 57, "set" => 62];
        $filters = ["escape" => 31];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
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
        echo "<section class=\"ftco-section ftco-no-pt\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated\">
          \t<span class=\"subheading\">Services</span>
            <h2 class=\"mb-4\">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
  \t\t\t<div class=\"row tabulation mt-4 ftco-animate fadeInUp ftco-animated\">
  \t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-fill d-md-flex d-block flex-column\">
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link active py-4\" data-toggle=\"tab\" href=\"#services-1\"><span class=\"flaticon-analysis mr-2\"></span> ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["taxname_array"] ?? null), 1, [], "array")), "html", null, true);
        echo "</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-2\"><span class=\"flaticon-business mr-2\"></span> Business Consulting</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-3\"><span class=\"flaticon-insurance mr-2\"></span> Business Insurance</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-4\"><span class=\"flaticon-money mr-2\"></span> Global Investigation</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-5\"><span class=\"flaticon-rating mr-2\"></span> Audit &amp; Evaluation</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-6\"><span class=\"flaticon-search-engine mr-2\"></span> Marketing Strategy</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "taxname", [0 => $this->getAttribute($this->getAttribute(($context["service_catalog"] ?? null), 0, [], "array"), "#name", [], "array")], "method")), "html", null, true);
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "taxname", [0 => (($context["service"] ?? null) - ($context["catalog"] ?? null))], "method"), 0, [])), "html", null, true);
            echo "

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"tab-content\">
";
        // line 57
        if (($context["title"] ?? null)) {
            // line 58
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 61
            echo "  ";
            // line 62
            $context["row_classes"] = [0 => ((            // line 63
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 66
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 68
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
</div>
</div>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/views/views-view-unformatted--services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 70,  134 => 68,  132 => 67,  128 => 66,  126 => 63,  125 => 62,  123 => 61,  119 => 60,  113 => 58,  111 => 57,  105 => 53,  96 => 50,  94 => 49,  90 => 48,  70 => 31,  55 => 18,);
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
<section class=\"ftco-section ftco-no-pt\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated\">
          \t<span class=\"subheading\">Services</span>
            <h2 class=\"mb-4\">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
  \t\t\t<div class=\"row tabulation mt-4 ftco-animate fadeInUp ftco-animated\">
  \t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-fill d-md-flex d-block flex-column\">
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link active py-4\" data-toggle=\"tab\" href=\"#services-1\"><span class=\"flaticon-analysis mr-2\"></span> {{ taxname_array[1]}}</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-2\"><span class=\"flaticon-business mr-2\"></span> Business Consulting</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-3\"><span class=\"flaticon-insurance mr-2\"></span> Business Insurance</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-4\"><span class=\"flaticon-money mr-2\"></span> Global Investigation</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-5\"><span class=\"flaticon-rating mr-2\"></span> Audit &amp; Evaluation</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"nav-item text-left\">
\t\t\t\t\t\t    <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-6\"><span class=\"flaticon-search-engine mr-2\"></span> Marketing Strategy</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  {% for row in rows %}
\t\t\t\t\t\t  {{- row.taxname(service_catalog[0]['#name']) -}}
\t\t\t\t\t\t  {{ content.taxname(service-catalog).0 }}

\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"tab-content\">
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}
  <div{{ row.attributes.addClass(row_classes) }}>
    {{- row.content -}}
  </div>
{% endfor %}

</div>
</div>
</div>
</div>
</section>", "themes/custom/global/templates/views/views-view-unformatted--services.html.twig", "/var/www/html/2020/web/themes/custom/global/templates/views/views-view-unformatted--services.html.twig");
    }
}
