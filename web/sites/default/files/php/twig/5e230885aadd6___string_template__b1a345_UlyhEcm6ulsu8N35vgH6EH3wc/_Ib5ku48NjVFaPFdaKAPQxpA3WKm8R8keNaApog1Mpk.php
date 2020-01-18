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

/* __string_template__b1a345b6935ba952130d44cc22fcbe852673d2b3c1bb098cc78db56a29b6bc01 */
class __TwigTemplate_d4e682777027a6bdfd2aa7b732a3bd23c16d2ffb0ae5e969891c6630f7cee9b5 extends \Twig\Template
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
        // line 1
        echo "<div class=\"project\">
        \t\t\t<div class=\"img rounded mb-4\">
                                  ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_image"] ?? null)), "html", null, true);
        echo "
                                 </div>
        \t\t\t<div class=\"text w-100 text-center\">
        \t\t\t\t<span class=\"cat\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["term_node_tid"] ?? null)), "html", null, true);
        echo "</span>
        \t\t\t\t<h3><a href=\"#\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</a></h3>
        \t\t\t\t";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
        \t\t\t</div>
        \t\t</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b1a345b6935ba952130d44cc22fcbe852673d2b3c1bb098cc78db56a29b6bc01";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  69 => 7,  65 => 6,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"project\">
        \t\t\t<div class=\"img rounded mb-4\">
                                  {{ field_project_image }}
                                 </div>
        \t\t\t<div class=\"text w-100 text-center\">
        \t\t\t\t<span class=\"cat\">{{ term_node_tid }}</span>
        \t\t\t\t<h3><a href=\"#\">{{ title }}</a></h3>
        \t\t\t\t{{ body }}
        \t\t\t</div>
        \t\t</div>", "__string_template__b1a345b6935ba952130d44cc22fcbe852673d2b3c1bb098cc78db56a29b6bc01", "");
    }
}
