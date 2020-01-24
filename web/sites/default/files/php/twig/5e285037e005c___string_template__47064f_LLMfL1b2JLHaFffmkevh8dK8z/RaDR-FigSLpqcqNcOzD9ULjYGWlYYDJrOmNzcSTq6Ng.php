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

/* __string_template__47064fa5c6f4152442be9b1b31a4f53b686467307e20e3567b9c6c23c1fc77e2 */
class __TwigTemplate_4f4b1b6141615c4e706b20daad218005f71fd4dceaa142cb030055ac93154753 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__47064fa5c6f4152442be9b1b31a4f53b686467307e20e3567b9c6c23c1fc77e2"));

        // line 1
        echo "<div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\">
                       ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_feature_image"] ?? null)), "html", null, true);
        echo "
                  </div>
                  <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
                    <p class=\"name\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</p>
                    <span class=\"position\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_description"] ?? null)), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__47064fa5c6f4152442be9b1b31a4f53b686467307e20e3567b9c6c23c1fc77e2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  76 => 11,  72 => 10,  63 => 4,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\">
                       {{ field_feature_image }}
                  </div>
                  <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>{{ body }}</p>
                    <p class=\"name\">{{ title }}</p>
                    <span class=\"position\">{{ field_description }}</span>
                  </div>
                </div>
              </div>", "__string_template__47064fa5c6f4152442be9b1b31a4f53b686467307e20e3567b9c6c23c1fc77e2", "");
    }
}
