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

/* themes/custom/global/templates/views/views-view-grid--projects.html.twig */
class __TwigTemplate_8a40ae26578ac0d6bf54d0f1ff89c19cc3ac8e67fec24aa2e83e1e0249af1c95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 28, "if" => 35, "for" => 75];
        $filters = ["escape" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        // line 28
        $context["classes"] = [0 => "views-view-grid", 1 => $this->getAttribute(        // line 30
($context["options"] ?? null), "alignment", []), 2 => ("cols-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 31
($context["options"] ?? null), "columns", []))), 3 => "clearfix"];
        // line 35
        if ($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) {
            // line 36
            echo "  ";
            // line 37
            $context["row_classes"] = [0 => "views-row", 1 => ((($this->getAttribute(            // line 39
($context["options"] ?? null), "alignment", []) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 43
        if ($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) {
            // line 44
            echo "  ";
            // line 45
            $context["col_classes"] = [0 => "views-col", 1 => ((($this->getAttribute(            // line 47
($context["options"] ?? null), "alignment", []) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 51
        echo "<section class=\"ftco-intro ftco-no-pb img\" style=\"background-image: url(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/bg_3.jpg);\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 text-center heading-section heading-section-white\">
        <h2 class=\"mb-1\">You Always Get the Best Guidance</h2>
      </div>
    </div>
  </div>
</section>
<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row no-gutters justify-content-center mb-5\">
      <div class=\"col-md-6 text-center heading-section ftco-animate fadeInUp ftco-animated\">
        <span class=\"subheading\">Projects Done</span>
        <h2 class=\"mb-4\">Case Studies</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        <p></p>
      </div>
    </div>
";
        // line 70
        if (($context["title"] ?? null)) {
            // line 71
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 73
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 74
        if (($this->getAttribute(($context["options"] ?? null), "alignment", []) == "horizontal")) {
            // line 75
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 76
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                echo ">
        ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 78
                    echo "          <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                    echo ">";
                    // line 79
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    // line 80
                    echo "</div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "  ";
        } else {
            // line 85
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 86
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                echo ">
        ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 88
                    echo "          <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                    echo ">";
                    // line 89
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    // line 90
                    echo "</div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "  ";
        }
        // line 95
        echo "</div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/views/views-view-grid--projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 95,  268 => 94,  253 => 92,  238 => 90,  236 => 89,  232 => 88,  215 => 87,  210 => 86,  192 => 85,  189 => 84,  174 => 82,  159 => 80,  157 => 79,  153 => 78,  136 => 77,  131 => 76,  113 => 75,  111 => 74,  106 => 73,  100 => 71,  98 => 70,  75 => 51,  72 => 47,  71 => 45,  69 => 44,  67 => 43,  64 => 39,  63 => 37,  61 => 36,  59 => 35,  57 => 31,  56 => 30,  55 => 28,);
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
 * Theme override for views to display rows in a grid.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapping element.
 * - title: The title of this group of rows.
 * - view: The view object.
 * - rows: The rendered view results.
 * - options: The view plugin style options.
 *   - row_class_default: A flag indicating whether default classes should be
 *     used on rows.
 *   - col_class_default: A flag indicating whether default classes should be
 *     used on columns.
 * - items: A list of grid items. Each item contains a list of rows or columns.
 *   The order in what comes first (row or column) depends on which alignment
 *   type is chosen (horizontal or vertical).
 *   - attributes: HTML attributes for each row or column.
 *   - content: A list of columns or rows. Each row or column contains:
 *     - attributes: HTML attributes for each row or column.
 *     - content: The row or column contents.
 *
 * @see template_preprocess_views_view_grid()
 */
#}
{%
  set classes = [
    'views-view-grid',
    options.alignment,
    'cols-' ~ options.columns,
    'clearfix',
  ]
%}
{% if options.row_class_default %}
  {%
    set row_classes = [
      'views-row',
      options.alignment == 'horizontal' ? 'clearfix',
    ]
  %}
{% endif %}
{% if options.col_class_default %}
  {%
    set col_classes = [
      'views-col',
      options.alignment == 'vertical' ? 'clearfix',
    ]
  %}
{% endif %}
<section class=\"ftco-intro ftco-no-pb img\" style=\"background-image: url({{directory}}/images/bg_3.jpg);\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 text-center heading-section heading-section-white\">
        <h2 class=\"mb-1\">You Always Get the Best Guidance</h2>
      </div>
    </div>
  </div>
</section>
<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row no-gutters justify-content-center mb-5\">
      <div class=\"col-md-6 text-center heading-section ftco-animate fadeInUp ftco-animated\">
        <span class=\"subheading\">Projects Done</span>
        <h2 class=\"mb-4\">Case Studies</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        <p></p>
      </div>
    </div>
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div{{ attributes.addClass(classes) }}>
  {% if options.alignment == 'horizontal' %}
    {% for row in items %}
      <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>
        {% for column in row.content %}
          <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>
            {{- column.content -}}
          </div>
        {% endfor %}
      </div>
    {% endfor %}
  {% else %}
    {% for column in items %}
      <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>
        {% for row in column.content %}
          <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>
            {{- row.content -}}
          </div>
        {% endfor %}
      </div>
    {% endfor %}
  {% endif %}
</div>
  </div>
</section>
", "themes/custom/global/templates/views/views-view-grid--projects.html.twig", "/var/www/html/test/2020/web/themes/custom/global/templates/views/views-view-grid--projects.html.twig");
    }
}
