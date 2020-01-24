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

/* __string_template__ceb33fd76a518936aec20501d5a79261c2cf07c5c813cb5c3de4ab4aab932b93 */
class __TwigTemplate_b0ee37bdc493e9257a6ef2f1a4f7a54fa0c11762b120c3f0e94e271bd8ac2ec8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
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
        // line 1
        echo " <div class=\"tab-pane container p-0 active\" id=\"services-1\">
\t\t\t\t\t\t  \t<div class=\"img\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_services_image"] ?? null)), "html", null, true);
        echo " </div>
\t\t\t\t\t\t  \t<h3><a href=\"#\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t  \t<p>";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t  </div>
";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_se_1"] ?? null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "__string_template__ceb33fd76a518936aec20501d5a79261c2cf07c5c813cb5c3de4ab4aab932b93";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 6,  66 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #} <div class=\"tab-pane container p-0 active\" id=\"services-1\">
\t\t\t\t\t\t  \t<div class=\"img\">{{ field_services_image }} </div>
\t\t\t\t\t\t  \t<h3><a href=\"#\">{{ title }}</a></h3>
\t\t\t\t\t\t  \t<p>{{ body }}</p>
\t\t\t\t\t\t  </div>
{{ field_se_1 }}", "__string_template__ceb33fd76a518936aec20501d5a79261c2cf07c5c813cb5c3de4ab4aab932b93", "");
    }
}
