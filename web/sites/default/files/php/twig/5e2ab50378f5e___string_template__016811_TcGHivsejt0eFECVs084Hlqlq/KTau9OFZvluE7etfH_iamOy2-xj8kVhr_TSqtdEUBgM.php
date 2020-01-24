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

/* __string_template__0168110c9d7f0bec0d08e34d989085a38bd73fc4fbe320b28b615eede469c38c */
class __TwigTemplate_6c1a3919a4b6892b173d52103b6f7ff115d278685a75b5d869d4a6db79ae9e70 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__0168110c9d7f0bec0d08e34d989085a38bd73fc4fbe320b28b615eede469c38c"));

        // line 1
        echo "<div class=\"slider-item\">
<div class=\"slider-img\">
";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_banner"] ?? null)), "html", null, true);
        echo "
</div>
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row no-gutters slider-text align-items-center justify-content-end\" data-scrollax-parent=\"true\">
        <div class=\"col-md-7 ftco-animate mb-md-5\">
          <span class=\"subheading\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</span>
          <h1 class=\"mb-4\">";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</h1>
          <p>";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_button_url"] ?? null)), "html", null, true);
        echo "</p>

        </div>
      </div>
    </div>
  </div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__0168110c9d7f0bec0d08e34d989085a38bd73fc4fbe320b28b615eede469c38c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  75 => 10,  71 => 9,  62 => 3,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"slider-item\">
<div class=\"slider-img\">
{{ field_banner }}
</div>
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row no-gutters slider-text align-items-center justify-content-end\" data-scrollax-parent=\"true\">
        <div class=\"col-md-7 ftco-animate mb-md-5\">
          <span class=\"subheading\">{{ title }}</span>
          <h1 class=\"mb-4\">{{ body }}</h1>
          <p>{{ field_button_url }}</p>

        </div>
      </div>
    </div>
  </div>", "__string_template__0168110c9d7f0bec0d08e34d989085a38bd73fc4fbe320b28b615eede469c38c", "");
    }
}
