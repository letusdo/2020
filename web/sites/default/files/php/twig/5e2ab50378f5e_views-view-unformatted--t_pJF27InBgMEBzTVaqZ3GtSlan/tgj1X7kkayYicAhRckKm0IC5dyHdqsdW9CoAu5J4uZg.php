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

/* themes/custom/global/templates/views/views-view-unformatted--team.html.twig */
class __TwigTemplate_7eaff838eca20fcba2a6406ac44463160348addfc315a9cc77ed455f73429cbf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 31, "for" => 34, "set" => 36];
        $filters = ["escape" => 24];
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/global/templates/views/views-view-unformatted--team.html.twig"));

        // line 18
        echo "<section class=\"\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 ftco-animate fadeInUp ftco-animated\">
        <div class=\"img-responsive\"></div>
        <h2 class=\"mt-20 mb-10\">
          ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "
        </h2>
        <div class=\"img-responsive mb-20\"></div>
        <div property=\"schema:text\" data-quickedit-field-id=\"node/5/body/en/full\"><section class=\"ftco-section\">
            <div class=\"container\">
              <div class=\"row\">

                    ";
        // line 31
        if (($context["title"] ?? null)) {
            // line 32
            echo "                      <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
                    ";
        }
        // line 34
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 35
            echo "                      ";
            // line 36
            $context["row_classes"] = [0 => ((            // line 37
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 40
            echo "                <div class=\"col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated\">";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 42
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/views/views-view-unformatted--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  98 => 42,  96 => 41,  94 => 40,  92 => 37,  91 => 36,  89 => 35,  84 => 34,  78 => 32,  76 => 31,  66 => 24,  58 => 18,);
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
<section class=\"\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 ftco-animate fadeInUp ftco-animated\">
        <div class=\"img-responsive\"></div>
        <h2 class=\"mt-20 mb-10\">
          {{ label }}
        </h2>
        <div class=\"img-responsive mb-20\"></div>
        <div property=\"schema:text\" data-quickedit-field-id=\"node/5/body/en/full\"><section class=\"ftco-section\">
            <div class=\"container\">
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
                <div class=\"col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated\">
                      {{- row.content -}}
                </div>
                    {% endfor %}

              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/custom/global/templates/views/views-view-unformatted--team.html.twig", "/var/www/html/demos/2020/web/themes/custom/global/templates/views/views-view-unformatted--team.html.twig");
    }
}
