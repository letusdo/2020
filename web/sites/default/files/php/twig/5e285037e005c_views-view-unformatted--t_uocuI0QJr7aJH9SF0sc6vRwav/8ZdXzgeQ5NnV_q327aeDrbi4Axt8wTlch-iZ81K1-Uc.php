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

/* themes/custom/global/templates/views/views-view-unformatted--testimonial.html.twig */
class __TwigTemplate_335046bab9ebd310abd969606986f644869420ae70babc3388e877c4bf516162 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 42, "for" => 45, "set" => 47];
        $filters = ["escape" => 43];
        $functions = ["url" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                ['url']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/global/templates/views/views-view-unformatted--testimonial.html.twig"));

        // line 18
        echo "<section class=\"ftco-intro ftco-no-pb img\" style=\"background-image: url(images/bg_1.jpg);\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white\">
        <h2 class=\"mb-3 mb-md-0\">You Always Get the Best Guidance</h2>
      </div>
      <div class=\"col-lg-3 col-md-4 ftco-animate fadeInUp ftco-animated\">
        <p class=\"mb-0\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "contact-us\" class=\"btn btn-secondary py-3 px-4\">Request Quote</a></p>
      </div>
    </div>
  </div>
</section>
<section class=\"ftco-section testimony-section\">
  <div class=\"container-fluid px-md-5\">
    <div class=\"row justify-content-center mb-5\">
      <div class=\"col-md-8 text-center heading-section ftco-animate\">
        <span class=\"subheading\">Testimonies</span>
        <h2 class=\"mb-4\">Our Clients Says</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
      </div>
    </div>
    <div class=\"row ftco-animate justify-content-center\">
      <div class=\"col-md-12\">
        <div class=\"carousel-testimony owl-carousel\">
          ";
        // line 42
        if (($context["title"] ?? null)) {
            // line 43
            echo "            <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
          ";
        }
        // line 45
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 46
            echo "            ";
            // line 47
            $context["row_classes"] = [0 => ((            // line 48
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/views/views-view-unformatted--testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 53,  105 => 51,  103 => 48,  102 => 47,  100 => 46,  95 => 45,  89 => 43,  87 => 42,  67 => 25,  58 => 18,);
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
<section class=\"ftco-intro ftco-no-pb img\" style=\"background-image: url(images/bg_1.jpg);\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white\">
        <h2 class=\"mb-3 mb-md-0\">You Always Get the Best Guidance</h2>
      </div>
      <div class=\"col-lg-3 col-md-4 ftco-animate fadeInUp ftco-animated\">
        <p class=\"mb-0\"><a href=\"{{ url('<front>') }}contact-us\" class=\"btn btn-secondary py-3 px-4\">Request Quote</a></p>
      </div>
    </div>
  </div>
</section>
<section class=\"ftco-section testimony-section\">
  <div class=\"container-fluid px-md-5\">
    <div class=\"row justify-content-center mb-5\">
      <div class=\"col-md-8 text-center heading-section ftco-animate\">
        <span class=\"subheading\">Testimonies</span>
        <h2 class=\"mb-4\">Our Clients Says</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
      </div>
    </div>
    <div class=\"row ftco-animate justify-content-center\">
      <div class=\"col-md-12\">
        <div class=\"carousel-testimony owl-carousel\">
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
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/custom/global/templates/views/views-view-unformatted--testimonial.html.twig", "/var/www/html/test/2020/web/themes/custom/global/templates/views/views-view-unformatted--testimonial.html.twig");
    }
}
