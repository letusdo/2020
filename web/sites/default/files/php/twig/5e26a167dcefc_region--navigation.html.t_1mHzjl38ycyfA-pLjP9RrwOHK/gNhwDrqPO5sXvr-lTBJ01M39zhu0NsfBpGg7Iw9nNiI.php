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

/* themes/custom/global/templates/navigation/region--navigation.html.twig */
class __TwigTemplate_25b5d1f71c2fb8e493f17232b06c03eaafa63a2bcbf02151574df775dcfcd8f7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15];
        $filters = ["escape" => 28];
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
        // line 15
        if (($context["content"] ?? null)) {
            // line 16
            echo "  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container d-flex align-items-center\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"oi oi-menu\"></span> Menu
      </button>
      <form action=\"#\" method=\"post\" id=\"search-block-form\" accept-charset=\"UTF-8\" class=\"searchform order-lg-last\">
        <div class=\"form-group d-flex\">
          <input type=\"text\" class=\"form-control pl-3\" placeholder=\"Search\">
          <button type=\"submit\" placeholder=\"\" class=\"form-control search\"><span class=\"ion-ios-search\"></span></button>
        </div>
      </form>
      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
        ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/navigation/region--navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  57 => 16,  55 => 15,);
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
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region div.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{% if content %}
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container d-flex align-items-center\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"oi oi-menu\"></span> Menu
      </button>
      <form action=\"#\" method=\"post\" id=\"search-block-form\" accept-charset=\"UTF-8\" class=\"searchform order-lg-last\">
        <div class=\"form-group d-flex\">
          <input type=\"text\" class=\"form-control pl-3\" placeholder=\"Search\">
          <button type=\"submit\" placeholder=\"\" class=\"form-control search\"><span class=\"ion-ios-search\"></span></button>
        </div>
      </form>
      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
        {{ content }}
      </div>
    </div>
  </nav>
{% endif %}
", "themes/custom/global/templates/navigation/region--navigation.html.twig", "/var/www/html/test/2020/web/themes/custom/global/templates/navigation/region--navigation.html.twig");
    }
}
